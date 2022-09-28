@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">

        <form action="/produtos" method="POST">

            @csrf

            <div class="form-group">
    
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" name="nome"
                id="nome" placeholder="Nome">

                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque"
                id="estoque" placeholder="Estoque">

                <label for="preco">Preço</label>
                <input type="text" class="form-control" name="preco"
                id="preco" placeholder="Preço">

                <label for="categoria">Categoria</label>
                
                <select class="custom-select" name="categoria">
                    
                    <option selected>Categoria</option>

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