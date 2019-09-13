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
        <h3 class="page-title">Location</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Ajouté Caution</li>
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
        <h4 class="box-title">Formulaire d'ajout nouveau Caution de Locataire</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>


            <form class="form" method="POST" action="/cautioninsert" enctype="multipart/form-data">
               {{ csrf_field() }}
              <div class="box-body">

       

          
      
            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Location </h4>
            <hr class="my-15">

            <div class="row">
            <div class="col-md-6 col-12">
          <div class="form-group">
          <label>List Location</label>
          <select id="listpr" name="loca" class="form-control select2" style="width: 100%;">
            @foreach ($loc2 as $loca)
            <option  value="{{$loca->id}}" >{{$loca->locataire->prenom  }} {{$loca->locataire->nom   }} {{$loca->locataire->societe  }} ||   {{$loca->bien->Ref   }} {{$loca->bien->adresse   }} ||  {{$loca->date_debutbail    }} =>  {{$loca->date_finbail    }}
              ||  {{$loca->loyer   }} MAD
             </option>
            @endforeach
          </select>
          </div>
          <!-- /.form-group -->
        </div>

             
              </div>

 




                 <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Détails  </h4>
            <hr class="my-15">


                  <div class="row">
              <div class="col-md-6">
              <div class="form-group">

                <label>Nombre mois de caution 
                </label>
               




                 <select name="nbrmois" class="form-control">
                <option value="1/2 mois">1/2 mois</option>
                <option value="1 mois">1 mois </option>
                <option value="2 mois">2 mois </option>
                  <option value="3 mois">3 mois </option>
                   <option value="6 mois">6 mois </option>
                   <option value="Autre">Autre </option>
            
                </select> 
                </div>



              </div>

          

            </div>




 <div class="row">
                  <div class="col-md-6">

                <div class="form-group">

                <label>Montant
                </label>
                <input type="text" name="Montant" required=""  class="form-control"  placeholder="Montant de caution">
                </div>
                </div>


                   <div class="col-md-6">

                <div class="form-group">

                <label>Descrption
                </label>
                <input type="text" name="description"  class="form-control"  placeholder="descriptive">
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



 



  @endsection
