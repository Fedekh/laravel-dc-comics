import './bootstrap';
import * as bootstrap from 'bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
    
])

const buttons= document.querySelectorAll('.deletBtn');

buttons.forEach(element => {
    element.addEventListener('click', (e)=>{
            e.preventDefault();
            console.log(e);
            const confirmed = confirm('Sei sicuro di voler eliminare questo fumetto?');
            if (confirmed) {
                element.parentElement.submit();
            }

    })
    
});