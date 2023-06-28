document.querySelector('.custom-order-form').addEventListener('submit', function (event) {
    event.preventDefault();
    var formData = new FormData(this);

    fetch(this.action, {
        method: this.method,
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            this.reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
