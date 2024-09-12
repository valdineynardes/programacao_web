document.addEventListener('DOMContentLoaded', function () {
    const productForm = document.getElementById('productForm');
    const productTableBody = document.getElementById('productTableBody');
    const logoutBtn = document.getElementById('logoutBtn');

    let products = JSON.parse(localStorage.getItem('products')) || [];
    let isEditing = false;
    let editingProductId = null;

    productForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('productName').value;
        const price = document.getElementById('productPrice').value;
        const quantity = document.getElementById('productQuantity').value;

        if (isEditing) {
            updateProduct(editingProductId, name, price, quantity);
        } else {
            const product = {
                id: Date.now(),
                name: name,
                price: price,
                quantity: quantity
            };
            products.push(product);
        }

        localStorage.setItem('products', JSON.stringify(products));
        displayProducts();
        productForm.reset();
        isEditing = false;
        editingProductId = null;
        alert('Produto cadastrado com sucesso!');
    });

    function displayProducts() {
        productTableBody.innerHTML = '';

        products.forEach((product) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${product.name}</td>
                <td>${product.price}</td>
                <td>${product.quantity}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editProduct(${product.id})">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteProduct(${product.id})">Excluir</button>
                </td>
            `;
            productTableBody.appendChild(row);
        });
    }

    window.deleteProduct = function (id) {
        products = products.filter(product => product.id !== id);
        localStorage.setItem('products', JSON.stringify(products));
        displayProducts();
        alert('Produto excluído com sucesso!');
    }

    window.editProduct = function (id) {
        const product = products.find(product => product.id === id);
        document.getElementById('productName').value = product.name;
        document.getElementById('productPrice').value = product.price;
        document.getElementById('productQuantity').value = product.quantity;

        isEditing = true;
        editingProductId = id;
    }

    function updateProduct(id, name, price, quantity) {
        const product = products.find(product => product.id === id);
        product.name = name;
        product.price = price;
        product.quantity = quantity;
        localStorage.setItem('products', JSON.stringify(products));
        displayProducts();
        alert('Produto atualizado com sucesso!');
    }

    logoutBtn.addEventListener('click', function () {
        localStorage.removeItem('loggedInUser');
        alert('Você saiu do sistema.');
        window.location.href = 'index.html';
    });

    displayProducts();
});
