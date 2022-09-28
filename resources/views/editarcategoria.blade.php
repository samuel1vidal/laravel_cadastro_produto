@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{$cat->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="categoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="categoria" value="{{$cat->nome}}"
                id="categoria" placeholder>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/categorias" type="cancel" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection