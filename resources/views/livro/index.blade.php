@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome livro</td>
          <td>Nome Original</td>
          <td>Genero Livro</td>
          <td>Sinopse Livro</td>
          <td>Paginas Livro</td>
          <td>Ano Publicação</td>
          <td>Editora Livro</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livros)
        <tr>
            <td>{{$$livros->id}}</td>
            <td>{{$livros->nome_livro}}</td>
            <td>{{$livros->nome_original}}</td>
            <td>{{$livros->genero_livro}}</td>
            <td>{{$livros->sinopse_livro}}</td>
            <td>{{$livros->paginas_livro}}</td>
            <td>{{$livros->anopub_livro}}</td>
            <td>{{$livros->editora_livro}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
