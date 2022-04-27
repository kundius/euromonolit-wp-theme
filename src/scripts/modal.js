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

const modalAttachmentButtons = document.querySelectorAll("[data-modal-attachment]") || [];
modalAttachmentButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    e.preventDefault();

    const formData = new FormData();
    formData.append("id", button.dataset.modalAttachment);
    formData.append("action", "get_attachment");

    const request = new XMLHttpRequest();
    request.open("POST", theme_ajax.url, true);
    request.addEventListener("readystatechange", function () {
      if (this.readyState != 4) return;

      const response = JSON.parse(request.response);

      if (response.success) {
        // document.getElementById("modal-page-title").innerHTML =
        //   response.data.title;
        // document.getElementById("modal-page-content").innerHTML =
        //   response.data.content;
        // modal.open("#modal-attachment");
      }
    });

    request.send(formData);
  });
});
