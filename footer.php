<!-- footer start -->
  <section id="footer">
    <section id="contact">
      <div class="container">
        <div class="row pr">
          <div class="col-md-5 marg_left">
             <ul class="app_download">
            <h3><span>Desktop App</span><span class="mobile">Mobile App</span></h3>
            <li><a href="https://s3.ap-south-1.amazonaws.com/giddhbuildartifacts/giddh-app-6.4.0.dmg" target="_Blank" title="mac os"><i class="fab fa-apple"></i></a></li>

            <li><a href="https://s3.ap-south-1.amazonaws.com/giddhbuildartifacts/giddh-app+Setup+6.4.0.exe" target="_Blank" title="windows"><i class="fab fa-windows"></i></a></li>

            <li><a href="https://s3.ap-south-1.amazonaws.com/giddhbuildartifacts/giddh-app-6.4.0.tar.gz" target="_Blank" title="linux"><i class="fab fa-linux"></i></a></li>
            <span class="separate">Hello</span>
            <li><a href="https://s3.ap-south-1.amazonaws.com/giddhbuildartifacts/giddh-app-6.4.0.dmg" target="_Blank" title="mac os"><i class="fab fa-android"></i></a></li>

            <li><a href="https://s3.ap-south-1.amazonaws.com/giddhbuildartifacts/giddh-app+Setup+6.4.0.exe" target="_Blank" title="windows"><i class="fab fa-apple"></i></a></li>

          </ul>
          <ul class="ul_1">
            <li>About US</li>
            <li>Blog</li>
            <li>Faq</li>
            <li>Upcomming</li>
            <li>Terms of uses</li>
          </ul>
          <ul class="ul_2">
            <li>Create Invoice</li>
            <li>Pricing </li>
            <li>Privacy Policy</li>
            <li>Work With Us </li>
            <li>Affiliate With Us</li>
          </ul>

            <h4 class="headerline contact_head">Contact Us</h4>
            
            <div class="social">
              <a ng-repeat="list in socialList" href="{{list.url}}">
                <div class="scicn {{list.class}}">{{list.name}}</div>
              </a>
            </div>
            <div class="add_div">
            <p>405-406, Capt. C. S. Naidu Arcade, Near Greater</p>
            <p>Kailash Hospital, 10/2 Old Palasia,</p>
            <p>Indore, Madhya Pradesh 452018</p>
            </div>
            <p class="mrT3" class="contact_div">
              Sales : shubhendra@giddh.com<br>
              Support: <a class="font-black" href="mailto:support@giddh.com">support@giddh.com</a><br>
              <i class="glyphicon glyphicon-phone"></i><a class="font-black" href="tel:07939593939">079 39 59 3939</a>
              <i class="glyphicon glyphicon-phone"></i><a class="font-black" href="tel:08033037089">080 33 03 7089</a>
              <!-- <i class="glyphicon glyphicon-phone"/><a class="font-black" href="tel:18003131911">1800-3131-911 (toll free)</a> -->
            </p>
          </div>
          <div class="col-md-5" ng-if="vm.formSubmitted">
            <h4 class="headerline">{{responseMsg}}</h4>
          </div>
          <div class="col-md-5" ng-hide="vm.formSubmitted" >
            <h4 class="headerline head_enq">Tell us!</h4>
            <form novalidate name="contactForm" class="form_marg">
              <div class="row">
                <div class="control-group">
                  <div class="form-group">
                    <label for="name" class="name_name"></label>
                    <input name="contactForm.name" ng-model="vm.cForm.name" type="text" required class="form-control" placeholder="Name*" onkeydown="control1('name_name','Name*')">
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group">
                    <label for="contact" class="contact_contact"></label>
                    <input class="form-control" type="text" name="contactForm.number" ng-model="vm.cForm.number" ng-min="7" ng-max="12" required valid-number placeholder="Contact no.*" onkeydown="control1('contact_contact','Contact*')">
                  </div>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group email_form" style="">
                  <label for="email" class="email_email"></label>
                  <input name="contactForm.email" ng-model="vm.cForm.email" type="email" required class="form-control" placeholder="Email*" onkeydown="control1('email_email','Email*')">
                </div>
              </div>

              <div class="control-group email_form msg_form">
                <div class="form-group" >
                  <label for="message" class="msg_msg"></label>
                  <textarea name="contactForm.message" required ng-model="vm.cForm.message" class="form-control" placeholder="Message*" onkeydown="control1('msg_msg','Message*')"></textarea>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group">
                  <div 
                    theme="'light'"
                    ng-model="vm.cForm.myRecaptchaResponse">
                  </div>
                  <div 
                    vc-recaptcha
                    theme="'light'"
                    key="captchaKey"
                    ng-model="vm.cForm.myRecaptchaResponse">
                  </div>
                </div>
              </div>

              <button ng-click="vm.submitForm(cForm)" class="btn btn-default btn-lg btn_sty" type="submit" ng-disabled="contactForm.$invalid" style="background-color:#0A0A21;height:39.06px;width:106px;font-size: 16px;text-align: center; border-radius:0;padding:0;margin-left: -15px;border:none;color: #FFFFFF">Submit</button>

            </form>
                <div id="footer-mascot" class="visible-md-block visible-lg-block md-offset-1"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of contact -->
  </section>
  <!-- end of footer -->


<script type="text/javascript">
  
    function goTo (state, type) {
      if(type == "state") {window.location = state
      }else {window.open(state)}
    }

    function control1(value,key) {
    $("."+value).empty()
    $("."+value).append(key)
}
</script>

<script type="text/javascript">
/*-------------------------------------------------------------------*/
/*  FULL SCREEN FIRST SECTION
/*-------------------------------------------------------------------*/
jQuery(document).ready(function($){
'use strict';
  $(window).resize(function(){
    $('#videoBg').css({ 'height' : $(window).height() });
  });
  $(window).trigger('resize');
});
/*-----------------------------------------------------------------------------------*/
/*  SCROLL TO TOP OF PAGE
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function($){
'use strict';

  $('.pScroll').click(function(){
    var url = $(this).attr('href');
    $("html, body").animate({ scrollTop: $(url).offset().top}, 500);
    return false;    
  });

  $('.page-scroll').click(function(){
    var url = $(this).attr('href');
    if (window.location.pathname === '/'){
      $("html, body").animate({ scrollTop: $(url).offset().top}, 500);
      return false;
    }
    else{
      window.location.href = window.location.origin+url
    }
  });

  // onwindow scroll
  $(window).scroll(function(){
    
    var scrollTop = $(window).scrollTop();
    
    if( scrollTop > 100 ){
      $('.navbar').addClass('affix')
    } 
    else {
      $('.navbar').removeClass('affix')
    }
    
    // $('.page-scroll').each(function(){
    //   var scrollHref = $(this).attr('href');
    //   if( $(window).scrollTop() > $(scrollHref).offset().top - 100 ) {
    //     $('.page-scroll').removeClass('active');
    //     $(this).addClass('active');
    //   }
    // });
  });
});
</script>

<style type="text/css">
  .form-control
  {
    width:230px;
  }
  #contact textarea.form-control
  {
    width: 100%;
  }
  #contact .form-control
  {
    background:transparent;
    border-color: #525265
  }
  #contact
  {
    background-color: #26263A;
    color:white;
  }
  h4
  {
    margin-left: :-15px;
  }
  .control-group
  {
    margin-bottom: 20px;
  }
  #footer-mascot
  {
    position: absolute;
    bottom: 0;
    max-height: 185.92px;
    max-width: 90.7px;
  }
  .marg_left
  {
    margin-left:107.15px;
  }
  .mobile
  {
  padding-left:135px;
  }
  .separate
  {
    padding-left: 109px;
    visibility: hidden;
  }
  .ul_1
  {
  float:left;
  list-style-type: none;
  margin-left:-40px;
  }
  .ul_2
  {
    float:left; 
    margin-left: 143px; 
    list-style-type: none;
  }
  .contact_head
  {
    padding-top: 72.38px;
  }
  .add_div
  {
    max-width:235px; 
    font-size: 15px; 
    margin-top: -30px;
  }
  .add_div p
  {
    font-size: 15px;
  }
  .contact_div
  {
    margin-top: 32.29px; 
    font-size: 15px;
  }
  .head_enq
  {
    margin-left:185px;
  }
  .form_marg
  {
    margin-left: 200px;
  }
  .email_form
  {
    margin-left: -15px;
  }
  .msg_form 
  {
    width: 340px;
  }
</style>