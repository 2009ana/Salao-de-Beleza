
<html>
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background:#faf7f0;
        }

        header{
            background:#315c48;
            color:white;
            padding:20px;
        }

        .container{
            padding:30px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:20px;
            margin-top:20px;
        }

        .card{
            background:white;
            border-radius:10px;
            padding:20px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        .card h3{
            color:#315c48;
        }

        .menu{
            margin-top:30px;
        }

        .menu a{
            display:block;
            margin:10px 0;
            text-decoration:none;
            background:#315c48;
            color:white;
            padding:12px;
            border-radius:5px;
        }

    </style>

</head>
<body>

<header>
    <h1>🐾 AmigoPet - Dashboard</h1>
</header>

<div class="container">

    <h2>Painel Administrativo</h2>

    <div class="cards">

        <div class="card">
            <h3>Pets</h3>
            <p id="totalPets">12</p>
        </div>

        <div class="card">
            <h3>Usuários</h3>
            <p>5</p>
        </div>

        <div class="card">
            <h3>Adoções</h3>
            <p>3</p>
        </div>

        <div class="card">
            <h3>Adotantes</h3>
            <p>5</p>
        </div>

    </div>

    <div class="menu">

        pets.html
            Gerenciar Pets
        </a>

        usuarios.html
            Gerenciar Usuários
        </a>

        adocoes.html
            Gerenciar Adoções
        </a>

        adotantes.html
            Gerenciar Adotantes
        </a>
        
        pets.html
            Gerenciar Pets
        </a>

    </div>

</div>

</body>
</html>