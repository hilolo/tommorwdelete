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
            <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
            <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
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
                <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Roben Parkar</a></h4>
                <span><i class="fa fa-map-marker w-20"></i> Miami</span>
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
            <p>Email :<span class="text-gray pl-10">David@yahoo.com</span> </p>
            <p>Telephone :<span class="text-gray pl-10">+11 123 456 7890</span></p>
            <p>Fax :<span class="text-gray pl-10">+11 123 456 7890</span></p>
          </div>
              </div>

                <div class="col-md-6 col-12">
                  <div class="profile-user-info">
            <p>Adresse :<span class="text-gray pl-10">David@yahoo.com</span> </p>

            <p>CIN :<span class="text-gray pl-10">David@yahoo.com</span> </p>
              <p>Image CIN :<span class="text-gray pl-10">David@yahoo.com</span> </p>
            
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
                  <div class="profile-user-info">
            <p>Banque :<span class="text-gray pl-10">David@yahoo.com</span> </p>
            <p>RIB :<span class="text-gray pl-10">+11 123 456 7890</span></p>
            <p>IBAN :<span class="text-gray pl-10">+11 123 456 7890</span></p>
             <p>Swift/bic: <span class="text-gray pl-10">+11 123 456 7890</span></p>
          </div>
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
              
              <li><a class="active" href="#usertimeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#settings" data-toggle="tab">Documents</a></li>
              <li><a href="#settings" data-toggle="tab">AMENDIS</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="usertimeline">
   
         
        <div class="box">
          <div class="media bb-1 border-fade">
          
          <div class="media-body">
            <p>
            <strong>Denial Webar</strong>
            <time class="float-right text-lighter" datetime="2017">24 min ago</time>
            </p>
            <p><small>Designer</small></p>
          </div>
          </div>

    


      


        </div>
        
         
         
              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="activity">    
                  <div class="box">
          <div class="media bb-1 border-fade">
          
          <div class="media-body">
            <p>
            <strong>Denial Webar</strong>
            <time class="float-right text-lighter" datetime="2017">24 miqn ago</time>
            </p>
            <p><small>Designer</small></p>
          </div>
          </div>

    


      


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

  @endsection
