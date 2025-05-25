// gallery.js
import * as bootstrap from 'bootstrap';

document.addEventListener("DOMContentLoaded", function () {
  const galleryImages = document.querySelectorAll(".gallery-img");
  const carousel = document.getElementById("carouselGallery");
  const modalEl = document.getElementById("galleryModal");

  if (!modalEl) {
    console.warn("#galleryModal ne postoji u DOM-u — preskačem inicijalizaciju modala");
    return;
  }

  const modal = new bootstrap.Modal(modalEl);

  galleryImages.forEach((img, index) => {
    img.addEventListener("click", () => {
      const bsCarousel = bootstrap.Carousel.getInstance(carousel);
      if (bsCarousel) {
        bsCarousel.to(index);
      }

      modal.show();
    });
  });
});
