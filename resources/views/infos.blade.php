@extends('redaction.template')
@section('contine')
<section class="h-100 h-custom" style="background-color: #fcfcfc;">
<h1 class="text-darck">Les Projets depose : </h1>
<table class="table table-striped table-dark">
    <thead class="thead-dark">
    <tr><th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Prix</th>
        <th scope="col">Description</th>
        <th scope="col">date</th>
    </tr>
</thead>

    <tr>
        <td>{{$inputs['id']}}</td>
        <td>{{$inputs['titre']}}</td>
        <td>{{$inputs['prix']}}</td>
        <td>{{$inputs['description']}}</td>
        <td>{{$inputs['delai_liv']}}</td>
    </tr>
 
</table>
@stop