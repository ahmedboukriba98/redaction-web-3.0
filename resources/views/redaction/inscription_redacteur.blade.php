@extends('redaction.template')
@section('contine')

<div class="container">

        <form class="form-group" action=" " method="post"  id="contact_form">
          <div class="container py-5 h-70">
                <div class="card rounded-3">
                             
    <fieldset>
    
    <!-- Form Name -->
    <legend><center><h2><b class="text-primary">Registration Form</b></h2></center></legend><br>
    
    <!-- Text input-->
    <center>
    <div class="form-group">
  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="identifiant" placeholder="Identifiant" class="form-control"  type="text">
        </div>
      </div>
    </div>
     <!-- Text input-->
    
     <div class="form-group">
      
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="prenom" placeholder="Prénom" class="form-control"  type="text">
      </div>
    </div>
  </div>
   <!-- Text input-->
    
   <div class="form-group">
      
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nom" placeholder="Nom " class="form-control"  type="text">
    </div>
  </div>
</div>
 <!-- Text input-->
    
 <div class="form-group">
      
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="age" placeholder="Age" class="form-control"  type="text">
  </div>
</div>
</div>
    

    <!-- Text input-->
    
    <div class="form-group">
      
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="adresse" placeholder="Adresse" class="form-control"  type="text">
      </div>
    </div>
  </div>
    <!-- Text input-->
    
    <div class="form-group">
      
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input name="profession" placeholder="Profession" class="form-control"  type="text">
      </div>
    </div>
  </div>
  
      
    <!-- Text input-->
    
    <div class="form-group">
      
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="nb_compet" placeholder="Numéro de compte bancaire" class="form-control"  type="text">
        </div>
      </div>
    </div>
       <!-- Text input-->
       <div class="form-group">
       
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="login" placeholder="Login" class="form-control"  type="text">
        </div>
      </div>
    </div> 
    <!-- Text input-->
    
    <div class="form-group">
     
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="user_password" placeholder="Password" class="form-control"  type="password">
        </div>
      </div>
    </div>
    

    
   <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    </div>
        </div><!-- /.container -->   

</body>



   @stop