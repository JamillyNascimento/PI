<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CapTour</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
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
                        <li class = "nav-item">
                            <a href = "Contato.php" class = "nav-link">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- final da navbar -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Seja bem-vindo ao CapTour</h1>
                    <p>Viagens, turismo e história são tesouros de grande valor, ter um guia de turismo é valorizar e lapidar essa vivência, é emoldurar as lembranças.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- seção destaque -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">CONHEÇA ALGUNS LUGARES ANTES DA SUA VIAGEM</span>
                    <h2 class = "lg-title">LUGARES EM DESTAQUE</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "images/cachoeiracayons.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Cachoeira dos Cânions, Capitólio
                            </span>
                            <div>
                                <p class = "text">Com duas quedas d’água principais que se transformam em várias e um grande poço para nadar, a Cariocas agrada em cheio aos turistas. </p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/mirantecanyons.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Mirante dos Cânions, Capitólio
                            </span>
                            <div>
                                <p class = "text"> Localizado à margem da rodovia MG-050, o passeio ao Mirante dos Cânions é rápido e o ideal é aliá-lo a outras atrações nos arredores.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/pedreiralagoaazul.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Pedreira Lagoa Azul, Capitólio
                            </span>
                            <div>
                                <p class = "text">A Pedreira Lagoa Azul é um dos mais lindos Ponto Turístico de Capitólio. Lagoa cristalina, com uma paisagem deslumbrante.</p>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fim da seção destaque -->

        <!-- avaliadores seção -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Avaliações</span>
                    <h2 class = "lg-title">Viajantes</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">Difícil acesso, é importante ir com veículo 4x4.
                                          Era uma área de exploração de pedras, mas apareceu uma mina d'água, assim não foi mais permitido a continuação da exploração, virando uma área preservada, originando a Lagoa Azul.
                                          É um local para visita e tirar fotos, não é cobrada entrada, mas não possui estrutura, como lanchonete e banheiros!</p>
                        <div class = "test-item-info">
                            <img src = "images/pessoa1.jpeg" alt = "testimonial">
                            <div>
                                <h3>Maria Cristina</h3>
                                <p class = "text">Pedreira Azul</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">Um dos lugares mais lindos que já vi na minha vida.
                                          Eles só aceitam dinheiro como forma de pagamento. Chegamos por volta de 8h30 conseguimos tirar fotos nas cachoeiras, mas depois das 10hrs começa a aumentar o fluxo de pessoas. Vale muito a pena!</p>
                        <div class = "test-item-info">
                            <img src = "images/pessoa2.jpg" alt = "testimonial">
                            <div>
                                <h3>Ana Luiza</h3>
                                <p class = "text">Paraíso Perdido</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">Cidade bem tranquila, passei um final de semana e achei muito bom, a usina é algo impressionante, só passando para saber a sensação boa que dá, lugar espetacular, quem for para serra da canastra vale muito a pena desviar um pouco o caminho e passar pela Usina de Furnas!</p>
                        <div class = "test-item-info">
                            <img src = "images/pessoa3.jpeg" alt = "testimonial">
                            <div>
                                <h3>Maria Eduarda</h3>
                                <p class = "text">Usina idelétrica de Furnas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fim da seção dos avaliadores -->

        <!-- video seção -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "videos/video-section.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- Final da seção do video -->

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
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>