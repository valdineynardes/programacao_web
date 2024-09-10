// products.js

let products = [];
let isEditing = false;
let editingProductId = null;

// Função para adicionar ou atualizar produto
function addOrUpdateProduct(name, price, quantity) {
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
    displayProducts();
    isEditing = false;
    editingProductId = null;
}

// Função para exibir produtos na tabela
function displayProducts() {
    const productTableBody = document.getElementById('productTableBody');
    productTableBody.innerHTML = '';  // Limpa a tabela

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

// Função para excluir produto
function deleteProduct(id) {
    products = products.filter(product => product.id !== id);
    displayProducts();
}

// Função para editar produto
function editProduct(id) {
    const product = products.find(product => product.id === id);
    document.getElementById('productName').value = product.name;
    document.getElementById('productPrice').value = product.price;
    document.getElementById('productQuantity').value = product.quantity;

    isEditing = true;
    editingProductId = id;
}

// Função para atualizar produto
function updateProduct(id, name, price, quantity) {
    const product = products.find(product => product.id === id);
    product.name = name;
    product.price = price;
    product.quantity = quantity;
    displayProducts();
}
