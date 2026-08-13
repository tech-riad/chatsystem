<form id="messageForm"
      action="{{ route('chat.message.store', $activeGroup) }}"
      method="POST">

    @csrf

    <div class="input-group">

        <input
            id="messageInput"
            name="message"
            type="text"
            class="form-control"
            placeholder="Type a message..."
            autocomplete="off"
            required>

        <button
            type="submit"
            class="btn btn-primary">

            <i class="ti ti-send"></i>

        </button>

    </div>

</form>
{{-- @push('scripts')

<script>
document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('messageForm');

    if (!form) return;

    form.addEventListener('submit', async function(e){

        e.preventDefault();

        const submitButton = form.querySelector('button[type="submit"]');

        submitButton.disabled = true;

        try{

            const response = await fetch(form.action,{

                method:'POST',

                headers:{
                    'X-CSRF-TOKEN':document
                        .querySelector('meta[name="csrf-token"]')
                        .content,

                    'X-Requested-With':'XMLHttpRequest',

                    'Accept':'application/json'
                },

                body:new FormData(form)

            });

            const data = await response.json();

            if(data.success){

                appendMessage(data.message);

                form.reset();

                scrollBottom();

            }

        }catch(error){

            console.error(error);

        }finally{

            submitButton.disabled = false;

        }

    });

});

function appendMessage(message)
{

    const container=document.querySelector('#messageContainer .p-3');

    container.insertAdjacentHTML('beforeend',`

        <div class="d-flex justify-content-end mb-3">

            <div
                class="bg-success text-white p-2 rounded"
                style="max-width:70%;">

                ${message.message}

                <br>

                <small>

                    just now

                </small>

            </div>

        </div>

    `);

}

function scrollBottom()
{
    const box=document.getElementById('messageContainer');

    box.scrollTop=box.scrollHeight;
}
</script>
@endpush --}}
