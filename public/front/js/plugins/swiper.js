const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

const swiper2 = new Swiper('.swiper2', {
  direction: 'horizontal',
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
    },
    "@0.65": {
      slidesPerView: 2,
    },
    "@1.20": {
      slidesPerView: 3,
    },
    "@1.70": {
      slidesPerView: 4,
    },
  },
});

const swiper3 = new Swiper('.swiper3', {
  direction: 'horizontal',
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});