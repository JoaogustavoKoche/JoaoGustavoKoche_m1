@extends('layouts.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar novo Serviço
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
      <form method="post" action="{{ route('autors.store') }}">
        @csrf  
        <div class="form-group">
              <label for="tipo">Tipo do Serviço:</label>
              <input type="text" class="form-control" name="nome_autor"/>
          </div>
          <div class="form-group">
            <label for="descricao">Descrição do Serviço:</label>
            <input type="textarea" class="form-control" name="nacao_autor"/>
        </div>
          <button type="submit" class="btn btn-primary">Adicionar Serviço</button>
      </form>
  </div>
</div>
@endsection