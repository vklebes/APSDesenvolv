<?php
//include('checkauth.php');
?>
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
        <link rel="stylesheet" href="./css/main.css"/>
    </head>
<body>
    <div class="wrap wrap-home">
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
                <div class="search-box">
                    <svg width="24" height="24" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 28.5C23.1274 28.5 28.5 23.1274 28.5 16.5C28.5 9.87258 23.1274 4.5 16.5 4.5C9.87258 4.5 4.5 9.87258 4.5 16.5C4.5 23.1274 9.87258 28.5 16.5 28.5Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31.5 31.5L24.975 24.975" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                    <input type="text" class="input-transparent" placeholder="Procurar"/>
                    <a href="sobre.php">Quem somos</a>
                </div>
            </div>
            <div class="avatar-box" onclick="window.location.href='perfil.html'">
                <div class="avatar-icon"></div>
            </div>
        </div>
        <div class="bg-home">
            <img src="./img/background_2.jpeg" alt="Plano de fundo"/>
        </div>
        <div class="home-content">
            <div class="home-top-content">
                <div>
                    <h2>🔥 Trending</h2>
                    <div class="filter-tab">
                        <span>Filtro</span>
                        <div class="drop-down-filter">
                            <svg width="28" height="28" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.25 13.875L18.5 23.125L27.75 13.875" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-open-modal" style="width: 80px; height: 80px; border-radius: 50%;">
                    <svg width="38" height="38" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.8533 26.52C46.2926 24.0807 47.663 20.7722 47.663 17.3225C47.663 13.8728 46.2926 10.5643 43.8533 8.125C41.4139 5.68567 38.1055 4.31527 34.6558 4.31527C31.206 4.31527 27.8976 5.68567 25.4583 8.125L10.8333 22.75V41.1667H29.2499L43.8533 26.52Z" stroke="white" stroke-width="4.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M34.6666 17.3333L4.33325 47.6667" stroke="white" stroke-width="4.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M37.9167 32.5H19.5" stroke="white" stroke-width="4.33333" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="home-mid-content">
                <!-- Append -->
            </div>
        </div>

        <!-- Modal -->
        <div class="mask-wrap">
            <div class="modal-new-content">
                <div class="modal-new-content-top">
                    <h2>Novo comentário</h2>
                    <button class="btn-close" type="button">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-new-content-message">
                    <div class="input-box fullwidth">
                        <input type="text" class="custom-input" placeholder="Insira o nome do anime..." value=""/>
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    </div>
                    <div class="input-box fullwidth">
                        <textarea class="custom-input" cols="30" rows="13" placeholder="Digite seu comentário..." style="resize: none; font-family: 'Nunito Sans', sans-serif;"></textarea>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary">Postar comentário</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/funcoes.js"></script>
</body>
</html>