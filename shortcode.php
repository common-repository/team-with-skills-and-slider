<?php

global $wpdb;
$style_table = $wpdb->prefix . 'twss_6310_style';
$icon_table = $wpdb->prefix . 'twss_6310_icons';
$member_table = $wpdb->prefix . 'twss_6310_member';
$category_table = $wpdb->prefix . 'twss_6310_category';

$categoryData = $wpdb->get_results("SELECT * FROM $category_table order by serial asc", ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
if(!$styledata || $styledata == '') return;
twss_6310_check_field_exists();
$styleTemplate = (int) substr($styledata['style_name'], -2);
$css = explode("!!##!!", $styledata['css']);
$key = explode(",", $css[0]);
$value = explode("||##||", $css[1]);
$cssData = array_combine($key, $value);
$styleId = substr($styledata['style_name'], -2);

$results = twss_6310_extract_members($styledata['memberid'], $ids);
$members = $results['members'];
$filterList = $results['filter_activation'];

$desktop_row = $cssData['item_per_row'];
$tablet_row = isset($cssData['tablet_item_per_row']) ? $cssData['tablet_item_per_row'] : 1;
$mobile_row = isset($cssData['mobile_item_per_row']) ? $cssData['mobile_item_per_row'] : 1;
$template_order  = explode(",", $styledata['template_order']);

$loading = get_option('twss_6310_loading_icon');
if(!$loading){
  $loading = twss_6310_plugin_dir_url . 'assets/image/loading.gif ';
}
$loading_width = get_option( 'twss_6310_loading_image_width') > 0 ? get_option( 'twss_6310_loading_image_width') : 100;
$loading_height = get_option( 'twss_6310_loading_image_height') > 0 ? get_option( 'twss_6310_loading_image_height') : 100;

if (file_exists(twss_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   $fonts = '';
   $google_font = get_option( 'twss_6310_google_font_status');
   if ($google_font != 1) {
      $fonts = (isset($cssData['member_font_family'])?str_replace("+", " ", $cssData['member_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['designation_font_family'])?str_replace("+", " ", $cssData['designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['details_font_family'])?str_replace("+", " ", $cssData['details_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['read_more_font_family'])?str_replace("+", " ", $cssData['read_more_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['contact_font_family'])?str_replace("+", " ", $cssData['contact_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['skills_font_family'])?str_replace("+", " ", $cssData['skills_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['category_font_family'])?str_replace("+", " ", $cssData['category_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_01_name_font_family'])?str_replace("+", " ", $cssData['modal_01_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_01_designation_font_family'])?str_replace("+", " ", $cssData['modal_01_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_01_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_01_contact_label_font_family']):'Amaranth');

      $fonts .= '|' . (isset($cssData['modal_01_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_01_contact_content_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_01_description_font_family'])?str_replace("+", " ", $cssData['modal_01_description_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['modal_02_name_font_family'])?str_replace("+", " ", $cssData['modal_02_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_02_designation_font_family'])?str_replace("+", " ", $cssData['modal_02_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_02_description_font_family'])?str_replace("+", " ", $cssData['modal_02_description_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_02_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_02_contact_label_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_02_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_02_contact_content_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['modal_03_name_font_family'])?str_replace("+", " ", $cssData['modal_03_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_03_designation_font_family'])?str_replace("+", " ", $cssData['modal_03_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_03_description_font_family'])?str_replace("+", " ", $cssData['modal_03_description_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_03_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_03_contact_label_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_03_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_03_contact_content_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['modal_04_name_font_family'])?str_replace("+", " ", $cssData['modal_04_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_04_designation_font_family'])?str_replace("+", " ", $cssData['modal_04_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_04_description_font_family'])?str_replace("+", " ", $cssData['modal_04_description_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_04_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_04_contact_label_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_04_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_04_contact_content_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['modal_05_name_font_family'])?str_replace("+", " ", $cssData['modal_05_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_05_designation_font_family'])?str_replace("+", " ", $cssData['modal_05_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_05_description_font_family'])?str_replace("+", " ", $cssData['modal_05_description_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_05_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_05_contact_label_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_05_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_05_contact_content_font_family']):'Arimo');
      $fonts .= '|' . (isset($cssData['modal_06_name_font_family'])?str_replace("+", " ", $cssData['modal_06_name_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_06_designation_font_family'])?str_replace("+", " ", $cssData['modal_06_designation_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_06_description_font_family'])?str_replace("+", " ", $cssData['modal_06_description_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_06_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_06_contact_label_font_family']):'Amaranth');
      $fonts .= '|' . (isset($cssData['modal_06_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_06_contact_content_font_family']):'Amaranth'); 
      wp_enqueue_style("twss-6310-google-font-{$ids}", "https://fonts.googleapis.com/css?family={$fonts}");
   }

   if ($cssData['twss_fun_template_slider'] == 1) {
      wp_enqueue_style('twss-6310-owl-carousel', plugins_url('assets/css/owl.carousel.min.css', __FILE__));
      wp_enqueue_script('twss-6310-owl-carousel-js', plugins_url('assets/js/owl.carousel.min.js', __FILE__), array('jquery'), TRUE);
   }

   $twss_6310_arrow_activation = get_option('twss_6310_arrow_activation');
   if($twss_6310_arrow_activation == 1) {
      echo "<style>.twss_6310_modal_template_before, .twss_6310_modal_template_after{display: none !important}</style>";
   }

   //Previous
   $prev = get_option('twss_6310_prev_icon');
   if(!$prev){
      $prev = twss_6310_plugin_dir_url . 'assets/image/prev.png';
   }

   //Next
   $next = get_option('twss_6310_next_icon');
   if(!$next){
      $next = twss_6310_plugin_dir_url . 'assets/image/next.png';
   }

   echo "
         <div class='twss_6310_loading'>
            <img src='$loading' />
         </div>
         <div 
            class='twss_main_template twss_main_template_{$ids}'
            twss-6310-carousel-styleName='{$styledata['style_name']}'
            twss-6310-carousel-itemPerRow='{$desktop_row}'
            twss-6310-carousel-itemPerRow-tablet='{$tablet_row}'
            twss-6310-carousel-itemPerRow-mobile='{$mobile_row}'
            twss-6310-carousel-id='{$ids}'
            twss-6310-item-margin='".((isset($cssData['item_margin'])?$cssData['item_margin']:15) * 2) ."'
            twss-6310-carousel-active='{$cssData['twss_fun_template_slider']}'
            twss-6310-carousel-autoPlay='{$cssData['effect_duration']}'
            twss-6310-carousel-nav='{$cssData['prev_next_active']}'
            twss-6310-carousel-dot='{$cssData['indicator_activation']}'
            twss-6310-carousel-navText='{$cssData['slider_icon_style']}'
            twss-6310-modal-template='". (isset($cssData['modal_template_number']) ? $cssData['modal_template_number'] : 1) ."'
            twss-6310-search-active='". (isset($cssData['search_activation']) ? 1 : 0) ."'
   >";
  ?>
   <input type="hidden" class="twss-6310-modal-02-custom-text"  value="<?php echo isset($cssData['modal_02_custom_text']) ? twss_6310_replace($cssData['modal_02_custom_text']) : "HI I'M" ?>">
   <input type="hidden" class="twss-6310-modal-03-custom-text" value="<?php echo isset($cssData['modal_03_custom_text'])  ? twss_6310_replace($cssData['modal_03_custom_text']) : "I'm" ?>">
   <input type="hidden" class="twss-6310-modal-03-custom-tooltip" value="<?php echo isset($cssData['modal_03_custom_tooltip'])  ? twss_6310_replace($cssData['modal_03_custom_tooltip']) : "HELLO" ?>">

  <?php
   

   // echo "<div class='".(($cssData['twss_fun_template_slider'] != 1) ? '' : 'twss-6310-no-carousel')."'>";
   include twss_6310_plugin_url . "output/{$styledata['style_name']}.php";

   // echo "</div>";
   echo "</div>";

   include twss_6310_plugin_url . "output/css/_css-{$styleId }.php";
   include twss_6310_plugin_url . "output/common-output-css.php";

   wp_enqueue_script('twss-6310-common-output-js', plugins_url('assets/js/twss-common-output.js', __FILE__), array('jquery'), TRUE);

   if ($cssData['custom_css']) {
      echo "<style type='text/css'>" . $cssData['custom_css'] . "</style>";
   }
}
