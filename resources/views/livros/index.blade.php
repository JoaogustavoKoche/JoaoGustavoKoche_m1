@extends('../layouts/layout')

@section('content')

    <head>
        <title>Livros</title>
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
            color: #1a103c;
        }

        #editorasNav:hover {
            background-color: #dee2e6;
            border-radius: 10px;
            color: #1a103c;
        }



        #livrosNav {
            background-color: #d1d0d0;
            border-radius: 10px;
            color: #1a103c;
            border-color: #dee2e6;
            animation: fadeIn 1s;
        }

        #livrosNav:hover {
            background-color: #dee2e6;
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
                            <a class="nav-link" href="/editoras" id="editorasNav">Editoras</a>
                        </li>
                        <li class="navbar-brand">
                            <a class="nav-link" href="#" id="livrosNav">Livros</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Livros</h1>
        <a href="{{ route('livros.create') }}" class="btn btn-primary" id="botaoCriar">Adicionar Livro</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome do Livro</td>
                    <td>Nome Original</td>
                    <td>Gênero do Livro</td>
                    <td>Sinopse do Livro</td>
                    <td>Quantiade de Páginas</td>
                    <td>Data de Publicação</td>
                    <td>Editora do Livro</td>
                    <td colspan="2">Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td><a style="text-decoration: none;"
                                href="{{ route('livros.show', $livro->id) }}">{{ $livro->nome_livro }} </a></td>
                        <td>{{ $livro->nome_original }}</td>
                        <td>{{ $livro->genero_livro }}</td>
                        <td>{{ $livro->sinopse_livro }}</td>
                        <td>{{ $livro->paginas_livro }}</td>
                        <td>{{ $livro->anopub_livro }}</td>
                        <td>{{ $livro->editora_livro }}</td>
                        <td><a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('livros.destroy', $livro->id) }}" method="post">
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
