  @extends('layouts.base')

@section('content')


  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Caution </h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Locataire</li>
            </ol>
          </nav>
        </div>
      </div>
    
    </div>
  </div>

<section class="content">
  
  <div class="col-12">
          <div class="box box-default">
        
            <!-- /.box-header -->
            <div class="box-header with-border">
              <div class="row"> 
              <div class="col-10">
              <!-- Nav tabs -->
      <ul class="nav nav-pills margin-bottom">
          <li class=" nav-item"> <a href="#navpills-1" class="nav-link active show" data-toggle="tab" aria-expanded="false">Actives</a> </li>
          <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">  Archives</a> </li>
          
        

        </ul>

        </div>

          <div class="col-2" >
          <div class="float-right">
<a type="button" class="btn btn-info btn-circle btn-sm" title="Noveau Bien"  href="/Caution/Add"   ><i class="fa fa-plus"></i>      
</a>
      </div>
      </div>  



          </div>


          </div>

          <div class="box-body">
              <!-- Nav tabs -->
        
        <!-- Tab panes -->
    <div class="tab-content">


      <div class="tab-pane active show" id="navpills-1" role="tabpanel">
    

         <div class="table-responsive ">


                                <table class="table table-hover alt-pagination customer-wrapper dataTable no-footer display compact" id="dataTables-example" width="100%">
                                    <thead>
                                        <tr >
                                        <td>Client</td>
                                        <td>Location</td>
                                        <td >Nbr mois</td>
                                        <td>Montant</td>
                                        <td>Descriptive</td>
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>

                  </div>

      
      
      </div>


      <div class="tab-pane " id="navpills-2" role="tabpanel">


           <div class="table-responsive ">
                                <table class="table table-hover alt-pagination customer-wrapper dataTable no-footer display compact" id="dataTables-example2" width="100%">
                                    <thead>
                                        <tr>
                                         <td>Client</td>
                                        <td>Location</td>
                                        <td >Nbr mois</td>
                                        <td>Montant</td>
                                        <td>Descriptive</td>
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                  
                                </table>
                            </div>
      
      
      </div>
          
        </div>


            </div>


          <!-- /.box -->
        </div>


  </section>



  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  
<script type="text/javascript">
    

   $(document).ready( function () {
    $('#dataTables-example').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            },
                            processing: false,
                            serverSide: true,
                            "pageLength": 50,
                             

                            ajax: '/Caution/data/1',
                             columns: [
                              {data: 'Nom full', name: 'Nom full', orderable: false, searchable: false},
                               {data: 'infoloc'},
                              {data: 'nbrmois'},
                              {data: 'montantq'},
                              {data: 'description'},
                               {data: 'action', name: 'action', orderable: false, searchable: false},

                             

                     
                               
                                ]

           




                          });
} );
        
     
   $(document).ready( function () {
    $('#dataTables-example2').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            },
                            processing: false,
                            serverSide: true,
                            "pageLength": 50,
                            ajax: '/Caution/data/2',
                             columns: [
                              {data: 'Nom full', name: 'Nom full', orderable: false, searchable: false},
                               {data: 'infoloc'},
                              {data: 'nbrmois'},
                              {data: 'montantq'},
                              {data: 'description'},
                               {data: 'action', name: 'action', orderable: false, searchable: false},

                             

                     
                               
                                ]

           




                          });
} );
        
  

</script>



  @endsection
