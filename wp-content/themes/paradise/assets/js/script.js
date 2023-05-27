document.addEventListener('DOMContentLoaded', function () {

  let links = document.querySelectorAll('a[href^="#"]');
  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function (event) {
      let target = document.querySelector(this.getAttribute('href'));
      if (target) {
        event.preventDefault();
        let targetPosition = target.offsetTop;
        let startPosition = window.pageYOffset;
        let distance = targetPosition - startPosition;
        let duration = 1000;
        let start_time = null;
        function animation(currentTime) {
          if (start_time === null) start_time = currentTime;
          let timeElapsed = currentTime - start_time;
          let run = easing(timeElapsed, startPosition, distance, duration);
          window.scrollTo(0, run);
          if (timeElapsed < duration) requestAnimationFrame(animation);
        }
        function easeInOutQuad(t, b, c, d) {
          t /= d / 2;
          if (t < 1) return c / 2 * t * t + b;
          t--;
          return -c / 2 * (t * (t - 2) - 1) + b;
        }
        let easing = easeInOutQuad;
        requestAnimationFrame(animation);
      }
    });
  }

  const tabsBtn = document.querySelectorAll(".tabs__nav-btn"),
    tabsItems = document.querySelectorAll(".tabs__item"),
    tabsItem = document.querySelectorAll(".tabs__item-second");

  tabsBtn.forEach(onTabClick);

  function onTabClick(item) {
    item.addEventListener("click", function () {
      let currentBtn = item;
      let tabId = currentBtn.getAttribute("data-tab");
      let currentTab = document.querySelector(tabId);

      if (!currentBtn.classList.contains('active')) {
        tabsBtn.forEach(function (item) {
          item.classList.remove('active');
        });

        tabsItems.forEach(function (item) {
          item.classList.remove('active');

        });

        tabsItem.forEach(function (item) {
          item.classList.remove('active');

        });

        currentBtn.classList.add('active');
        currentTab.classList.add('active');
      }

    });

  }

  let isDragging = false;
  let startX, scrollLeft;

  let container = document.querySelector('.tabs__catalog-mahorka');
  let containers = document.querySelectorAll('.tabs__catalog-chillax');
  let feedbacks = document.querySelector('.feedback__reviews')
  let mergedContainers = [container, containers[0], containers[1], feedbacks]

  mergedContainers.forEach(item => {
    item.addEventListener('mousedown', function (e) {

      isDragging = true;
      startX = e.pageX - this.offsetLeft;
      scrollLeft = this.scrollLeft;
    });
  })

  mergedContainers.forEach(item => {
    item.addEventListener('mouseup', function () {

      isDragging = false;
    });
  })


  mergedContainers.forEach(item => {
    item.addEventListener('mousemove', function (e) {
      if (isDragging) {
        let x = e.pageX - this.offsetLeft;
        let walk = (x - startX) * 1.5;
        this.scrollLeft = scrollLeft - walk;
      }
    });
  })

  document.querySelector('.tabs__nav-btn').click();

  const btnUp = document.querySelector('.footer__btn-up');

  btnUp.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  const navLinks = document.querySelectorAll('.nav__navigation-item');

  navLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();

      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      window.scrollTo({
        top: targetElement.offsetTop,
        behavior: 'smooth'
      });
    });
  });



  const slides = document.querySelectorAll('.slider__item');
  const prevBtn = document.querySelectorAll('.promo__slide_btn-back-img');
  const nextBtn = document.querySelectorAll('.promo__slide_btn-next-img');
  const sliderWrapper = document.querySelector('.main__slider')
  let currentSlide = 0;

  let h = window.getComputedStyle(slides[currentSlide], null).height;
  sliderWrapper.style.height = h;

  function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    slides[currentSlide].classList.add('prev');

    currentSlide = (n + slides.length) % slides.length;

    slides[currentSlide].classList.remove('prev');
    setTimeout(() => {
      slides[currentSlide].classList.add('active');
    }, 10);

    let h = window.getComputedStyle(slides[currentSlide], null).clientHeight;
    sliderWrapper.style.height = h;
  }

  nextBtn.forEach(button => {
    button.addEventListener('click', () => {
      showSlide(currentSlide + 1);
    });
  });

  prevBtn.forEach(button => {
    button.addEventListener('click', () => {
      showSlide(currentSlide - 1);
    });
  });


  const moreButtons = document.querySelectorAll('.tabs__catalog-more');
  const moreWindows = document.querySelectorAll('.tabs__catalog-more-window');

  for (let i = 0; i < moreButtons.length; i++) {
    let button = moreButtons[i];
    let window = moreWindows[i];

    button.addEventListener('mouseover', () => {
      window.classList.add('active');
    });
    button.addEventListener('mouseout', () => {
      window.classList.remove('active');
    })
  }
  const cancelLink = document.querySelector('.popup__cancel');

  cancelLink.addEventListener('click', function (event) {
    event.preventDefault();
    window.location.href = 'https://www.google.com';
  });

  let openModalForms = document.querySelectorAll('.btn_modal__form'),
    modalForm = document.querySelector('.popup__form'),
    overlayForm = document.querySelector('.overlay__form'),
    closeForm = document.querySelector('.close__form');

  for (let i = 0; i < openModalForms.length; i++) {
    openModalForms[i].onclick = function () {
      modalForm.classList.add('open');
      overlayForm.classList.add('open');
    }
  }

  closeForm.onclick = function () {
    modalForm.classList.remove('open');
    overlayForm.classList.remove('open');
  }

  overlayForm.onclick = function () {
    modalForm.classList.remove('open');
    overlayForm.classList.remove('open');
  }

  $('input[name=phone]').mask("+7 (999) 999-99-99");

  let form = document.getElementById('popup__form-acc'),
    overlayThx = document.querySelector('.overlay__form-thx'),
    modalThx = document.querySelector('.popup__thx'),
    closeThx = document.querySelector('.close__form-thx');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch(`./wp-content/themes/paradise/send-email.php`, {
      method: 'POST',
      body: formData
    })
      .then(response => {
        if (response.ok) {
          modalForm.classList.remove('open');
          overlayForm.classList.remove('open');
          modalThx.classList.add('open');
          overlayThx.classList.add('open');
        } else {
          throw new Error('Ошибка отправки формы');
        }
      })
      .catch(error => {
        console.error(error);
      });
  });

  closeThx.onclick = function () {
    modalThx.classList.remove('open');
    overlayThx.classList.remove('open');
  }

  overlayThx.onclick = function () {
    modalThx.classList.remove('open');
    this.classList.remove('open');
  }

  /* header script */

const openIcon = document.querySelector('.nav__icon');
const navItems = document.querySelector('.nav__navigation-items');
const navLogo = document.querySelector('.nav__logo');
const navContact = document.querySelector('.nav__contact');
const nav = document.querySelector('.nav');
let navIsOpen = false;

openIcon.addEventListener('click', () => {
  const screenWidth = window.screen.width;
  console.log('click')
  console.log(screenWidth)
  if (screenWidth <= 540) {
    if (navIsOpen == false) {
      navLogo.style.display = 'none';
      openIcon.innerHTML = `
      <a href="https://vk.com/public216357104"><img class="footer__addres-social-vk" src="./wp-content/themes/paradise/assets/img/social-links/vk.svg" alt="Вконтакте"></a>
      <a href="https://wa.me/79276156483?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82..."><img class="footer__addres-social-wp" src="./wp-content/themes/paradise/assets/img/social-links/watsapp.svg" alt="ВатсАпп"></a>
      <svg fill="#ffffff" height="14px" width="14px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path> </g></svg>
      `
      openIcon.style.cssText = `
      color: #FFFFFF;
      margin-left: auto;
      margin-top: 61.3px;
      `

      navItems.style.display = 'block';

      nav.style.cssText = `
      transition: background-color 1.5s ease;
      margin-top:0;
      position: absolute;
      top:0;
      z-index: 999;
      left: 0;
      width: 100%;
      background-color: black;
      border-radius: 0;
      height: 320px;
      `;
      navIsOpen = true;
    }
    else if (navIsOpen == true) {
      navLogo.style.display = 'block';
      openIcon.innerHTML = '&#9776;'
      openIcon.style.cssText = `
      color: black;
      margin-left: 0;
      margin-top: 0px;
      `

      navItems.style.display = 'none';

      nav.style.cssText = `
      transition: background-color 1.5s ease;
      margin-top:10;
      left: 3%;
      width: 94%;
      background-color: #FFFFFF;
      border-radius: 30px;
      height: auto;
      position:relative;
      `;
      navIsOpen = false;
    }
  }
  else {
    if (navIsOpen == false) {
      navLogo.style.display = 'none';
      navContact.style.display = 'none';
      openIcon.innerHTML = `
      <a href="https://vk.com/public216357104"><img class="footer__addres-social-vk" src="./wp-content/themes/paradise/assets/img/social-links/vk.svg" alt="Вконтакте"></a>
      <a href="https://wa.me/79276156483?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82..."><img class="footer__addres-social-wp" src="./wp-content/themes/paradise/assets/img/social-links/watsapp.svg" alt="ВатсАпп"></a>
      <svg fill="#ffffff" height="14px" width="14px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path> </g></svg>
      `
      openIcon.style.cssText = `
      color: #FFFFFF;
      margin-left: auto;
      margin-top: 27.3px;
      `

      navItems.style.cssText = `
      display: block;
      `

      nav.style.cssText = `
      margin-top:0;
      left: 0;
      width: 100%;
      transition: background-color 1.5s ease;
      background-color: black;
      border-radius: 0;
      height: 93.6px;
      position:relative;
      `;
      navIsOpen = true;
    }
    else if (navIsOpen == true) {
      navLogo.style.display = 'block';
      navContact.style.display = 'block';
      openIcon.innerHTML = '&#9776;'
      openIcon.style.cssText = `
      color: black;
      margin-left: 0;
      margin-top: 0px;
      `

      navItems.style.cssText = `
      display: none;
      `

      nav.style.cssText = `
      margin-top:10;
      left: 3%;
      width: 94%;
      transition: background-color 1.5s ease;
      background-color: #FFFFFF;
      border-radius: 30px;
      height: auto;
      position:relative;
      `;
      navIsOpen = false;
    }
  }


})

const buttons = document.querySelectorAll('.tabs__nav-btn');
const tabsContent = document.querySelector('.tabs__content')
const tabItem = document.querySelector('.tabs__item-second')

buttons[0].addEventListener('click', () => {
  tabsContent.style.cssText = `
  min-height: 2000px;
  `;
  tabItem.style.cssText = `
  top: -2000px;
  `;
})

buttons[1].addEventListener('click', () => {
  tabsContent.style.cssText = `
  min-height: 1500px;
  `;
  tabItem.style.cssText = `
  top: -1500px;
  `;
})
});




