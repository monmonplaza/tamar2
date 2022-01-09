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

$(".landing__sliders").responsiveSlides();

/*=========ONSCROLL NAVIGATION ANIMATION==============*/
window.addEventListener("scroll", () => {
  const header = document.querySelector(".header");
  let scrollPos = window.pageYOffset;
  if (scrollPos > 20) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

/*=========WEDDING TAB & FILTER==============*/
const weddingBtns = document.querySelectorAll(".wedding__btns");
const weddingCards = document.querySelectorAll(".wedding__card");
const cardCeremony = document.querySelector("#cardCeremony");
const cardReception = document.querySelector("#cardReception");

if (weddingBtns) {
  weddingBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      hideAll(".wedding__card", "show");
      if (e.target.innerHTML == "Reception") {
        hideAll(".wedding__btns", "active");
        e.target.classList.add("active");
        cardReception.classList.add("show");
      } else if (e.target.innerHTML == "Ceremony") {
        hideAll(".wedding__btns", "active");
        e.target.classList.add("active");
        cardCeremony.classList.add("show");
      }
    });
  });
}

function hideAll(target, className) {
  const elements = document.querySelectorAll(target);
  elements.forEach((el) => {
    el.classList.remove(className);
  });
}

const cardFilter = document.querySelector("#cardFilter");
const cardsItem = document.querySelectorAll(".cards__item");

if (cardFilter) {
  cardFilter.addEventListener("change", () => {
    switch (cardFilter.value) {
      case "all":
        cardsItem.forEach((card) => {
          card.classList.add("show");
        });
        break;
      case "10":
        hideCards(10);
        break;
      case "30":
        hideCards(30);
        break;
      case "40":
        hideCards(40);
        break;
      case "70":
        hideCards(70);
        break;
        dafault: cardsItem.forEach((card) => {
          card.classList.add("show");
        });
    }
  });
}

function hideCards(limit) {
  cardsItem.forEach((card) => {
    const capacity = card.getAttribute("data-capacity");
    if (limit <= capacity) {
      card.classList.add("show");
    } else {
      card.classList.remove("show");
    }
  });
}

/**************** MODAL CONTACT************************/

const singleModalBtn = document.querySelector("#singleModalBtn");
const singleModalClose = document.querySelector("#singleModalClose");
const singleContactModal = document.querySelector("#singleContactModal");

if (singleModalBtn) {
  singleModalBtn.addEventListener("click", () => {
    singleContactModal.style.display = "grid";
  });
}

if (singleModalClose) {
  singleModalClose.addEventListener("click", (e) => {
    e.preventDefault();
    singleContactModal.style.display = "none";
  });
}

const employmentModal = document.querySelector("#employmentModal");
const employmentModalClose = document.querySelector("#employmentModalClose");
const openEmpModalBtn = document.querySelectorAll(".openEmpModalBtn");

if (openEmpModalBtn) {
  openEmpModalBtn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      let jobtitle = btn.getAttribute("data-emp");
      let position = document.querySelector("#applyFor");
      position.value = jobtitle;
      employmentModal.style.display = "grid";
    });
  });
}

if (employmentModalClose) {
  employmentModalClose.addEventListener("click", (e) => {
    e.preventDefault();
    employmentModal.style.display = "none";
  });
}

/**************** ACTIVITY CENTER ************************/

const activityBtns = document.querySelectorAll("#activityBtn li");
const activityContent = document.querySelectorAll(".info__wrapper");

if (activityBtns) {
  activityBtns.forEach((btn, index) => {
    btn.setAttribute("id", `tab-${index}`);
  });

  activityContent.forEach((content, index) => {
    content.setAttribute("id", `tab-${index}-content`);
  });

  if (document.querySelector("#tab-0-content")) {
    document.querySelector("#tab-0-content").classList.add("active");
  }

  activityBtns.forEach((link) => {
    link.addEventListener("click", () => {
      removeActive();
      const id = link.id;
      document.getElementById(`${id}-content`).classList.add("active");
    });
  });
}

function removeActive() {
  activityContent.forEach((el) => {
    el.classList.remove("active");
  });
}

/**************** RESPONSIVE NAV ************************/

const mobileLink = document.querySelectorAll(
  "#menu-mobile li.menu-item-has-children > a"
);

const toggleMenu = document.querySelector(".toggle__menu");
const mobileNav = document.querySelector("#menu-mobile");
const backBtn = document.querySelector(".back__btn");

toggleMenu.addEventListener("click", () => {
  const mainMobileNav = document.querySelector(".mobile__nav");
  mainMobileNav.classList.toggle("show");
});

mobileLink.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    link.nextElementSibling.classList.add("show");
    mobileNav.classList.add("show__submenu");

    backBtn.style.display = "block";
  });
});

backBtn.addEventListener("click", (e) => {
  e.preventDefault();
  mobileNav.classList.remove("show__submenu");
  hideSubMenu();
  backBtn.style.display = "none";
});

function hideSubMenu() {
  const submenu = document.querySelectorAll(".sub-menu");
  submenu.forEach((menu) => {
    menu.classList.remove("show");
  });
}

/******************* BISTRO MODAL *******************/

const btnBistroModal = document.querySelectorAll(".openBistroModal");
const btnCloseModal = document.querySelectorAll(".modalClose");
if (btnBistroModal) {
  btnBistroModal.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      showBistroModal(e);
    });
  });
}

if (btnCloseModal) {
  btnCloseModal.forEach((close, e) => {
    e.preventDefault;
    close.addEventListener("click", (e) => {
      e.preventDefault();

      close.parentElement.parentElement.parentElement.classList.remove("show");
    });
  });
}

function showBistroModal(e) {
  let id = e.target.id;
  //console.log(document.querySelector(`#modal--${id}`));
  document.querySelector(`#modal--${id}`).classList.add("show");
}
