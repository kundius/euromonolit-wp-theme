document.querySelectorAll('.js-form').forEach(function(form) {
  let controls = form.querySelectorAll('span.wpcf7-form-control-wrap')
  let messages = []

  const removeErrors = () => {
    controls.forEach(el => el.classList.remove('_error'))
  }

  const removeMessages = () => {
    messages.forEach(message => {
      if (message.parentNode) {
        message.parentNode.removeChild(message)
      }
    })
    messages = []
  }

  form.addEventListener('submit', function(e) {
    e.preventDefault()

    grecaptcha.execute(wpcf7_recaptcha.sitekey, {action: 'submit'}).then(function(token) {
      removeErrors()
      removeMessages()

      const request = new XMLHttpRequest()
      request.open('POST', form.action, true)
      request.addEventListener('readystatechange', function() {
        if (this.readyState != 4) return

        form.dispatchEvent(new Event("wpcf7submit"))

        const response = JSON.parse(request.response)

        if (response.status == 'mail_sent') {
          form.dispatchEvent(new Event("wpcf7mailsent"))

          form.reset()
          form.classList.add('_mail_sent')
          alert(response.message)
          setTimeout(() => {
            form.classList.remove('_mail_sent')
          }, 5000)
        }

        if (response.status == 'acceptance_missing') {
          form.dispatchEvent(new Event("wpcf7invalid"))

          alert(response.message)
        }

        if (response.status == 'mail_failed') {
          form.dispatchEvent(new Event("wpcf7mailfailed"))

          alert(response.message)
        }

        if (response.status == 'spam') {
          form.dispatchEvent(new Event("wpcf7spam"))

          alert(response.message)
        }

        if (response.status == 'validation_failed') {
          form.dispatchEvent(new Event("wpcf7invalid"))
          
          response.invalid_fields.forEach(field => {
            const el = form.querySelector(field.into)
            el.classList.add('_error')
            const message = document.createElement('span')
            message.classList.add('form-error')
            message.innerHTML = field.message
            el.appendChild(message)
            messages.push(message)
            const close = document.createElement('span')
            close.classList.add('form-error__close')
            message.appendChild(close)
            close.addEventListener('click', () => {
              message.parentNode.removeChild(message)
            })
          })
        }
      })

      const formData = new FormData(form)
      formData.append('_wpcf7_recaptcha_response', token)
      request.send(formData)
    })
  })
})
