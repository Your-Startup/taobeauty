export default function initSelects () {
    const selects = document.querySelectorAll('.select');

    if (selects.length <= 0) {
        return;
    }

    selects.forEach((select) => {
        const input   = select.querySelector('input'),
              value   = select.querySelector('.select-value'),
              options = select.querySelectorAll('.select-option');

        if (options.length > 0) {

            select.addEventListener('click', (e) => {
                if (e.target.closest('.select-option')) {
                    input.value = e.target.dataset.value;
                    value.innerHTML = e.target.innerHTML;
                }

                select.classList.toggle('open');
            });
        }
    });
}
