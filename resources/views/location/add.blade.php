	@extends('layouts.base')

@section('content')
<style type="text/css">
  #dropzone {
    min-height: 150px;
    border: 2px dashed  rgb(38, 47, 160)
  }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>


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



              <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Bien loué</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-5">
                    <div class="form-group">
                <label>Bien</label>


               <select  class="form-control select2" style="width: 100%;">
            <option>Alaska</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>


              </div>
              </div>
            
            </div>

          
      
            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Propriétaire </h4>
            <hr class="my-15">

            <div class="row">
            <div class="col-md-6 col-12">
          <div class="form-group">
          <label>List Propriétaire</label>
          <select id="listpr" class="form-control select2" style="width: 100%;">
            <option selected="selected">Nouveau Propriétaire</option>
            <option>Alaska</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
          </div>
          <!-- /.form-group -->
        </div>


                      <div id="id" class="col-md-6 col-12">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" id="selectada">
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
                <select class="form-control">
                <option>Monsieur</option>
                <option>Madame</option>
                </select>
              </div>
            </div>

               <div class="col-md-6">
                <div class="form-group">

                <label>Cin 
                </label>
                <input type="text" class="form-control" placeholder="CIN">
                </div>
                 </div>


          </div>


            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Prenom 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Nom 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>

            </div>
             </div>



                        <div id="societe" >
    

                <div class="form-group">

                <label>SOCIÉTÉ *
                </label>
                <input type="text" class="form-control" placeholder="Company Nom">
                </div>

                <div class="row">
                <div class="col-md-6">

                <div class="form-group">

                <label>NO. TVA
                </label>
                <input type="text" class="form-control" placeholder="Numero TVA">
                </div>
                </div>
                <div class="col-md-6">

                <div class="form-group">

                <label>PROFESSION
                </label>
                <input type="text" class="form-control" placeholder="Ex : Dentiste">
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
               




                 <select class="form-control">
                <option>Bail d'habitation vide</option>
                <option>Bail d'habitation meublé </option>
            
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
                  <input type="text" class="form-control pull-right" name="datetimes">

                  

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

                <label>PAIEMENT
 
                </label>
               




                 <select class="form-control">
                <option>Mensuel </option>
                <option>Trimestriel </option>
                  <option>Annuel </option>
                    <option>Forfaitaire </option>
            
                </select>
                </div>



              </div>

            

            </div>



             <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>MOYEN DE PAIEMENT
 
                </label>
               




                 <select class="form-control">
                <option>Espèce </option>
                <option>Chèque </option>
                  <option>Virement </option>
                    <option>Prélèvement automatique </option>
            
                </select>
                </div>



              </div>

            

            </div>

               <div class="row">
              <div class="col-md-6">
            <div class="form-group ">
              <label>MOYEN DE PAIEMENT
 
                </label>
                   <div class="form-group">
              <input class="form-control" type="number" min="1" max="31" step="1" value="5" id="example-number-input">
                    </div>
            </div>
             </div>
              </div>



                <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Contrat  </h4>
            <hr class="my-15">


                 <div class="row">
              <div class="col-md-6">

            
        <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
    
      <div class="dz-message bold" data-dz-message><span style="font-weight:bold; ">Contrat PDF </span></div>
</form> 


            
             </div>
              </div>








           
          </div>
          <!-- /.box-body -->
          
         <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>  
                



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
    

    $('#listpr').change(function(){


        if($('#listpr').val() == 'Nouveau Propriétaire') {
           $('#id').show();
            $('#particulier').show(); 
            $("#selectada").val(1);

          
        } else {
           
              $('#id').hide(); 
              $('#societe').hide(); 
               $('#particulier').hide(); 
        } 
    });



      $('#societe').hide();  
    $('#selectada').change(function(){
  

        if($('#selectada').val() == '1') {
        
             $('#societe').hide(); 
              $('#particulier').show(); 


              //$('.name').hide().find(':input').attr('required', false);

              //$('.name').show().find(':input').attr('required', true);

          
        } else {
           $('#societe').show(); 
              $('#particulier').hide(); 
        } 
    });
});



  $(function() {

  $('input[name="datetimes"]').daterangepicker({

    "autoApply": true,

});


});






</script>






	@endsection
