<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(144, 108, 245)"> 
<div class="position-absolute top-50 start-50 translate-middle">
        <div class="container p-3" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px; max-width: 800px;">
            <form action="/home/agendar" method="POST">
                @csrf <!-- Valida o Formulario -->
                <div class="row"> 
                    <div class="col" style="color: white"> 
                        <br>
                        Aqui voçê pode criar ou consultar tarefas existentes. <br><br>   
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore delectus excepturi eos autem, numquam consequuntur, dolorem nihil quo maxime illum voluptas quisquam minima ipsum eum. Maiores voluptas deserunt ducimus labore.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, rerum saepe! Praesentium, quia? Mollitia ea laborum asperiores rem officiis corrupti, error quasi accusamus. Ab nam perferendis ad eius qui voluptas.
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Informe o Nome da Tarefa">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" id="importancia" name="importancia">
                                <option selected>Insira o Grau de Importância da Tarefa</option>
                                <option value="Pouco Importante">Pouco Importante</option>
                                <option value="Relativamente Importante">Relativamente Importante</option>
                                <option value="Muito Importante">Muito Importante</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Descreva a Tarefa"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="dataInicio" style="color: white">Data de Inicio:</label>
                            <input type="date" id="dataInicio" name="dataInicio">
                        </div>
                        <div class="mb-3">
                            <label for="dataFinal" style="color: white">Data Final:</label>
                            <input type="date" id="dataFinal" name="dataFinal">
                        </div>
                            <button type="submit" class="btn btn-primary">Registrar Tarefa</button> Ou <a href="consultar">Consultar Tarefa</a>
                        <p></p>  
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>