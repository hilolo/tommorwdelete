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
            <form method="get" action="/quittance/add">
            <a style="margin-right: 20px;" href="/qtcc" ><i class="fa fa-refresh"></i> </a>
      <button type="button" class="btn btn-success btn-circle btn-sm"  onclick="window.location.href='/quittance/add'" ><i class="fa fa-plus"></i>
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
                            serverSide: false,
                           "order": [],
                            dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer List', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }  }
],
                             
                            ajax: '/quittance/data/1',
                             "pageLength": 50,
                             columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Nom full', name: 'Nom full'},
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
                            serverSide: false,
                            "pageLength": 50,
                             dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer List Payés', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0,1,2,3,4,5 ]
                }  }
],
                        
                            ajax: '/quittance/data/2',
                                columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Nom full', name: 'Nom full'},
                              {data: 'Loyyer'},
                               {data: 'descrption', name: 'descrption', orderable: false, searchable: false},
                                 {data: 'Etat', name: 'Etat'},
                                 {data: 'action', name: 'action', orderable: false, searchable: false},
                             
                     
                               
                                ]
           
                          });
} );
        
  
</script>



  @endsection