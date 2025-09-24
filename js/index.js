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