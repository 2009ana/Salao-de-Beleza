<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AmigoPet - Adotantes</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial;
    background:#f8f1e9;
    color:#4f3423;
}

header{
    background:#315c48;
    color:white;
    padding:20px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

header h1{
    font-size:24px;
}

.voltar{
    background:#8b5e3c;
    color:white;
    border:0;
    padding:10px 18px;
    border-radius:8px;
    cursor:pointer;
}

.container{
    width:90%;
    max-width:1000px;
    margin:30px auto;
}

h2{
    color:#6b4226;
    margin-bottom:20px;
}

.formulario{
    background:white;
    padding:25px;
    border-radius:15px;
    margin-bottom:30px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.campo{
    margin-bottom:15px;
}

.campo label{
    display:block;
    margin-bottom:5px;
    font-weight:bold;
    color:#6b4226;
}

.campo input,
.campo select{
    width:100%;
    padding:12px;
    border:2px solid #e3d1c0;
    border-radius:8px;
}

.salvar{
    background:#8b5e3c;
    color:white;
    border:0;
    padding:12px 20px;
    border-radius:8px;
}

.cancelar{
    background:#ddd;
    border:0;
    padding:12px 20px;
    border-radius:8px;
    margin-left:5px;
}

table{
    width:100%;
    background:white;
    border-collapse:collapse;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

th{
    background:#315c48;
    color:white;
    padding:13px;
    text-align:left;
}

td{
    padding:13px;
    border-bottom:1px solid #eee;
}

.editar{
    background:#315c48;
    color:white;
    border:0;
    padding:7px 10px;
    border-radius:6px;
}

.excluir{
    background:#a94a3b;
    color:white;
    border:0;
    padding:7px 10px;
    border-radius:6px;
}

</style>
</head>

<body>

<header>

<h1>🐾 Histórico de Clientes</h1>

<button class="adotantes" onclick="location.href='adocoes.html'">
    Adoções
</button>

<button class="sair" onclick="location.href='index.html'">
    Sair
</button>

</header>

<div class="container">

<h2>Clientes cadastrados</h2>

<div class="formulario">

    <div class="campo">

        <label>Nome</label>

        <input
            type="text"
            id="nome"
            placeholder="Nome do cliente"
        >

    </div>

    <div class="campo">

        <label>E-mail</label>

        <input
            type="email"
            id="email"
            placeholder="E-mail"
        >

    </div>

    <div class="campo">

        <label>Telefone</label>

        <input
            type="text"
            id="telefone"
            placeholder="Telefone"
        >

    </div>

    <div class="campo">

        <label>Pet adotado</label>

        <input
            type="text"
            id="pet"
            placeholder="Nome do pet ou 'Nenhum'"
        >

    </div>

    <div class="campo">

        <label>Status</label>

        <select id="status">

            <option value="Não adotou">
                Não adotou
            </option>

            <option value="Adotou">
                Adotou
            </option>

        </select>

    </div>

    <button class="salvar" onclick="salvar()">
        Cadastrar cliente
    </button>

    <button
        class="cancelar"
        onclick="cancelar()"
        id="btnCancelar"
        style="display:none;"
    >
        Cancelar
    </button>

</div>

<table>

<thead>

<tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Pet adotado</th>
    <th>Status</th>
    <th>Ações</th>
</tr>

</thead>

<tbody id="lista"></tbody>

</table>

</div>

<script>

let clientes =
    JSON.parse(localStorage.getItem("clientes")) || [];

let editando = null;

function salvar(){

    let nome =
        document.getElementById("nome").value;

    let email =
        document.getElementById("email").value;

    let telefone =
        document.getElementById("telefone").value;

    let pet =
        document.getElementById("pet").value;

    let status =
        document.getElementById("status").value;

    if(nome === "" || email === ""){
        alert("Preencha o nome e o e-mail.");
        return;
    }

    let cliente = {
        nome: nome,
        email: email,
        telefone: telefone,
        pet: pet || "Nenhum",
        status: status
    };

    if(editando === null){

        clientes.push(cliente);

    }else{

        clientes[editando] = cliente;
        editando = null;

        document.querySelector(".salvar").innerText =
            "Cadastrar cliente";

        document.getElementById("btnCancelar")
            .style.display = "none";
    }

    localStorage.setItem(
        "clientes",
        JSON.stringify(clientes)
    );

    limpar();
    mostrar();
}

function mostrar(){

    let lista =
        document.getElementById("lista");

    lista.innerHTML = "";

    clientes.forEach((cliente, index) => {

        lista.innerHTML += `

        <tr>

            <td>${cliente.nome}</td>

            <td>${cliente.email}</td>

            <td>${cliente.telefone}</td>

            <td>${cliente.pet}</td>

            <td>${cliente.status}</td>

            <td>

                <button
                    class="editar"
                    onclick="editar(${index})"
                >
                    Editar
                </button>

                <button
                    class="excluir"
                    onclick="excluir(${index})"
                >
                    Excluir
                </button>

            </td>

        </tr>

        `;

    });
}

function editar(index){

    let cliente = clientes[index];

    document.getElementById("nome").value =
        cliente.nome;

    document.getElementById("email").value =
        cliente.email;

    document.getElementById("telefone").value =
        cliente.telefone;

    document.getElementById("pet").value =
        cliente.pet;

    document.getElementById("status").value =
        cliente.status;

    editando = index;

    document.querySelector(".salvar").innerText =
        "Salvar alteração";

    document.getElementById("btnCancelar")
        .style.display = "inline-block";
}

function excluir(index){

    if(confirm("Deseja excluir este cliente?")){

        clientes.splice(index, 1);

        localStorage.setItem(
            "clientes",
            JSON.stringify(clientes)
        );

        mostrar();
    }
}

function cancelar(){

    editando = null;

    limpar();

    document.querySelector(".salvar").innerText =
        "Cadastrar cliente";

    document.getElementById("btnCancelar")
        .style.display = "none";
}

function limpar(){

    document.getElementById("nome").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefone").value = "";
    document.getElementById("pet").value = "";
    document.getElementById("status").value = "Não adotou";
}

mostrar();

</script>

</body>

</html>