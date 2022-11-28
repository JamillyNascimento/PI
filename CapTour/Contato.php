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
                            <a href = "História.php" class = "nav-link">História</a>
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
                    <h1>Contato</h1>
                    <p>Torne-se nosso parceiro enviando sua mensagem, comentário ou avaliação do site.</p>
                </div>
            </div>
        </header>
        <!-- header -->
        
        <!-- contato seção -->
        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">ENTRE EM CONTATO CONOSCO</span>
                    <h2 class = "lg-title">Seu contato</h2>
                </div>

                <div class = "contact-row">
                    <div class = "contact-left">
                        <form class="contact-form" action="./php/VerificaContato.php" method="Post">
                         
                            <input type = "text" class = "form-control" placeholder="Nome" name="Nome" >
                            <input type = "email" class = "form-control" placeholder="Email" name="Email" >
                            <textarea rows = "4" class = "form-control" placeholder="Mensagem" name="Mensagem" style = "resize: none;"></textarea>
                            <input type = "submit" class = "btn" value = "Mandar Mensagem">
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Telefone</span>
                                <p class = "text">+035-991-543-004</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Endereço</span>
                                <p class = "text">Passos, MG</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Menssagem</span>
                                <p class = "text">CapTour@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fim da seção do contato -->
       
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