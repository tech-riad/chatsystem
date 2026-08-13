document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('messageForm');

    if (!form) return;

    form.addEventListener('submit', sendMessage);

});

async function sendMessage(e) {

    e.preventDefault();

    const form = e.currentTarget;

    const input = document.getElementById('messageInput');

    if (input.value.trim() === '') {
        return;
    }

    try {

        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .content,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: new FormData(form)
        });

        if (!response.ok) {
            throw new Error('Request Failed');
        }

        const data = await response.json();

        appendMessage(data.message);

        form.reset();

        scrollBottom();

    } catch (error) {

        console.error(error);

    }

}
function appendMessage(message)
{
    const container = document.querySelector('#messageContainer .p-3');

    if (!container) return;

    container.insertAdjacentHTML('beforeend', `
        <div class="d-flex justify-content-end mb-3">

            <div class="rounded shadow-sm p-2"
                 style="max-width:70%;background:#DCF8C6;min-width:180px;">

                <div style="white-space:pre-wrap;word-break:break-word;">

                    ${message.text}

                </div>

                <div class="text-end mt-1">

                    <small class="text-muted">

                        ${message.time}

                    </small>

                </div>

            </div>

        </div>
    `);
}

function scrollBottom()
{
    const box = document.getElementById('messageContainer');

    if (!box) return;

    box.scrollTop = box.scrollHeight;
}
