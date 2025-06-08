document.addEventListener("DOMContentLoaded", function () {
  const totalCards = 6;

  for (let i = 1; i <= totalCards; i++) {
    const btn = document.getElementById(`rentalCardBtnHolder${i}`);
    const list = document.getElementById(`rentalCardList${i}`);

    if (btn && list) {
      btn.addEventListener("click", function (e) {
        // Nađi <img> ikonu unutar dugmeta, bez obzira gde si kliknuo
        const icon = btn.querySelector("img");

        // Prvo toggluj vidljivost liste
        const isNowVisible = list.classList.toggle("visible");

        // Sada postavi ispravan src
        if (icon) {
          icon.src = icon.src.replace(/(right|down)\.svg/, isNowVisible ? "down.svg" : "right.svg");
        }
      });
    }

  }

  // Slider logika ostaje ista
  const slider = document.querySelector(".card-slider");
  const cards = document.querySelectorAll(".card-slider .card");
  const nextBtn = document.getElementById("nextCard");
  const track = document.querySelector(".carousel-track");
  let currentIndex = 0;
  let startX = 0;
  let endX = 0;
  const visibleCards = 2;

  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      if (currentIndex < cards.length - visibleCards) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
      const offset = currentIndex * (100 / visibleCards);
      slider.style.transform = `translateX(-${offset}%)`;
    });
  }

  if (track) {
    track.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });

    track.addEventListener("touchend", (e) => {
      endX = e.changedTouches[0].clientX;
      handleSwipe();
    });
  }

  function handleSwipe() {
    if (startX - endX > 50 && currentIndex < cards.length - 1) {
      currentIndex++;
      updateCarousel();
    } else if (endX - startX > 50 && currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  }

  function updateCarousel() {
    track.style.transform = `translateX(-${currentIndex * 100}%)`;
  }
});
