<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CapTour</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- personalizados css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
    </head>
    <body>
        <!-- navbar -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    Cap<span>Tour</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class="nav-item">
                            <a href="User.php" class="nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Fotos.php" class = "nav-link">Fotos</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Pontos.php" class = "nav-link">Pontos Tur??sticos</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Localiza????o.php" class = "nav-link">Localiza????o</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Pousadas.php" class = "nav-link">Pousadas</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Restaurantes.php" class = "nav-link">Restaurantes</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Contato.php" class = "nav-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- fim da navbar -->

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Hist??ria</h1>
                    <p>A hist??ria de Capit??lio, em Minas Gerais, come??ou a ser desenhada por volta de 1800, quando surgiram, na regi??o de Capit??lio, conhecida como ???Mata do Rio Piumhi???, dois portugueses, Machado de Faria e Gon??alves de Morais.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- Hist??ria se????o -->
        <section id = "about" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Saiba sobre as ra??zes da regi??o</span>
                    <h2 class = "lg-title">A hist??ria</h2>
                </div>

                <div class = "about-row">
                    <div class = "about-left my-2">
                        <img src = "images/city.jpg" alt = "about img">
                    </div>
                    <div class = "about-right">
                        <h2>Capit??lio, a Capital do Lago de Furnas</h2>
                        <p class = "text">Capit??lio (MG) se tornou um dos destinos tur??sticos mais desejados do Brasil por sua localiza????o privilegiada ??s margens do ???Doce Mar de Minas??? ??? o Lago de Furnas, que possui imensos 1.440 km?? e que foi criado com o represamento do Rio Grande para a constru????o da Hidrel??trica de Furnas, inaugurada em 1963;</p>
                        <p class = "text">tamb??m ?? buscado pelas diversas cachoeiras situadas no munic??pio e nas cidades dos arredores; al??m do seu artesanato, da sua gastronomia ?? base de peixe e comida t??pica mineira, e da hospitalidade de sua gente.</p>
                    </div>

                <div class = "about-left my-2">
                        <img src = "images/1905.jpg" alt = "about img">
                    </div>

                <div class = "about-left my-2">
                        <img src = "images/1935.jpg" alt = "about img">
                    </div>

                <div class = "about-left my-2">
                        <img src = "images/1948.jpg" alt = "about img">
                    </div>

                <div class = "about-left my-2">
                        <img src = "images/1965.jpg" alt = "about img">
                    </div>

                <div class = "about-left my-2">
                        <img src = "images/1980.jpg" alt = "about img">
                    </div>
                
                <div class = "about-left my-2">
                        <img src = "images/2013.jpg" alt = "about img">
                    </div>

                </div>
            </div>
        </section>
        <!-- fim da se????o da hist??ria -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">

                <div class = "footer-item">
                    <h2>Redes sociais</h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "https://www.facebook.com/eujamillynascimento/">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com/eujamillynascimento/">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://twitter.com/eujamillynascim">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://br.pinterest.com/jamillynascimnto/">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
             
                <div class = "footer-item">
                    <h2>Mensagem</h2>
                    <p class = "text">CapTour@gmail.com</p>
                    <p class = "text">+035-991-543-004</p>
                </div>

                <div class = "footer-item">
                    <h2>Links do Site</h2>
                    <ul>
                        <li><a href = "Contato.html">Contato</a></li>
                        <li><a href = "Hist??ria.html">Hist??ria</a></li>
                        <li><a href = "Localiza????o.html">Mapa</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Cap<span>Tour</span>
                    </a>
                    <p class = "text">CapTour ?? um site de turismo cujo objetivo ?? mostrar o melhor de Capt??lio para os moradores que desconhecem toda a riqueza da regi??o e para turistas em potencial.</p>
                </div>

            </div>
        </footer>
        <!-- fim da footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>




