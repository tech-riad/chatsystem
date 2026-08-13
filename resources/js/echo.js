import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

import { renderMessage } from './chat/render-message';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',

    key: import.meta.env.VITE_REVERB_APP_KEY,

    wsHost: import.meta.env.VITE_REVERB_HOST,

    wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,

    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,

    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',

    enabledTransports: ['ws', 'wss'],
});

if (window.chatGroupId) {

    window.Echo
        .private(`chat.${window.chatGroupId}`)
        .listen('.message.sent', (e) => {

            // নিজের Message আবার Add করবে না
            if (e.sender_id == window.authUserId) {
                return;
            }

            const container = document.getElementById('messageContainer');

            if (!container) return;

            container.insertAdjacentHTML('beforeend', renderMessage({

                text: e.text,

                sender: e.sender,

                time: e.time,

                is_mine: false

            }));

            container.scrollTop = container.scrollHeight;

        });

}
