 @extends('../layouts/layout')
 @section('content')

     <head>
         <title>Visualizar Livro</title>
     </head>
     <style>
         .uper {
             margin-top: 40px;
         }

         #botao {
             margin-top: 20px;
         }

         #tituloLivro {
             margin-top: 40px;
         }
     </style>
     <h1 id="tituloLivro">{{ $livro->nome_livro }}</h1>
     <div class="card uper">
         {{-- ['nome_livro', 'nome_original', 'genero_livro', 'sinopse_livro', 'paginas_livro', 'anopub_livro', 'editora_livro'] --}}
         <div class="card-header">
             Dados do Livro
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
             <form method="post" action="{{ route('livros.update', $livro->id) }}">
                 <div class="form-group">
                     @csrf
                     @method('PATCH')
                     <label for="nome_livro">Nome do Livro:</label>
                     <input type="text" readonly="readonly" class="form-control" name="nome_livro"
                         value="{{ $livro->nome_livro }}" />
                 </div>
                 <div class="form-group">
                     <label for="estado_editora">Nome Original</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="nome_original"
                         value="{{ $livro->nome_original }}" />
                 </div>
                 <div class="form-group">
                     <label for="genero_livro">Gênero do Livro</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="genero_livro"
                         value="{{ $livro->genero_livro }}" />
                 </div>
                 <div class="form-group">
                     <label for="sinopse_livro">Sinopse do Livro</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="sinopse_livro"
                         value="{{ $livro->sinopse_livro }}" />
                 </div>
                 <div class="form-group">
                     <label for="paginas_livro">Quantidade de Páginas</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="paginas_livro"
                         value="{{ $livro->paginas_livro }}" />
                 </div>
                 <div class="form-group">
                     <label for="anopub_livro">Data de Publicação</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="anopub_livro"
                         value="{{ $livro->anopub_livro }}" />
                 </div>
                 <div class="form-group">
                     <label for="editora_livro">Editora do Livro</label>
                     <input type="textarea" readonly="readonly" class="form-control" name="editora_livro"
                         value="{{ $livro->editora_livro }}" />
                 </div>
             </form>
             <a href="{{ route('livros.index') }}" class="btn btn-primary" id="botao">Voltar</a>
         </div>
     </div>
 @endsection
