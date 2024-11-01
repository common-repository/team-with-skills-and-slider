<style>
   .twss-6310-row{
      width: 100%;
   }

   .nav-tabs > li.active > a,
   .nav-tabs > li.active > a:focus,
   .nav-tabs > li.active > a:hover
   {
      box-shadow: none;
      font-weight: bold;
   }
   
   .twss-6310-category-filter-row .twss-6310-col-2{
      width: calc(50% - 30px) !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-3{
      width: calc(33.3333% - 30px) !important;
   }
   .twss-6310-category-filter-row .twss-6310-col-4{
      width: calc(25% - 30px);
   }
   .twss-6310-category-filter-row .twss-6310-col-6{
      width: calc(16.6667% - 30px) !important;
   }

   .twss-6310-category-filter-row .twss-6310-col-2,
   .twss-6310-category-filter-row .twss-6310-col-3,
   .twss-6310-category-filter-row .twss-6310-col-4,
   .twss-6310-category-filter-row .twss-6310-col-6{
      margin-left: 15px !important;
      margin-right: 15px !important;
   }

   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div {
      position: absolute;
      top: calc(50% - 35px);
      background: <?php echo $cssData['slider_prev_next_bgcolor'] ?>;
      color: <?php echo $cssData['slider_prev_next_color'] ?>;
      margin: 0;
      transition: all 0.3s ease-in-out;
      font-size: <?php echo $cssData['slider_prev_next_icon_size'] ?>px;
      line-height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
      height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
      width: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
      text-align: center;
      padding: 0;
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div:hover{
      background: <?php echo $cssData['slider_prev_next_hover_bgcolor'] ?>;
      color: <?php echo $cssData['slider_prev_next_hover_color'] ?>;
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-prev {
      left: 0;
      border-radius: 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% 0;
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-next {
      right: 0px;
      border-radius: <?php echo $cssData['slider_prev_next_icon_border_radius']?>% 0 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>%;
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots {
      text-align: center;
      padding-top: 15px;
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots .twss-6310-owl-dot {
      width: <?php echo $cssData['slider_indicator_width'] ?>px;
      height: <?php echo $cssData['slider_indicator_height'] ?>px;
      border-radius: <?php echo $cssData['slider_indicator_border_radius'] ?>%;
      display: inline-block;
      background-color: <?php echo $cssData['slider_indicator_color'] ?>;
      margin: 0 <?php echo $cssData['slider_indicator_margin'] ?>px; 
   }
   #twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div.active {
      background-color: <?php echo $cssData['slider_indicator_active_color'] ?>;
     
   }
</style>
<script>
   var $ = jQuery;
   jQuery(document).ready(function () {
      jQuery("body").on("change", "#twss_background_preview", function () {
         var value = jQuery(this).val();
         jQuery(".twss_6310_tabs_panel_preview").css({"background": value});
      });

      var owl = jQuery("#twss-6310-slider-<?php echo $styleId ?>");
      owl.twss6310OwlCarousel({
         autoplay: true,
         lazyLoad: true,
         loop: true,
         margin: 30,
         autoplayTimeout: <?php echo $cssData['effect_duration'] ?>,
         autoplayHoverPause: true,
         responsiveClass: true,
         autoHeight: true,
         nav: <?php echo $cssData['prev_next_active'] ?>,
         dots: <?php echo $cssData['indicator_activation'] ?>,
         navText: ["<i class='<?php echo $cssData['slider_icon_style'] ?>-left'></i>", "<i class='<?php echo $cssData['slider_icon_style'] ?>-right'></i>"],
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: <?php echo ($cssData['item_per_row'] > 2) ? 2 : $cssData['item_per_row'] ; ?>
            },
            1024: {
               items: <?php echo $cssData['item_per_row']  ?>
            },
            1366: {
               items: <?php echo $cssData['item_per_row']  ?>
            }
         }
      });
      owl.on('mouseleave', function () {
         owl.trigger('stop.owl.autoplay'); //this is main line to fix it
         owl.trigger('play.owl.autoplay', [<?php echo $cssData['effect_duration'] ?>]);
      });

<?php

if ($cssData['prev_next_active'] == 'true') {
   echo ' jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").show();';
} else {
   echo ' jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").hide();';
}

if ($cssData['indicator_activation'] == 'true') {
   echo 'jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").show();';
} else {
   echo 'jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").hide();';
}
?>

      //##############   Live preview settings Start  ##############################

      jQuery("body").on("change", "#twss_6310_slider_duration_<?php echo $styleId ?>", function () {
         jQuery('#twss-6310-slider-<?php echo $styleId ?>').data('owl.carousel').options.autoplayTimeout = jQuery('#twss_6310_slider_duration_<?php echo $styleId ?>').val();
         jQuery('#twss-6310-slider-<?php echo $styleId ?>').trigger('refresh.owl.carousel');
      });

      jQuery("body").on("change", "#twss_6310_active_prev_next, #twss_6310_deactive_prev_next", function () {
         if (jQuery("#twss_6310_active_prev_next").prop('checked')) {
            jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").show();
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').data('owl.carousel').options.nav = true;
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').trigger('refresh.owl.carousel');
         } else {
            jQuery(".twss_6310_prev_next_act, #twss_6310_prev, #twss_6310_next, #twss_6310_prev_font_icon, #twss_6310_next_font_icon").hide();
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').data('owl.carousel').options.nav = false;
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').trigger('refresh.owl.carousel');
         }
      });

      jQuery("body").on("change", "#twss_6310_icon_style", function () {
         jQuery("#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-prev i").attr("class", jQuery(this).val() + "-left");
         jQuery("#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-next i").attr("class", jQuery(this).val() + "-right");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_icon_size", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div { font-size:" + parseInt(jQuery(this).val()) + "px; line-height:" + (parseInt(jQuery(this).val()) + 15) + "px; height:" + (parseInt(jQuery(this).val()) + 15) + "px; width:" + (parseInt(jQuery(this).val()) + 15) + "px;} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_icon_border_radius", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-prev { border-radius:" + "0 " + parseInt(jQuery(this).val()) + "% " + parseInt(jQuery(this).val()) + "% 0" + ";} #twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div.twss-6310-owl-next { border-radius:" + parseInt(jQuery(this).val()) + "% 0 0 " + parseInt(jQuery(this).val()) + "%" + ";}</style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_bgcolor", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div { background:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_color", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div { color:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_hover_bgcolor", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div:hover { background:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_prev_next_hover_color", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-owl-nav div:hover { color:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_active_indicator, #twss_6310_deactive_indicator", function () {
         if (jQuery("#twss_6310_active_indicator").prop('checked')) {
            jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").show();
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').data('owl.carousel').options.dots = true;
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').trigger('refresh.owl.carousel');
         } else {
            jQuery(".twss_6310_indicator_act, #twss_6310_carousel_indicators").hide();
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').data('owl.carousel').options.dots = false;
            jQuery('#twss-6310-slider-<?php echo $styleId ?>').trigger('refresh.owl.carousel');
         }
      });

      jQuery("body").on("change", "#twss_6310_indicator_width", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div { width:" + parseInt(jQuery(this).val()) + "px;} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_indicator_height", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div { height:" + parseInt(jQuery(this).val()) + "px;} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_indicator_active_color", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div.active{ background-color:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_indicator_color", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div { background-color:" + jQuery(this).val() + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      jQuery("body").on("change", "#twss_6310_indicator_border_radius", function () {
         jQuery("<style type='text/css'>#twss-6310-slider-<?php echo $styleId ?> .twss-6310-twss-6310-owl-dots div { border-radius:" + parseInt(jQuery(this).val()) + "%;} </style>").appendTo(".twss_6310_tabs_panel_preview");
      });

      //##############   Live preview settings End  ##############################

   });
</script>
