import PriorityNavScroller from 'priority-nav-scroller'

let navScrollers = document.querySelectorAll('.nav-scroller');

navScrollers.forEach((scroller) => {
  if (scroller.dataset.target) {
    const tabs = document.querySelector(scroller.dataset.target)

    if (tabs) {
      const buttons = scroller.querySelectorAll('.nav-scroller-item')

      buttons.forEach((button, buttonIndex) => {
        button.addEventListener('click', (e) => {
          e.preventDefault()

          buttons.forEach((sibling) => {
            sibling.classList.remove('nav-scroller-item_active')
          })
          button.classList.add('nav-scroller-item_active')

          Array.from(tabs.children).forEach((tab, tabIndex) => {
            tab.hidden = buttonIndex !== tabIndex
          })
        })
      })
    }
  }

  PriorityNavScroller({
    selector: scroller
  })
})
