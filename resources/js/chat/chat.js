import { post } from "./api";
import { appendOwnMessage } from "./message";
import { scrollBottom } from "./ui";

document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("messageForm");

    if (!form) return;

    form.addEventListener("submit", async (e) => {

        e.preventDefault();

        const data = new FormData(form);

        const res = await post(form.action, data);

        if (res.success) {

            appendOwnMessage(res.message);

            form.reset();

            scrollBottom();

        }

    });

});
