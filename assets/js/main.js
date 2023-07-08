function toggleMenu() {
    var menuIcon = document.querySelector('.toggle-button');
    var pageList = document.querySelector('.page-list');

    menuIcon.classList.toggle('active');
    pageList.style.display = pageList.style.display === 'none' ? 'block' : 'none';
}

