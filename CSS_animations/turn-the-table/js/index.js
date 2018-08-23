// console.clear();

const container = document.querySelector('.container');

const rotate = document.querySelector('#rotate');
rotate.addEventListener('input', e => {
  container.style.setProperty('--rotate', rotate.value);
});