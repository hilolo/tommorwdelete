  @extends('layouts.base')

@section('content')

  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Locataire</h3>
        
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Ajouté Locataire</li>
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
        <h4 class="box-title">Formulaire d'ajout Les coordonnées bancaire</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>



      <form class="form" method="POST" action="/bankinsert/{{$id}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
          <div class="box-body">
           
         

          
         
     




            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Information Bancaire</h4>
            <hr class="my-15">
                <div class="row">
                   <div class="col-md-6">

                <div class="form-group">

                <label>Banque
                </label>
                <input type="text" name="Banque" class="form-control" >
                </div>
                </div>

              <div class="col-md-6">

                <div class="form-group">

                <label>RIB
                </label>
                <input type="text" name="RIB" class="form-control" >
                </div>
                </div>

                </div>



             
              

                    <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>IBAN 
                </label>
                <input type="text" name="IBAN" class="form-control"  >
                </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">

                <label>Swift/bic 
                </label>
                <input type="text" name="Swift"  class="form-control"  >
                </div>
              </div>

            </div>



           
          </div>
          <!-- /.box-body -->
          
         <div class="box-footer">
                <button  class="btn btn-default">Cancel</button>
                <button type="submite" class="btn btn-info pull-right">Validé</button>
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



  @endsection
