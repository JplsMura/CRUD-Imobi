@extends('property.master')

@section('content')

<div class="container my-3">

<h1>Formulário de Edição:: Imóveis</h1>

<?php
$property = $property[0];
?>

<form action="<?= url('/imoveis/update', ['id' => $property->id]); ?>" method="POST">

    <?= csrf_field(); ?>

    <?= method_field('PUT'); ?>

    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title" placeholder="Titulo do Imóvel" value="<?= $property->title; ?>"  class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea  id="description" name="description" cols="30" rows="10" placeholder="Descrição do Imóvel" class="form-control"><?= $property->description; ?></textarea>
    </div>
    
    <div class="form-group">
        <label for="rental_price">Preço para Locação</label>
        <input type="text" id="rental_price" name="rental_price" placeholder="Preço para locação do imóvel" value="<?= $property->rental_price; ?>"  class="form-control">
    </div>
    
    <div class="form-group">
        <label for="sale_price">Preço de Venda</label>
        <input type="text" id="sale_price" name="sale_price" placeholder="Preço para venda do imóvel" value="<?= $property->sale_price; ?>" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Editar Imóvel</button>

</form>

</div>
@endsection