@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar dados do Serviço
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
      <form method="post" action="{{ route('servico.update', $editora->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="service_type">Tipo do Serviço:</label>
              <input type="text" class="form-control" name="service_type" value="{{ $editora->nome_editora }}"/>
          </div>
          <div class="form-group">
            <label for="service_description">Descrição do Servico:</label>
            <input type="textarea" class="form-control" name="service_description" value="{{ $editora->estado_editora }}"/>
        </div>
          <button type="submit" class="btn btn-primary">Atualizar Dados</button>
      </form>
  </div>
</div>
@endsection