<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AmigoPet - Cadastro</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(
        135deg,
        #315c48,
        #244536
    );
    font-family:Arial,sans-serif;
}

.container{
    width:500px;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,.2);
}

.logo{
    text-align:center;
    font-size:60px;
    margin-bottom:10px;
}

h1{
    text-align:center;
    color:#315c48;
    margin-bottom:10px;
}

.subtitulo{
    text-align:center;
    color:#777;
    margin-bottom:30px;
}

.grupo{
    margin-bottom:15px;
}

.grupo label{
    display:block;
    margin-bottom:5px;
    color:#315c48;
    font-weight:bold;
}

.grupo input{
    width:100%;
    padding:14px;
    border:2px solid #e0e0e0;
    border-radius:12px;
    transition:.3s;
}

.grupo input:focus{
    outline:none;
    border-color:#315c48;
}

.botao{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#315c48;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

.botao:hover{
    background:#244536;
}

.login{
    margin-top:20px;
    text-align:center;
}

.login a{
    color:#d9794a;
    text-decoration:none;
    font-weight:bold;
}

.frase{
    text-align:center;
    margin-top:20px;
    color:#666;
}

</style>

</head>

<body>

<div class="container">

    <div class="logo">
        🐾
    </div>

    <h1>Criar Conta</h1>

    <p class="subtitulo">
        Faça parte da família AmigoPet
    </p>

    <div class="grupo">
        <label>Nome Completo</label>
        <input type="text">
    </div>

    <div class="grupo">
        <label>E-mail</label>
        <input type="email">
    </div>

    <div class="grupo">
        <label>Telefone</label>
        <input type="text">
    </div>

    <div class="grupo">
        <label>Senha</label>
        <input type="password">

    
    </div>
        <button class="botao">
            <a href="conta
            .html"></a>
            Criar Conta
        </button>
        
    <div class="login">
        <a href="login.html">
            Já tenho conta
        </a>
    </div>

    <div class="frase">
        Mais que adotar um pet, é ganhar um amigo.

    </div>
    
</body>
</html>   