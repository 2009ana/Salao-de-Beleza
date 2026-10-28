<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AmigoPet - Admin</title>

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

.botoes{
    display:flex;
    gap:10px;
}

.adotantes{
    background:#244536;
    color:white;
    border:0;
    padding:10px 18px;
    border-radius:8px;
    cursor:pointer;
}

.sair{
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

button{
    cursor:pointer;
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

<h1>🐾 Gerencia</h1>

<div class="botoes">

<button class="adotantes" onclick="location.href='adotantes.html'">
    🐾 Adotantes
</button>

<button class="sair" onclick="sair()">
    Sair
</button>

</div>

</header>

<div class="container">

<h2>Gerenciar Animais</h2>

<div class="formulario">

    <div class="campo">

        <label>Nome</label>

        <input
            type="text"
            id="nome"
            placeholder="Nome do animal"
        >

    </div>

    <div class="campo">

        <label>Tipo</label>

        <select id="tipo">

            <option value="Cão">Cão</option>
            <option value="Gato">Gato</option>

        </select>

    </div>

    <div class="campo">

        <label>Idade</label>

        <input
            type="text"
            id="idade"
            placeholder="Ex: 2 anos"
        >

    </div>

    <div class="campo">

        <label>Status</label>

        <select id="status">

            <option value="Disponível">
                Disponível
            </option>

            <option value="Adotado">
                Adotado
            </option>

        </select>

    </div>

    <button class="salvar" onclick="salvar()">
        Cadastrar
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
            <th>Tipo</th>
            <th>Idade</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

    </thead>

    <tbody id="lista"></tbody>

</table>

</div>

<script>

let pets =
    JSON.parse(localStorage.getItem("pets")) || [];

let editando = null;

function salvar()
{
    const nome =
        document.getElementById("nome").value;

    const tipo =
        document.getElementById("tipo").value;

    const idade =
        document.getElementById("idade").value;

    const status =
        document.getElementById("status").value;

    if(nome === "" || idade === "")
    {
        alert("Preencha o nome e a idade.");
        return;
    }

    const pet = {
        nome: nome,
        tipo: tipo,
        idade: idade,
        status: status
    };

    if(editando === null)
    {
        pets.push(pet);
    }
    else
    {
        pets[editando] = pet;
        editando = null;

        document.querySelector(".salvar")
            .innerText = "Cadastrar";

        document.getElementById("btnCancelar")
            .style.display = "none";
    }

    localStorage.setItem(
        "pets",
        JSON.stringify(pets)
    );

    limpar();
    mostrar();
}

function mostrar()
{
    const lista =
        document.getElementById("lista");

    lista.innerHTML = "";

    pets.forEach((pet, index) =>
    {

        lista.innerHTML += `

        <tr>

            <td>${pet.nome}</td>

            <td>${pet.tipo}</td>

            <td>${pet.idade}</td>

            <td>${pet.status}</td>

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

function editar(index)
{
    const pet = pets[index];

    document.getElementById("nome").value =
        pet.nome;

    document.getElementById("tipo").value =
        pet.tipo;

    document.getElementById("idade").value =
        pet.idade;

    document.getElementById("status").value =
        pet.status;

    editando = index;

    document.querySelector(".salvar")
        .innerText = "Salvar alteração";

    document.getElementById("btnCancelar")
        .style.display = "inline-block";
}

function excluir(index)
{
    if(confirm("Deseja excluir este animal?"))
    {
        pets.splice(index, 1);

        localStorage.setItem(
            "pets",
            JSON.stringify(pets)
        );

        mostrar();
    }
}

function cancelar()
{
    editando = null;

    limpar();

    document.querySelector(".salvar")
        .innerText = "Cadastrar";

    document.getElementById("btnCancelar")
        .style.display = "none";
}

function limpar()
{
    document.getElementById("nome").value = "";
    document.getElementById("idade").value = "";
    document.getElementById("tipo").value = "Cão";
    document.getElementById("status").value = "Disponível";
}

function sair()
{
    location.href = "index.html";
}

mostrar();

</script>

</body>
</html>