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
                            <a href = "Pontos.php" class = "nav-link">Pontos Turísticos</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Localização.php" class = "nav-link">Localização</a>
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
                    <h1>História</h1>
                    <p>A história de Capitólio, em Minas Gerais, começou a ser desenhada por volta de 1800, quando surgiram, na região de Capitólio, conhecida como “Mata do Rio Piumhi”, dois portugueses, Machado de Faria e Gonçalves de Morais.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- História seção -->
        <section id = "about" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Saiba sobre as raízes da região</span>
                    <h2 class = "lg-title">A história</h2>
                </div>

                <div class = "about-row">
                    <div class = "about-left my-2">
                        <img src = "images/city.jpg" alt = "about img">
                    </div>
                    <div class = "about-right">
                        <h2>Capitólio, a Capital do Lago de Furnas</h2>
                        <p class = "text">Capitólio (MG) se tornou um dos destinos turísticos mais desejados do Brasil por sua localização privilegiada às margens do “Doce Mar de Minas” – o Lago de Furnas, que possui imensos 1.440 km² e que foi criado com o represamento do Rio Grande para a construção da Hidrelétrica de Furnas, inaugurada em 1963;</p>
                        <p class = "text">também é buscado pelas diversas cachoeiras situadas no município e nas cidades dos arredores; além do seu artesanato, da sua gastronomia à base de peixe e comida típica mineira, e da hospitalidade de sua gente.</p>
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
        <!-- fim da seção da história -->

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
                        <li><a href = "História.html">História</a></li>
                        <li><a href = "Localização.html">Mapa</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Cap<span>Tour</span>
                    </a>
                    <p class = "text">CapTour é um site de turismo cujo objetivo é mostrar o melhor de Captólio para os moradores que desconhecem toda a riqueza da região e para turistas em potencial.</p>
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




