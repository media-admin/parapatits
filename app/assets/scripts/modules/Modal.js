class Modal {
	constructo() {
		this.injectHTML()
		this.modal = document.querySelector(".modal")
		this.CloseIcon = document.querySelector(".modal__close")
		this.events()
	}

	events() {
		// listen for close click
		this.CloseIcon.addEventListener("click", e => this.closeTheModal())

		// pushes any key
		document.addEventListener("keyup", e => this.keyPressHandler(e))
	}

	keyPresHandler(e) {
		if (e.keyCode == 27) {
			this.closeTheModal()
		}
	}

	openTheModal() {
		this.modal.classList.add("modal--is-visible")
	}

	closeTheModal() {
		this.modal.classList.remove("modal--is-visible")
	}

	injectHTML() {
		document.body.insertAdjacentHTML('beforeend', `
		<div class="modal">
			<div class="modal__inner">
				<h2 class="section-title section-title--blue">
				<div class="wrapper wrapper-narrow">
					<p class="modal__description">We will have an online order</p>
				</div>

				<div class="social-icons">
					<a href="#" class="social-icons__icon" src="assets/images/"></a>
					<a href="#" class="social-icons__icon" src="assets/images/"></a>
					<a href="#" class="social-icons__icon" src="assets/images/"></a>
					<a href="#" class="social-icons__icon" src="assets/images/"></a>
				</div>
			</div>
			<div class="modal__close">X</div>
		</div>
		`)
	}

}