<x-layout title="Editar">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container p-3" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px; max-width: 800px;">
            <form action="../atualizar/{{$dado->id}}" method="GET">
                @csrf <!-- Valida o Formulario -->
                <div class="row" style="color: white">
                    <div class="col" style="color: white"> 
                        Editar dados da Tarefa: {{$dado->nome}}<br>   
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, rerum saepe! Praesentium, quia? Mollitia ea laborum asperiores rem officiis corrupti, error quasi accusamus. Ab nam perferendis ad eius qui voluptas.
                    </div>
                    <div class="col" style="color: white">
                        <div class="mb-3"> 
                            <label> ID: </label>
                                <input type="number" id="id" name="id" value="{{$dado->id}}" class="form-control" disabled required/>
                        </div>
                        <div class="mb-3">
                            <label> Nome da Tarefa: </label>
                                <input type="text" id="nome" name="nome" value="{{$dado->nome}}" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label> Importância: </label>
                                    <select class="form-select" aria-label="Default select example" id="importancia" name="importancia" required>
                                            <option selected>{{$dado->importancia}}</option>
                                            <option value="Pouco Importante">Pouco Importante</option>
                                            <option value="Relativamente Importante">Relativamente Importante</option>
                                            <option value="Muito Importante">Muito Importante</option>
                                    </select>
                        </div>
                        <div class="mb-3">
                            <label> Descrição: </label>
                                <input type="text" id="descricao" name="descricao" class="form-control" rows="3" value="{{$dado->descricao}}" required/>
                        </div>
                        <div class="mb-3">
                            <label for="dataInicio" style="color: white">Data de Inicio:</label>
                                <input type="date" id="dataInicio" name="dataInicio" value="{{$dado->dataInicio}}" required/>
                        </div>
                        <div class="mb-3">
                        <label for="dataFinal" style="color: white">Data Final:</label>
                            <input type="date" id="dataFinal" name="dataFinal" value="{{$dado->dataFinal}}" required/>
                        </div>

                        <button class="btn btn-primary" type="submit">Atualizar</button>

                        <a class="btn btn-primary" href="../home">Voltar</a>           
                        <!-- Botão Excluir com modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Excluir
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="background-color: rgb(0, 0, 0, 0.452); border-radius: 12px; box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;">
            <div class="modal-content" >
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir a Tarefa: {{$dado->nome}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
                </div>
            </div>
        </div>
    </div>
    <!-- fim do div da modal -->
</x-layout>