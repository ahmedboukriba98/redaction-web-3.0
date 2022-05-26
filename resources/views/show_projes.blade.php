@extends('redaction.template')
@section('contine')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet</title>
</head>
<body>
    

    <h1 class="text-darck">Liste des Projets :</h1><br>
    <table class="table table-dark table-hover">
        <thead class="thead-dark">
        <tr><th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col">date</th>
        </tr>
    </thead>
        @foreach($projets as $article)
        <tr>
            <td>{{$article->getid()}}</td>
            <td>{{$article->gettitre()}}</td>
            <td>{{$article->getprix()}}</td>
            <td>{{$article->getdescription()}}</td>
            <td>{{$article->getdate()}}</td>
        </tr>
        @endforeach
    </table>
  
@stop