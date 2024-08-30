
document.addEventListener('DOMContentLoaded', function() {
    const addInputsBtn = document.getElementById('addInputsBtn');
    const inputsContainer = document.getElementById('inputsContainer');
    let inputAdded = false;

    addInputsBtn.addEventListener('click', function() {
        if (!inputAdded) {
            const newInputs = `
                <hr class="my-2 border border-black">
                <div class="row mt-2">
                    <div class="col-4">
                        <input type="text" class="form-control border-0" id="price2">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control border-0" id="weight2">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control border-0" id="qtyBox2">
                    </div>
                </div>
            `;
            inputsContainer.insertAdjacentHTML('beforeend', newInputs);
            inputAdded = true;
        }
    });
});



//image upload

document.addEventListener('DOMContentLoaded', function() {
    const uploadBoxes = document.querySelectorAll('.upload-box');

    uploadBoxes.forEach(box => {
        const fileInput = box.querySelector('.file-input');
        const closeBtn = box.querySelector('.close-btn');

        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    box.innerHTML = '';
                    box.appendChild(img);
                    box.appendChild(closeBtn);
                    closeBtn.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        closeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            box.innerHTML = '+';
            box.appendChild(fileInput);
            box.appendChild(closeBtn);
            closeBtn.style.display = 'none';
            fileInput.value = '';
        });
    });
});

//Alert

document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('form');
  const customAlertModal = new bootstrap.Modal(document.getElementById('customAlertModal'));

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Here you would typically handle the form submission, e.g., send data to a server
    // For this example, we'll just show the alert

    customAlertModal.show();
  });
});