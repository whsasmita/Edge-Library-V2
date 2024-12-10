const addProductBtn = document.getElementById('addProductBtn');
const closeOverlayBtn = document.getElementById('closeOverlayBtn');
const formOverlay = document.getElementById('formOverlay');

const form = formOverlay.querySelector('form');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Form submission would happen here');
});

addProductBtn.addEventListener('click', (e) => {
    e.preventDefault(); 
    formOverlay.classList.remove('hidden');
    formOverlay.classList.add('flex');
});

closeOverlayBtn.addEventListener('click', () => {
    formOverlay.classList.remove('flex');
    formOverlay.classList.add('hidden');
});

formOverlay.addEventListener('click', (event) => {
    if (event.target === formOverlay) {
        formOverlay.classList.remove('flex');
        formOverlay.classList.add('hidden');
    }
});