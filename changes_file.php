<!-- <script>

// This code will be pasted in all setting template.

        jQuery("#twss_progress_bar_margin_top").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_member_skills_wrapper_{margin-top:" + value + "!important;} </style>").appendTo(".twss-6310-preview");
        });

        jQuery("#twss_progress_bar_margin_bottom").on("change", function() {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>.twss_6310_member_skills_wrapper_{margin-bottom:" + value + "!important;} </style>").appendTo(".twss-6310-preview");
        });




  
</script>
<style>

/* this code will be placed in every tempalte main class  */
box-shadow: 0 0 <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;

 /* this code will be placed in every template hover section  */
box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;




    /* settings css  */
.twss_6310_member_skills_wrapper_{
    margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
    margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important;
    width:100%;
    float: left !important; 
  }

  /* output css */


  .twss_6310_member_skills_wrapper_<?php echo $ids; ?>{
   width:95% !important;
   transform: translate(3%, 0%) !important;
   float: left !important; 
   margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
   margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important;
 }





///////////////////////////////////////
/* social icon problem */

/////////////////////////////////////////

 div.twss_6310_team_style_01_social div a i{
  padding:<?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 8) ?>px;
}






///////////////////////////////////////
/* <!-- details text alight --> */

/////////////////////////////////////////



text-align: <?php echo $cssData['details_text_align'] ?> !important;


jQuery("#twss_details_text_align").on("change", function() {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'> .twss_6310_team_style_05_profile_details { text-align:" + value + "!important;} </style>").appendTo(".twss-6310-preview");
        });

</style> -->