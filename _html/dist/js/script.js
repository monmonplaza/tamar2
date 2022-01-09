if ($(".testimonial__slider")) {
  $(".testimonial__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 1,
          infinite: true,
          dots: true,
        },
      },
    ],
  });
}

/*=========ONSCROLL NAVIGATION==============*/
window.addEventListener("scroll", () => {
  const header = document.querySelector(".header");
  let scrollPos = window.pageYOffset;
  if (scrollPos > 200) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
/*===========================================*/
