// Get modal Element
const modal = document.querySelector('#simpleModal');
// Get open modal button
const modalBtn = document.querySelector('#modalBtn');
// Get close button
const closeBtn = document.querySelector('.closeBtn');

// Listen for open click
modalBtn.addEventListener('click', openModal);
// Listen for close click
closeBtn.addEventListener('click', closeModal);
// Listen for outside click
window.addEventListener('click', outsideClick);

// Function to open modal
function openModal() {
    modal.style.display = 'block';
}
// Function to close modal
function closeModal() {
    modal.style.display = 'none';
}
// Function to close modal if outside is clicked 
function outsideClick(e) {
    if (e.target == modal){
    modal.style.display = 'none';
    }
}