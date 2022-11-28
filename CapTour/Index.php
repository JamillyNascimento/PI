<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro & Login</title>
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">Por favor faça o login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Criar conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use seu e-mail para cadastro:</p>
                <form class="form" method="Post" action="./php/VerificaCadastro.php">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="Nome" >
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="Email" >
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="Senha" >
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Status" name="Status" >
                    </label>
                    
                    
                    <button class="btn btn-second">cadastro</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">hello, amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">e comece sua jornada conosco</p>
                <button id="signup" class="btn btn-primary">cadastro</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Login</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use sua conta de e-mail:</p>
                <form class="form" method="Post" action="./php/VerificaLogin.php">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="Email" >
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="Senha" >
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Status" name="Status" >
                    </label>
                
                    <button class="btn btn-second">entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>