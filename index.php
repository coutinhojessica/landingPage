<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/imagens/favicon_io/favicon.ico" type="image/x-icon">
    <!-- Fonte google-->
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Lizzie Evans</title>
</head>
<body>
    <?php include 'cabecalho.php';?>
    <main class="conteudo-principal">
        <section class="conteiner-index">
            <div class="title">
                <h1 class="titulo-site">Lizze Evans</h1>
                <p class="sub-titulo">Aspirante a Escritora</p>
            </div>
            <div class="conteudo-secundario">
            <aside class="conteiner-sobre">
                <p class="descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium officiis dolore harum vitae, non necessitatibus blanditiis inventore maiores minus, hic possimus, consequatur laborum. Quae dolore, iusto molestias dolor mollitia pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, non. Consequatur odio dolore libero minus esse maxime dolorum, dolores facere eveniet cumque provident quis ea repudiandae voluptatibus nobis, magnam vitae.</p>
                <img class="img-sobre" src="assets/imagens/caneta.png" alt="Imagem de uma pena em um tinteiro.">
            </aside>
            </div>
            <div class="conteudo-terceiro">
                <div class="frase-usuario">
                    <p>Informe seu melhor e-mail e se mantenha atualizado a respeito dos conte??dos.
                    </p>
                
            <div class="informacao-usuario">
                <form class="form-email-user" action="" method="$_POST">
                    <input type="email" name="campoEmail" class="campo-email" id="email" placeholder="e-mail@exemplo.com">
                    <input type="submit" class="botao-informacao" value="Enviar">
                </form>
                </div>
            </div>
            </div>
        </section>
        <section class="img-lizzie">
                <img class="avatar" src="assets/imagens/avatar/jessica2-principal.png" alt="Avatar de Lizzie Evans">
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>