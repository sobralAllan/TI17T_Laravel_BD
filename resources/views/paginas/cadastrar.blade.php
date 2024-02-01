<x-layout title="Formulário Cadastro">
    <form class="container" action="/cadastrar/salvar" method="POST">
        @csrf <!-- Valida o formulário -->
        <br>
        <label> Nome: </label>
        <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/><br><br>

        <label> Telefone: </label>
        <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/><br><br>

        <button  class="btn btn-primary" type="submit"> Cadastrar </button>
        <a class="btn btn-primary" href="atualizar">Atualizar</a>
        <a class="btn btn-primary" href="consultar">Consultar</a>
    </form>
</x-layout>