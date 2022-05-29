@extends('Backend.Layouts.panel')
@section('title','Adicionar Serviço')
@section('content')

<div class="row">
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Adicionar Serviço</h3>
          </div>
          <form method="post" action="{{route('backend.service.store')}}">
           @csrf
            <div class="card-body">
              <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome*</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Desenvolvimento de loja virtual" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{old('description')}}" placeholder="Criação de loja virtual para pequenas empresas">
                    </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">VALOR* <small>(Não use R$)</small></label>
                    <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}" placeholder="199,75" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fantasy_name">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="1">Ativo</option>                
                            <option value="0">Desativado</option>
                        </select>               
                    </div>
              </div>
              <button type="submit" class="btn btn-primary">Adicionar Serviço</button>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
