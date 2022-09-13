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
          <td>Nome Editora</td>
          <td>Estado Editora</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($editora as $editora)
        <tr>
            <td>{{$editora->id}}</td>
            <td>{{$editora->nome_editora}}</td>
            <td>{{$editora->estado_editora}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
