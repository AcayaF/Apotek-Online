function increment() {
    var quantity = document.getElementById('quantity');
    quantity.value = parseInt(quantity.value) + 1;
}

function decrement() {
    var quantity = document.getElementById('quantity');
    if (parseInt(quantity.value) > 1) {
      quantity.value = parseInt(quantity.value) - 1;
    }
}

function addToCart() {
    var quantity = document.getElementById('quantity').value;
    // Lakukan logika penambahan item ke keranjang belanja
 
    // Misalnya, bisa menggunakan JavaScript atau mengirim data ke server
    console.log('Item added to cart: ' + quantity);
}