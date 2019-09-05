	@extends('layouts.base')

@section('content')
<style type="text/css">
  #dropzone {
    min-height: 150px;
    border: 2px dashed  rgb(38, 47, 160)
  }

</style>



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
        <h4 class="box-title">Formulaire d'ajout nouveau Location</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>


            <form class="form" method="POST" action="/insertlocation" enctype="multipart/form-data">
               {{ csrf_field() }}
              <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Bien loué</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-5">
                    <div class="form-group">
                <label>Bien</label>


               <select name="bbl" class="form-control select2" style="width: 100%;">
               @foreach ($loc as $loca)
            <option value="{{$loca->id}}" >{{$loca->Ref  }} {{$loca->adresse   }}    </option>
            @endforeach
         
          </select>


              </div>
              </div>
            
            </div>

          
      
            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Locataire </h4>
            <hr class="my-15">

            <div class="row">
            <div class="col-md-6 col-12">
          <div class="form-group">
          <label>List Locataire</label>
          <select id="listpr" name="prop" class="form-control select2" style="width: 100%;">
            <option selected="selected" value="0">Nouveau Locataire</option>
            @foreach ($loc2 as $loca)
            <option  value="{{$loca->id}}" >{{$loca->prenom  }} {{$loca->nom   }} {{$loca->societe  }}   </option>
            @endforeach
          </select>
          </div>
          <!-- /.form-group -->
        </div>


                      <div id="id" class="col-md-6 col-12">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type"  id="selectada">
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
                <select class="form-control" name="civilite">
                <option>Monsieur</option>
                <option>Madame</option>
                </select>
              </div>
            </div>

               <div class="col-md-6">
                <div class="form-group">

                <label>Cin 
                </label>
                <input type="text" class="form-control"  name="cin" placeholder="CIN">
                </div>
                 </div>


          </div>


            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Prenom 
                </label>
                <input type="text" id="prenom" name="prenom"  class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Nom 
                </label>
                <input type="text" id="nom"  name="nom" class="form-control" >
                </div>
              </div>

            </div>
             </div>



                        <div id="societe" >
    

                <div class="form-group">

                <label>SOCIÉTÉ *
                </label>
                <input type="text"  name="socite"  class="form-control" id="societeqqa" placeholder="Company Nom">
                </div>

                <div class="row">
                <div class="col-md-6">

                <div class="form-group">

                <label>NO. ICE
                </label>
                <input type="text" name="ice"  class="form-control" placeholder="Numero TVA">
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


                 <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Détails de la location </h4>
            <hr class="my-15">


                  <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Type 
                </label>
               




                 <select name="typebb" class="form-control">
                <option value="1">Bail d'habitation vide</option>
                <option value="2">Bail d'habitation meublé </option>
            
                </select>
                </div>



              </div>

              <div class="col-md-6">
                <div class="form-group">
                <label>Date and time range:</label>

               
                

                 

                 <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  type="text" class="form-control pull-right" name="datetimes">

                  

                </div> 


                <!-- /.input group -->
             
                <!-- /.input group -->
              </div>
              </div>

            </div>



                <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Paiment  </h4>
            <hr class="my-15">


 <div class="row">
                  <div class="col-md-6">

                <div class="form-group">

                <label>LOYER
                </label>
                <input type="text" name="loyer"  class="form-control" name="LOYER" placeholder="Montant de loyer">
                </div>
                </div>

            

            </div>




             <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>PAIEMENT
 
                </label>
               




                 <select name="paimmeth" class="form-control">
                <option value="Mensuel">Mensuel </option>
                <option value="Trimestriel" >Trimestriel </option>
                  <option value="Annuel" >Annuel </option>
                    <option value="Forfaitaire" >Forfaitaire </option>
            
                </select>
                </div>



              </div>

            

            </div>



             <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>MOYEN DE PAIEMENT
 
                </label>
               




                 <select name="moyenp" class="form-control">
                <option value="Especes"   >Espèces </option>
                <option value="Chèque"  >Chèque </option>
                  <option value="Virement" >Virement </option>
                    <option value=">Prélèvement automatique"  >Prélèvement automatique </option>
            
                </select>
                </div>



              </div>

            

            </div>

               <div class="row">
              <div class="col-md-6">
            <div class="form-group ">
              <label>JOUR DE PAIEMENT
 
                </label>
                   <div class="form-group">
              <input class="form-control" name="jpaiment" type="number" min="1" max="31" step="1" value="5" id="example-number-input">
                    </div>
            </div>
             </div>


              </div>

              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Contrat  

 <div class="row">
              <div class="col-md-6">
            <div class="form-group ">
                    <div class="file-field">
    <div class="btn btn-info btn-sm float-left">
      <span>Choose file</span>
      <input type="file" name="file">
    </div>

  </div>
            </div>
             </div>


              </div>


              
        









           
          </div>
          <!-- /.box-body -->
          
         <div class="box-footer">
                <button type="" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
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



    


   



<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>




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
            $('#societeqqa').prop('required',true);

          
        } else {
           
              $('#id').hide(); 
              $('#societe').hide(); 
               $('#particulier').hide(); 

                $('#prenom').prop('required',false);
                $('#nom').prop('required',false);
                $('#societeqqa').prop('required',false);
        } 
    });



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



  $(function() {

  $('input[name="datetimes"]').daterangepicker({

    "autoApply": true, locale: {
        format: 'YYYY/MM/DD' // --------Here
    }

});


});






</script>






	@endsection
