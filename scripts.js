document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menu-button');
    const menu = document.getElementById('side-menu');

    // Ustawienie pozycji menu (przykład: top: 100px, left: 50px)
    menu.style.top = '100px';
    menu.style.left = '50px';

    menuButton.addEventListener('click', () => {
        menu.classList.toggle('menu-open');
        console.log('Menu button clicked');
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