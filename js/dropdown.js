let drop = document.getElementById('drop');
const button = document.getElementById('button');

button.addEventListener('click', () => {
    drop.classList.toggle('open');
    button.classList.toggle('open');
});

