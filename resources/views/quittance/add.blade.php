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
							<li class="breadcrumb-item active" aria-current="page">Ajouté Quittance manuelle</li>
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
        <h4 class="box-title">Formulaire d'ajout nouveau Quittance</h4>
        <ul class="box-controls pull-right">
         
          <li><a class="box-btn-slide" href="#"></a></li> 
        </ul>
      </div>



      <form class="form" method="POST" action="/quittance/add/qtc" enctype="multipart/form-data" >
        {{ csrf_field() }}
          <div class="box-body">
            <h4 class="box-title text-info"><i class="ti-user mr-15"></i> Location</h4>
            <hr class="my-15">
            <div class="row">
              <div class="col-md-12">
                    <div class="form-group">
                <label>Type</label>
                <select id="listpr" name="loca" class="form-control select2" style="width: 100%;">
            @foreach ($loc2 as $loca)
            <option  value="{{$loca->id}}" >{{$loca->locataire->prenom  }} {{$loca->locataire->nom   }} {{$loca->locataire->societe  }} ||   {{$loca->bien->Ref   }} {{$loca->bien->adresse   }} ||  {{$loca->date_debutbail    }} =>  {{$loca->date_finbail    }}
              ||  {{$loca->loyer   }} MAD   ||  {{$loca->bien->locataire->prenom    }} {{$loca->bien->locataire->nom      }}  {{$loca->bien->locataire->societe    }}
             </option>
            @endforeach
          </select>
              </div>
              </div>
            
            </div>

          
         
     <div id="particulier"  >

            <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Informations </h4>
            <hr class="my-15">

              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label>Date (Mois Jour Années)</label>
                <div class="input-group date">


                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" name="dates" value="01/01/2020" />

                  

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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
$(function() {
  $('input[name="dates"]').daterangepicker({
    singleDatePicker: true,

    minYear: 2010,
    maxYear: parseInt(moment().format('YYYY'),10),
    

  });
});
</script>


	@endsection
