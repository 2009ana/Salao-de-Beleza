<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>AmigoPet - Minha Conta</title>

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
    width:85%;
    max-width:900px;
    margin:30px auto;
}

.caixa{
    background:white;
    padding:25px;
    margin-bottom:20px;
    border-radius:15px;
}

h2{
    color:#6b4226;
    margin-top:0;
}

.info{
    margin:10px 0;
}

.favoritos{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.pet{
    background:#f8f1e9;
    padding:15px;
    border-radius:10px;
    min-width:150px;
}

button{
    background:#8b5e3c;
    color:white;
    border:0;
    padding:10px 15px;
    border-radius:8px;
    cursor:pointer;
}

.voltar{
    text-align:center;
    margin-top:20px;
}

</style>

</head>

<body>

<header>
    🐾 AmigoPet - Minha Conta
</header>

<div class="container">

<div class="caixa">

    <h2>Meus dados</h2>

   <p>Nome: <span id="nome"></span></p>

    <p>Telefone: <span id="telefone"></span></p>

    <p>E-mail: <span id="email"></span></p>

   <button onclick="location.href='edicao_usuario.html'">
    Editar dados
    </button>

</div>



<div class="caixa">

    <h2>Histórico de adoções</h2>

    <p id="adocoes">
        Você ainda não realizou nenhuma adoção.
    </p>

</div>


<div class="caixa">

    <h2>Animais favoritos 🐾</h2>

    <div class="favoritos">

        <div class="pet">
            🐶 Mel<br>
            <small>Cão</small>
        </div>

        <div class="pet">
            🐱 Nina<br>
            <small>Gato</small>
        </div>

    </div>

</div>



<div class="caixa">

    <h2>Minhas compras</h2>

    <p>
        Você ainda não realizou nenhuma compra.
    </p>

</div>


<div class="voltar">

    <button onclick="location.href='index.html'">
        Voltar para os animais
    </button>

</div>


</div>

<script>

function editar(){

    alert("Área de edição dos dados do usuário.");

}

</script>

</body>

</html>
