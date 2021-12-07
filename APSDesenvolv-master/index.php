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
    <div class="wrap wrap-login">
        <div class="menu">
            <div class="logo">
                <svg width="63" height="46" viewBox="0 0 63 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="31.2146" width="20.9098" height="20.9098" transform="rotate(45 31.2146 0)" fill="white"/>
                    <rect x="47.6437" y="16.4291" width="20.9098" height="20.9098" transform="rotate(45 47.6437 16.4291)" fill="white"/>
                    <rect x="14.7854" y="16.4291" width="20.9098" height="20.9098" transform="rotate(45 14.7854 16.4291)" fill="white"/>
                </svg>
            </div>
        </div>
        
        <div class="login-box">
            <h4>COMECE AGORA</h4>
            <div class="create-wrap">
                <h1>CRIE SUA CONTA</h1>
                <p>Já possui uma conta? <span onclick="toggleLogin();">Faça seu login</span></p>
            <form action="auth/register.php" method="POST">
                <div class="login-box-form">
                    <div class="input-box">
                        <input name="firstname" type="text" class="custom-input"/>
                        <label>Nome</label>
                    </div>
                    <div class="input-box">
                        <input name="lastname" type="text" class="custom-input"/>
                        <label>Sobrenome</label>
                    </div>
                    <div class="input-box fullwidth">
                        <input name="email" type="text" class="custom-input" id="txtCriarEmail"/>
                        <label>Email</label>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="input-box fullwidth">
                        <input name="password" type="password" class="custom-input"/>
                        <label>Senha</label>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
                    <div class="input-box fullwidth">
                        <input type="password" class="custom-input"/>
                        <label>Confirme sua senha</label>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" title="Criar conta">Criar conta</button>
            </form>
        </div>
        
        
            <div class="login-wrap hidden" style="opacity: 0;">
                <h1>FAÇA SEU LOGIN</h1>
                <p>Ainda nao possui uma conta? <span onclick="toggleLogin();">Crie sua conta</span></p>
                <form action="auth/login.php" method="POST">
                <div class="login-box-form">
                    <div class="input-box fullwidth">
                        <input name="email" type="text" class="custom-input"/>
                        <label>Email</label>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="input-box fullwidth">
                        <input name="password" type="password" class="custom-input"/>
                        <label>Senha</label>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" title="Fazer login">Fazer login</button>
                </form>
            </div>

        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/funcoes.js"></script>
</body>
</html>