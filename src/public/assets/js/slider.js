document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.querySelector(".slide-prev");
  const nextBtn = document.querySelector(".slide-next");

  let current = 0;
  let interval = null;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });

    current = index;
  }

  function nextSlide() {
    let index = current + 1;
    if (index >= slides.length) index = 0;
    showSlide(index);
  }

  function prevSlide() {
    let index = current - 1;
    if (index < 0) index = slides.length - 1;
    showSlide(index);
  }

  function startAutoSlide() {
    interval = setInterval(nextSlide, 5000);
  }

  function stopAutoSlide() {
    clearInterval(interval);
  }

  // Eventos
  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      stopAutoSlide();
      nextSlide();
      startAutoSlide();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      stopAutoSlide();
      prevSlide();
      startAutoSlide();
    });
  }

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      stopAutoSlide();
      showSlide(index);
      startAutoSlide();
    });
  });

  // Inicializa
  if (slides.length > 0) {
    showSlide(0);
    startAutoSlide();
  }
});
