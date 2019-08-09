@extends('layouts.base')

@section('content')
<style type="text/css">
.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: "ou faites-le glisser ici. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Document Proprietaire</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Ajouté Document</li>
						</ol>
					</nav>
				</div>
			</div>
		
		</div>
	</div>

<section class="content">
    
     <div class="row">
            



              <div class="col-md-8">
    <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" class="form-control" multiple="">
              </div>

              </div>

                <div class="col-md-4">
             

               <div class="col-md-12">
             
                    <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type" id="selectada">
                <option >CIN</option>
                <option >PASSPORT</option>
                <option >COMPTE BANQAIRE</option>
                 <option >TITRE BIENS</option>
                  <option >ASSURANCE</option>
                   <option >AUTRE</option>
                </select>
              
              </div> 
            </div>





            </div>
              <div class="col-md-12" >
             
             
               <div class="pull-right">
    
                <button type="submite"  onclick="ConfirmDelete()" class="btn btn-info pull-right">Enregistrer</button>
          </div>



              </div>




    </section>





	@endsection
