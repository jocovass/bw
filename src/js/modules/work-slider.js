import Glide from "@glidejs/glide";
import LazyLoad from "vanilla-lazyload";

const clientLogosGlide = document.querySelector(".client-logos-glide");
if (clientLogosGlide) {
  new Glide(".client-logos-glide", {
    type: "carousel",
    perView: 6,
    animationTimingFunc: "linear",
    gap: 60,
    autoplay: 2000,
    breakpoints: {
      1500: {
        perView: 5,
      },
      992: {
        gap: 40,
        perView: 4,
      },
      550: {
        gap: 20,
        perView: 3,
      },
    },
  }).mount();
}

const testimonialsGlide = document.querySelector(".testimonials-glide");
if (testimonialsGlide) {
  new Glide(".testimonials-glide", {
    type: "carousel",
    gap: 20,
    autoplay: 3000,
  }).mount();
}

const caseStudyThumbnails = document.querySelectorAll(
  ".glide__slide--thumbnail"
);
const caseStudyBackground = document.querySelectorAll(".work-background");
const caseStudyContent = document.querySelectorAll(".slidein-content");
const caseStudiesGlide = document.querySelector(".case-studies-glide");
if (caseStudiesGlide) {
  const caseStudyGlide = new Glide(".case-studies-glide", {
    gap: 30,
    perView: 6,
    bound: true,
    breakpoints: {
      1900: {
        perView: 5,
        gap: 20,
      },
      1400: {
        perView: 4,
      },
      1024: {
        perView: 3,
      },
      768: {
        gap: 10,
        perView: 2,
      },
    },
  });

  caseStudyGlide.on("run.after", () => {
    caseStudyThumbnails.forEach((currentCase) => {
      if (currentCase.classList.contains("glide__slide--active")) {
        let caseId = currentCase.dataset.case;
        // Change the background
        caseStudyBackground.forEach((current) => {
          if (current.dataset.case === caseId) {
            current.classList.add("work-background--active");
          } else {
            current.classList.remove("work-background--active");
          }
        });

        // Change the content
        caseStudyContent.forEach((current) => {
          if (current.dataset.case === caseId) {
            current.classList.add("slidein-content--active");
          } else {
            current.classList.remove("slidein-content--active");
          }
        });
      }
    });
  });

  caseStudyGlide.mount();
}

const lazyBg = new LazyLoad({
  elements_selector: ".case-study-lazy",
  thresholds: "-50%",
});

const lazyImg = new LazyLoad({
  elements_selector: ".lazy-img",
});

// const slider = document.querySelector(".slider");
// const innerSlider = document.querySelector(".inner-slider");
// const slides = innerSlider.querySelectorAll(".slide");
// const backgroundDiv = document.querySelector(".work-background");
// const slideInContents = document.querySelectorAll(".slidein-content");
// const prevBtn = document.querySelector(".prev-btn");
// const nextBtn = document.querySelector(".next-btn");
// let isMouseDown = false;
// let mousePositionChanged = false;
// let initialMousePosition;
// let initilScrollPosition;
// console.log("work-slider");
// // drag and scroll
// slider.addEventListener("mousedown", (e) => {
//   isMouseDown = true;
//   slider.style.scrollBehavior = "auto";
//   initialMousePosition = e.pageX - slider.offsetLeft;
//   initilScrollPosition = slider.scrollLeft;
// });
// slider.addEventListener("mouseup", (e) => {
//   isMouseDown = false;
//   slider.style.cursor = "auto";
//   innerSlider.style.cursor = "auto";
//   slides.forEach((slide) => {
//     slide.style.cursor = "pointer";
//   });
// });
// slider.addEventListener("mouseleave", (e) => {
//   isMouseDown = false;
//   slider.style.cursor = "auto";
//   innerSlider.style.cursor = "auto";
//   slides.forEach((slide) => {
//     slide.style.cursor = "pointer";
//   });
// });
// slider.addEventListener("mousemove", (e) => {
//   if (!isMouseDown) return;
//   slider.style.cursor = "grabbing";
//   innerSlider.style.cursor = "grabbing";
//   // slide.style.cursor = 'grabbing';
//   slides.forEach((slide) => {
//     slide.style.cursor = "grabbing";
//   });
//   mousePositionChanged = true;
//   const currentMousePositon = e.pageX - slider.offsetLeft;
//   const distance = currentMousePositon - initialMousePosition;
//   slider.scrollLeft = initilScrollPosition - distance;
// });

// innerSlider.addEventListener("click", (e) => {
//   // If the position of the mouse changed after mouse down event that means the user is scrolling
//   // just return
//   if (mousePositionChanged) {
//     mousePositionChanged = false;
//     return;
//   } else {
//     if (
//       !e.target.closest(".slide") ||
//       e.target.closest(".slide").classList.contains("active")
//     )
//       return;
//     slides.forEach((el) => {
//       el.classList.remove("active");
//     });
//     const clickedElement = e.target.closest(".slide");
//     // Changing the background based on the selected thumbnail
//     backgroundDiv.style.background = clickedElement.dataset.background;

//     // Change the content of the title based on the selected thumbnail
//     slideInContents.forEach((slide) => {
//       if (slide.dataset.slide === clickedElement.dataset.triggerId) {
//         slide.classList.remove("hidden");
//         slide.classList.add("active");
//       } else {
//         slide.classList.add("hidden");
//         slide.classList.remove("active");
//       }
//     });

//     // Make the clicked thumbnail active
//     clickedElement.classList.add("active");
//   }
// });

// // Prev and Next button
// prevBtn.addEventListener("click", () => {
//   slider.style.scrollBehavior = "smooth";
//   slider.scrollLeft -= slider.clientWidth;
// });

// nextBtn.addEventListener("click", () => {
//   slider.style.scrollBehavior = "smooth";
//   slider.scrollLeft += slider.clientWidth;
// });
