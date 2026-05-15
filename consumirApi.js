fetch('https://fakestoreapi.com/products')
    .then(response => response.json())
    .then(products => {
        let mayor = products[0];

        for (let i = 1; i < products.length; i++) {
            if (products[i].rating.count > mayor.rating.count) {
                mayor = products[i];
            }
        }

        document.getElementById('producto').innerHTML = `
            <h2>${mayor.title}</h2>
            <img src="${mayor.image}" width="200">
            <p><strong>Precio:</strong> $${mayor.price}</p>
            <p><strong>Categoría:</strong> ${mayor.category}</p>
            <p><strong>Reseñas:</strong> ${mayor.rating.count}</p>
            <p><strong>Calificación:</strong> ${mayor.rating.rate}</p>
            <p>${mayor.description}</p>
        `;
    });