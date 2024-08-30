function showDeleteConfirm(productId) {
    productToDelete = productId;
    const modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
    modal.show();
}

document.getElementById('confirmDelete').addEventListener('click', function() {
    if (productToDelete) {
        // Implement delete logic here
        console.log(`Deleting product with id: ${productToDelete}`);
        // You might want to make an AJAX call to your Laravel backend here
        // After successful deletion, you can re-render the products
        // renderProducts(currentPage);
    }
    const modal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmModal'));
    modal.hide();
});
