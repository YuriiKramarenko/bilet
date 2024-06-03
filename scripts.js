document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-menu-button');
    const bottomMenuButton = document.getElementById('bottom-menu-button');
    const closeBottomMenuButton = document.getElementById('close-bottom-menu-button');
    const menu = document.getElementById('side-menu');
    const bottomMenu = document.getElementById('bottom-menu');
    const overlay = document.getElementById('overlay');
    const container = document.querySelector('.container');

    function showOverlay() {
        overlay.classList.add('show');
    }

    function hideOverlay() {
        overlay.classList.remove('show');
    }

    function closeMenus() {
        menu.classList.remove('menu-open');
        bottomMenu.classList.remove('bottom-menu-open');
        hideOverlay();
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
        closeMenus();
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
        closeMenus();
        console.log('Close bottom menu button clicked');
    });

    overlay.addEventListener('click', () => {
        closeMenus();
        console.log('Overlay clicked');
    });

    // Kod obsługi przeciągania kontenera z obrazami z efektem gumy
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        container.style.cursor = 'grabbing';
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
        console.log('Mouse down');
    });

    container.addEventListener('mouseleave', () => {
        if (isDown) {
            container.style.transition = 'all 0.3s ease';
            container.scrollLeft = scrollLeft;
            container.style.transition = '';
        }
        isDown = false;
        container.style.cursor = 'grab';
        console.log('Mouse leave');
    });

    container.addEventListener('mouseup', () => {
        if (isDown) {
            container.style.transition = 'all 0.3s ease';
            container.scrollLeft = scrollLeft;
            container.style.transition = '';
        }
        isDown = false;
        container.style.cursor = 'grab';
        console.log('Mouse up');
    });

    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 1.5; // Multiply by 1.5 for more overscroll effect
        container.scrollLeft = scrollLeft - walk;
        console.log('Mouse move');
    });

    // Kod obsługi przycisku "więcej/mniej" i sprawdzania liczby słów
    const buttons = document.querySelectorAll('.toggleButton');

    buttons.forEach(button => {
        button.style.display = 'inline'; // Ustaw przycisk na widoczny

        button.addEventListener('click', () => {
            const moreContent = button.previousElementSibling.querySelector('.more-content');
            
            if (moreContent.style.display === 'none') {
                moreContent.style.display = 'inline';
                button.textContent = 'Mniej';
            } else {
                moreContent.style.display = 'none';
                button.textContent = 'Więcej';
            }
        });
    });
});
