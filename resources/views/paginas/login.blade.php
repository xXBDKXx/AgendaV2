<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body style="background-color: rgb(144, 108, 245)">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container p-3" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;"> 
            <div class="row">
                <div class="col" style="color: white"> 
                    <br>
                    Bem vindo!! <br>   
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, rerum saepe! Praesentium, quia? Mollitia ea laborum asperiores rem officiis corrupti, error quasi accusamus. Ab nam perferendis ad eius qui voluptas.
                </div>
                <div class="col" style="color: white">
                    <form action="validar" method="get">
                    <div class="mb-3" style="color: white">
                            <label for="exampleInputEmail1" class="form-label">Nome:</label >
                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Informe seu Nome">
                        </div>
                        <div class="mb-3" style="color: white">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button> Ou <a href="cadastrar">Cadastrar-se</a>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>