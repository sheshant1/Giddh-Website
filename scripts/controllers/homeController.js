(function() {
  'use strict';
  
  function HomeController($scope, $rootScope, $http, $timeout, toastr, $anchorScroll, $location, $window) {
    var $this = this;
    this.selectedTab = 'about';
    this.videoObj = {
      resources: ['https://giddh-fs8eefokm8yjj.stackpathdns.com/public/website/images/Giddh.mp4'],
      poster: 'https://giddh-fs8eefokm8yjj.stackpathdns.com/public/website/images/new/banner.jpg',
      fullScreen: true,
      muted:false,
      zIndex: 0,
      playInfo: {},
      pausePlay: true
    };

    this.pageOptions = {
      sectionsColor: ['#1bbc9b', '#FFF6E7', '#E3422E', '#4BBFC3', '#7BAABE', '#FFF6E7', '#FFF6E7', '#E34A26'],
      navigation: true,
      navigationPosition: 'right',
      scrollingSpeed: 800,
      scrollOverflow: true,
      responsiveWidth: 600,
      responsiveHeight: 400
    };

    this.formSubmitted = false;
    this.captchaKey = '6LcgBiATAAAAAMhNd_HyerpTvCHXtHG6BG-rtcmi';
    
    //submit form
    this.submitForm = function() {
      var unameArr, data = this.cForm;
      this.formProcess = true;
      if (this.hasWhiteSpace(data.name)) {
        unameArr = data.name.split(" ");
        data.uFname = unameArr[0];
        data.uLname = unameArr[1];
      } else {
        data.uFname = data.name;
        data.uLname = "  ";
      }
      if (!(this.validateEmail(data.email))) {
        toastr.warning("Enter valid Email ID", "Warning");
        return false;
      }
      data.company = '';
      if (this.isNullOrEmptyOrUndefined(data.message)) {
        data.message = 'test';
      }
      $http.get('contactus.php?fn=contactUs', {params: data}).then(function(response) {
        $scope.vm.formSubmitted = true;
        if (response.status === 200) {
          return $scope.responseMsg = "Thanks! we will get in touch with you soon";
        } else {
          return $scope.responseMsg = response.data.message;
        }
      },
      function(err) {
        console.log(err);
      }
      );
    };

    //check whitespace
    this.hasWhiteSpace = function(s) {
      return /\s/g.test(s);
    }

    //validate email
    this.validateEmail = function(email) {
      var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return pattern.test(email);
    }

    //check null, empty or undefined
    this.isNullOrEmptyOrUndefined = function(value) {
      return !value
    }

    this.scrollToSection = function(hash) {
      // $location.hash(hash);
      $anchorScroll(hash);
    }


    this.activeTeam = function() {
      var tabName = $window.location.search.split('=');
      if(tabName[1] === 'team') {
        $('.about-content.tab-pane').removeClass('active');
        $('#team').addClass('active');
        this.selectedTab = 'team';
      }
    }

    this.activeTeam();
  };

  angular.module('giddhWebsite').controller('homeController', HomeController);

}).call(this);
