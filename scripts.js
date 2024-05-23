document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-menu-button');
    const bottomMenuButton = document.getElementById('bottom-menu-button');
    const closeBottomMenuButton = document.getElementById('close-bottom-menu-button');
    const menu = document.getElementById('side-menu');
    const bottomMenu = document.getElementById('bottom-menu');
    const overlay = document.getElementById('overlay');

    function showOverlay() {
        overlay.classList.add('show');
    }

    function hideOverlay() {
        overlay.classList.remove('show');
    }

    menuButton.addEventListener('click', () => {
        menu.classList.toggle('menu-open');
        if (menu.classList.contains('menu-open')) {
            showOverlay();
        } else {
            hideOverlay();
        }
        console.log('Menu button clicked');
    });

    closeButton.addEventListener('click', () => {
        menu.classList.remove('menu-open');
        hideOverlay();
        console.log('Close button clicked');
    });

    bottomMenuButton.addEventListener('click', () => {
        bottomMenu.classList.toggle('bottom-menu-open');
        if (bottomMenu.classList.contains('bottom-menu-open')) {
            showOverlay();
        } else {
            hideOverlay();
        }
        console.log('Bottom menu button clicked');
    });

    closeBottomMenuButton.addEventListener('click', () => {
        bottomMenu.classList.remove('bottom-menu-open');
        hideOverlay();
        console.log('Close bottom menu button clicked');
    });

    // Kod obsługi przeciągania kontenera z obrazami
    let isDown = false;
    let startX;
    let scrollLeft;

    const container = document.querySelector('.container');

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        container.style.cursor = 'grabbing';
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
        console.log('Mouse down');
    });

    container.addEventListener('mouseleave', () => {
        isDown = false;
        container.style.cursor = 'grab';
        console.log('Mouse leave');
    });

    container.addEventListener('mouseup', () => {
        isDown = false;
        container.style.cursor = 'grab';
        console.log('Mouse up');
    });

    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2;
        container.scrollLeft = scrollLeft - walk;
        console.log('Mouse move');
    });
});