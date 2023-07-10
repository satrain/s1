function toggleMenu() {
    var menuIcon = document.querySelector('.toggle-button');
    var pageList = document.querySelector('.page-list');

    pageList.style.display = pageList.style.display === 'none' ? 'block' : 'none';

    menuIcon.addEventListener('click', () => {
        menuIcon.classList.toggle('active');
        pageList.classList.toggle('active');
        
    })

    pageList.addEventListener('click', () => {
        menuIcon.classList.remove('active');
        pageList.classList.remove('active');
      });

}


