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



      <form class="form">
          <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i>Informations générales</h4>
            <hr class="my-15">

            <div class="row">
               <div class="col-md-6">
                <div class="form-group">

                <label>IDENTIFIANT  
                </label>
                <input type="text" class="form-control" placeholder="Identifiant , Nom unique" >
                </div>
                 </div>

                   <div class="col-md-6">
                <div class="form-group">

                <label>ADRESSE  
                </label>
                <input type="text" class="form-control"  >
                </div>
                 </div>
            
            </div>
           
              <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Description </h4>
            <hr class="my-15">


                    <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>SUPERFICIE M2
 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>ANNÉE DE CONSTRUCTION 
                </label>
                <input type="text" class="form-control"  >
                </div>
              </div>

            </div>
            


            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Biens </h4>
            <hr class="my-15">

            <div class="row">
            <div class="col-md-6 col-12">
          <div class="form-group">
          <label class="control-label" for="ourField">Label for our field</label>
<form role="form">
    <div id="myRepeatingFields">
        <div class="entry input-group col-xs-3">
            <input class="form-control" name="fields[]" type="text" placeholder="Placeholder" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                </span>
        </div>
    </div>
</form>
<br>
<small>Press <span class="glyphicon glyphicon-plus gs"></span> for another field</small>


    
          </div>
          <!-- /.form-group -->
        </div>


            



             
              </div>



   <div id="particulier">

        

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








           
          </div>
          <!-- /.box-body -->
           <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
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
});




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



  
</script>


	@endsection
