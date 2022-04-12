document.querySelectorAll(".js-form").forEach(function (form) {
  const controlWrapElements = form.querySelectorAll(".wpcf7-form-control-wrap") || [];
  const resultCloseElements = form.querySelectorAll(".wpcf7-form-result-close") || [];
  let messages = [];

  const removeErrors = () => {
    controlWrapElements.forEach((el) => el.classList.remove("_error"));
  };

  const removeMessages = () => {
    messages.forEach((message) => {
      if (message.parentNode) {
        message.parentNode.removeChild(message);
      }
    });
    messages = [];
  };

  const renderMessage = (selector, message) => {
    const el = form.querySelector(selector);
    el.classList.add("_error");
    const messageEl = document.createElement("span");
    messageEl.classList.add("ui-form-error");
    messageEl.innerHTML = message;
    el.appendChild(messageEl);
    messages.push(messageEl);
    const close = document.createElement("span");
    close.classList.add("ui-form-error__close");
    messageEl.appendChild(close);
    close.addEventListener("click", () => {
      messageEl.parentNode.removeChild(messageEl);
    });
  };

  const renderResult = (cls) => {
    const resultElement = form.querySelector(`.wpcf7-form-result${cls}`);
    resultElement.classList.add('_active')
  }

  resultCloseElements.forEach((el) => {
    el.addEventListener('click', () => {
      el.closest('.wpcf7-form-result').classList.remove('_active')
    })
  })

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    grecaptcha
      .execute(wpcf7_recaptcha.sitekey, { action: "submit" })
      .then(function (token) {
        removeErrors();
        removeMessages();

        const request = new XMLHttpRequest();
        request.open("POST", form.action, true);
        request.addEventListener("readystatechange", function () {
          if (this.readyState != 4) return;

          form.dispatchEvent(new Event("wpcf7submit"));

          const response = JSON.parse(request.response);

          if (response.status == "mail_sent") {
            form.dispatchEvent(new Event("wpcf7mailsent"));

            form.reset();

            renderResult('._mail-sent')
          }

          if (response.status == "acceptance_missing") {
            form.dispatchEvent(new Event("wpcf7invalid"));

            renderMessage(".wpcf7-form-acceptance-wrap", response.message);
          }

          if (response.status == "mail_failed") {
            form.dispatchEvent(new Event("wpcf7mailfailed"));

            renderResult('._mail-failed')
          }

          if (response.status == "spam") {
            form.dispatchEvent(new Event("wpcf7spam"));

            renderResult('._mail-failed')
          }

          if (response.status == "validation_failed") {
            form.dispatchEvent(new Event("wpcf7invalid"));

            response.invalid_fields.forEach((field) => {
              renderMessage(field.into, field.message);
            });
          }
        });

        const formData = new FormData(form);
        formData.append("_wpcf7_recaptcha_response", token);
        request.send(formData);
      });
  });
});
