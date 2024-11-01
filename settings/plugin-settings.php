<?php
if (!defined('ABSPATH'))
   exit;
?>
<div class="twss-6310">
   <h1>Plugin Settings</h1>
   <?php

   wp_enqueue_media();
   twss_6310_color_picker_script();

  $loading = get_option('twss_6310_loading_icon');
  $prev = get_option( 'twss_6310_prev_icon');
  $next = get_option( 'twss_6310_next_icon');
  $google_font = get_option( 'twss_6310_google_font_status');
  $twss_6310_arrow_activation = get_option( 'twss_6310_arrow_activation');
  $twss_6310_arrow_activation = get_option( 'twss_6310_arrow_activation');
  $twss_6310_loading_image_width = get_option( 'twss_6310_loading_image_width') > 0 ? get_option( 'twss_6310_loading_image_width') : 100;
  $twss_6310_loading_image_height = get_option( 'twss_6310_loading_image_height') > 0 ? get_option( 'twss_6310_loading_image_height') : 100;

   if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         //Loading image start
         $twss_6310_loading_icon = get_option('twss_6310_loading_icon');
         if(!$twss_6310_loading_icon){
            $tempArr = ['twss_6310_loading_icon', sanitize_text_field($_POST['loading_image'])];
            $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
         }
         else{
            $tempArr = [sanitize_text_field($_POST['loading_image']), 'twss_6310_loading_icon'];
            $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));            
         }
        $loading =  sanitize_text_field($_POST['loading_image']);

        //Loading image width start
        $twss_6310_loading_image_width = get_option('twss_6310_loading_image_width');
        if(!$twss_6310_loading_image_width){
            $tempArr = ['twss_6310_loading_image_width', sanitize_text_field($_POST['twss_6310_loading_image_width'])];
            $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
        }
        else{
            $tempArr = [sanitize_text_field($_POST['twss_6310_loading_image_width']), 'twss_6310_loading_image_width'];
            $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
        }
       $twss_6310_loading_image_width =  sanitize_text_field($_POST['twss_6310_loading_image_width']);

       //Loading image height start
       $twss_6310_loading_image_height = get_option('twss_6310_loading_image_height');
       if(!$twss_6310_loading_image_height){
         $tempArr = ['twss_6310_loading_image_height', sanitize_text_field($_POST['twss_6310_loading_image_height'])];
         $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
       }
       else{
         $tempArr = [sanitize_text_field($_POST['twss_6310_loading_image_height']), 'twss_6310_loading_image_height'];
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
       }
      $twss_6310_loading_image_height =  sanitize_text_field($_POST['twss_6310_loading_image_height']);

        //Previous image start
        $twss_6310_prev_icon = get_option( 'twss_6310_prev_icon');
        if(!$twss_6310_prev_icon){
         $tempArr = ['twss_6310_prev_icon', sanitize_text_field($_POST['prev_image'])];
         $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
        }
        else{
         $tempArr = [sanitize_text_field($_POST['prev_image']), 'twss_6310_prev_icon'];
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
        }
       $prev =  sanitize_text_field($_POST['prev_image']);

       //Next image start
       $twss_6310_next_icon = get_option( 'twss_6310_next_icon');
        if(!$twss_6310_next_icon){
            $tempArr = ['twss_6310_next_icon', sanitize_text_field($_POST['next_image'])];
            $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
        }
        else{
         $tempArr = [sanitize_text_field($_POST['next_image']), 'twss_6310_next_icon'];
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
        }
       $next =  sanitize_text_field($_POST['next_image']);


       //Active / Inactive Arrow
       if($twss_6310_arrow_activation != ''){
         $tempArr = [sanitize_text_field($_POST['twss_6310_arrow_activation']), 'twss_6310_arrow_activation'];
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
        }
        else{
         $tempArr = ['twss_6310_arrow_activation', sanitize_text_field($_POST['twss_6310_arrow_activation'])];
         $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
        }
        $twss_6310_arrow_activation = sanitize_text_field($_POST['twss_6310_arrow_activation']);

        //Google Font Start
        if($google_font != ''){
         $tempArr = [sanitize_text_field($_POST['google_font']), 'twss_6310_google_font_status'];
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options set option_value='%s' where option_name = '%s'", $tempArr));
        }
        else{
         $tempArr = ['twss_6310_google_font_status', sanitize_text_field($_POST['google_font'])];
         $wpdb->query($wpdb->prepare("insert into {$wpdb->prefix}options set option_name = %s, option_value = %s", $tempArr));
        }

        $google_font = sanitize_text_field($_POST['google_font']);
      }
   }

   
   if(!$loading){
     $loading = twss_6310_plugin_dir_url . 'assets/image/loading.gif ';
   }
   if(!$prev){
      $prev = twss_6310_plugin_dir_url . 'assets/image/prev.png';
   }
   if(!$next){
      $next = twss_6310_plugin_dir_url . 'assets/image/next.png';
   }
   ?>
   <form action="" method="post">
      <?php wp_nonce_field("twss-6310-nonce-update") ?>
      <div class="twss-6310-modal-body-form">
         <table width="100%" cellpadding="10" cellspacing="0">
            <tr>
               <td width="200px"><b>Loading Image</b></td>
               <td width="500px">
                  <input type="text" required name="loading_image" id="loading-image-src" value="<?php echo $loading ?>" class="twss-form-input lg">
                  <input type="button" id="loading-image" value="Change Image" class="twss-btn-default">
               </td>
               <td>
                  <img src="<?php echo $loading ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Loading Image Width</b></td>
               <td width="500px" colspan="2">
                  <input type="number" min="1" required name="twss_6310_loading_image_width" value="<?php echo $twss_6310_loading_image_width ?>" class="twss-form-input lg">
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Loading Image Height</b></td>
               <td width="500px" colspan="2">
                  <input type="number" min="1" required name="twss_6310_loading_image_height" value="<?php echo $twss_6310_loading_image_height ?>" class="twss-form-input lg">
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Previous Arrow</b></td>
               <td width="500px">
                  <input type="text" required name="prev_image" id="prev-image-src" value="<?php echo $prev ?>" class="twss-form-input lg">
                  <input type="button" id="prev-image" value="Change Image" class="twss-btn-default">
               </td>
               <td>
                  <img src="<?php echo $prev ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px"><b>Next Arrow</b></td>
               <td width="500px">
                  <input type="text" required name="next_image" id="next-image-src" value="<?php echo $next ?>" class="twss-form-input lg">
                  <input type="button" id="next-image" value="Change Image" class="twss-btn-default">
               </td>
               <td>
                  <img src="<?php echo $next ?>" height="70" />
               </td>
            </tr>
            <tr>
               <td width="200px">
                  <b>Active/Inactive Arrow:</b><br />
               </td>
               <td width="500px" colspan="2">
                  <input type="radio" name="twss_6310_arrow_activation" value="0"  <?php echo ($twss_6310_arrow_activation != 1) ? ' checked':'' ?>> Yes &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="twss_6310_arrow_activation" value="1" <?php echo ($twss_6310_arrow_activation == 1) ? ' checked':'' ?>> No
               </td>
            </tr>
            <tr>
               <td width="200px">
                  <b>Google Font Activation:</b><br />
                  <small>Select yes to enable Google fonts rendering on output</small>
               </td>
               <td width="500px" colspan="2">
                  <input type="radio" name="google_font" value="-1"  <?php echo ($google_font != 1) ? ' checked':'' ?>> Yes &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="google_font" value="1" <?php echo ($google_font == 1) ? ' checked':'' ?>> No
               </td>
            </tr>
            <tr>
               <td colspan="3">
                  <input type="submit" name="update" class="twss-btn-primary twss-margin-right-10" value="Update" />
               </td>
            </tr>
         </table>
      </div>
      <br class="twss-6310-clear" />
   </form>
   <script>
      jQuery(document).ready(function() {
         /* ######### Media Start ########### */
         jQuery("body").on("click", "#loading-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#loading-image-src").val(image_url);
               });

            jQuery("#twss_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });

         jQuery("body").on("click", "#prev-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#prev-image-src").val(image_url);
               });

            jQuery("#twss_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });

         jQuery("body").on("click", "#next-image", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload Image',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#next-image-src").val(image_url);
               });

            jQuery("#twss_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });
      });
   </script>