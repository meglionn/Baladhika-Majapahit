document.addEventListener("DOMContentLoaded", () => {
	AOS.init({
		duration: 800,
		easing: "ease-in-out",
		once: true,
	});
});

window.addEventListener("scroll", function () {
	const scrollToTopBtn = document.getElementById("scrollToTop");
	if (window.pageYOffset > 300) {
		scrollToTopBtn.classList.add("visible");
	} else {
		scrollToTopBtn.classList.remove("visible");
	}
});

document.getElementById("scrollToTop").addEventListener("click", function () {
	window.scrollTo({
		top: 0,
		behavior: "smooth",
	});
});

document.addEventListener("DOMContentLoaded", () => {
	const hamburger = document.querySelector(".hamburger");
	const navMenu = document.querySelector(".right-section ul");

	hamburger.addEventListener("click", () => {
		navMenu.classList.toggle("show");
	});
});
