document.addEventListener("DOMContentLoaded", () => {
  const buttons = {
    moviesBtn: "moviesAnimation",
    tvShowBtn: "tvShowAnimation",
    videoBtn: "videoAnimation",
    adsBtn: "adsAnimation",
  };

  Object.keys(buttons).forEach((buttonId) => {
    const button = document.getElementById(buttonId);
    button.addEventListener("click", () => {
      // Hide all animations
      Object.values(buttons).forEach((animationId) => {
        document.getElementById(animationId).classList.remove("show");
      });

      // Show the selected animation
      document.getElementById(buttons[buttonId]).classList.add("show");
    });
  });
});

// Zaustavljanje horizontalne animacije
document.querySelectorAll(".slider-track").forEach((track) => {
  track.addEventListener("mouseenter", () => {
    track.classList.add("paused");
  });
  track.addEventListener("mouseleave", () => {
    track.classList.remove("paused");
  });
});
