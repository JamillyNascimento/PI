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
                        <li class = "nav-item">
                            <a href = "User.php" class = "nav-link">Home</a>
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
                            <a href = "História.php" class = "nav-link">História</a>
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
                    <h1>Fotos</h1>
                    <p>Aqui você confere as melhores fotos dos pontos turísticos da região.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- fotos seção -->
        <div id = "gallery" class = "py-4">
            <div class = "container">
                <div class = "gallery-row">
                    <div class = "gallery-item shadow">
                        <img src = "images/foto1.jpg" alt = "gallery im">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto2.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto3.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto4.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto5.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto6.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto7.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto8.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                    <div class = "gallery-item shadow">
                        <img src = "images/foto9.jpg" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- final da seção das fotos -->

        <!-- img modal -->
        <div id = "img-modal-box">
            <div id = "img-modal">
                <button type = "button" id = "modal-close-btn" class = "flex">
                    <i class = "fas fa-times"></i>
                </button>
                <button type = "button" id = "prev-btn" class = "flex">
                    <i class = "fas fa-chevron-left"></i>
                </button>
                <button type = "button" id = "next-btn" class = "flex">
                    <i class = "fas fa-chevron-right"></i>
                </button>
                <img src = "images/gallery-1.jpg">
            </div>
        </div>
        <!-- fim da img modal -->

        <!-- luagares populares seção -->
        <section id = "popular" class = "py-4">
            <div class = "title-wrap">
                <span class = "sm-title">Conheça algum destino</span>
                <h2 class = "lg-title">Lugares Populares</h2>
            </div>

            <div class = "popular-row">
                <div class = "popular-item shadow">
                    <img src = "images/popularteste.jpg" alt = "">
                    <div>
                        <span>Cânions</span>
                        <p class = "text">Avaliação: 4,8</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste2.jpg" alt = "">
                    <div>
                        <span>Paraíso Perdido</span>
                        <p class = "text">Avaliação: 4,5</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste3.jpeg" alt = "">
                    <div>
                        <span>Cachoeira Fecho da Serra</span>
                        <p class = "text">Avaliação: 4,6</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste4.jpeg" alt = "">
                    <div>
                        <span>Lagoa Azul</span>
                        <p class = "text">Avaliação: 4,6</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste5.jpeg" alt = "">
                    <div>
                        <span>Cachoeira Diquadinha</span>
                        <p class = "text">Avaliação: 4,7</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste6.jpeg" alt = "">
                    <div>
                        <span>Cachoeira do Grotão</span>
                        <p class = "text">Avaliação: 3,3</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste7.jpeg" alt = "">
                    <div>
                        <span>Mirante dos Cânions</span>
                        <p class = "text">Avaliação: 4,7</p>
                    </div>
                </div>

                <div class = "popular-item shadow">
                    <img src = "images/popularteste8.jpeg" alt = "">
                    <div>
                        <span>Trilha do Sol</span>
                        <p class = "text">Avaliação: 4,6</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- fim da seção dos lugares populares -->
        
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