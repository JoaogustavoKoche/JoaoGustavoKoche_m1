@extends('../layouts/layout')

@section('content')

    <head>
        <title>Editoras</title>
    </head>
    <style>
        .uper {
            margin-top: 40px;
        }

        #botaoCriar {
            margin-bottom: 10px;
        }

        #nave {
            margin-left: -15px
        }

        #autoresNav {
            color: #1a103c;
        }

        #autoresNav:hover {
            background-color: #dee2e6;
            border-radius: 10px;
            color: #1a103c;
        }

        #editorasNav {
            background-color: #d1d0d0;
            border-radius: 10px;
            color: #1a103c;
            border-color: #dee2e6;
            animation: fadeIn 1s;
        }

        #editorasNav:hover {
            background-color: #dee2e6;
            color: #1a103c;
        }

        #livrosNav {
            color: #1a103c;
        }

        #livrosNav:hover {
            background-color: #dee2e6;
            border-radius: 10px;
            color: #1a103c;
        }

        #homeNav {
            color: #1a103c;
        }

        #homeNav:hover {
            background-color: #dee2e6;
            border-radius: 10px;
        }
    </style>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <nav class="navbar navbar-expand-lg bg-light" id="nave">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="navbar-brand">
                            <a class="nav-link active" aria-current="page" href="/" id="homeNav">Home</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-link" href="/autores" id="autoresNav">Autores</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-link" href="#" id="editorasNav">Editoras</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-link" href="/livros" id="livrosNav">Livros</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Editoras</h1>
        <a href="{{ route('editoras.create') }}" class="btn btn-primary" id="botaoCriar">Adicionar Editora</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Estado</td>
                    <td colspan="2">Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($editoras as $editora)
                    <tr>
                        <td>{{ $editora->id }}</td>
                        <td><a style="text-decoration: none;"
                                href="{{ route('editoras.show', $editora->id) }}">{{ $editora->nome_editora }} </a></td>
                        <td>{{ $editora->estado_editora }}</td>
                        <td><a href="{{ route('editoras.edit', $editora->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('editoras.destroy', $editora->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>




        <div>
        @endsection
