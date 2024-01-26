<x-layout title="Formulário Cadastro">
    <div class="container">
        @foreach($dados as $dado)
            <li class="list-group-item">{{$dado->nome}}</li>
            <li class="list-group-item">{{$dado->telefone}}</li>
            <br><br>
        @endforeach
    </div>

    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- Valida o formulário -->
        <br>
        <label> Nome: </label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/><br><br>

        <label> Telefone: </label>
        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/><br><br>

        <button type="submit"> Enviar </button>
    </form>
</x-layout>