export function renderMessage(message)
{
    return `

        <div class="d-flex mb-3 ${message.is_mine ? 'justify-content-end' : 'justify-content-start'}">

            <div
                class="rounded shadow-sm p-2"
                style="
                    max-width:70%;
                    min-width:180px;
                    background:${message.is_mine ? '#DCF8C6' : '#FFFFFF'};
                ">

                ${
                    !message.is_mine
                    ?
                    `
                    <div class="fw-bold text-primary mb-1">

                        ${message.sender}

                    </div>
                    `
                    :
                    ''
                }

                <div
                    style="
                        white-space:pre-wrap;
                        word-break:break-word;
                    ">

                    ${message.text}

                </div>

                <div class="text-end mt-1">

                    <small class="text-muted">

                        ${message.time}

                    </small>

                </div>

            </div>

        </div>

    `;
}
