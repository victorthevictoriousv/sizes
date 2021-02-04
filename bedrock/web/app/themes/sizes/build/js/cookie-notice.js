import Cookies from 'js-cookie' // Cookie library

function cookieNotice() {
  const noticeContainer = document.getElementById('cookieNotice')
  const dismissButton = document.getElementById('cookieDismiss')

  if (!Cookies.get('cookieNotice')) {
    Cookies.set('cookieNotice', 'visible')
  }

  const noticeCookie = Cookies.get('cookieNotice')

  if (noticeCookie == 'visible') {
    noticeContainer.classList.remove('cookie-notice--hidden')
  }

  if (noticeCookie == 'hidden') {
    noticeContainer.classList.add('cookie-notice--hidden')
  }

  dismissButton.addEventListener('click', () => {
    Cookies.set('cookieNotice', 'hidden', { expires: 365 })

    if (Cookies.get('cookieNotice') == 'hidden') {
      noticeContainer.classList.add('cookie-notice--hidden')
    }
  })
}

export default cookieNotice
      

