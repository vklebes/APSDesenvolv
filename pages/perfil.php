<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APS - Login</title>
    
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
        <!-- CSS -->
        <link rel="stylesheet" href="../css/main.css"/>
    </head>
<body>
    <div class="wrap wrap-perfil">
        <div class="menu">
            <div class="menu-mask"></div>
            <div>
                <div class="logo" style="cursor:pointer;" onclick="window.location.href='home.html'">
                    <svg width="63" height="46" viewBox="0 0 63 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="31.2146" width="20.9098" height="20.9098" transform="rotate(45 31.2146 0)" fill="white"/>
                        <rect x="47.6437" y="16.4291" width="20.9098" height="20.9098" transform="rotate(45 47.6437 16.4291)" fill="white"/>
                        <rect x="14.7854" y="16.4291" width="20.9098" height="20.9098" transform="rotate(45 14.7854 16.4291)" fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="avatar-box" onclick="window.location.href='perfil.html'">
                <div class="avatar-icon"></div>
            </div>
        </div>
        <div class="bg-home">
            <img src="../img/background_2.jpeg"/>
        </div>
        <div class="perfil-content">
            <div class="home-top-content">
                <div>
                    <h2>Perfil</h2>
                </div>
            </div>
            <div class="perfil-form">
                <div class="avatar-area">
                    <div class="avatar-box avatar-giant" onclick="window.location.href='perfil.html'">
                        <div class="avatar-icon"></div>
                    </div>
                    <h1>Victor Klebes</h1>
                </div>
                <div>
                    <div class="input-box">
                        <input type="text" class="custom-input" value="Victor"/>
                    </div>
                    <div class="input-box">
                        <input type="text" class="custom-input" value="Klebes"/>
                    </div>
                    <div class="input-box fullwidth">
                        <input type="text" class="custom-input" value="vklebes@hotmail.com"/>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="perfil-bottom">
                    <button type="button" class="btn btn-default" onclick="window.location.href='home.html'">Descartar</button>
                    <button type="button" class="btn btn-primary" onclick="salvarAlteracoes();">Salvar alterações</button>
                </div>
                <a href="index.html">Sair</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/funcoes.js"></script>
</body>
</html>