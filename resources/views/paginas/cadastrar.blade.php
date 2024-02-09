
<x-layout title="">
    
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container p-3" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px; max-width: 800px;">
            <form action="/cadastrar/salvar" method="POST">
                @csrf <!-- Valida o Formulario -->
                <div class="row">
                    <div class="col" style="color: white"> 
                        <br><br><br>
                        Cadastre-se para acessar nosso sistema! <br>   
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, rerum saepe! Praesentium, quia? Mollitia ea laborum asperiores rem officiis corrupti, error quasi accusamus. Ab nam perferendis ad eius qui voluptas.
                    </div>
                    <div class="col" style="color: white">
                        <div class="mb-3" style="color: white">
                            <label for="exampleInputEmail1" class="form-label">Nome:</label >
                            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Informe seu Nome">
                        </div>
                        <div class="mb-3" style="color: white">
                            <label for="exampleInputEmail1" class="form-label">Endereço de e-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Informe seu Email">
                        </div>
                        <div class="mb-3" style="color: white">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button> Ou <a href="/">Voltar</a>
                        <p></p>  
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>