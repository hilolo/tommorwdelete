	@extends('layouts.base')

@section('content')


	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Les coordonnées bancaire</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Les Compte</li>
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
		

				</div>

					<div class="col-2" >
					<div class="float-right">
<a type="button" class="btn btn-info btn-circle btn-sm" title="Noveau Bien"  href="/Document/Add"   ><i class="fa fa-plus"></i>      
</a>
			</div>
			</div>	



          </div>


          </div>

          <div class="box-body">
            	<!-- Nav tabs -->
				
				<!-- Tab panes -->
		<div class="tab-content">


		
		

				 <div class="table-responsive ">
          <div class="row"><div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable" id="dataTables-example" width="100%">
                                    <thead>
                                        <tr >
                                        <td>Client</td>
                                        <td    >Banque</td>
                                        <td    >RIB</td>
                                        <td    >IBAN / SWIFT</td>
                                        <td >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div></div></div>

			
			



	
					
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
                                                        dom: 'Bfrtip',
buttons: [

  { extend: 'print', text: 'Imprimer List', className: 'btn btn-sm btn-danger box-shadow-1 mr-1 mb-1'  }
],
                             

                            ajax: '/Bank/data',
                             columns: [
                              {data: 'Nom', name: 'Nom', orderable: false, searchable: false},
                              {data: 'Banque'},
                              {data: 'RIB'},
                              {data: 'swifti'},
                              {data: 'action', name: 'action', orderable: false, searchable: false},

                             

                     
                               
                                ]

           




                          });
} );
        
     

        
  

</script>



	@endsection
