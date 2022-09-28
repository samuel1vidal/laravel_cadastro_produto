@extends('layout.app', ["current" => "index"])

@section('body')
        
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produto</h5>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Quasi voluptatem hic tempora dolore asperiores odio natus quaerat aliquam, 
                             eveniet sequi repudiandae recusandae ab itaque aspernatur. Quisquam voluptatibus animi aspernatur culpa?
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Quasi voluptatem hic tempora dolore asperiores odio natus quaerat aliquam, 
                            eveniet sequi repudiandae recusandae ab itaque aspernatur. Quisquam voluptatibus animi aspernatur culpa?
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                    </div>
                </div>
        </div>
    </div>
</div>
    
@endsection