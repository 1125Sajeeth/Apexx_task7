// document.querySelectorAll('.upload-area').forEach((area, index) => {
//     area.addEventListener('click', () => {
//         const input = document.createElement('input');
//         input.type = 'file';
//         input.accept = 'image/*';
//         input.onchange = (e) => {
//             const file = e.target.files[0];
//             if (file) {
//                 console.log(`File selected for area ${index + 1}: ${file.name}`);
//                 // Here you can handle the file, e.g., display a preview or prepare for upload
//             }
//         };
//         input.click();
//     });
// });


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

