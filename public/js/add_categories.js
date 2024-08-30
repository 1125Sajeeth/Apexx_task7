

document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('uploadArea');
    const imageUpload = document.getElementById('imageUpload');
    const closeBtn = document.querySelector('.close-btn');
    const originalContent = uploadArea.innerHTML;
    let isImageClosed = true; // Start with true to allow initial upload

    uploadArea.addEventListener('click', function(e) {
        if (isImageClosed) {
            e.preventDefault(); // Prevent any default action
            imageUpload.click();
        }
    });

    imageUpload.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                uploadArea.innerHTML = `<img src="${e.target.result}" alt="Uploaded Image">`;
                uploadArea.appendChild(closeBtn);
                closeBtn.style.display = 'block';
                isImageClosed = false;
            }
            reader.readAsDataURL(file);
        }
    });

    closeBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        uploadArea.innerHTML = originalContent;
        uploadArea.appendChild(closeBtn);
        closeBtn.style.display = 'none';
        imageUpload.value = '';
        isImageClosed = true;
    });
});



// Alert

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

