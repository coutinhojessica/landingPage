<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/pageStyle.css">
        <link rel="shortcut icon" href="assets/imagens/favicon_io/favicon.ico" type="image/x-icon">
        <title>Blog</title>
</head>
<body>
<header class="cabecalho">
    <div class="conteiner-cabecalho">
        <nav class="menu">
            <a class="menu-item" href="index.php">Home</a>
            <a class="menu-item active" href="blog.php">Blog</a>
            <a class="menu-item" href="obras.php">Obras</a>
            <a class="menu-item" href="contatos.php">Contatos</a>
        </nav>
    </div>
    </header>
    
    <main class="conteiner-conteudo">
            <div class="title_page">
                <div class="teste">
                    <h2>Últimas Publicações</h2>
                </div>
            </div>
            <div class="box-img-conteudo">
            <div class="conteiner_noticias">
                <div class="resumo flex">
                    <article>
                        <a href="">
                            <div class="new_data">
                            <div class="new_posted_at"> 16 DEC 22</div>
                                <div class="new_comments">
                                    5
                                </div>
                                </div>
                                <div class="new_thumbnail">
                                    <img src="assets/imagens/write/write.jpg" alt="Escrita">
                                </div>
                                <div class="news-title"> Lorem ipsum dolor, sit amet consectetur </div>
                                    <div class="new_resume">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quis minus voluptas nam adipisci eaque? Dolor doloribus harum eos voluptatibus ducimus nobis iure dignissimos, quidem dicta expedita perferendis vitae quis?
                                    </div>
                            </a>
                    </article>
                    <article>
                        <a href="">
                            <div class="new_data">
                            <div class="new_posted_at"> 12 DEC 12</div>
                                <div class="new_comments">
                                    2
                                </div>
                                </div>
                                <div class="new_thumbnail">
                                    <img src="assets/imagens/write/write.jpg" alt="Escrita">
                                </div>
                                <div class="news-title"> Lorem ipsum dolor, sit amet consectetur </div>
                                    <div class="new_resume">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quis minus voluptas nam adipisci eaque? Dolor doloribus harum eos voluptatibus ducimus nobis iure dignissimos, quidem dicta expedita perferendis vitae quis?
                                    </div>
                            </a>
                    </article>
                    <article>
                        <a href="">
                            <div class="new_data">
                            <div class="new_posted_at"> 12 DEC 12</div>
                                <div class="new_comments">
                                    2
                                </div>
                                </div>
                                <div class="new_thumbnail">
                                    <img src="assets/imagens/write/write.jpg" alt="Escrita">
                                </div>
                                <div class="news-title"> Lorem ipsum dolor, sit amet consectetur </div>
                                    <div class="new_resume">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quis minus voluptas nam adipisci eaque? Dolor doloribus harum eos voluptatibus ducimus nobis iure dignissimos, quidem dicta expedita perferendis vitae quis?
                                    </div>
                            </a>
                    </article>
                    <article>
                        <a href="">
                            <div class="new_data">
                            <div class="new_posted_at"> 12 DEC 12</div>
                                <div class="new_comments">
                                    2
                                </div>
                                </div>
                                <div class="new_thumbnail">
                                    <img src="assets/imagens/write/write.jpg" alt="Escrita">
                                </div>
                                <div class="news-title"> Lorem ipsum dolor, sit amet consectetur </div>
                                    <div class="new_resume">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi quis minus voluptas nam adipisci eaque? Dolor doloribus harum eos voluptatibus ducimus nobis iure dignissimos, quidem dicta expedita perferendis vitae quis?
                                    </div>
                            </a>
                    </article>
                    </div>
                </div>
                <div class="avatar">
                    <section class="capa-blog">
                        <img src="./assets/imagens/avatar/Jessica-transparente.png" alt="Avatar Lizzie Evans">
                    </section>
                </div>
            </div>
    </main>
    
    <?php include 'footer.php' ;?>
</body>
</html>