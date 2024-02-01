<x-layout title="Editar">
    <form action="../atualizar/{{$dado->id}}" method="get">
        <label> Id: </label>
        <input type="number" id="id" name="id" value="{{$dado->id}}" required/><br><br>

        <label> Nome: </label>
        <input type="text" id="nome" name="nome" value="{{$dado->nome}}" required/><br><br>

        <label> Telefone: </label>
        <input type="text" id="telefone" name="telefone" value="{{$dado->telefone}}" required/><br><br>

        <button class="btn btn-primary" type="submit">Atualizar</button>
        <a class="btn btn-primary" href="../cadastrar">Voltar</a>
    </form>
</x-layout>