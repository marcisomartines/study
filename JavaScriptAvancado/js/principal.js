var list = [{
        "desc": "arroz",
        "quantidade": "1",
        "valor": "5.40"
    },
    {
        "desc": "cerveja",
        "quantidade": "12",
        "valor": "1.99"
    },
    {
        "desc": "carne",
        "quantidade": "1",
        "valor": "15.00"
    }
];

function getTotal(lista) {
    var total = 0;
    for (var key in lista) {
        total += lista[key].valor * lista[key].quantidade;
    }

    document.getElementById("valorTotal").innerHTML = formataValor(total);

}

function setLista(lista) {
    var tabela = '<thead><tr><td>Descrição</td><td>Quantidade</td><td>Valor</td><td>Ação</td></tr></thead>';

    tabela += '<tbody>';

    for (var chave in lista) {
        tabela += '<tr>';
        tabela += '<td>' + formataDescricao(lista[chave].desc) + '</td>';
        tabela += '<td>' + lista[chave].quantidade + '</td>';
        tabela += '<td>' + formataValor(lista[chave].valor) + '</td>';
        tabela += '<td><button id="' + chave + '" class="btn btn-default" onclick="setUpdate(' + chave + ');">Editar</button> <button class="btn btn-default" onclick="deletarProduto(' + chave + ');">Apagar</button></td>';
        tabela += '</tr>';
    }

    tabela += '</tbody>';

    document.getElementById('listaTable').innerHTML = tabela;

    getTotal(lista);
    saveListStorage(lista);
}

function formataDescricao(descricao) {
    var str = descricao.toLowerCase();
    str = str.charAt(0).toUpperCase() + str.slice(1);

    return str;
}

function formataValor(valor) {
    var str = parseFloat(valor).toFixed(2) + "";

    str = str.replace(".", ",");

    return "R$" + str;
}

function formataQuantidade() {

}

function addProduto() {
    if (!validacao()) {
        return;
    }
    var descricao = document.getElementById('descricao').value;
    var quantidade = document.getElementById('quantidade').value;
    var valor = document.getElementById('valor').value;

    list.unshift({
        "desc": descricao,
        "quantidade": quantidade,
        "valor": valor
    });

    setLista(list);
}

function setUpdate(id) {
    var obj = list[id];
    if (!validacao()) {
        return;
    }
    document.getElementById('descricao').value = obj.desc;
    document.getElementById('quantidade').value = obj.quantidade;
    document.getElementById('valor').value = obj.valor;

    document.getElementById("btnUpdate").style.display = "inline-block"
    document.getElementById("btnAdd").style.display = "none";

    document.getElementById("inputIDUpdate").innerHTML = '<input type="hidden" id="idUpdate" value="' + id + '" />';

}

function limpaFormulario() {
    document.getElementById('descricao').value = "";
    document.getElementById('quantidade').value = "";
    document.getElementById('valor').value = "";

    document.getElementById("btnUpdate").style.display = "none"
    document.getElementById("btnAdd").style.display = "inline-block";
    document.getElementById("inputIDUpdate").innerHTML = "";
    document.getElementById("erros").innerHTML = "";
}

function atualizaProduto() {
    var id = document.getElementById("idUpdate").value;

    var descricao = document.getElementById('descricao').value;
    var quantidade = document.getElementById('quantidade').value;
    var valor = document.getElementById('valor').value;

    list[id] = {
        "desc": descricao,
        "quantidade": quantidade,
        "valor": valor
    };

    limpaFormulario();
    setLista(list);
}

function deletarProduto(id) {
    if (confirm("Apagar esse produto?")) {
        list.splice(id, 1);
    }

    setLista(list);
}

function validacao() {
    var descricao = document.getElementById('descricao').value;
    var quantidade = document.getElementById('quantidade').value;
    var valor = document.getElementById('valor').value;

    var erro = "";

    if (descricao == "") {
        erro += '<p>Preencha a descrição</p>';
    }

    if (quantidade == "") {
        erro += '<p>Preencha a quantidade</p>';
    } else if (quantidade != parseInt(quantidade)) {
        erro += '<p>Insira o valor valido</p>';
    }

    if (valor == "") {
        erro += '<p>Preencha a quantidade</p>';
    } else if (valor != parseFloat(valor)) {
        erro += '<p>Insira o valor valido</p>';
    }

    if (erro != "") {
        document.getElementById("erros").innerHTML = "<h3>Erros: </h3>" + erro;
        return 0;
    } else {
        document.getElementById("erros").innerHTML = "";
        return 1;
    }

}

function saveListStorage(lista) {
    var jsonStr = JSON.stringify(lista);

    localStorage.setItem("list", jsonStr);
}

function initStorage() {
    var testeList = localStorage.getItem("list");

    if (testeList) {
        list = JSON.parse(testeList);
    }

    setLista(list);
}

initStorage();