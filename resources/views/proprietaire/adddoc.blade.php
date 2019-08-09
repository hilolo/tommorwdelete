@extends('layouts.base')

@section('content')
<link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'>

<style type="text/css">
.filepond--drop-label {
  color: #4c4e53;
}

.filepond--label-action {
  -webkit-text-decoration-color: #babdc0;
          text-decoration-color: #babdc0;
}

.filepond--panel-root {
  border-radius: 2em;
  background-color: #edf0f4;
  height: 1em;
}

.filepond--item-panel {
  background-color: #595e68;
}

.filepond--drip-blob {
  background-color: #7f8a9a;
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
              <div class="col-md-4">
              <div class="col-md-12">
              <div class="form-group">

                <label>Nom Groupe
                </label>
                <input type="text" name="tele" class="form-control" >
                </div>
              </div>

               <div class="col-md-12">
              <div class="form-group">

                <label>Type 
                </label>
                <input type="text" name="tele" class="form-control" >
                </div>
              </div>





              </div>



              <div class="col-md-8">
     <input type="file" 
       class="filepond"
       name="filepond"
       multiple
       data-max-file-size="3MB"
       data-max-files="3" />

              </div>

            </div>



    </section>



<script>

 

FilePond.registerPlugin(
  
  // encodes the file as base64 data
  FilePondPluginFileEncode,
  
  // validates the size of the file
  FilePondPluginFileValidateSize,
  
  // corrects mobile image orientation
  FilePondPluginImageExifOrientation,
  
  // previews dropped images
  FilePondPluginImagePreview
);

// Select the file input and use create() to turn it into a pond
FilePond.create(
  document.querySelector('input')
);



</script>

	@endsection
