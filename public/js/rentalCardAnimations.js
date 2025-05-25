document.addEventListener("DOMContentLoaded", function () {
  var rentalCardBtnHolder = document.getElementById("rentalCardBtnHolder");
  var rentalCardList = document.getElementById("rentalCardList");
  const slider = document.querySelector(".card-slider");
  const cards = document.querySelectorAll(".card-slider .card");
  const nextBtn = document.getElementById("nextCard");
  const track = document.querySelector(".carousel-track");
  let currentIndex = 0;
  let startX = 0;
  let endX = 0;
  const visibleCards = 2;

  rentalCardBtnHolder.addEventListener("click", function (e) {
    console.log("clicked", rentalCardList.classList.contains("visible"));
  
    if (rentalCardList.classList.contains("visible")) {
      rentalCardList.classList.remove("visible");
    } else {
      rentalCardList.classList.add("visible");
    }
  });
  
  nextBtn.addEventListener("click", () => {
    if (currentIndex < cards.length - visibleCards) {
      currentIndex++;
    } else {
      currentIndex = 0; // reset to beginning
    }
  
    const offset = currentIndex * (100 / visibleCards);
    slider.style.transform = `translateX(-${offset}%)`;
  });
  
  // Swipe detection
  track.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  track.addEventListener("touchend", (e) => {
    endX = e.changedTouches[0].clientX;
    handleSwipe();
  });

  
function handleSwipe() {
  if (startX - endX > 50) {
    // swipe left
    if (currentIndex < cards.length - 1) {
      currentIndex++;
      updateCarousel();
    }
  } else if (endX - startX > 50) {
    // swipe right
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  }
}

function updateCarousel() {
  track.style.transform = `translateX(-${currentIndex * 100}%)`;
}
});
