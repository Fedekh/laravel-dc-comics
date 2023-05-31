import './bootstrap';
import * as bootstrap from 'bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
    
])



const buttons = document.querySelectorAll('.deletBtn');
const confirmDeleteDiv = document.getElementById('confirmDelete');
const confirmBtn = document.getElementById('confirmBtn');
const cancelBtn = document.getElementById('cancelBtn');

buttons.forEach(element => {
  element.addEventListener('click', (e) => {
    e.preventDefault();  // evita il comportamento di default del form cioe l'invio dei dati e refresh della pagina
    confirmDeleteDiv.classList.add('d-block');

    confirmBtn.addEventListener('click', () => {
      element.parentElement.submit();
    });

    cancelBtn.addEventListener('click', () => {
      confirmDeleteDiv.classList.add('d-none');
    });
  })
});