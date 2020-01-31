@extends('property.master')

@section('content')

<div class="container my-3">

<h1>Formulário de Cadastro:: Imóveis</h1>

<form action="<?= url('/imoveis/store'); ?>" method="POST">

    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" placeholder="Titulo do Imóvel"  class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea  id="description" name="description" cols="30" rows="10"  class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="rental_price">Preço para Locação</label>
        <input type="text" id="rental_price" name="rental_price" placeholder="Preço para locação do imóvel" class="form-control">
    </div>

    <div class="form-group">
        <label for="sale_price">Preço de Venda</label>
        <input type="text" id="sale_price" name="sale_price" placeholder="Preço para venda do imóvel" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Cadastro Imóvel</button>

</form>
</div>
@endsection