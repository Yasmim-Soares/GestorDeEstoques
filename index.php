<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="stylesheet/dist/css/bootstrap.min.css">
    <title>Gestor de Estoque</title>
</head>
<body>
    <div class="container">
        <div class="min-vh-100 d-flex justify-content-center align-items-center card" style="width: 50%">
            <form id="formLogin" method="POST">
                <div class="mb-3" action="Login">
                    <label for="emailLogin" class="form-label">Email:</label>
                    <input class="form-control" id="emailLogin" type="email" placeholder="name@example.com">
                                
                    <label for="emailLogin" class="mb-3">Senha:</label>
                    <input type="password" id="senhaLogin" type="password" class="form-control">
                    <div id="mensagemSenha" class="form-text">
                        Senha deve ter ao máximo 8 caracteres, contendo letra e números e pelo menos um caracter especial.
                    </div>
                    
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>