

//open submenu when link is clicked
const links = document.querySelectorAll('.menu-item-type-custom');

links.forEach(link => link.addEventListener('click', (event, b, c) => {
  event.target.nextElementSibling.classList.toggle('openSubmenu');
}));

const currentCategoryLinks = Array.from(document.getElementsByClassName('current-post-parent'));
currentCategoryLinks.forEach(categoryLink => categoryLink.parentElement.classList.add('openSubmenu'));


const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('.header-outer');
const menuItems = document.querySelectorAll('.menu-item-type-post_type, .menu-item-type-taxonomy');


hamburger.addEventListener('click', () => {
  header.classList.toggle('openMenu');
});

menuItems.forEach(menuItem => menuItem.addEventListener('click', () => {
  header.classList.remove('openMenu');
  document.querySelector('body').classList.remove('scroll-lock');
}));