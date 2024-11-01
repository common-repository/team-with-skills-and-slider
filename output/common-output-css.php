<?php
  twss_fun_template_read_more_style($cssData, $ids);
  twss_fun_template_read_more_script($cssData, $ids);
?>
<style type="text/css">
.twss_main_template, .twss_main_template a{
  box-shadow: none !important;
}
.twss_main_template * {
  box-sizing: border-box !important;
}

.twss-6310-img-responsive{
  width: 100%;
  height: auto;
}

.twss_6310_team_style_<?php echo $ids ?> figcaption{
  padding: 0;
  margin: 0;
  border: none;
}
.twss-6310-owl-carousel .twss-6310-item-<?php echo $ids ?> {
  padding: 5px 0;
}
.twss_6310_team_member_info{
  cursor: pointer;
}
.twss-6310-col-1{
  width: 100%;
  margin-bottom: 30px;
  float: left;
  position: relative;
}
.twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6{
  vertical-align: top;
  /* margin-right: auto;
  margin-bottom: 30px; */
  display: inline-block;
  /* padding-left: 15px;
  padding-right: 15px; */
  margin: 0 <?php echo (isset($cssData['item_margin'])?$cssData['item_margin']:15) ?>px <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px;
}
.twss-6310-col-2{
  width: calc(50% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px);
}
.twss-6310-col-3{
  width: calc(33.33% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px);
}
.twss-6310-col-4{
  width: calc(25% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px);
}
.twss-6310-col-5{
  width: calc(20% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px);
}
.twss-6310-col-6{
  width: calc(16.6667% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px);
}
.twss-6310-col-2:nth-child(2n), .twss-6310-col-3:nth-child(3n), .twss-6310-col-4:nth-child(4n), .twss-6310-col-5:nth-child(5n), .twss-6310-col-6:nth-child(6n){
  margin-right: 0;
}
.twss_6310_modal_social a.twss-popup-link {
  width: <?php echo $cssData['social_icon_width'] - ($cssData['social_border_width'] * 2) ?>px !important;
  height: <?php echo $cssData['social_icon_height'] - ($cssData['social_border_width'] * 2) ?>px !important;
  line-height: <?php echo $cssData['social_icon_height'] - ($cssData['social_border_width'] * 2) ?>px !important;

}
ul.twss_6310_team_style_<?php echo $ids ?>_social i[class*="fa-"]{  
  width: <?php echo ($cssData['social_icon_width'] - ($cssData['social_border_width'] * 2) ) ?>px !important;
  height: <?php echo ($cssData['social_icon_height'] - ($cssData['social_border_width']) * 2) ?>px !important;
  line-height: <?php echo ($cssData['social_icon_height'] - ($cssData['social_border_width']) * 2) ?>px !important;
}

@media screen and (max-width: 767px) {
  .twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6{
    vertical-align: top;
    width: 100%;
    margin-right: 0;
  }
}

<?php
if ($cssData['twss_fun_template_slider'] == 1) {
  ?>
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div {
    position: absolute;
    top: calc(50% - <?php echo ($cssData['slider_prev_next_icon_size'] * 2) ?>px);
    background: <?php echo $cssData['slider_prev_next_bgcolor'] ?>;
    color: <?php echo $cssData['slider_prev_next_color'] ?>;
    margin: 0;
    transition: all 0.3s ease-in-out;
    text-align: center;
    padding: 0;
  }
  #twss-6310-slider-<?php echo $ids;?> .twss-6310-owl-nav div:hover{
    background: <?php echo $cssData['slider_prev_next_hover_bgcolor'];?>;
    /* color: <?php echo $cssData['slider_prev_next_hover_color'] ?>!important; */
  }
  #twss-6310-slider-<?php echo $ids;?> .twss-6310-owl-nav div:hover i{
    color: <?php echo $cssData['slider_prev_next_hover_color'] ?> !important;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev {
    left: <?php echo ($cssData['border_width']) ?>px;
    border-radius: 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% 0;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next {
    right: 0px;
    border-radius: <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>% 0 0 <?php echo $cssData['slider_prev_next_icon_border_radius'] ?>%;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev i[class*="fa-"], #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next i[class*="fa-"]{
    color: <?php echo $cssData['slider_prev_next_color'] ?>;
    top: 0;
    font-size: <?php echo $cssData['slider_prev_next_icon_size'] ?>px;
    line-height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15 ) ?>px;
    height: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
    width: <?php echo ($cssData['slider_prev_next_icon_size'] + 15) ?>px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-prev:hover .fa, #twss-6310-slider-<?php echo $ids ?> .twss-6310-owl-nav div.twss-6310-owl-next:hover .fa{
    color: <?php echo $cssData['slider_prev_next_hover_color'] ?>;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots {
    text-align: center;
    padding-top: 15px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots div {
    width: <?php echo $cssData['slider_indicator_width'] ?>px;
    height: <?php echo $cssData['slider_indicator_height'] ?>px;
    border-radius: <?php echo $cssData['slider_indicator_border_radius'] ?>%;
    display: inline-block;
    background-color: <?php echo $cssData['slider_indicator_color'] ?>;
    margin: 0 <?php echo $cssData['slider_indicator_margin'] ?>px;
  }
  #twss-6310-slider-<?php echo $ids ?> .twss-6310-twss-6310-owl-dots div.active {
    background-color: <?php echo $cssData['slider_indicator_active_color'] ?>;
  }
  <?php
}
else if ($cssData['twss_fun_template_slider'] == 2) {
?>
#twss-6310-category-<?php echo $ids ?> {
  width: 100%;
  text-align: center;
  position: relative;
  /* height: <?php echo $cssData['category_menu_height'] ?>px; */
  line-height: <?php echo $cssData['category_menu_height'] ?>px;
  margin-bottom: <?php echo $cssData['category_margin_bottom']?>px;
  }
#twss-6310-category-<?php echo $ids ?> .twss_6310_category_list{
  display: inline-block;
  padding: 0 <?php echo $cssData['category_padding_right_left'] ?>px;
  position: relative;
  margin-right: <?php echo $cssData['category_margin_right'] ?>px;
  cursor: pointer;
  font-weight: <?php echo $cssData['category_font_weight'] ?>;
  color: <?php echo $cssData['category_font_color'] ?>; 
  border: <?php echo $cssData['category_border_width'] ?>px solid <?php echo $cssData['category_border_color'] ?>;
  font-family: <?php echo $cssData['category_font_family'] ?>;
  background-color: <?php echo $cssData['category_background_color'] ?> ;
  font-size: <?php echo $cssData['category_font_size'] ?>px;
  -webkit-transition: all 0.6s ease 0s;
  -moz-transition: all 0.6s ease 0s;
  -ms-transition: all 0.6s ease 0s;
  -o-transition: all 0.6s ease 0s;
  transition: all 0.6s ease 0s;
}

  #twss-6310-category-<?php echo $ids ?> .twss_6310_category_list:hover{
    color: <?php echo $cssData['category_font_hover_color'] ?>;
    background-color: <?php echo $cssData['category_background_hover_color'] ?> ;
  }
  #twss-6310-category-<?php echo $ids ?> .twss_6310_category_list_active_<?php echo $ids; ?>{
    background-color: <?php echo $cssData['category_active_background_color'];?> !important;
    color:<?php echo $cssData['category_active_font_color'];?> !important;
    border-color:<?php echo $cssData['category_active_border_color'];?> !important;
  } 
<?php
}
?>

.twss_6310_member_skills_wrapper_<?php echo $ids ?> {
  margin: 0;
  width: 100%;
  float: left;
  margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px;
  margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px; 
  display: <?php echo ($cssData['twss_fun_template_skills']) ? 'block' : 'none'; ?>;
}

.twss_6310_skills_label_<?php echo $ids ?> {
  font-size: <?php echo $cssData['skills_font_size'] ?>px;
  text-transform: <?php echo $cssData['skills_text_transform'] ?>;
  color: <?php echo $cssData['skills_font_color'] ?>;
  font-weight: <?php echo $cssData['skills_font_weight'] ?>;
  font-family: '<?php echo str_replace("+", " ", $cssData['skills_font_family']); ?>';
  line-height: <?php echo $cssData['skills_line_height'] ?>px;
  margin-bottom: 2px;
  text-align: left;
  display: block;
}

.twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_member_skills_wrapper_<?php echo $ids ?> .twss_6310_skills_label_<?php echo $ids ?> {
  color: <?php echo $cssData['skills_font_hover_color'] ?>;
}

.twss_6310_skills_prog_<?php echo $ids ?> {
  overflow: hidden;
  height: <?php echo $cssData['progress_bar_height'] ?>px;
  margin-bottom: 6px;
  border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -webkit-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -moz-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  -o-border-radius: <?php echo $cssData['progress_bar_border_radius'] ?>px;
  border: <?php echo $cssData['progress_bar_border_size'] ?>px solid <?php echo $cssData['progress_bar_border_color'] ?>;
  background-color: <?php echo $cssData['progress_bar_background_color'] ?>;
  box-shadow: none;
  -o-box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-sizing: content-box;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;

}

.twss_6310_fill_<?php echo $ids ?> {
  float: left;
  background-color: <?php echo $cssData['progress_bar_color'] ?>;
  height: 100%;
  background-size: 20px 20px;
  <?php
      if ($cssData['progress_bar_type']) {
        ?>background-image: linear-gradient(135deg, <?php echo $cssData['progress_bar_alternate_color'] ?> 25%, transparent 25%,
      transparent 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 50%, <?php echo $cssData['progress_bar_alternate_color'] ?> 75%,
      transparent 75%, transparent);
  <?php
      }
      ?>
} 
</style>

<div class="twss_6310_loading">
  <img src="<?php echo $loading; ?>" />
</div>


<style type="text/css">
.twss_6310_modal, .twss_6310_loading {
  display: none;
  position: fixed;
  z-index: 99999;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
  font-family: sans-serif;
  letter-spacing: .02em;

}


/* twss_6310_modal Content */
.twss_6310_modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 75%;
  padding: 20px 15px 40px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  border-radius: 5px;
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
  margin-bottom: 50px;
}

/* Add Animation */
@-webkit-keyframes twss-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
@keyframes twss-animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes twss-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@-webkit-keyframes twss-animatebottom {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

@keyframes twss-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@-webkit-keyframes twss-animateleft {
  from {left:-300px; opacity:0}
  to {left:0; opacity:1}
}

@keyframes twss-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}

@-webkit-keyframes twss-animateright {
  from {right:-300px; opacity:0}
  to {right:0; opacity:1}
}
/* The Close Button */
.twss-6310-close {
  color: #000;
  float: right;
  font-size: 28px;
  font-weight: bold;
  line-height: 28px;
  padding: 0;
  margin: 0;
  position: absolute;
  right: 20px;
  top: 15px;
}

.twss-6310-close:hover,
.twss-6310-close:focus {
  color: #878787;
  text-decoration: none;
  cursor: pointer;
}
.twss_6310_modal_body_picture {
  float: left;
  width: 300px;
  padding-right: 15px;}
  .twss_6310_modal_body_content{
    width: calc(100% - 315px);
    float: left;
  }
  .twss_6310_modal_body_picture img{
    width: calc(100% - 12px) !important;
    height: auto;
    border: 1px solid #ccc;
    padding: 5px;
  }
  #twss_6310_modal_{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 300;
    color: #727272
  }
  #twss_6310_modal_name{
    text-transform: capitalize;
    font-size: 22px;
    line-height: 30px;
    margin: 0 0 25px;
    font-weight: 600;
    color: #272727;
  }
  #twss_6310_modal_details, #twss_6310_modal_details p{
    font-size: 14px;
    line-height: 20px;
    color: #272727;
    padding: 0;
    margin: 0 0 10px 0;
  }
  .twss_6310_modal_social a{
    width: 35px;
    height: 35px;
    line-height: 35px;
    float:  left;
    margin: 15px 10px 0 0;
    font-size: 18px;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    padding: 0;
    box-shadow: none;
    text-decoration: none;
  }
  .twss_6310_modal_social a:hover{
    box-shadow: none;
  }

  .twss_6310_modal-footer {
    padding: 10px 15px;
    color: white;
  }
  br.twss_6310_clear{
    clear: both;
  }
  .twss_6310_loading{
    padding-top: 170px; /* Location of the box */
    text-align: center;
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
  }
  .twss_6310_loading img{
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: fixed;
    left: calc(50% - 100px);
    top: calc(50% - 120px);
  }
  @media only screen and (max-width: 600px) {
    .twss_6310_modal-content{
      width: 90%;
    }
    .twss_6310_modal_body_content, .twss_6310_modal_body_picture img{
      width: 100% !important;
    }
    .twss_6310_modal_body_picture{
      width: 100%;
      padding: 0;
    }
  }
</style>
<!-- #####################  Slider Section Start #################### -->


<?php
if (!function_exists('twss6310_common_output_css')) {
  function twss6310_common_output_css($ids)
  {
    ?>
    <style type="text/css">
    ul.twss_6310_team_style_<?php echo $ids ?>_social{
      padding: 0 !important;
      list-style: none !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li{
      display: inline-block ;
      padding: 0 !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li a{
      display: inline-block !important;
      box-shadow: none !important;
      text-decoration: none !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    ul.twss_6310_team_style_<?php echo $ids ?>_social li a:hover{
      box-shadow: none !important;
      text-decoration: none !important;
    }
    </style>
    <?php
  }
}
?>
<style>
   .twss-6310-category-filter-row{
      display: table;
   }
   .twss-6310-category-filter-row .twss-6310-row{
      display: inline-block !important;
   }
   .twss-6310-row{
    display: flex;
    flex-wrap: wrap;
    margin-bottom: <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px  !important;
    justify-content: center;
    margin-left: <?php echo (isset($cssData['item_margin'])?$cssData['item_margin']:15) ?>px !important;
    margin-right: <?php echo (isset($cssData['item_margin'])?$cssData['item_margin']:15) ?>px !important;
   }

   .twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6 {
    float: left;
    margin-left: <?php echo (isset($cssData['item_margin'])?$cssData['item_margin']:15) ?>px !important;
    margin-right: <?php echo (isset($cssData['item_margin'])?$cssData['item_margin']:15) ?>px !important;
    }
   .twss-6310-col-2 {
      width: calc(50% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px) !important;
    }
    .twss-6310-col-3 {
      width: calc(33.33% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px) !important;
    }
    .twss-6310-col-4 {
      width: calc(25% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px) !important;
    }
    .twss-6310-col-5 {
      width: calc(20% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px) !important;
    }
    .twss-6310-col-6 {
      width: calc(16.6667% - <?php echo ((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ?>px) !important;
    }
    .twss-6310-search-<?php echo $ids ?> {
      margin: 0 !important;
      width: 100% !important;
    }

@keyframes twss_6310_slideup_1 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateY(50px) scale(.95);
     transform: translateY(50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateY(0) scale(1);
     transform: translateY(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_2 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateY(-50px) scale(.95);
     transform: translateY(-50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateY(0) scale(1);
     transform: translateY(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_3 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(50px) scale(.95);
     transform: translateX(50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) scale(1);
     transform: translateX(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_4 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(-50px) scale(.95);
     transform: translateX(-50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) scale(1);
     transform: translateX(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_5 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(50px) translateY(50px) scale(.95);
     transform: translateX(50px) translateY(50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) translateY(0) scale(1);
     transform: translateX(0) translateY(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_6 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(50px) translateY(-50px) scale(.95);
     transform: translateX(50px) translateY(-50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) translateY(0) scale(1);
     transform: translateX(0) translateY(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_7 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(-50px) translateY(50px) scale(.95);
     transform: translateX(-50px) translateY(50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) translateY(0) scale(1);
     transform: translateX(0) translateY(0) scale(1);
     opacity: 1;
  }
}
@keyframes twss_6310_slideup_8 {
  0% {
     transform: scale(.5);
     -webkit-transform: translateX(-50px) translateY(-50px) scale(.95);
     transform: translateX(-50px)translateY(-50px) scale(.95);
     opacity: 0;
  }
  70% {
     -webkit-transform: translateX(0) translateY(0) scale(1);
     transform: translateX(0) translateY(0) scale(1);
     opacity: 1;
  }
}
.twss-6310-tooltip:hover:after {
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    background: rgba(0, 119, 181, 1);
    border-radius: 5px;
    color: #fff;
    content: attr(tooltip-href);
    margin: -85px 5px 0;
    font-size: 14px;
    line-height: 25px;
    padding: 8px 10px;
    position: absolute;
    z-index: 999;
    min-width: 140px;
  }
    
</style>

