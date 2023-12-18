const seeMore = document.querySelector('#SeeMore');

seeMore.addEventListener('click', () => {
    window.scroll({top: window.innerHeight, behavior: "smooth"})
    seeMore.style.display = 'none';
})