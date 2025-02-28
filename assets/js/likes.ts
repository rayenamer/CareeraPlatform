function addLike(id: number): void {
    fetch(`/AddLike/${id}`, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => {
        if (response.redirected) {
            window.location.href = response.url; // Redirect if necessary
        }
    })
    .catch(error => console.error('Error:', error));
}

// Expose the function globally if needed
(window as any).addLike = addLike;
