<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleHome.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/meetboonenem.ico">
    <title>MeetBoo</title>
</head>

<body>
    <?php
        require_once 'global.php';

        try{
            $Postagem = new Postagem();

            $ListaPost = $Postagem->listar();
          }
          catch(exception $e){
            echo '<pre>';
                print_r($e);
            echo '</pre>';
    
            echo $e->getMessage();
          }

    ?>


    <div class="allSite">
        <header>
            <a href="" class="logo"><img src="./img/logoMeetboo.png" alt=""></a>
            <form action="">
                <input type="text" placeholder="Explore">
            </form>
            <ul>
                <li><img src="./img/more.png" alt=""></a></li>
                <li><img src="./img/home.png" alt=""></a></li>
                <li><img src="./img/bell.png" alt=""></a></li>
                <li><img src="./img/chat.png" alt=""></a></li>
                <li><img src="./img/setting.png" alt=""></a></li>
            </ul>
        </header>
        <section class="feed">
            <div class="containerTwo">
                <img src="img/coluna.png" style="width: 220px;">
            </div>
            <div class="container">
                <div class="usuario">
                    <div class="img-container">
                        <img src="./img/usuario.png" alt="">
                    </div>
                    <ul>
                        <li><h1><?php echo $_SESSION['User'] ?></h1></li>
                    </ul>
                </div>
                <form class="formPost" action="postar-review.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="ftFile" id="livroInput">
                    <input type="text" name="txtGenero" class="input" id="generoInput" maxlength="30" placeholder="Qual o genero do livro? Ex: #Terror">
                    <br>
                    <input type="text" name="txtTitulo" class="input" id="tituloInput" maxlength="85" placeholder="D?? um titulo a sua review">
                    <textarea name="txtReview" class="input" id="reviewInput" maxlength="450" placeholder="Escreva sua review aqui"></textarea>
                    <input type="submit" class="input" id="enviarPost" value="Postar">
                </form>   
            </div>
            <?php foreach ($ListaPost as $linha){   ?>
                <div class="container">
                    <div class="usuario">
                        <div class="img-container">
                            <img src="./img/usuario.png" alt="">
                        </div>
                        <ul>
                            <li><h1><?php echo $linha['nomeUsuario']?></h1></li>
                            <li><h2><?php echo $linha['generoPost'] ?></h2></li>
                        </ul>
                    </div>
                    <div class="post">
                        <h1><?php echo $linha['tituloPost']   ?></h1>
                        <div class="info">
                            <div class="img-container">
                                <img src="<?php echo $linha['caminhoImagem']  ?>" alt="">
                            </div>
                            <div class="text-container">
                                <p> <?php echo $linha['descPost'] ?></p>
                            </div>
                        </div>
                        <ul>
                            <li><img src="./img/love.png" alt=""></li>
                            <li><img src="./img/bubble-chat.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            <div class="container">
                <div class="usuario">
                    <div class="img-container">
                        <img src="./img/Usuario1.jpg" alt="">
                    </div>
                    <ul>
                        <li><h1>Larissa Azevedo</h1></li>
                        <li><h2>#Terror #Suspense #Romance #Fantasia</h2></li>
                    </ul>
                </div>
                <div class="post">
                    <h1>"Dr??cula" de Bram Stoker, cl??ssico essencial!!</h1>
                    <div class="info">
                        <div class="img-container">
                            <img src="./img/5150FfwWxUL.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <p> "Dr??cula" de Bram Stoker ?? um romance que mistura o terror com o 
                                g??tico e a literatura vampiresca. O protagonista ?? o vampiro Conde Dr??cula, 
                                que hoje ?? reconhecido como exemplo de figura t??o sinistra e aterrorizante 
                                da mente humana. A narrativa ?? epistolar, ocorre por meio de cartas. O sobrenatural
                                ?? desenvolvido de maneira engenhosa, causando afli????o e at?? mesmo certa agonia ao leitor.                       
                            </p>
                        </div>
                    </div>
                    <ul>
                        <li><img src="./img/love.png" alt=""></li>
                        <li><img src="./img/bubble-chat.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="usuario">
                    <div class="img-container">
                        <img src="./img/Usuario2.jpg.opdownload" alt="">
                    </div>
                    <ul>
                        <li><h1>Fernanda Pierre</h1></li>
                        <li><h2>#Suspense #Policial #Psicol??gico</h2></li>
                    </ul>
                </div>

                <div class="post">
                    <h1>Bom mas infelizmente deixou a desejar.</h1>
                    <div class="info">
                        <div class="img-container">
                            <img src="./img/51pNmTP7BRL.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <p>Sherlock apresenta a Watson as suas capacidades dedutivas. 
                                Os dois se veem envolvidos em um caso se assassinato, que 
                                n??o parece fazer muito sentido, mas Sherlock vai conseguir 
                                desvendar o caso aparentemente sem muito esfor??o e 
                                surpreender a todos. Gostei muit??ssimo de acompanhar todo 
                                o processo investigativo e o relacionamento dos amigos, 
                                mas achei a segunda parte da hist??ria, 
                                a confiss??o do assassino muito aborrecida.
                            </p> 
                        </div>
                    </div>
                    <ul>
                        <li><img src="./img/love.png" alt=""></li>
                        <li><img src="./img/bubble-chat.png" alt=""></li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="usuario">
                    <div class="img-container">
                        <img src="./img/Usuario3.jpg" alt="">
                    </div>
                    <ul>
                        <li><h1>Raissa Falc??o</h1></li>
                        <li><h2>#Terror #Suspense #Sobrenatural</h2></li>
                    </ul>
                </div>

                <div class="post">
                    <h1>Obra-prima da literatura que originou uma obra-prima do cinema.</h1>
                    <div class="info">
                        <div class="img-container">
                            <img src="./img/8B-psicose.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <p>O fato de conhecer a trama n??o diminuiu em nada a experi??ncia fascinante de ler este cl??ssico do horror. 
                                Falar sobre o quanto a hist??ria e sua narrativa ?? magn??fica acaba por ser uma redund??ncia. S?? o que posso dizer 
                                ?? que este livro ?? item indispens??vel para todos os amantes do g??nero. E ap??s ler o livro assista ao filme de Hitchicock, 
                                simplesmente o cineasta usou sua genialidade para passar o livro, de forma integral, para a linguagem do cinema.</p>
                        </div>
                    </div>
                    <ul>
                        <li><img src="./img/love.png" alt=""></li>
                        <li><img src="./img/bubble-chat.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </section>
</body>
</html>