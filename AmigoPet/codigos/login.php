<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AmigoPet - Login</title>

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
    font-family:Arial, sans-serif;
}

.container{
    width:430px;
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 15px 35px rgba(0,0,0,.2);
}

.logo{
    text-align:center;
    font-size:60px;
    margin-bottom:10px;
}

h1{
    text-align:center;
    color:#315c48;
    margin-bottom:5px;
}

.subtitulo{
    text-align:center;
    color:#777;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:15px;
}

.input-group label{
    display:block;
    margin-bottom:5px;
    color:#315c48;
    font-weight:bold;
}

.input-group input{
    width:100%;
    padding:14px;
    border:2px solid #eee;
    border-radius:10px;
    transition:0.3s;
}

.input-group input:focus{
    outline:none;
    border-color:#315c48;
}

.btn{
    width:100%;
    padding:15px;
    border:none;
    background:#315c48;
    color:white;
    border-radius:10px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#244536;
}

.links{
    margin-top:20px;
    text-align:center;
}

.links a{
    color:#d9794a;
    text-decoration:none;
    font-weight:bold;
}

.pet{
    text-align:center;
    font-size:14px;
    color:#666;
    margin-top:15px;
}

.grupo{
    text-align:center;
    margin-top:20px;
}

.grupo a{
    color:#315c48;
    text-decoration:none;
    font-weight:bold;
    cursor:pointer;
}

.grupo a:hover{
    color:#d9794a;
}

</style>

</head>
<body>

<div class="container">

<div class="logo">
    🐾
</div>

<h1>AmigoPet</h1>

<p class="subtitulo">
    Faça login para continuar
</p>

<div class="input-group">
    <label>E-mail</label>
    <input type="email" id="email">
</div>

<div class="input-group">
    <label>Senha</label>
    <input type="password" id="senha">
</div>

<button class="btn" onclick="entrar()">
    Entrar
</button>

<div class="pet">
    Adote amor, não compre.
</div>

<div class="grupo">
    <a href="admin.html">
        Sou Administrador
    </a>
</div>

</div>

<script>

function entrar()
{
    location.href = "conta.html";
}

</script>

</body>
</html>
