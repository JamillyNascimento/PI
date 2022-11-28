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
        <link rel = "stylesheet" href = "./font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "./css/normalize.css">
        <!-- personalizados css -->
        <link rel = "stylesheet" href = "./css/utility.css">
        <link rel = "stylesheet" href = "./css/style.css">
        <link rel = "stylesheet" href = "./css/responsive.css">
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
                    <h1>Pontos Turísticos</h1>
                    <p> Aqui você confere tudo sobre os melhores destinos no Lago de Furnas: cachoeiras, passeios náuticos, esportes de aventura e muito mais.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- pontos -->
        <section id = "blog" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">Conheça alguns pontos turísticos da região</h2>
                    <h3 class = "lg-title">Principais</h3>
                </div>

                <div class = "blog-row">
                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto1.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/bi62WqWrG3yVqJiB6">Cachoeira Cascatinha</a>
                            <p class = "text">A propriedade é particular, por isso é cobrada uma taxa para passar o dia (por volta de R$25,00 por pessoa). Para quem gosta de se aventurar, tem a possibilidade de descer pelas pedras e encontrar outras quedas d’Água. Comum nas cachoeiras, algumas pedras são extremamente lisas e fáceis de escorregar, cuidado redobrado na hora de passar por elas nunca é demais. Quando o tempo forma para chuva é recomendado sair da água, pois a forte tromba d’água pode causar acidentes, deixando algumas pessoas ilhadas. Em dias de verão é um ótimo espaço para tomar sol e aproveitar tudo aquilo que a natureza oferece com calor e diversão.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto2.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/F9fuGJRWXAuuwXwZ7">Cachoeira Casca D'Anta</a>
                            <p class = "text">A cachoeira Casca D’Anta é com certeza a principal atração e cartão-postal da Serra da Canastra. Possui uma sequência de cinco quedas das águas do rio São Francisco, sendo que a maior delas tem mais ou menos 188 metros de altura. Pode ser acessada por duas estradas: por cima, pela portaria 1, a 37km de São Roque de Minas, seguindo pela estrada principal e entrando à esquerda na bifurcação a 28km. Dispõe de quiosque de palha para descanso e banheiros. Os melhores poços para banho da região e a primeira queda da Casca D’Anta. Depois da primeira queda existe um grande poço e o rio segue por uma garganta (local perigoso) para depois despencar 188m. na queda principal.</p>
                        </div>
                    </div>

                   <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto3.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/yw5ha35KMamfyAKZ6">Cachoeira do Filó</a>
                            <p class = "text">A Cachoeira do Filó costuma fazer parte de diversas rotas de passeio, exatamente por ter acesso muito fácil e estar a apenas 3 km do Mirante dos Cânions de Capitólio. Vale dizer que o valor do ingresso (R$ 10) não costuma estar incluído no passeio com agência.
                                              A Cachoeira do Filó é uma das mais fáceis de serem visitadas nos arredores de Capitólio e por isso mesmo costuma ser uma das mais cheias. Localizada à beira da MG-050 e praticamente sem trilha a ser percorrida, ela é o destino ideal para quem não quer esforço nenhum e deseja apenas um delicioso banho sob uma boa queda d’água. Bastará descer poucos metros caminhando na trilha de terra (menos de cinco minutos) para já estar de frente para a cachoeira.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto4.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/SeKbbuSpi7hoC2837">Cachoeiras Retiro Viking</a>
                            <p class = "text">Vale dizer que o Retiro Viking é formado pelas quedas d’água do mesmo rio que passa pelos complexos Pé de Serra e a Paraíso Perdido, sendo que o Retiro Viking está mais acima. Para percorrer todas as atrações com calma e ainda com sol a pico, o ideal é fazer um passeio de dia inteiro. Assim você poderá curtir sem pressa e tomar diversos banhos em todas as cachoeiras. Esse é um dos melhores passeios de Capitólio e é altamente recomendado para quem quer fugir do grande fluxo de turistas, especialmente em feriados.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto5.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/6GjA6az6fL6TD1bC7">Cachoeira Paraíso Perdido</a>
                            <p class = "text">A taxa cobrada por pessoa é de R$40,00 e não é aceito cartão de crédito.
                                              Paraíso Perdido é um verdadeiro patrimônio da natureza de exuberante beleza cênica, localizado em um vale cortado pelo ribeirão Quebra Anzol, com canyons, 18 piscinas naturais e 8 quedas de águas límpidas e cristalinas, que correm sobre pedras de quartzito predominantemente branco, numa região de cerrado próxima e com as mesmas características da Serra da Canastra.
                                              Algumas atividades interessantes para serem praticadas no local são: fotografia, cannyoning, trekking, hikking, trilhas Off-Road.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto6.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/YKHcgPKuxtEKSpAS9">Usina Hidrelétrica de Furnas</a>
                            <p class = "text">A usina hidroelétrica de Furnas, localizada entre os municípios de São José da Barra e São João Batista do Glória, possui um dos maiores reservatórios do Brasil com 1.440 km² e 3.500 km de perímetro, banha 34 municípios de Minas Gerais, tornando-os belos destinos turísticos.
                                              O município de Furnas é aberto, turistas fazem essa rota para chegar em alguns destinos contando com a bela vista do reservatório. Há alguns mirantes no caminho, onde os viajantes podem tirar fotos e observar, a distância, toda a construção da hidroelétrica.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto7.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/M146BKpgXLyz3nYFA">Escarpas do Lago</a>
                            <p class = "text">Escarpas do Lago é um elegante bairro de Capitólio onde o que reina são casas e mansões de luxo. Há quem chame de balneário e também de condomínio, mas o lugar é mesmo um bairro e com acesso livre a todos os visitantes. Localizado à beira do Lago de Furnas, Escarpas do Lago tem vida própria em relação a Capitólio. O bairro está distante 6 km do centro da cidade e oferece opções de hospedagem, comércio, restaurantes, bares e, o que é mais interessante, acesso direto ao Lago de Furnas, o que facilita bastante na hora dos passeios de lancha. A desvantagem do Escarpas do Lago é estar mais distante da rodovia MG-050, o que em dias de grande movimento pode custar alguns minutos no trânsito para chegar à saída da cidade e pegar a rota para as cachoeiras.</p>
                        </div>
                    </div>


                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto8.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/B3VEmY8VfVjHiLLh7">Lago da Represa de Furnas</a>
                            <p class = "text">O Lago da Represa de Furnas ganhou fama de “mar de minas” e a grandiosidade de suas águas, com 1440 km² de área, faz mesmo dele um lugar espetacular. Maior atração da região de Capitólio, o lago é cercado por uma linda paisagem formada por cachoeiras e cânions que dão ainda mais beleza ao lugar. Navegar pelas águas do Lago de Furnas é o ponto de partida de quase todo turista que visita Capitólio e vale cada minuto do passeio. 
                                              Para conhecer o Lago de Furnas, vale contratar um passeio de lancha ou chalana. Os tours — com saída da Ponte do Rio Turvo ou do bairro Escarpas do Lago — no geral são de quatro ou oito horas. Quanto mais tempo, mais você poderá conhecer e aproveitar. Vale também alugar uma embarcação particular para fazer um roteiro personalizado e curtir do jeitinho que você desejar. Os preços dos passeios variam de acordo com o tempo de duração do tour e o tipo de embarcação escolhido e têm valores entre R$ 80 e R$ 200.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/ponto9.jpg" alt = "blog">
                        </div>
                        <div class = "blog-item-bottom">
                            <a href = "https://goo.gl/maps/NXmXAU4rFyJf2ByU9">Cachoeirinha da Ilha</a>
                            <p class = "text">A Cachoeirinha da Ilha tem deliciosa queda d’água que corre direto para o lago da Represa de Furnas. O lugar, além de ponto turístico, é também ponto de balada em Capitólio. Não estamos, no entanto, falando de uma balada comum. Por lá, a festa acontece em dezenas de barcos que, ancorados junto ao bar flutuante Porto Escarpas, fazem um grande estardalhaço. Em dias tranquilos, o lugar é um ótimo ponto para mergulho e para relaxar nas águas que correm pelas pedras. Vale até pegar uma prancha de SUP e dar algumas boas remadas na área. Para quem quer mesmo é um dia de festa, o ideal é alugar uma lancha privativa, reunir os amigos, e aproveitar até o pôr do sol.</p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- fim dos pontos -->

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