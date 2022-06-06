
function scrollHeader() {
    const header = document.getElementById('header')
    if (this.scrollY >= 50) {
        header.classList.add('header__shadow')
    } else {
        header.classList.remove('header__shadow')
    }
}

window.addEventListener('scroll', scrollHeader);
