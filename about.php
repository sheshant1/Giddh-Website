<!DOCTYPE HTML>
<html lang="en" ng-app='giddhWebsite'>
<head>
  
  <meta name="description" content="Giddh is Online Cloud Based GST ready accounting software & Bookkeeping software. Giddh accounting makes your data secure and available across globe. "/>
  <meta name="keywords" content="About Giddh"/>
  <title>Giddh ~ About Us</title>
  <?php include 'head.php';?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  

</head>
<body  ng-controller="homeController as vm" id="aboutPage" class="about-section-body lightTrans notAffix">
  
  <ng-include src="'header.html'"></ng-include>

 <section>
    <div class="container-fluid">
        <div class="row">
            <div class="about-head">
                  <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                          <div class="area-flex">
                                              <ul class="nav nav-tabs nav-tabs-about" role="tablist">
                                                  <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About Us</a></li>
                                                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Our Values</a></li>
                                                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Leadership Principles</a></li>
                                                  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">The Team</a></li>
                                              </ul>

                                        
                                          </div>
                            </div>
                        </div>
                  </div>
            </div>
            <div class="about-content">
                  <div class="about-content-head">
                      <div class="container">
                            <h1>About Us</h1>
                            <span>Pioneering the Automation Revolution in Accounting!</span>
                      </div>
                  </div>
                    <div class="about-content-body">
                      <div class="about">
                                <div class="container">
                                            <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="about"><span class="company">Giddh</span> is a team with members who have accounting running in their blood, be it a member of development team or sales team. We are working relentlessly to push forward the automation revolution in bookkeeping industry with its tech solutions.<br><br>
                                                     Since years Indian bookkeeping industry had fallen behind and failed to embrace the technological evolution.To change that once and forever, we have taken the initiative to keep adapting to the latest and greatest technologies to make accounting simple, fast and secure.<br><br>
                                                      <a><i>As farsighted as a vulture:</i></a><br>
                                                       As the name suggests, Giddh provides you with analytical tools that can help you to keep a sharp vision on your accounts so that you can invest your time on analysing them.<br><br>
                                                        We believe in making accounting not only automated but simple like an elementary task by creating a product that can be used by everyone; from a simple web user who wants to simplify his accounting to a highly proficient business owners looking to scale up, above and ahead.</div>
                                            </div>
                                </div>
                            </div>
                     
                    <div class="product">
                      <div class="container">
                        <div class="row">
                              <div class="col-sm-12">
                                    <h1>A product from Walkover</h1>
                              </div>
                          </div>
                      </div>
                    </div>
                    </div>
            </div>
        </div>              
    </div>
</section>



  <!-- end of directive -->
  <?php include 'footScript.php';?>

  <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
      $(window).resize(function(){
        $(".navbar").removeClass('navbar-fixed-top')
        var imgs = $('.section .img-responsive')
        $.each( imgs , function( key, ths ) {
          $(ths).next('div').css({ 
            'height' : $(ths).height(),
            'width' : $(ths).width()
          })
        });
      });
      
    });
    window.onload = function() {
      $(window).trigger('resize');
      $(".navbar").removeClass('navbar-fixed-top')
    }
  </script>

  
</body>
</html>