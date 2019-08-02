        <div class="file-field">
    <div class="btn btn-info btn-sm float-left">
      <span>Choose file</span>
      <input type="file">
    </div>

  </div>


    <h4 class="box-title text-info"><i class="ti-save mr-15"></i> Contrat  </h4>
            <hr class="my-15">


                 <div class="row">
              <div class="col-md-6">

            
        <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
    
      <div class="dz-message bold" data-dz-message><span style="font-weight:bold; ">Contrat PDF </span></div>
</form> 


            
             </div>
              </div>

              
<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>