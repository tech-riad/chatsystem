export async function post(url, data) {

    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document
                .querySelector('meta[name="csrf-token"]')
                .content,

            'Accept': 'application/json',

            'X-Requested-With': 'XMLHttpRequest'
        },
        body: data
    });

    return await response.json();
}
