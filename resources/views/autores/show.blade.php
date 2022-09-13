@extends('../layouts/layout')
@section('content')

    <head>
        <title>Visualizar Autor</title>
    </head>
    <style>
        .uper {
            margin-top: 40px;
        }

        #botao {
            margin-top: 20px;
        }

        #tituloAutor {
            margin-top: 40px;
        }
    </style>
    <h1 id="tituloAutor">{{ $autor->nome_autor }}</h1>
    <div class="card uper">
        <div class="card-header">
            Dados do Autor
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
            <form method="post" action="{{ route('autores.update', $autor->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nome_autor">Nome do autor:</label>
                    <input type="text" readonly="readonly" class="form-control" name="nome_autor"
                        value="{{ $autor->nome_autor }}" />
                </div>
                <div class="form-group">
                    <label for="nacao_autor">Nacionalidade</label>
                    <input type="textarea" readonly="readonly" class="form-control" name="nacao_autor"
                        value="{{ $autor->nacao_autor }}" />
                </div>
            </form>
            <a href="{{ route('autores.index') }}" class="btn btn-primary" id="botao">Voltar</a>
        </div>
    </div>
@endsection
