const showModal = document.querySelector('#show_modal');
const modalReview = document.querySelector('.modal-review');
const overlayModal = document.querySelector('.overlay-modal');
const modalReviewClose = document.querySelector('.modal-review__close');
if(showModal){
    showModal.addEventListener('click',()=>{
        if(modalReview){
            modalReview.classList.remove('hidden');
        }
        if(overlayModal){
            overlayModal.classList.remove('hidden');
        }
    });
}
if(modalReviewClose){
    modalReviewClose.addEventListener('click', ()=>{
        if(modalReview){
            modalReview.classList.add('hidden');
        }
        if(overlayModal){
            overlayModal.classList.add('hidden');
        }
    })
};