const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav-links');

toggle.onclick = () => {
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
};
