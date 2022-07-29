import "../styles/styles.css"
import "lazysizes"

import JQuery from "./modules/jquery"
import StickyHeader from "./modules/StickyHeader"
import BackToTop from "./modules/BackToTop"
import Dywc from "./modules/Dywc"
import CoockieNotice from "./modules/CoockieNotice"

let jQuery = new JQuery()
let stickyHeader = new StickyHeader()
let backToTop = new BackToTop()
let dywc = new Dywc()
let cookieNotice = new CockieNotice()


let modal

document.querySelectorAll(".open-modal").forEach((el) => {
  el.addEventListener("click", (e) => {
    e.preventDefault()
    if (typeof modal == "undefined") {
      import(/* webpackChunkName: "modal" */ "./modules/Modal")
        .then((x) => {
          modal = new x.default()
          setTimeout(() => modal.openTheModal(), 20)
        })
        .catch(() => console.log("There was a problem."))
    } else {
      modal.openTheModal()
    }
  })
})

if (module.hot) {
  module.hot.accept()
}
