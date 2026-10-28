
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmigoPet - Adoção de Pets</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="logo">🐾 AmigoPet</div>

    <nav>
        <a href="#inicio">Início</a>
        <a href="animais.html">Animais</a>
        <a href="#como-funciona">Como funciona</a>
        <a href="#sobre">Sobre</a>
        <a href="#contato">Contato</a>
    </nav>
</header>

<section class="inicio" id="inicio">
    <div class="texto-inicio">
        <p class="destaque">ADOÇÃO RESPONSÁVEL</p>
        <h1>Encontre um amigo<br>para a vida toda.</h1>
        <p>Conheça pets que estão esperando por uma família.</p>
        <a class="botao" href="cadastro.html">
            Entrar
        </a>
    </div>

    <div class="imagem-inicio">🐶</div>
</section>


<section class="como-funciona" id="como-funciona">
    <div class="titulo">
        <p class="destaque">PASSO A PASSO</p>
        <h2>Como adotar?</h2>
    </div>

    <div class="passos">
        <div>
            <span>1</span>
            <h3>Escolha</h3>
            <p>Encontre o pet que mais combina com você.</p>
        </div>

        <div>
            <span>2</span>
            <h3>Cadastre-se</h3>
            <p>Preencha seus dados e conte um pouco sobre sua casa.</p>
        </div>

        <div>
            <span>3</span>
            <h3>Converse</h3>
            <p>Nossa equipe analisa sua solicitação.</p>
        </div>

        <div>
            <span>4</span>
            <h3>Adote</h3>
            <p>Se tudo estiver certo, o pet ganha uma nova família.</p>
        </div>
    </div>
</section>

<section class="sobre" id="sobre">
    <div>
        <p class="destaque">SOBRE NÓS</p>
        <h2>Adotar é dar uma nova chance.</h2>
        <p>
            O AmigoPet aproxima pessoas que querem adotar de animais
            que precisam de um lar. Nosso objetivo é tornar a adoção
            mais simples e responsável.
        </p>
    </div>

    <div class="caixa-sobre">
        <h3>Antes de adotar</h3>
        <p>
            Pense no espaço, no tempo, nos gastos e nos cuidados
            que um animal precisa durante toda a vida.
        </p>
    </div>
</section>

<section class="contato" id="contato">
    <div class="titulo">
        <p class="destaque">CONTATO</p>
        <h2>Fale com a gente</h2>
    </div>

    <form id="form-contato">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
        <button class="botao" type="submit">Enviar</button>
        <p id="mensagem-contato"></p>
    </form>
</section>

<footer>
    <div class="logo">🐾 AmigoPet</div>
    <p>Adoção responsável, carinho para toda a vida.</p>
</footer>

<div class="janela" id="janela">
    <div class="conteudo-janela">
        <button class="fechar" id="fechar">×</button>
        <div id="detalhes"></div>
    </div>
</div>

<script src="js/scr.js"></script>
</body>
</html>