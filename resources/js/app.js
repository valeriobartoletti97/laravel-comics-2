import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtn = document.querySelector('.remove-btn');
//console.log(deleteBtn);
deleteBtn.addEventListener('click', (event) =>{
    event.preventDefault();
    //console.log('clicked');

    //prendo il titolo dell'elemento dal bottone
    const dataTitle = deleteBtn.getAttribute('data-item-title');
    //console.log(dataTitle);

    //prendo l'elemento modale
    const modal = document.getElementById('staticBackdrop');
    //console.log(modal)

    //creo nuova modale di bootstrapp
    const newModal = new bootstrap.Modal(modal);

    //uso il metodo show di bootstrapp per far vedere la modale 
    newModal.show();

    //prendo elemento modale dove inserisco il titolo
    const modalTitle = document.getElementById('comic-modal-title');
    modalTitle.textContent = dataTitle;

    //prendo il bottone modale per confermare la cancellazione
    const confirmBtn = document.querySelector('.confirm-btn');
    //console.log(confirmBtn)

    //assegno un listener al bottone per confermare la cancellazione
    confirmBtn.addEventListener('click', (event)=>{
        deleteBtn.parentElement.submit();
    })
})