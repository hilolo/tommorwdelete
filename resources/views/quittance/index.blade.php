@extends('layouts.base')

@section('content')


  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Finances</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item" ><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Les Quittance </li>
            </ol>
          </nav>
        </div>
      </div>
    
    </div>
  </div>

  <section class="content">
  
  <div class="col-12">
        <div class="box pull-up">
          <div class="box-header with-border">
            <h4 class="box-title">Détails</h4>
            <div class="box-controls pull-right">
           
            </div>
          </div>
          
          <div class="box-body">
            <div class="row">
              <!-- column -->
              <div class="col-lg-4">
                <div class=" box-body">
            
                <div class="box box-body">
            <h6 class="mb-30">
            <span class="text-uppercase">LOYERS ENCAISSÉS</span>
      
            </h6>
            
            <p class="font-size-26">$845,1258</p>

           
            <div class="font-size-12"><i class="ion-arrow-graph-down-right text-success mr-1"></i> %18 decrease from last month</div>
          </div>


          


                </div>
              </div>

                 <div class="col-lg-4">
                <div class=" box-body">
            
                <div class="box box-body">
            <h6 class="mb-30">
            <span class="text-uppercase">LOYERS ENCAISSÉS</span>
      
            </h6>
            
            <p class="font-size-26">$845,1258</p>

           
            <div class="font-size-12"><i class="ion-arrow-graph-down-right text-success mr-1"></i> %18 decrease from last month</div>
          </div>


          


                </div>
              </div>

              
              


              <div class="col-lg-4">

                <div class="box-body">
          <div class="text-center py-10 bb-1 bb-dashed">
             <h4>This Month</h4>
             <ul class="flexbox flex-justified text-center my-20">
            <li class="px-10">
              <h6 class="mb-0 text-bold">8952</h6>
              <small>Abu Dhabi</small>
            </li>

            <li class="br-1 bl-1 px-10">
              <h6 class="mb-0 text-bold">7458</h6>
              <small>Miami</small>
            </li>

            <li class="px-10">
              <h6 class="mb-0 text-bold">3254</h6>
              <small>London</small>
            </li>
            </ul>           
          </div>
      
        </div>




            
              </div>
            </div>
          </div>
        
        </div>
      </div>
</section>



<section class="content">
  
  <div class="col-12">
          <div class="box box-default">
        
            <!-- /.box-header -->
            <div class="box-header with-border">
              <div class="row"> 
              <div class="col-10">
              <!-- Nav tabs -->
      <ul class="nav nav-pills margin-bottom">
          <li class=" nav-item"> <a href="#navpills-1" class="nav-link active show" data-toggle="tab" aria-expanded="false">ALL</a> </li>
          <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false"> Payé</a> </li>
          
        

        </ul>

        </div>

          <div class="col-2" >
          <div class="float-right">
            <form method="get" action="/page2">
      <button type="button" class="btn btn-success btn-circle btn-sm"  onclick="window.location.href='/page2'" ><i class="fa fa-plus"></i>
        <a href="a"></a>
</button>
</form>
      </div>
      </div>  



          </div>


          </div>

          <div class="box-body">
              <!-- Nav tabs -->
        
        <!-- Tab panes -->
    <div class="tab-content">


      <div class="tab-pane active show" id="navpills-1" role="tabpanel">
    

        
          <div class="row"><div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable" id="dataTables-example" width="98%">
                                    <thead>
                                        <tr >
                                        <td>Date</td>
                                        <td    >Bien</td>
                                        <td >De</td>
                                        <td>Montant</td>
                                        <td  >Description</td>
                                        <td  >Etat</td>
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div></div>

      
      
      </div>


      <div class="tab-pane " id="navpills-2" role="tabpanel">


           <div class="table-responsive ">
                                <table class="table table-hover alt-pagination customer-wrapper dataTable no-footer display compact" id="dataTables-example2" width="100%">
                                    <thead>
                                        <tr>
                                            <td>Date</td>
                                        <td    >Bien</td>
                                        <td >De</td>
                                        <td>Montant</td>
                                        <td  >Description</td>
                                        <td  >Etat</td>
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
                            processing: true,
                            serverSide: true,
                           "order": [],
                            dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer Articles', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }  }
],
                             
                            ajax: '/quittance/data/1',
                             "pageLength": 50,
                             columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Nom full'},
                              {data: 'Loyyer'},
                               {data: 'descrption', name: 'descrption', orderable: false, searchable: false},
                                 {data: 'Etat', name: 'Etat'},
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
                             dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer Articles', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }  }
],
                        
                            ajax: '/quittance/data/2',
                                columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Nom full'},
                              {data: 'Loyyer'},
                               {data: 'descrption', name: 'descrption', orderable: false, searchable: false},
                                 {data: 'Etat', name: 'Etat'},
                                 {data: 'action', name: 'action', orderable: false, searchable: false},
                             
                     
                               
                                ]
           
                          });
} );
        
  
</script>



  @endsection