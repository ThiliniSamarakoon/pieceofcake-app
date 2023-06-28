function scrollToSection(sectionId) {
    window.location.href = sectionId;
}

var painting = false;
var ctx;

// object
var coord = { x: 0, y: 0 };

/*window.onbeforeunload = function () {
    return 'Changes you made may not be saved.';
};*/

window.onload = function () {

    // clear button
    document.getElementById('btnClear').addEventListener('click', function () {

        if (index == -1) {
            return;
        }
        else {
            var c = confirm("Resetting canvas!");
            if (c == true) {
                ctx.fillStyle = 'white';
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                restore_array = [];
                index = -1;
            }
            else {
                return false;
            }
        }
    });

    function clearcanvas() {
        if (index <= -1) {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            return;
        }
        else {
            ctx.fillStyle = 'white';
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            restore_array = [];
            index = -1;
        }
    }

    // color
    document.getElementById('colorChange').addEventListener('change', function () {
        ctx.strokeStyle = document.getElementById('colorChange').value;
    });

    // pen size
    document.getElementById('penSize').addEventListener('change', function () {
        ctx.lineWidth = document.getElementById('penSize').value;
    });


    // pencil
    document.getElementById('btnPencil').addEventListener('change', function () {
        ctx.lineWidth = document.getElementById('penSize').value;
        ctx.strokeStyle = document.getElementById('colorChange').value;
    });


    // fill
    document.getElementById('btnBucket').addEventListener('click', function () {
        ctx.fillStyle = document.getElementById('colorChange').value;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
    });


    // eraser
    document.getElementById('btnEraser').addEventListener('click', function () {
        ctx.lineWidth = document.getElementById('penSize').value;
        // ctx.lineCap='butt';
        // ctx.lineCap='square';
        ctx.strokeStyle = 'white';
    });

    // undo
    document.getElementById('btnUndo').addEventListener('click', function () {
        undo_last();
    });

    //upload
    document.getElementById('btnUpload').addEventListener('click', function () {
        document.getElementById('uploadImage').click();
    });

    document.getElementById('uploadImage').addEventListener('change', function () {
        // Handle file selection or any other logic
        console.log('File selected:', this.files[0]);
    });

    
    // To create canvas
    const canvas = document.getElementById("myCanvas");
    ctx = canvas.getContext("2d");
    const uploadImageInput = document.getElementById("uploadImage");
    
    // canvas height and width          
    ctx.canvas.width = window.innerWidth - 230;
    ctx.canvas.height = window.innerHeight - 70;

    // eventlisteners
    canvas.addEventListener('touchstart', startPos);
    canvas.addEventListener('touchmove', draw);
    canvas.addEventListener('touchend', endPos);

    canvas.addEventListener('mousedown', startPos);
    canvas.addEventListener('mouseup', endPos);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseout', endPos);

    // styling line
    ctx.strokeStyle = "black";
    ctx.lineJoin = "round";
    ctx.lineWidth = 1;
    ctx.lineCap = 'round';

    let restore_array = [];
    let index = -1;

    // coordinates of cursor
    function getPos(event) {

        coord.x = event.pageX - canvas.offsetLeft;
        coord.y = event.pageY - canvas.offsetTop;
    }

    // called when mousedown
    function startPos(event) {
        painting = true;
        getPos(event);

        draw(event);
    }

    // called when mouseup
    function endPos(event) {
        if (painting) {

            ctx.closePath();
            painting = false;
        }
        if (event.type != 'mouseout') {
            restore_array.push(ctx.getImageData(0, 0, canvas.width, canvas.height));
            index += 1;
            console.log(restore_array);
        }
    }

    // called when mousemoves
    function draw(event) {

        //console.log(event.clientX+", "+event.clientY);

        //if not painting then return
        if (!painting) return;

        ctx.beginPath();
        ctx.moveTo(coord.x, coord.y);
        getPos(event);
        ctx.lineTo(coord.x, coord.y);
        ctx.stroke();

    }

    function undo_last() {
        if (index <= 0) {
            clearcanvas();
        }
        else {
            index--;
            restore_array.pop();
            ctx.putImageData(restore_array[index], 0, 0);
        }
    }

    // Function to handle image upload
    uploadImageInput.addEventListener("change", () => {
        const file = uploadImageInput.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            const img = new Image();
            img.onload = function () {
                // Clear canvas
                clearcanvas();

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
                ctx.drawImage(img, offsetX, offsetY, maxWidth, maxHeight);
            };
            img.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });

    //Save button click handler
    document.getElementById('btnSave').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default behavior of the button click

        // Custom dialog box
        var dialog = document.createElement('div');
        dialog.innerHTML = `
            <h3 style="text-align: center;"><span style="color:red;">Please wait!</span><br> The owner will provide an update regarding the acceptance or rejection 
            of your order through a WhatsApp message. <br>Thank you for your understanding!</h3>
            <div style="text-align: center;">
                <button id="sendWhatsAppButton" style="padding: 10px 20px; font-size: 16px;">Send via WhatsApp</button>
                <button id="closeButton" style="padding: 10px 20px; font-size: 16px;">Close</button>
            </div>
    `;

        // Style the dialog box
        dialog.style.position = 'fixed';
        dialog.style.top = '50%';
        dialog.style.left = '50%';
        dialog.style.transform = 'translate(-50%, -50%)';
        dialog.style.backgroundColor = 'white';
        dialog.style.padding = '20px';
        dialog.style.border = '1px solid black';


        // Append the dialog box to the body
        document.body.appendChild(dialog);


        // Send via WhatsApp button click handler
        document.getElementById('sendWhatsAppButton').addEventListener('click', function () {
            // Handle the send via WhatsApp action
            sendViaWhatsApp();
            // Remove the dialog box
            document.body.removeChild(dialog);

        });

        // Close button click handler
        document.getElementById('closeButton').addEventListener('click', function () {
            document.body.removeChild(dialog); // Remove the dialog box
        });
   });


    function sendViaWhatsApp() {
        const ownerWhatsAppNumber = '+94762523460';

        // Get the reference to the existing canvas element
        const canvas = document.getElementById('myCanvas');

        // Create a temporary canvas element
        const tempCanvas = document.createElement('canvas');
        tempCanvas.width = canvas.width;
        tempCanvas.height = canvas.height;

        // Get the 2D context of the temporary canvas
        const tempCtx = tempCanvas.getContext('2d');

        // Set the background color of the temporary canvas to white
        tempCtx.fillStyle = 'white';
        tempCtx.fillRect(0, 0, tempCanvas.width, tempCanvas.height);

        // Draw the content of the existing canvas onto the temporary canvas
        tempCtx.drawImage(canvas, 0, 0);

        // Convert the temporary canvas to a data URL with white background
        const imageDataURL = tempCanvas.toDataURL('image/png');

        // Save the image to the user's local disk
        const link = document.createElement('a');
        link.href = imageDataURL;
        link.download = 'customized_cake.png';
        link.click();

        // Create a WhatsApp link with the owner's number and the image as a data URI
        const whatsappLink = `https://wa.me/${ownerWhatsAppNumber}`;

        // Open WhatsApp chat window
        window.open(whatsappLink);

    }

}





