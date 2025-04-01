<?php
// Back-end
?>

<!-- Front End -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Locadora de Veículos</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link ícones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS Interno -->
    <style>
        .login-container{
            max-width: 400px;
            /* CENTRALIZAR */
            margin: 100px auto;
        }

        .password-toggle{
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

 </head>
 <body class="bg-light">
    <div class="login-container">

    <!-- Criação de Cards Bootstrap -->
        <div class="card">
            <!-- Título do card -->
            <div class="card-header">
                <h4 class="mb-1">Login</h4>
            </div>

            <!-- Corpo do card -->
            <div class="card-body">
                <form action="post" class="needs-validation" novalidate>
                    <!-- Input - hidden | não aparece -->
                    <!-- Ele busca informações no JSON para validação, o usuário não vê -->
                    <input type="hidden">

                    <div class="mb-3">
                        <label for="user" class="form-label">
                            Usuário:
                        </label>
                        <input type="text" name="username" class="form-control" required autocomplete="off" placeholder="Digite aqui...">
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">
                            Senha:
                        </label>
                        <input type="password" name="password" class="form-control" required placeholder="Digite aqui..." id="password">

                        <!-- !!!!!!!! FAZER OLHO FECHADO -->
                        <span class="password-toggle mt-3" onclick="togglePassword()"><i class="bi bi-eye"></i></span>
                    </div>
                    <button type="submit" class="btn btn-secondary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        function togglePassword(){
            let passwordInput = document.getElementById('password');
            passwordInput.type = (passwordInput.type === 'password') ? 'text' : 'password';
        }
    </script>
 </body>
 </html>