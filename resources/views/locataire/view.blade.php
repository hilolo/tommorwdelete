  @extends('layouts.base')

@section('content')


 <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Profile</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item" aria-current="page">Proprietaire</li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
      </div>
    <div class="right-title">
        <div class="dropdown">
          <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/Bank/{{ $art->id }}/Add"><i class="mdi mdi-comment-plus-outline"></i>Bank Info</a>
            <a class="dropdown-item" href="/a"><i class="mdi mdi-file-document"></i>Document</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
            <div class="dropdown-divider"></div>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
          </div>
      </div>
    </div>
  </div>

  <section class="content">

      <div class="row">
        <div class="col-12">
        </div>
        <!-- /.col -->
        <div class="col-lg-6 col-12">
      <div class="box box-inverse bg-img" style="background-image: url(../../images/gallery/full/1.jpg);" data-overlay="2">
              <div class="flexbox px-20 pt-20">
           
                <div class="dropdown">
                  
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                  </div>
                </div>
              </div>

              <div class="box-body text-center pb-50">
                <a href="#">
                  <img class="avatar avatar-xxl avatar-bordered" src="../../images/avatar/5.jpg" alt="">
                </a>
                <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{ $art->prenom }} {{ $art->nom }}</a></h4>
                <span><i class="fa fa-map-marker w-20"></i> {{ $art->ville }} {{ $art->pays }}  </span>
              </div>

            
            </div>        

          <!-- Profile Image -->
          <div class="box">
              <div class="box-header with-border">
              <h3 class="box-title">Information personnelle</h3>
          
            </div>
            <div class="box-body box-profile">            
              <div class="row">


                <div class="col-md-6 col-12">
                  <div class="profile-user-info">
            <p>Email :<span class="text-gray pl-10">{{ $art->email }}</span> </p>
            <p>Telephone :<span class="text-gray pl-10">   {{ $art->tel }} </span></p>
            <p>Fax :<span class="text-gray pl-10">  {{ $art->fax }} </span></p>
          </div>
              </div>

                <div class="col-md-6 col-12">
                  <div class="profile-user-info">
            <p>Adresse :<span class="text-gray pl-10"> {{ $art->adresse }} </span> </p>

            <p>CIN :<span class="text-gray pl-10"> {{ $art->cin }}</span> </p>
              
            
          </div>
              </div>
             
             
              </div>
            </div>
            <!-- /.box-body -->
          </div>



          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> Banque </h3>
          
            </div>

            <div class="box-body box-profile">            
              <div class="row">

                

   


                <div class="col-md-12 col-12">
                   @foreach ($art->bancaire as $b)

                  <div class="profile-user-info">
            <p>Banque :<span class="text-gray pl-10">{{ $b->Banque }}</span> </p>
            <p>RIB :<span class="text-gray pl-10">{{ $b->RIB }}</span></p>
            <p>IBAN :<span class="text-gray pl-10">{{ $b->IBAN }}</span></p>
             <p>Swift/bic: <span class="text-gray pl-10">{{ $b->Swift }}</span></p>
          </div>

          @endforeach
              </div>

              
             
             
              </div>
            </div>
            <!-- /.box-body -->
          </div>
      
       
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->    

          <div class="col-12 col-lg-6">
              <div class="nav-tabs-custom box-profile">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="#usertimeline" data-toggle="tab">Quittance</a></li>
              <li><a href="#activity" data-toggle="tab">Location</a></li>
              <li><a href="#settings" data-toggle="tab">Documents</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#settings" data-toggle="tab">AMENDIS</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="usertimeline">
   
         
        <div class="box">
        <div class="row"><div class="col-sm-12">
                                <table class="table table-sm table-bordered table-striped dataTable" id="dataTables-example" width="98%">
                                    <thead>
                                        <tr >
                                        <td>Date</td>
                                        <td    >Bien</td>
                                        <td>Montant</td>
                                  
                                        <td  >Etat</td>
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div></div>
    


      


        </div>
        
         
         
              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="activity">    
                  <div class="box">

                    @foreach ($art->location as $loc)


          <div class="media bb-1 border-fade">
          
          <div class="media-body">
            <p>
            <strong>{{$loc->bien->Ref }} {{$loc->bien->adresse }} {{$loc->bien->ville }}</strong>
     
            <a style="font-size: 20px" class="float-right text-lighter" href="{{ Storage::url($loc->path_contrat)}}"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
            </p>
            <p><small>{{$loc->date_debutbail }}  => {{$loc->date_finbail }}  ||  {{$loc->loyer }} MAD     </small></p>
          </div>
          </div>
          @endforeach



    


      


        </div>  
         
      
                
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="settings">    
         
        <div class="box p-15">    
          <form class="form-horizontal form-element col-12">
            <div class="form-group row">
            <label for="inputName" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputName" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

            <div class="col-sm-10">
              <input type="tel" class="form-control" id="inputPhone" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

            <div class="col-sm-10">
              <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputSkills" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <div class="ml-auto col-sm-10">
              <div class="checkbox">
              <input type="checkbox" id="basic_checkbox_1" checked="">
              <label for="basic_checkbox_1"> I agree to the</label>
                &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
              </div>
            </div>
            </div>
            <div class="form-group row">
            <div class="ml-auto col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
            </div>
          </form>
                </div>        
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
   
      </div>
      <!-- /.row -->

    </section>

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  
<script type="text/javascript">
    
   $(document).ready( function () {
    $('#dataTables-example').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            },
                            processing: true,
                            serverSide: true,
                           "order": [],
                            ajax: '/Locataire/dataquittance/'+ {{ $art->id }} ,
                             "pageLength": 50,
                             columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Loyyer'},
                               
                                 {data: 'Etat', name: 'Etat'},
                                 {data: 'action', name: 'action', orderable: false, searchable: false},
                             
                     
                               
                                ]
           
                          });
} );
        
     
  
        
  
</script>




  @endsection
