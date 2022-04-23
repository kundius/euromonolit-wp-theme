import HystModal from "hystmodal";

const modal = new HystModal({
  linkAttributeName: "data-hystmodal",
});

const modalOrder = document.getElementById("modal-order");
const modalOrderButtons =
  document.querySelectorAll("[data-hystmodal-order]") || [];
modalOrderButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();

    modalOrder.querySelector(".order-form-products").style.display = 'none'
    modalOrder.querySelector(".order-form-headline__subtitle").innerHTML = `
    Вы выбрали вид <strong>«${button.dataset.hystmodalOrder}»</strong>.<br />
    Осталось ввести контакты, по которым мы с Вами можем связаться
    `;
    modal.open("#modal-order");
  });
});
