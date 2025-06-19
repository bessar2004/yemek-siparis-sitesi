
document.querySelector('.order-form')?.addEventListener('submit', function (e) {
   // e.preventDefault();
    alert("Siparişiniz başarıyla alındı! Afiyet olsun 😋");
  });
  
  
  const menuBtn = document.querySelector('.fa-bars');
  const mobileMenu = document.getElementById('mobileMenu');
  
  menuBtn?.addEventListener('click', (e) => {
    e.stopPropagation(); 
    mobileMenu.style.display = mobileMenu.style.display === 'flex' ? 'none' : 'flex';
  });
  
  document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
      mobileMenu.style.display = 'none';
    }
  });
  

  let total = 0;
  document.querySelectorAll('.product-btn a').forEach(btn => {
    btn.addEventListener('click', () => {
      const priceText = btn.closest('.box').querySelector('.price').innerText.replace('₺', '');
      const price = parseFloat(priceText);
      total += price;
      alert(`Sepete eklendi! Toplam: ₺${total}`);
    });
  });
  
 
  document.getElementById("darkToggle")?.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
  });
  
  
  if (typeof AOS !== 'undefined') {
    AOS.init();
  }
  




fetch("urunleri_getir.php")
  .then(response => response.json())
  .then(data => {
    console.log("Gelen Ürünler:", data);

    // HTML'e eklemek istersen örnek:
    let urunAlani = document.getElementById("urunler");

    data.forEach(urun => {
      let div = document.createElement("div");
      div.innerHTML = `
        <h3>${urun.isim}</h3>
        <p>${urun.aciklama}</p>
        <strong>${urun.fiyat} TL</strong>
        <hr>
      `;
      urunAlani.appendChild(div);
    });
  })
  .catch(error => {
    console.error("Hata:", error);
  });





