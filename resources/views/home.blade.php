  @extends('layouts.base')

@section('content')


  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">ACCES GESTION </h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">home</li>
            </ol>
          </nav>
        </div>
      </div>
    
    </div>
  </div>

<section class="content">       
      <div class="row">
     
       
    
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-primary pull-up"  onclick="location.href='/Biens';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa fa-home pb-10 font-size-50"></i>
                  </span><br>
          
                  <span>Biens</span>
              </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-success pull-up"onclick="location.href='/Proprietaire';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa  fa-user-circle-o  pb-10 font-size-50"></i>
                  </span><br>
               
                  <span>Proprietarie</span>
              </div>
            </div>
        </div>
  
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-info pull-up" onclick="location.href='/Locataire';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa fa-user pb-10 font-size-50"></i>
                  </span><br>
        
                  <span>Locataire</span>
              </div>
            </div>
        </div>
           <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-warning pull-up"onclick="location.href='/Location';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa fa-calendar pb-10 font-size-50"></i>
                  </span><br>
              
                  <span>Location</span>
              </div>
            </div>
        </div>
      <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-danger pull-up" onclick="location.href='/quittance';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa fa-file-archive-o pb-10 font-size-50"></i>
                  </span><br>
                
                  <span>Quittance</span>
              </div>
            </div>
        </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="box bg-dark pull-up" onclick="location.href='/Fraisagence';">
              <div class="box-body text-center">
                  <span>
                    <i class="fa  fa-money pb-10 font-size-50"></i>
                  </span><br>
                  
                  <span>Frais Agence</span>
              </div>
            </div>
        </div>
    




<div class="col-6 col-lg-6">

    <div class="col-12 col-lg-12">
   <a class="weatherwidget-io" href="https://forecast7.com/en/35d76n5d83/tangier/" data-label_1="TANGER" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-theme="original" >TANGER WEATHER</a>
    </div>





  <div class="col-12 col-lg-12" style="margin-top: 20px;">
    <div class="box direct-chat direct-chat-info">
                <div class="box-header with-border">
                  <h4 class="box-title">Direct Chat</h4>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 310px;"><div class="direct-chat-messages" style="overflow: hidden; width: auto; height: 310px;">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg mb-30">
                      <div class="clearfix mb-15">
                    
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img avatar" src="../images/user1-128x128.jpg" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <p>Pas Encore Fini</p>
        
                      </div>

                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right mb-30">
                      <div class="clearfix mb-15">
                    
                      </div>
                      <div class="direct-chat-text">
                       
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                  </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 278.551px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="../images/user1-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Bryson
                                  <small class="contacts-list-date pull-right">April 14, 2017</small>
                                </span>
                            <span class="contacts-list-email">info@.multipurpose.com</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="../images/user7-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Vincent
                                  <small class="contacts-list-date pull-right">March 14, 2017</small>
                                </span>
                            <span class="contacts-list-email">sonu@gmail.com</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                          <div class="input-group-addon">
                            <div class="align-self-end gap-items">
                              <span class="publisher-btn file-group">
                                <i class="fa fa-paperclip file-browser"></i>
                                <input type="file">
                              </span>
                              <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                              <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                            </div>
                          </div>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>

    </div>

  </div>

 







          
       <div class="col-md-6 col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h5 class="box-title">Fichier important </h5>
                   
                </div>
                <div class="box-body p-0">
                  <div class="media-list media-list-divided">
                  

                    <div class="media media-single">
                      <span class="font-size-24 text-info"><i class="fa fa-file-word-o"></i></span>
                      <span class="title">CONTRAT DE COURTAGE SANS EXCLUSIVITE Location</span>
                      <a class="font-size-18 text-gray hover-info" href="/docs/location.doc"><i class="fa fa-download"></i></a>
                    </div>

                      <div class="media media-single">
                      <span class="font-size-24 text-info"><i class="fa fa-file-word-o"></i></span>
                      <span class="title">CONTRAT DE COURTAGE SANS EXCLUSIVITE Vente</span>
                      <a class="font-size-18 text-gray hover-info" href="/docs/vente.doc"><i class="fa fa-download"></i></a>
                    </div>



                    <div class="media media-single">
                      <span class="font-size-24 text-primary"><i class="fa fa-file-text"></i></span>
                      <span class="title">RIB ACCES</span>
                      <a class="font-size-18 text-gray hover-info" href="/docs/rib acces.jpg"><i class="fa fa-download"></i></a>
                    </div>
                     <div class="media media-single">
                      <span class="font-size-24 text-primary"><i class="fa fa-file-text"></i></span>
                      <span class="title">RIB BRAHIM BMCE</span>
                      <a class="font-size-18 text-gray hover-info" href="/docs/ribbrahimlachaibibmce.jpg"><i class="fa fa-download"></i></a>
                    </div>
                     <div class="media media-single">
                      <span class="font-size-24 text-primary"><i class="fa fa-file-text"></i></span>
                      <span class="title">RIB BRAHIM Attijari</span>
                      <a class="font-size-18 text-gray hover-info" href="/docs/ribbrahimlachaibialtijari.jpg"><i class="fa fa-download"></i></a>
                    </div>

                   

                  

                    
                  </div>
              </div>
            </div>
          </div>                
    </section>





<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>



<script type="text/javascript">
    


    $('#Biens').click(function() {
  alert('You clicked the DIV.');
});


</script>
  @endsection
