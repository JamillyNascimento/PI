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
                            <a href = "Pontos.php" class = "nav-link">Pontos Tur??sticos</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Localiza????o.php" class = "nav-link">Localiza????o</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Restaurantes.php" class = "nav-link">Restaurantes</a>
                        </li>
                         <li class = "nav-item">
                            <a href = "Hist??ria.php" class = "nav-link">Hist??ria</a>
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
                    <p>Aqui voc?? conhece como ?? a experi??ncia de cada hospedagem da regi??o: o que oferecem, onde est??o localizadas e muito mais.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- pousadas -->
        <section id = "blog" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">Conhe??a algumas pousads da regi??o</h2>
                    <h3 class = "lg-title">Principais</h3>
                </div>

                <div class = "blog-row">
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada1.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://g.page/pousadaserraverde_capitolio?share">Pousada Serra Verde</a>
                            <p class = "text">Apresentando uma piscina ao ar livre, a Pousada Serra Verde est?? localizada a 20 km do Canyon Furnas. Entre as v??rias comodidades da propriedade est??o um jardim e um lounge compartilhado. Para sua comodidade, o Wi-Fi ?? gratuito.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada2.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/xFktZNBaJLeB2jXP7">Terrazzo Su??tes</a>
                            <p class = "text">Dispondo de Wi-Fi gratuito em toda a propriedade, a Terrazzo Suites est?? situada em Capit??lio, a 26 km do Canyon de Furnas.
                                              Todos os quartos desta pousada possuem ar-condicionado, TV de tela plana e banheiro privativo com chuveiro. Algumas unidades contam com uma sacada ou varanda.</p>
                        </div>
                    </div>

                   <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada3.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://g.page/solardonadora?share">Pousada Solar Dona Dora</a>
                            <p class = "text">Apresentando instala????es de esportes aqu??ticos, a Pousada Solar Dona Dora ?? uma pousada situada em Capit??lio, a 18 km do C??nion de Furnas. Al??m de servi??o de quarto, esta propriedade tamb??m conta com restaurante. A propriedade oferece vista da montanha e piscina ao ar livre.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada4.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/QGpn1E8yHNFsYGWP6">Pousada Recanto do Lago</a>
                            <p class = "text">Esta acomoda????o fica a 12 minutos a p?? da praia. A Pousada Recanto do Lago est?? situada em Capit??lio. A propriedade est?? situada a 23 km do Canyon de Furnas. O Wi-Fi gratuito e o servi??o de quarto s??o oferecidos.
                                              Todos os quartos da pousada possuem TV de tela plana via sat??lite. Todos os quartos disp??em de banheiro privativo, enquanto alguns oferecem vista da montanha.
                                              Na Pousada Recanto do Lago, voc?? pode desfrutar de um buffet de caf?? da manh??.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada5.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/Px4BBHf7Up2RnD117">Pousada Rainha Dos Lagos</a>
                            <p class = "text">Situada a 25 km do Canyon de Furnas, a Pousada Rainha Dos Lagos disp??e de quartos com ar-condicionado em Capit??lio. Todas as unidades t??m vista da montanha e Wi-Fi gratuito. Uma cozinha compartilhada e o servi??o de quarto est?? dispon??vel na propriedade.
                                              Os quartos incluem TV de tela plana e banheiro privativo com chuveiro. Algumas unidades da Pousada Rainha Dos Lagos contam com uma varanda. Todas as acomoda????es oferecem micro-ondas.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada6.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/n8wgqhPrMkK4hREp7">Lara???s Home Suites</a>
                            <p class = "text">O Lara???s Home Suites oferece acomoda????es em Capit??lio. Voc?? pode aproveitar a piscina ao ar livre e a cozinha compartilhada.
                                              Todos os quartos desta pousada contam com ar-condicionado, TV LED e frigobar.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada7.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/KYqfg2uiD5FidGfx8">Pousada Fecho da Serra</a>
                            <p class = "text">Situada em Capit??lio, a 4,1 km do Canyon de Furnas, a Pousada Fecho da Serra oferece acomoda????o com piscina ao ar livre e restaurante, bem como ar-condicionado.
                                              Todos os quartos da pousada disp??em de ??rea de estar e TV, bem como Wi-Fi gratuito, e algumas unidades incluem varanda; Piscina.
                                              O caf?? da manh?? continental ?? servido na sala de refei????es.
                                              A Pousada Fecho da Serra conta com uma piscina ao ar livre. Voc?? encontrar?? diversas atividades, como trilhas a p??, nos arredores da acomoda????o.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada8.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/BBTKuJjztb4sV1YU6">Pousada Kanto da Ilha Suites</a>
                            <p class = "text">A Pousada Kanto da Ilha Suites est?? localizada em Capit??lio, a 38 km de Carmo do Rio Claro. Wi-Fi em todas as ??reas e estacionamento privativo est??o ?? sua disposi????o gratuitamente.
                                              Todos os quartos disp??em de TV de tela plana via sat??lite. Alguns quartos t??m ??rea de estar, onde voc?? poder?? relaxar. O banheiro ?? privativo em todas as unidades e inclui chuveiro.
                                              H?? um lounge compartilhado na propriedade.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/pousada9.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/V5TRoYd12goAD45C8">Pousada do Rio Turvo</a>
                            <p class = "text">Esta pousada fica a poucos passos da represa de Furnas e oferece acomoda????es tranquilas e simples, cercadas por natureza, piscina coberta e sauna. O estabelecimento fica a 6 km da ??rea dos desfiladeiros e oferece piscina de ??gua mineral natural e passeios de barco.
                                              Os quartos possuem decora????o pr??tica, TV, frigobar e banheiro privativo com chuveiro de ??gua quente. Alguns quartos disp??em de ar-condicionado. O Wi-Fi est?? dispon??vel por um custo adicional.
                                              Voc?? pode desfrutar do buffet de caf??-da-manh?? diariamente na ??rea de refei????es. O caf??-da-manh?? inclui grande variedade de frutas frescas, p??es, frios e uma sele????o de bebidas quentes e frias.</p>
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