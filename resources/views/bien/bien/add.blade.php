	@extends('layouts.base')

@section('content')


	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Locataires</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Ajouté Locataires</li>
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
        <h4 class="box-title">Select Elements</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>



      <form class="form" method="POST" action="/insertbien"> 
           {{ csrf_field() }}
          <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i>Informations générales</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-6">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                <option value="1" >Appartements</option>
                <option value="2" >Villas </option>
                <option value="3" >Riads </option>
                <option value="4" >Bureaux </option>
                <option value="5" >Commerces </option>
                <option value="6" >Terrains </option>
                <option value="7" >Autres biens </option>
                </select>
              </div>
              </div>
           
               <div class="col-md-6">
                <div class="form-group">

                <label>IDENTIFIANT  
                </label>
                <input name="ref"  type="text" class="form-control" required="" placeholder="Identifiant, référence ou numéro unique" >
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
                <input name="adr" required="" type="text" class="form-control" >
                </div>
              </div>
           
            </div>

                    <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Ville 
                </label>
                <input name="ville" type="text" class="form-control" value="Tanger" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Pays 
                </label>
                <input name="pays" type="text" class="form-control" value="Maroc" >
                </div>
              </div>

            </div>
            


            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Propriétaire </h4>
            <hr class="my-15">

            <div class="row">
            <div class="col-md-6 col-12">
          <div class="form-group">
          <label>List Propriétaire</label>
          <select id="listpr" class="form-control select2" name="prop" style="width: 100%;">
            <option selected="selected" value="0">Nouveau Propriétaire</option>
            @foreach ($loc as $loca)
            <option value="{{$loca->id}}">{{$loca->prenom}} {{$loca->nom   }} {{$loca->societe  }}   </option>
            @endforeach

          </select>
          </div>
          <!-- /.form-group -->
        </div>


                      <div id="id" class="col-md-6 col-12">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="nvtype" id="selectada">
                <option value="1">Particulier</option>
                <option value="2">Société / Autre</option>
                </select>
              </div>
              </div>
            



             
              </div>

   <div id="particulier"  >

        

              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label>Civilité</label>
                <select name="nvcivilite" class="form-control">
                <option>Monsieur</option>
                <option>Madame</option>
                </select>
              </div>
            </div>

               <div class="col-md-6">
                <div class="form-group">

                <label>Cin 
                </label>
                <input  name="nvcin" type="text" class="form-control" placeholder="CIN">
                </div>
                 </div>


          </div>


            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Prenom 
                </label>
                <input name="nvprenom" id="prenom" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Nom 
                </label>
                <input name="nvnom" id="nom" type="text" class="form-control" >
                </div>
              </div>

            </div>
             </div>



                        <div id="societe" >
    

                <div class="form-group">

                <label>SOCIÉTÉ *
                </label>
                <input type="text" name="nvsocite" id="societeqqa" class="form-control" placeholder="Company Nom">
                </div>

                <div class="row">
                <div class="col-md-6">

                <div class="form-group">

                <label>ICE
                </label>
                <input type="text" name="nvice" class="form-control" placeholder="Numero TVA">
                </div>
                </div>
                <div class="col-md-6">

                <div class="form-group">

                <label>PROFESSION
                </label>
                <input type="text" name="nvprofession" class="form-control" placeholder="Ex : Dentiste">
                </div>
                </div>

                </div>
                </div>

     

           
          </div>
          <!-- /.box-body -->
           <div class="box-footer">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>   
                </form>


      <!-- /.box-header -->
    
      </div>
      <!-- /.box -->
        </div> 
      
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {

              $('#prenom').prop('required',true);
            $('#nom').prop('required',true);
            $('#societeqqa').prop('required',false);    

    $('#listpr').change(function(){


        if($('#listpr').val() == '0') {
           $('#id').show();
            $('#particulier').show(); 
            $("#selectada").val(1);


              $('#prenom').prop('required',true);
            $('#nom').prop('required',true);
            $('#societeqqa').prop('required',false);


          
        } else {
           
              $('#id').hide(); 
              $('#societe').hide(); 
               $('#particulier').hide(); 

                $('#prenom').prop('required',false);
                $('#nom').prop('required',false);
                $('#societeqqa').prop('required',false)
        } 
    });
});




  $(function() {
    
      $('#societe').hide();  
    $('#selectada').change(function(){

        if($('#selectada').val() == '1') {
        
             $('#societe').hide(); 
              $('#particulier').show(); 

             $('#prenom').prop('required',true);
              $('#nom').prop('required',true);
              $('#societeqqa').prop('required',false);

          
        } else {
           $('#societe').show(); 
              $('#particulier').hide(); 

              $('#societeqqa').prop('required',true);
              $('#prenom').prop('required',false);
              $('#nom').prop('required',false);
        } 
    });
});
</script>


	@endsection
