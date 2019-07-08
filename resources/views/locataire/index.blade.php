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
							<li class="breadcrumb-item active" aria-current="page">Locataires</li>
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
		

				 <div class="table-responsive ">
                                <table class="table table-hover alt-pagination customer-wrapper dataTable no-footer display compact" id="dataTables-example">
                                    <thead>
                                        <tr>
                                          <td>Locataire</td>
                                         <td>Telephone</td>
                                        <td >Modéle</td>
                                        <td>TVA</td>
                                        <td>Bien</td>
                                        <td  >Action</td>
                                        </tr>
                                    </thead>
                                  
                                </table>
                            </div>

			
			
			</div>


			<div class="tab-pane " id="navpills-2" role="tabpanel">


					 <div class="table-responsive ">
                                <table class="table table-hover alt-pagination customer-wrapper dataTable no-footer display compact" id="dataTables-example2" width="911">
                                    <thead>
                                            <td>Locataire</td>
                                         <td>Telephone</td>
                                        <td >Modéle</td>
                                        <td>TVA</td>
                                        <td>Bien</td>
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
    

   $(document).ready(function () {
    $('#dataTables-example').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            }

                            ,processing: false,

            serverSide: true,

            ajax: 'http://erp.test/Vente/Articles/Data',
            "pageLength": 50,
             columns: [
              {data: 'pic', name: 'pic', orderable: false, searchable: false},
            {data: 'name'},
            {data: 'prix'},
            {data: 'tva'},
            {data: 'code_barre'},
             {data: 'action', name: 'action', orderable: false, searchable: false},

       ]
        });



  //your code here
});
        


   $(document).ready(function () {
    $('#dataTables-example2').DataTable({
         "language": 
                        {
                             "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/French.json"
                            }

                            ,processing: false,

            serverSide: true,

            ajax: 'http://erp.test/Vente/Articles/Data',
            "pageLength": 50,
             columns: [
              {data: 'pic', name: 'pic', orderable: false, searchable: false},
            {data: 'name'},
            {data: 'prix'},
            {data: 'tva'},
            {data: 'code_barre'},
             {data: 'action', name: 'action', orderable: false, searchable: false},

       ]
        });



  //your code here
});
    
           
     
  
</script>


	@endsection
