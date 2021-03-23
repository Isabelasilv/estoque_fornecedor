@extends('layouts.app')
@section('content')

<div class="container">
<form id="frmproduto" name="frmproduto" action="{{ route('produto.store') }}" method="POST">
@csrf
 <div class="form-group">
 <label for="descricao">Descrição</label>
 <input type="descricao" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição">
 </div>
 
 <div class="form-group">
 <label for="complemento">Complemento</label>
 <input type="complemento" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento">
 </div>
 
 <div class="form-group">
 <label for="quantidade">Quantidade</label>
 <input type="quantidade" class="form-control" id="quantidade" name="quantidade" placeholder="Informe o quantidade">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>

</div>
@endsection