function openMenu(event) {
    event.preventDefault()
    const listMenu = document.querySelector('.manager__box__items--bar');
    listMenu.classList.toggle('manager__box__items--bar--active');
}
