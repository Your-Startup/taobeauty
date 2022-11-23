export default function initCertificates() {
    const selects = document.querySelectorAll('.step-2__label select');

    selects.forEach(select => {
        select.addEventListener('click', () => {
            select.parentElement.classList.toggle('active');
        })
    })
}