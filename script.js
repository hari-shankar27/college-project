fetch('navbar.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('nav').innerHTML = data;

fetch('footer.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('footer').innerHTML = data;
  });


    const cartOverlay = document.getElementById('cartOverlay');
    const openCartBtn = document.getElementById('openCart');

    if(openCartBtn){
        openCartBtn.addEventListener('click', () => {
            cartOverlay.style.display = 'flex';
        });
    }
});

function closeCart() {
    document.getElementById('cartOverlay').style.display = 'none';
}


