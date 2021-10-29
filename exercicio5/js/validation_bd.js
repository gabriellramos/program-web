window.addEventListener('load', carrega);

function carrega() {
    document.getElementById('field-name').addEventListener('blur', leave);
    document.getElementById('field-quantidade').addEventListener('blur', leave);
    document.getElementById('field-category').addEventListener('blur', leave);
}

function leave() {
    if (this.value != '') {
        this.offsetParent.className += " ativo";
    } else {
        this.offsetParent.className = 'box';
    }
}

function inputSHOW(_show) {
    if (_show) {
        document.getElementById('field-name').offsetParent.className += " ativo";
        document.getElementById('field-quantidade').offsetParent.className += " ativo";
        document.getElementById('field-category').offsetParent.className += " ativo";
        document.getElementById('btn-deletar').style.display = 'block';
    } else {
        document.getElementById('field-name').offsetParent.className = 'box';
        document.getElementById('field-quantidade').offsetParent.className = 'box';
        document.getElementById('field-category').offsetParent.className = 'box';
        //document.getElementById('btn-deletar').style.display = 'none';
    }
}

function limpaCampo() {

    document.getElementById('field-id').value = '';
    document.getElementById('field-name').value = '';
    document.getElementById('field-quantidade').value = '';
    document.getElementById('field-category').value = '';
}