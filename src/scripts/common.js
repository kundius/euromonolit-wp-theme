const specialOfferSmItems = document.querySelectorAll('.special-offer-sm') || [];

specialOfferSmItems.forEach(function (item) {
  const close = item.querySelector('.special-offer-sm__close');
  close.addEventListener('click', () => {
    item.style.display = 'none';
  });
});
