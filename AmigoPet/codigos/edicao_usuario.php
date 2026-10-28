<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>AmigoPet - Editar Dados</title>

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:Arial;
    background:#f8f1e9;
    color:#4f3423;
}

header{
    background:#315c48;
    color:white;
    padding:20px;
    text-align:center;
}

.container{
    width:90%;
    max-width:500px;
    margin:40px auto;
}

.caixa{
    background:white;
    padding:30px;
    border-radius:15px;
}

h2{
    color:#6b4226;
    text-align:center;
}

.campo{
    margin-bottom:15px;
}

label{
    display:block;
    margin-bottom:5px;
    font-weight:bold;
    color:#6b4226;
}

input{
    width:100%;
    padding:12px;
    border:2px solid #e3d1c0;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    border:0;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.salvar{
    background:#8b5e3c;
    color:white;
}

.voltar{
    background:#315c48;
    color:white;
    margin-top:10px;
}

</style>

</head>

<body>

<header>
    🐾 Editar Perfil
</header>

<div class="container">

<div class="caixa">

<h2>Editar meus dados</h2>

<div class="campo">

<label>Nome</label>

<input type="text" id="nome">

</div>

<div class="campo">

<label>Telefone</label>

<input type="tel" id="telefone">

</div>

<div class="campo">

<label>E-mail</label>

<input type="email" id="email">

</div>

<button class="salvar" onclick="salvar()">
    Salvar alterações
</button>

<button class="voltar" onclick="location.href='conta.html'">
    Voltar
</button>

</div>

</div>

<script>

let usuario =
    JSON.parse(localStorage.getItem("usuario")) || {
        nome:"",
        telefone:"",
        email:""
    };


document.getElementById("nome").value =
    usuario.nome;

document.getElementById("telefone").value =
    usuario.telefone;

document.getElementById("email").value =
    usuario.email;


function salvar(){

    usuario.nome =
        document.getElementById("nome").value;

    usuario.telefone =
        document.getElementById("telefone").value;

    usuario.email =
        document.getElementById("email").value;


    localStorage.setItem(
        "usuario",
        JSON.stringify(usuario)
    );

    alert("Dados atualizados!");

    location.href="conta.html";
}

</script>

</body>

</html>
