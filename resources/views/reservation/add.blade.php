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
        <h4 class="box-title">Formulaire d'ajout nouveau Reservation</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>



      <form class="form">
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

          
         
     <div id="particulier"  >

            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Informations Locataires</h4>
            <hr class="my-15">

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

               <div class="col-md-3">
                <div class="form-group">

                <label>Cin 
                </label>
                <input type="text" class="form-control" placeholder="CIN">
                </div>


                


                 </div>

                 <div class="col-md-3">

                 <div class="form-group">
                  <label for="exampleInputFile">Image CIN </label>

                  <input type="file" class="form-control"  id="exampleInputFile">

                 
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
                <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information société</h4>
                <hr class="my-15">

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



              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Détails de la location saisonnière </h4>
            <hr class="my-15">

                 

                    <div class="row">
              <div class="col-md-2">
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

               <div class="row">
              <div class="col-md-12">
           <div class="form-group">
                  <label>Descrptif
</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>


              </div>
           
            </div>

              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Paiments</h4>
            <hr class="my-15">

              <div class="row">
              <div class="col-md-2">
              <div class="form-group">

                <label>Total 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>
              

            </div>


<div class="row">
            <div class="col-md-2">
            <div class="form-group">

                <label>Reset 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>
                   </div>





               





           
          </div>
          <!-- /.box-body -->
          
         <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">

  $(function() {
    $('#societe').hide(); 
    $('#selectada').change(function(){

        if($('#selectada').val() == 'Particulier') {
        
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
