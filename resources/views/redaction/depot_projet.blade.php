@extends('redaction.template')
@section('contine')


    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <div class="text-primary">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2" > Ajouter un projet :</h3>

<form class="form-group"  action="{{ url ('show_projets') }}"  method="POST" >
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Id:</strong>
            <input type="text" name="id" class="form-control" placeholder="id">
            </div>
        </div>
    
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Titre:</strong>
            <input type="text" name="titre" class="form-control" placeholder="le titre">
            </div>
        </div>
        

      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Prix:</strong>
            <input type="text" name="prix" class="form-control" placeholder="le prix">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" name="description" id="description" placeholder="description...."  rows="3"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Délai de livrsion:</strong>
            <input type="date" name="delai_liv" class="form-control" placeholder="délai de livraison">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">submit
            </button>
        
        </div>

    </div> 
</form>

@stop

