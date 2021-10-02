const categorias = document.querySelectorAll('.ctgr');

function addFinalize(){
    const ultimo = categorias.length - 1;
    const sec = categorias[ultimo];

    const button = sec.querySelector('footer>button');
    
    sec.classList.add('ultimo');

    button.setAttribute('type', 'submit')
    button.innerHTML = 'Send';
}

addFinalize()