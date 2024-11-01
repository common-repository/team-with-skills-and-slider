jQuery(window).on('load', function() { 
  let twss_6310_loading = jQuery('.twss_6310_loading');
  let loadingCounter = 0;
  setTimeout(function(){ 
    twss_6310_loading.each(function(){
      if(loadingCounter == 1){
        jQuery(this).remove();
      }
      loadingCounter = 1;
    });
  }, 1000);

  jQuery("body").on("click", "a.open_in_new_tab_class", function(event) {
    event.preventDefault();
    if (jQuery(this).attr("target") == "_blank") {
      window.open(jQuery(this).attr("href"), '_blank').focus();
    } else if (jQuery(this).attr("twss-6310-tooltip") == "yes") {
      let totalWidth = parseInt(jQuery(this).parent().parent().width()) + 20;
      let pos = parseInt(jQuery(this).position().left);

      if (pos - 70 < 0) {
        jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + 0 +
          'px !important; right: initial !important;}</style>');
      } else if (totalWidth > 170 && pos + 90 < totalWidth) {
        jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + (pos - 60) +
          'px !important; right: initial !important;}</style>');
      } else {
        jQuery('head').append('<style>.twss-6310-tooltip:after{left: initial !important; right: ' + 0 +
          'px !important;}</style>');
      }
    } else {
      window.open(jQuery(this).attr("href"), '_parent').focus();
    }
    return false;
  });

  jQuery("body").on("mouseenter", 'a.open_in_new_tab_class', function(event) {
    var attr = jQuery(this).attr('data-social-modal');
    if (typeof attr !== typeof undefined && attr !== false) {
      jQuery('head').append('<style>.twss-6310-tooltip:after{left: initial !important; right: initial !important;}</style>');
    }
    else {
      if (jQuery(this).attr("twss-6310-tooltip") == "yes") {
          let totalWidth = parseInt(jQuery(this).parent().parent().width()) + 20;
          let pos = parseInt(jQuery(this).position().left);

          if (pos - 70 < 0) {
            jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + 0 +
                'px !important; right: initial !important;}</style>');
          } else if (totalWidth > 170 && pos + 90 < totalWidth) {
            jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + (pos - 60) +
                'px !important; right: initial !important;}</style>');
          } else {
            jQuery('head').append('<style>.twss-6310-tooltip:after{left: initial !important; right: ' + 0 +
                'px !important;}</style>');
          }
      }
    } 
  });

  jQuery("body").on("click", ".twss-6310-close", function () {
    jQuery("#mytwss_6310_modal").remove();
    jQuery("#mytwss_6310_modal").fadeOut(500);
    jQuery("body").css({
      "overflow": "auto"
    });
  });

  jQuery(window).click(function (event) {
    if (event.target == document.getElementById('mytwss_6310_modal')) {
      jQuery("#mytwss_6310_modal").remove();
      jQuery("#mytwss_6310_modal").fadeOut(500);
      jQuery("body").css({
        "overflow": "auto"
      });
    }
  });

  //Category Filter
  jQuery(`body`).on('click', '.twss_6310_category_list', function(){
    let rand = [];
    while(rand.length < 6) {
      let randNum = Math.floor(Math.random() * 8) + 1;
      let found = true;
      for(let i = 0; i < rand.length; i++){
          if(rand[i] == randNum) {
            found = false;
            break;
          }
      }
      if(found){
          rand.push(randNum);
      }
    }
    let ids = jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-id');
    let itemPerRow = jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-itemperrow');
    let attr = jQuery(this).attr('twss-data-filter');
    var searchActive = jQuery(this).closest('.twss_main_template').attr('twss-6310-search-active');
    var value = jQuery(`.twss-6310-search-template-${ids} input`).val().toLowerCase(); 

    jQuery(`.twss_main_template_${ids} .twss_6310_category_list_${ids}`).removeClass(`twss_6310_category_list_active_${ids}`);
    jQuery(this).addClass(`twss_6310_category_list_active_${ids}`);
    jQuery(`.twss_main_template_${ids} .twss-6310-row:not(.${attr})`).hide();
    
    if(value != '' && value.trim() != '' && searchActive == true){
      jQuery(`.twss_main_template_${ids} .${attr} .twss-6310-col-${itemPerRow}`).filter(function() {
        jQuery(`.${attr}`).show();
        var title = jQuery(this).find(`.twss_6310_team_style_${ids}_title`).text().toLowerCase();
        var designation = jQuery(this).find(`.twss_6310_team_style_${ids}_designation`).text().toLowerCase();
        let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if(status){
          jQuery(this).show();
        }
        else{
          jQuery(this).hide();
        }
      });
    }
    else{
      jQuery(`.twss_main_template_${ids} .${attr}`).show();
      jQuery(`.twss_main_template_${ids} .${attr} .twss-6310-col-${itemPerRow}`).filter(function() {
        jQuery(this).show();
      });
    }

    jQuery(`
    <style type='text/css'>
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 1) {
          -webkit-animation: twss_6310_slideup_${rand[0]} 1s ease;
          animation: twss_6310_slideup_${rand[0]} 1s ease;
      }
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 2) {
          -webkit-animation: twss_6310_slideup_${rand[1]} 1s ease;
          animation: twss_6310_slideup_${rand[1]} 1s ease;
      }
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 3) {
          -webkit-animation: twss_6310_slideup_${rand[2]} 1s ease;
          animation: twss_6310_slideup_${rand[2]} 1s ease;
      }
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 4) {
          -webkit-animation: twss_6310_slideup_${rand[3]} 1s ease;
          animation: twss_6310_slideup_${rand[3]} 1s ease;
      }
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 4) {
          -webkit-animation: twss_6310_slideup_${rand[4]} 1s ease;
          animation: twss_6310_slideup_${rand[4]} 1s ease;
      }
      .twss-6310-noslider-${ids} .${attr} > div:nth-child(4n + 4) {
          -webkit-animation: twss_6310_slideup_${rand[5]} 1s ease;
          animation: twss_6310_slideup_${rand[5]} 1s ease;
      }   
    </style>`).appendTo(`.twss_main_template_${ids}`);
  });

  //Search Filter 
  jQuery("body").on("keyup", '.twss-6310-search-box', function() {   
    var ids = jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-id'); 
    let itemPerRow = jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-itemperrow');
    var value = jQuery(this).val().toLowerCase();
    var category = Number(jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-active'));

    let className = '';
    if(category == 2){
      className = jQuery(`.twss_main_template_${ids} .twss_6310_category_list_active_${ids}`).attr('twss-data-filter');
    }
    else{
      className = `c-1588100157`;
    }

    jQuery(`.twss_main_template_${ids} .${className} .twss-6310-col-${itemPerRow}`).filter(function() {
      var title = jQuery(this).find(`.twss_6310_team_style_${ids}_title`).text().toLowerCase();
      var designation = jQuery(this).find(`.twss_6310_team_style_${ids}_designation`).text().toLowerCase();
      let status = title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if(status){
          jQuery(this).show(300);
        }
        else{
          jQuery(this).hide(300);
        }
    });
  });

  jQuery(".twss_main_template").each(function(){
    let ids = jQuery(this).attr('twss-6310-carousel-id');

    jQuery("body").on("mouseenter mouseleave", `.twss_6310_team_style_${ids}`, function(e) {
      e.preventDefault();
      var orgImage = jQuery(this).find('img').attr('src');
      var hoverImage = jQuery(this).find('img').attr('image_hover');
      if (hoverImage.length > 5) {
         jQuery(this).find('img').attr("src", hoverImage);
         jQuery(this).find('img').attr("image_hover", orgImage);
      }
   });

    //Fixed lazyLoad plugin error
    var $allImages = jQuery(`#twss-6310-slider-${ids} .twss-6310-item-${ids} img`);
    $allImages.each(function(){
      var clsName = jQuery(this).attr('class');
      var alt = jQuery(this).attr('alt');
      var hoverImage = jQuery(this).attr('data-6310-hover-image');
      if(typeof clsName !== typeof undefined && clsName !== false && clsName !== ''){
        var attributes = this.attributes;
        var i = attributes.length;
        while( i-- ){
          this.removeAttributeNode(attributes[i]);
        }
        var src = jQuery(this).closest(`.twss-6310-item-${ids}`).attr('data-twss-6310-image-attr');
        jQuery(this).attr({'src': src, 'class':clsName, 'alt': alt, 'data-6310-hover-image': hoverImage});	
      }
    });

    setTimeout(function(){ 
      $allImages = jQuery(`#twss-6310-slider-${ids} .twss-6310-item-${ids} img`);
      $allImages.each(function(){
        var clsName = jQuery(this).attr('class');
        var alt = jQuery(this).attr('alt');
        var hoverImage = jQuery(this).attr('data-6310-hover-image');
        if(typeof clsName !== typeof undefined && clsName !== false && clsName !== ''){
          var attributes = this.attributes;
          var i = attributes.length;
          while( i-- ){
            this.removeAttributeNode(attributes[i]);
          }
          var src = jQuery(this).closest(`.twss-6310-item-${ids}`).attr('data-twss-6310-image-attr');
          jQuery(this).attr({'src': src, 'class':clsName, 'alt': alt, 'data-6310-hover-image': hoverImage});	
        }
      });
    }, 3000);

    setTimeout(function(){ 
      $allImages = jQuery(`#twss-6310-slider-${ids} .twss-6310-item-${ids} img`);
      $allImages.each(function(){
        var clsName = jQuery(this).attr('class');
        var alt = jQuery(this).attr('alt');
        var hoverImage = jQuery(this).attr('data-6310-hover-image');
        if(typeof clsName !== typeof undefined && clsName !== false && clsName !== ''){
          var attributes = this.attributes;
          var i = attributes.length;
          while( i-- ){
            this.removeAttributeNode(attributes[i]);
          }
          var src = jQuery(this).closest(`.twss-6310-item-${ids}`).attr('data-twss-6310-image-attr');
          jQuery(this).attr({'src': src, 'class':clsName, 'alt': alt, 'data-6310-hover-image': hoverImage});	
        }
      });
    }, 10000);

    if(jQuery(this).attr('twss-6310-carousel-active') == 1 || jQuery(this).attr('twss-6310-carousel-active') == '1'){
      jQuery('#twss-6310-noslider-' + jQuery(this).attr('twss-6310-carousel-id')).hide();
      var owl = jQuery("#twss-6310-slider-" + jQuery(this).attr('twss-6310-carousel-id'));
      owl.twss6310OwlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: Number(jQuery(this).attr('twss-6310-item-margin')),
        autoplayTimeout: jQuery(this).attr('twss-6310-carousel-autoPlay'),
        autoplayHoverPause: true,
        responsiveClass: true,
        autoHeight: true,
        nav: (jQuery(this).attr('twss-6310-carousel-nav') == 'true' || jQuery(this).attr('twss-6310-carousel-nav') == true) ? true : false,
        dots: (jQuery(this).attr('twss-6310-carousel-dot') == 'true' || jQuery(this).attr('twss-6310-carousel-dot') == true) ? true : false,
        navText: ["<i class='"+jQuery(this).attr('twss-6310-carousel-navText')+"-left'></i>", "<i class='"+jQuery(this).attr('twss-6310-carousel-navText')+"-right'></i>"],
        responsive: {
          0: {
            items: jQuery(this).attr('twss-6310-carousel-itemPerRow-mobile')
          },
          768: {
            items: jQuery(this).attr('twss-6310-carousel-itemPerRow-tablet')
          },
          1024: {
            items: jQuery(this).attr('twss-6310-carousel-itemPerRow')
          }
        }
      });

      

      owl.on('mouseleave', function () {
        owl.trigger('stop.owl.autoplay'); //this is main line to fix it
        owl.trigger('play.owl.autoplay', [jQuery(this).attr('twss-6310-carousel-autoPlay')]);
      });
      setTimeout(function(){
        let allSlider = jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-item`);
        let maxHeight = 0;
        if(allSlider.length) {
          for(let ii = 0; ii < allSlider.length; ii++){
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if(maxHeight > 0) {
          jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-height`).css({
            height: maxHeight
          });
        }
      }, 500);
      setTimeout(function(){
        let allSlider = jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-item`);
        let maxHeight = 0;
        if(allSlider.length) {
          for(let ii = 0; ii < allSlider.length; ii++){
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if(maxHeight > 0) {
          jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-height`).css({
            height: maxHeight
          });
        }
      }, 1000);
      setTimeout(function(){
        let allSlider = jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-item`);
        let maxHeight = 0;
        if(allSlider.length) {
          for(let ii = 0; ii < allSlider.length; ii++){
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if(maxHeight > 0) {
          jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-height`).css({
            height: maxHeight
          });
        }
      }, 1500);
      setTimeout(function(){
        let allSlider = jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-item`);
        let maxHeight = 0;
        if(allSlider.length) {
          for(let ii = 0; ii < allSlider.length; ii++){
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if(maxHeight > 0) {
          jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-height`).css({
            height: maxHeight
          });
        }
      }, 2000);
      setTimeout(function(){
        let allSlider = jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-item`);
        let maxHeight = 0;
        if(allSlider.length) {
          for(let ii = 0; ii < allSlider.length; ii++){
            maxHeight = Math.max(maxHeight, allSlider[ii].offsetHeight);
          }
        }
        if(maxHeight > 0) {
          jQuery(`#twss-6310-slider-${ids} .twss-6310-owl-height`).css({
            height: maxHeight
          });
        }
      }, 3000);
    }
    else{
      jQuery('#twss-6310-slider-' + jQuery(this).attr('twss-6310-carousel-id')).hide();
    }
  });

  jQuery('body').on("mouseenter mouseleave", '.twss_6310_modal .twss_6310_modal_img', function(e) {
    e.preventDefault();
    var orgImage = jQuery(this).attr('src');
    var hoverImage = jQuery(this).attr('data-6310-hover-image');
    if (hoverImage && hoverImage.length > 5) {
       jQuery(this).attr("src", hoverImage);
       jQuery(this).attr("data-6310-hover-image", orgImage);
    }
 });
});  
