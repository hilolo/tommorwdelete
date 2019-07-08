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
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i> TYPE DE LOCATAIRE</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-5">
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" id="selectada">
                <option>Particulier</option>
                <option>Société / Autre</option>
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



            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information de contact</h4>
            <hr class="my-15">
                <div class="row">
              <div class="col-md-6">

                <div class="form-group">

                <label>Email
                </label>
                <input type="text" class="form-control" >
                </div>
                </div>

                </div>

            <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Telephone 
                </label>
                <input type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Fax 
                </label>
                <input type="text" class="form-control" >
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
                <input type="text" class="form-control" >
                </div>
              </div>
           
            </div>

                    <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Ville 
                </label>
                <input type="text" class="form-control" value="Tanger" >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Pays 
                </label>
                <input type="text" class="form-control" value="Maroc" >
                </div>
              </div>

            </div>



           
          </div>
          <!-- /.box-body -->
          <div class="box-footer pull-right">
            <button type="button" class="btn btn-warning btn-outline mr-1">
              <i class="ti-trash"></i> Cancel
            </button>
            <button type="submit" class="btn btn-primary btn-outline">
              <i class="ti-save-alt"></i> Save
            </button>
          </div>  
                </form>


      <!-- /.box-header -->
      <div class="box-body pb-0">
        <div class="row">
        <div class="col-md-3 col-12">
          <div class="form-group">
          <label>Minimal</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-12">
          <div class="form-group">
          <label>Disabled</label>
          <select class="form-control select2" disabled="disabled" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-12">
          <div class="form-group">
          <label>Multiple</label>
          <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
              style="width: 100%;">
            <option>Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-12">
          <div class="form-group">
          <label>Disabled Result</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option disabled="disabled">California (disabled)</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
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
</script>



	@endsection
