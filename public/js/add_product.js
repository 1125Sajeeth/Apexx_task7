
document.querySelectorAll('.upload-area').forEach((area, index) => {
    area.addEventListener('click', () => {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        input.onchange = (e) => {
            const file = e.target.files[0];
            if (file) {
                console.log(`File selected for area ${index + 1}: ${file.name}`);
                
                // Create image preview
                const reader = new FileReader();
                reader.onload = (event) => {
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    area.innerHTML = ''; // Clear existing content
                    area.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        };
        input.click();
    });
});


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