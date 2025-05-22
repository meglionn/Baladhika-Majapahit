document.addEventListener("DOMContentLoaded", () => {
	const hamburger = document.querySelector(".hamburger");
	const navMenu = document.querySelector(".right-section ul");

	hamburger.addEventListener("click", () => {
		navMenu.classList.toggle("show");
	});
});
