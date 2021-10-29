window.addEventListener('load', carregado);

var db = openDatabase("minhaLista", "1.0", "TiPS Database Example", 2 * 1024 * 1024);

function carregado() {

    document.getElementById('btn-salvar').addEventListener('click', salvar);
    document.getElementById('btn-deletar').addEventListener('click', deletar);
    document.getElementById('btn-cons').addEventListener('click', consultaIndividual);

    db.transaction(function (tx) {
        tx.executeSql("CREATE TABLE IF NOT EXISTS lista ( id INTEGER PRIMARY KEY, name TEXT, quantidade INTEGER, category TEXT)");
    });



    mostrar();

}

// Módulo de cadastro
function salvar() {
    var id = document.getElementById('field-id').value;
    var name = document.getElementById('field-name').value;
    var quantidade = document.getElementById('field-quantidade').value;
    var category = document.getElementById('field-category').value;
    console.log(id + ',' + name + ',' + quantidade + ',' + category);
    db.transaction(function (tx) {
        if (id) {
            tx.executeSql('UPDATE lista SET name=?, quantidade=?, category=? WHERE id=?', [name, quantidade, category, id], null);
            console.log('produto atualizado');
        } else {
            tx.executeSql('INSERT INTO lista ( name,quantidade,category) VALUES (?, ?, ?)', [name, quantidade, category]);
            console.log('produto salvo');
        }
    });

    mostrar();
    limpaCampo();
    inputSHOW(false);
}


// módulo de atualizar
function atualizar(_id) {
    console.log('função atualizar');
    var id = document.getElementById('field-id');
    var name = document.getElementById('field-name');
    var quantidade = document.getElementById('field-quantidade');
    var category = document.getElementById('field-category');

    id.value = _id;

    db.transaction(function (tx) {
        tx.executeSql('SELECT * FROM lista WHERE id=?', [_id], function (tx, resultado) {
            var rows = resultado.rows[0];

            name.value = rows.name;
            quantidade.value = rows.quantidade;
            category.value = rows.category;
        });
    });
    inputSHOW(true);
}


// módulo de exclusão atráves de um campo
function deletar() {

    var id = document.getElementById('field-id').value;

    db.transaction(function (tx) {
        tx.executeSql("DELETE FROM lista WHERE id=?", [id]);
    });

    mostrar();
    limpaCampo();
    inputSHOW(false);
}

// módulo de consulta para todos os registros
function mostrar() {
    console.log('função listar');
    var table = document.getElementById('tbody-register');

    db.transaction(function (tx) {
        console.log('executa select');
        tx.executeSql('SELECT * FROM lista order by name asc', [], function (tx, resultado) {
            var rows = resultado.rows;
            var tr = '';
            for (var i = 0; i < rows.length; i++) {
                console.log(rows[i].name + ',' + rows[i].quantidade + ',' + rows[i].category);
                tr += '<tr>';
                tr += '<td>' + rows[i].name + '</td>';
                tr += '<td>' + rows[i].quantidade + ' </td>';
                tr += '<td>' + rows[i].category + '</td>';
                tr += '<td onClick="atualizar(' + rows[i].id + ')">' + " <i class='fas fa-edit me-2'></i>" + '</td>';
                tr += '</tr>';
            }
            table.innerHTML = tr;

        }, null);
    });

}

// módulo de consulta individual
function consultaIndividual() {
    category = document.getElementById('id-consulta').value;
    console.log(category);
    var element = document.getElementById('tbody-consulta');

    db.transaction(function (tx) {
        tx.executeSql('SELECT * FROM lista where category = ? order by name asc', [category], function (tx, resultado) {
            var rows = resultado.rows;
            var tr = '';
            for (var i = 0; i < rows.length; i++) {

                console.log(row[i].id + ',' + row[i].name + ',' + row[i].quantidade + ',' + row[i].category);
                tr += '<tr>';
                tr += '<td>' + rows[i].name + ' </td>';
                tr += '<td> ' + rows[i].quantidade + '</td>';
                tr += '<td>' + rows[i].category + '</td>';

                tr += '</tr>';
            }
            element.innerHTML = tr;

        }, null);
    });
}


