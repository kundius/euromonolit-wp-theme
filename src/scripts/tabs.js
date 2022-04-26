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
          Array.from(tabs.children).forEach((tab, tabIndex) => {
            // tab.setAttribute('hidden', buttonIndex !== tabIndex)
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
