export function scrollBottom() {

    const box = document.getElementById('messageContainer');

    if (!box) return;

    box.scrollTop = box.scrollHeight;

}
