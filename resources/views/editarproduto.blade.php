@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">

        <form action="/produtos/{{$pro->id}}" method="POST">

            @csrf

            <div class="form-group">
                <label for="categoria">Nome do Produto</label>
                <input type="text" class="form-control" name="nome" value="{{$pro->nome}}"
                id="categoria" placeholder>

                <label for="categoria">Estoque</label>
                <input type="text" class="form-control" name="estoque" value="{{$pro->estoque}}"
                id="categoria" placeholder>

                <label for="categoria">Preço</label>
                <input type="text" class="form-control" name="preco" value="{{$pro->preco}}"
                id="categoria" placeholder>

                <label for="categoria">Categoria</label>

                  <select class="custom-select" name="categoria">
                    <option selected >{{$pro->categoria_nome}}</option>

                    @foreach($cats as $cat)
                    <option value="{{$cat->nome}}">{{$cat->nome}}</option>
                    @endforeach

                </select> 

            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/produtos" type="cancel" class="btn btn-danger btn-sm">Cancelar</a>
            
        </form>
    </div>
</div>
@endsection