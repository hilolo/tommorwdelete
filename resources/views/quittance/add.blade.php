	@extends('layouts.base')

@section('content')


	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Proprietaire</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Ajouté proprietaire</li>
						</ol>
					</nav>
				</div>
			</div>
		
		</div>
	</div>

<section class="content">
    
    <div class="row">
      
      <div class="col-12">
      <!-- SELECT2 EXAMPLE -->
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Formulaire d'ajout nouveau proprietaire</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>



      <form class="form" method="POST" action="/insertproprietaire" enctype="multipart/form-data" >
        {{ csrf_field() }}
          <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Type de proprietaire</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-5">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type" id="selectada">
                <option value="1">Particulier</option>
                <option  value="2">Société / Autre</option>
                </select>
              </div>
              </div>
            
            </div>

          
         
     <div id="particulier"  >

            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Informations personnelles</h4>
            <hr class="my-15">

              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label>Civilité</label>
                <select class="form-control" name="civilite">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
                </select>
              </div>
            </div>

               <div class="col-md-6">
                <div class="form-group">

                <label>Cin 
                </label>
                <input type="text"  name="cin" class="form-control" placeholder="CIN">
                </div>


                


                 </div>




          </div>


            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Prenom 
                </label>
                <input type="text" name="prenom" id="prenom"   class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Nom 
                </label>
                <input type="text" name="nom" id="nom"  class="form-control" >
                </div>
              </div>

            </div>
             </div>


              <div id="societe" >
                <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information société</h4>
                <hr class="my-15">

                <div class="form-group">

                <label>SOCIÉTÉ *
                </label>
                <input type="text" name="societe" id="societeqqa" class="form-control" placeholder="Company Nom">
                </div>

                <div class="row">
                <div class="col-md-6">

                <div class="form-group">

                <label>ICE
                </label>
                <input type="text" name="ice" class="form-control" placeholder="Numero ICE">
                </div>
                </div>
                <div class="col-md-6">

                <div class="form-group">

                <label>PROFESSION
                </label>
                <input type="text" name="profession" class="form-control" placeholder="Ex : Dentiste">
                </div>
                </div>

                </div>
                </div>



            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information de contact</h4>
            <hr class="my-15">
                <div class="row">
              <div class="col-md-6">

                <div class="form-group">

                <label>Email
                </label>
                <input type="text" name="email" class="form-control" >
                </div>
                </div>

                </div>

            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Telephone 
                </label>
                <input type="text" name="tele" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Fax 
                </label>
                <input type="text" name="fax" class="form-control" >
                </div>
              </div>

            </div>

              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Adresse </h4>
            <hr class="my-15">

                    <div class="row">
              <div class="col-md-12">
              <div class="form-group">

                <label>Adresse 
                </label>
                <input type="text" name="adrs" class="form-control" >
                </div>
              </div>
           
            </div>

                    <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Ville 
                </label>
                <input type="text" name="ville" class="form-control" value="Tanger" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Pays 
                </label>
                <input type="text" name="pays"  class="form-control" value="Maroc" >
                </div>
              </div>

            </div>



           
          </div>
          <!-- /.box-body -->
          
         <div class="box-footer">
                <button  class="btn btn-default">Cancel</button>
                <button type="submite"  onclick="ConfirmDelete()" class="btn btn-info pull-right">Enregistrer</button>
              </div>  
                </form>

                 


      <!-- /.box-header -->
        
      <!-- /.box-body -->
      </div>
      <!-- /.box -->
        </div> 
      
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>





	@endsection
