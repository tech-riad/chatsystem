export function appendOwnMessage(message)
{
    const body = document.querySelector('#messageContainer .p-3');

    body.insertAdjacentHTML('beforeend',`

        <div class="d-flex justify-content-end mb-3">

            <div class="bg-success text-white rounded p-2">

                ${message.message}

            </div>

        </div>

    `);

}
