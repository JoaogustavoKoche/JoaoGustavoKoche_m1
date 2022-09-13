@extends('../layouts/layout')
@section('content')

    <head>
        <title>Visualizar Editora</title>
    </head>
    <style>
        .uper {
            margin-top: 40px;
        }

        #botao {
            margin-top: 20px;
        }

        #tituloEditora {
            margin-top: 40px;
        }
    </style>
    <h1 id="tituloEditora">{{ $editora->nome_editora }}</h1>
    <div class="card uper">
        <div class="card-header">
            Dados da Editora
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('editoras.update', $editora->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nome_editora">Nome da editora:</label>
                    <input type="text" readonly="readonly" class="form-control" name="nome_editora"
                        value="{{ $editora->nome_editora }}" />
                </div>
                <div class="form-group">
                    <label for="estado_editora">Estado</label>
                    <input type="textarea" readonly="readonly" class="form-control" name="estado_editora"
                        value="{{ $editora->estado_editora }}" />
                </div>
            </form>
            <a href="{{ route('editoras.index') }}" class="btn btn-primary" id="botao">Voltar</a>
        </div>
    </div>
@endsection
