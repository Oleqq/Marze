// header menu
document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.querySelector(".burger-menu");
  const mobileMenu = document.querySelector(".mobile-menu");
  const closeButton = document.querySelector(".burger-menu-close");
  
  // Проверяем, существуют ли необходимые элементы
  if (!burgerMenu || !mobileMenu) {
    console.error("Не найдены необходимые элементы для бургер-меню");
    return;
  }

  // Функция закрытия меню
  const closeMenu = () => {
    mobileMenu.classList.remove("active");
  };

  // Функция открытия/закрытия меню
  const toggleMenu = () => {
    mobileMenu.classList.toggle("active");
  };

  // Открытие/закрытие по клику на бургер
  burgerMenu.addEventListener("click", toggleMenu);

  // Закрытие по клику на кнопку закрытия
  if (closeButton) {
    closeButton.addEventListener("click", closeMenu);
  }

  // Закрытие меню при клике вне его
  document.addEventListener("click", (e) => {
    if (!burgerMenu.contains(e.target) && 
        !mobileMenu.contains(e.target) && 
        (!closeButton || !closeButton.contains(e.target))) {
      closeMenu();
    }
  });

  // Закрытие меню при нажатии Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeMenu();
    }
  });
});




document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                console.log('Element is visible:', entry.target);
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null, 
        rootMargin: '0px', 
        threshold: 0.4 
    });
  
    const sections = document.querySelectorAll('section');
    console.log('Sections found:', sections);  // Логирование выбранных элементов
  
    sections.forEach(section => {
        observer.observe(section);
    });
  });
