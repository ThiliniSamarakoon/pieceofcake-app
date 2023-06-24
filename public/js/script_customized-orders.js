function scrollToSection(sectionId) {
    window.location.href = sectionId;
}

window.addEventListener('load', () => {
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    const colorPicker = document.getElementById('colorPicker');
    const downloadButton = document.getElementById('downloadButton');
    const uploadImageInput = document.getElementById('uploadImage');

    let isDrawing = false;

    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    function startDrawing(e) {
        isDrawing = true;
        draw(e);
    }

    function draw(e) {
        if (!isDrawing) return;

        const x = e.clientX - canvas.offsetLeft;
        const y = e.clientY - canvas.offsetTop;

        context.lineWidth = 5;
        context.lineCap = 'round';
        context.strokeStyle = colorPicker.value;

        context.lineTo(x, y);
        context.stroke();
        context.beginPath();
        context.moveTo(x, y);
    }

    function stopDrawing() {
        isDrawing = false;
        context.beginPath();
    }

    downloadButton.addEventListener('click', () => {
        const image = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.href = image;
        link.download = 'drawing.png';
        link.click();
    });

    const saveButton = document.getElementById('saveButton');

    saveButton.addEventListener('click', () => {
        const image = canvas.toDataURL('image/png');
        const link = document.createElement('a');
        link.href = image;
        link.download = 'drawing.png';
        link.click();
    });

    uploadImageInput.addEventListener('change', () => {
        const file = uploadImageInput.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            const img = new Image();
            img.onload = function () {
                // Clear canvas
                context.clearRect(0, 0, canvas.width, canvas.height);

                // Calculate the aspect ratio of the image
                const aspectRatio = img.width / img.height;

                // Calculate the maximum width and height for the image to fit in the canvas
                let maxWidth = canvas.width;
                let maxHeight = canvas.height;
                if (aspectRatio > 1) {
                    maxHeight = maxWidth / aspectRatio;
                } else {
                    maxWidth = maxHeight * aspectRatio;
                }

                // Calculate the position to center the image on the canvas
                const offsetX = (canvas.width - maxWidth) / 2;
                const offsetY = (canvas.height - maxHeight) / 2;

                // Draw the image on the canvas with the resized dimensions
                context.drawImage(img, offsetX, offsetY, maxWidth, maxHeight);
            };
            img.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
});
