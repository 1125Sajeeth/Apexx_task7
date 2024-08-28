const products = [
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },
    { name: "Lorem Ipsum", category: "Battery", price: "Rs 10.00", image: "/img/test1.webp" },


    
    // Add more product objects here...
];

const productsPerPage = 18;
let currentPage = 1;

function renderProducts(page) {
    const container = document.getElementById('productContainer');
    container.innerHTML = '';
    
    const start = (page - 1) * productsPerPage;
    const end = start + productsPerPage;
    const pageProducts = products.slice(start, end);

    pageProducts.forEach(product => {
        const productCard = `
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 position-relative mb-1">
                <div class="product-card p-3">
                    <img src="${product.image}" alt="${product.name}" class="product-image">
                    <div class="product-info mx-2">
                        <h5 class="m-0">${product.name}</h5>
                        <p class="m-0">${product.category}</p>
                        <p class="m-0">${product.price}</p>
                    </div>
                    <div class="action-buttons d-flex position-absolute top-0 end-0 p-4">
                        <a href="/edit_product/${product.id}" class="action-button pe-2"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="action-button pe-3" onclick="showDeleteConfirm(${product.id})"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML += productCard;
    });

    updatePagination(page);
}

function updatePagination(currentPage) {
    const totalPages = Math.ceil(products.length / productsPerPage);
    const pagination = document.querySelector('.pagination');
    pagination.innerHTML = `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link border-0 bg-transparent" href="#" aria-label="Previous" onclick="changePage(${currentPage - 1})">
                <span aria-hidden="true">&larr;</span>
            </a>
        </li>
    `;

    for (let i = 1; i <= totalPages; i++) {
        pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `;
    }

    pagination.innerHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link border-0 bg-transparent" href="#" aria-label="Next" onclick="changePage(${currentPage + 1})">
                <span aria-hidden="true">&rarr;</span>
            </a>
        </li>
    `;
}

function changePage(page) {
    if (page < 1 || page > Math.ceil(products.length / productsPerPage)) return;
    currentPage = page;
    renderProducts(currentPage);
}

// Delete product

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

// Initial render
renderProducts(currentPage);