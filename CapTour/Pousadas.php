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
                    <h1>Pousadas</h1>
                    <p>Aqui você conhece como é a experiência de cada hospedagem da região: o que oferecem, onde estão localizadas e muito mais.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- pousadas -->
        <section id = "blog" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">Conheça algumas pousads da região</h2>
                    <h3 class = "lg-title">Principais</h3>
                </div>

                <div class = "blog-row">
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada1.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://g.page/pousadaserraverde_capitolio?share">Pousada Serra Verde</a>
                            <p class = "text">Apresentando uma piscina ao ar livre, a Pousada Serra Verde está localizada a 20 km do Canyon Furnas. Entre as várias comodidades da propriedade estão um jardim e um lounge compartilhado. Para sua comodidade, o Wi-Fi é gratuito.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada2.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/xFktZNBaJLeB2jXP7">Terrazzo Suítes</a>
                            <p class = "text">Dispondo de Wi-Fi gratuito em toda a propriedade, a Terrazzo Suites está situada em Capitólio, a 26 km do Canyon de Furnas.
                                              Todos os quartos desta pousada possuem ar-condicionado, TV de tela plana e banheiro privativo com chuveiro. Algumas unidades contam com uma sacada ou varanda.</p>
                        </div>
                    </div>

                   <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada3.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://g.page/solardonadora?share">Pousada Solar Dona Dora</a>
                            <p class = "text">Apresentando instalações de esportes aquáticos, a Pousada Solar Dona Dora é uma pousada situada em Capitólio, a 18 km do Cânion de Furnas. Além de serviço de quarto, esta propriedade também conta com restaurante. A propriedade oferece vista da montanha e piscina ao ar livre.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada4.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/QGpn1E8yHNFsYGWP6">Pousada Recanto do Lago</a>
                            <p class = "text">Esta acomodação fica a 12 minutos a pé da praia. A Pousada Recanto do Lago está situada em Capitólio. A propriedade está situada a 23 km do Canyon de Furnas. O Wi-Fi gratuito e o serviço de quarto são oferecidos.
                                              Todos os quartos da pousada possuem TV de tela plana via satélite. Todos os quartos dispõem de banheiro privativo, enquanto alguns oferecem vista da montanha.
                                              Na Pousada Recanto do Lago, você pode desfrutar de um buffet de café da manhã.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada5.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/Px4BBHf7Up2RnD117">Pousada Rainha Dos Lagos</a>
                            <p class = "text">Situada a 25 km do Canyon de Furnas, a Pousada Rainha Dos Lagos dispõe de quartos com ar-condicionado em Capitólio. Todas as unidades têm vista da montanha e Wi-Fi gratuito. Uma cozinha compartilhada e o serviço de quarto está disponível na propriedade.
                                              Os quartos incluem TV de tela plana e banheiro privativo com chuveiro. Algumas unidades da Pousada Rainha Dos Lagos contam com uma varanda. Todas as acomodações oferecem micro-ondas.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada6.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/n8wgqhPrMkK4hREp7">Lara’s Home Suites</a>
                            <p class = "text">O Lara’s Home Suites oferece acomodações em Capitólio. Você pode aproveitar a piscina ao ar livre e a cozinha compartilhada.
                                              Todos os quartos desta pousada contam com ar-condicionado, TV LED e frigobar.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada7.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/KYqfg2uiD5FidGfx8">Pousada Fecho da Serra</a>
                            <p class = "text">Situada em Capitólio, a 4,1 km do Canyon de Furnas, a Pousada Fecho da Serra oferece acomodação com piscina ao ar livre e restaurante, bem como ar-condicionado.
                                              Todos os quartos da pousada dispõem de área de estar e TV, bem como Wi-Fi gratuito, e algumas unidades incluem varanda; Piscina.
                                              O café da manhã continental é servido na sala de refeições.
                                              A Pousada Fecho da Serra conta com uma piscina ao ar livre. Você encontrará diversas atividades, como trilhas a pé, nos arredores da acomodação.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada8.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/BBTKuJjztb4sV1YU6">Pousada Kanto da Ilha Suites</a>
                            <p class = "text">A Pousada Kanto da Ilha Suites está localizada em Capitólio, a 38 km de Carmo do Rio Claro. Wi-Fi em todas as áreas e estacionamento privativo estão à sua disposição gratuitamente.
                                              Todos os quartos dispõem de TV de tela plana via satélite. Alguns quartos têm área de estar, onde você poderá relaxar. O banheiro é privativo em todas as unidades e inclui chuveiro.
                                              Há um lounge compartilhado na propriedade.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada9.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/V5TRoYd12goAD45C8">Pousada do Rio Turvo</a>
                            <p class = "text">Esta pousada fica a poucos passos da represa de Furnas e oferece acomodações tranquilas e simples, cercadas por natureza, piscina coberta e sauna. O estabelecimento fica a 6 km da área dos desfiladeiros e oferece piscina de água mineral natural e passeios de barco.
                                              Os quartos possuem decoração prática, TV, frigobar e banheiro privativo com chuveiro de água quente. Alguns quartos dispõem de ar-condicionado. O Wi-Fi está disponível por um custo adicional.
                                              Você pode desfrutar do buffet de café-da-manhã diariamente na área de refeições. O café-da-manhã inclui grande variedade de frutas frescas, pães, frios e uma seleção de bebidas quentes e frias.</p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- fim das pousadas -->
        
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