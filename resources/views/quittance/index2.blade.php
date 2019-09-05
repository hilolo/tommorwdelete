	@extends('layouts.base')

@section('content')


	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">List Des Impayés</h3>
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
            
        
                    <form action="/Searchquitdate" method="POST">
                              {{ csrf_field() }}

              <div class="form-group">
              <h5>Date </h5>
              <div class="controls">
                <div class="input-group">
                   
                <div class="input-group date" style="max-width: 40%; ">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text"  name="dato" class="form-control pull-right" id="datepicker">
                

                </div> <span class="input-group-btn">
                    <button class="btn btn-info" type="submite">Go!</button>
                  </span> </div>
              <div class="help-block"></div></div>
            </div>
            </form>
          


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
			
					
				

				</ul>

				</div>

					<div class="col-2" >

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
                                        <td>Information</td>
                                      
                                
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div></div>

			
			
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

                            dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer Articles', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1',  exportOptions: {
                    columns: [ 0,1,2,3,4 ]
                },title: function(){
            var printTitle = 'List Des Impayés Du  : '+{{$m}}+ ' /' + {{$y}} ;
            return printTitle
        }  }
],


                           "order": [],
                             

                            ajax: '/quittance/data/'+{{$m}}+ '/' + {{$y}} ,
                             "pageLength": 50,
                             columns: [
                              {data: 'Date', name: 'Date'},
                              {data: 'Bien'},
                              {data: 'Nom full'},
                              {data: 'Loyyer'},
                              {data: 'info'},
                         
                               
                                 {data: 'action', name: 'action', orderable: false, searchable: false},

                             

                     
                               
                                ]

           




                          });
} );
        

  
  

</script>



	@endsection
