<?php

if (!function_exists('twss_6310_add_new_media')) {
   function twss_6310_add_new_media($id, $member_table, $icon_table, $template_order, $members = NULL)
   {
      global $wpdb;
      wp_enqueue_media();
      $category_table = $wpdb->prefix . 'twss_6310_category';
      $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY serial ASC', ARRAY_A);
?>
      <div class="twss_6310_add_media">
         <h6>Shortcode</h6>
         <div class="twss_6310_add_media_body_shortcode">
            <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value='[twss_team_skills_slider id="<?php echo $id; ?>"]' />
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Customize Team Members</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_add_new_media">
            <i class="fas fa-plus-circle twss_6310_add_media_add_new_icon"></i>
            Add/Edit Members
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Rearrange Team</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_rearrange_team">
            <i class="fas fa-user-cog twss_6310_add_media_add_new_icon"></i>
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>Rearrange Template</h6>
         <div class="twss_6310_add_media_body" id="twss_6310_rearrange_template">
            <i class="fas fa-cogs twss_6310_add_media_add_new_icon"></i>
         </div>
      </div>
      <br />
      <div class="twss_6310_add_media">
         <h6>How to Use</h6>
         <div class="twss_6310_add_media_body">
            <a href="https://www.youtube.com/watch?v=C_YtOl2uPRQ" target="_blank">
               <i class="fas fa-video fa-2x"></i>
               Watch Video Tutorial
            </a>
         </div>
      </div>

      <?php
      $results = array();
      $order_type = 0;
      if ($members) {
         $memList = explode("||##||", $members);
         $order_type = isset($memList[1]) ? $memList[1] : 0;
         $memberids = explode(",", $memList[0]);
         if ($memberids) {
            foreach ($memberids as $memid) {
               if ($memid) {
                  $results[] = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id=%d", $memid), ARRAY_A);
               }
            }
         }
      }
      ?>

      <!-- Rearrange Team -->
      <div id="twss_6310_rearrange_team_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content" style="padding-left: 15px; padding-right: 15px;">
            <form action="" method="post">
               <input type="hidden" name="rearrange_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_list" id="rearrange_list" value="<?php echo $memList[0] ?>" />
               <input type="hidden" name="rearrange_list_all" id="rearrange_list_all" value="<?php //echo $memList[0] ?>" />
               <div class="twss-6310-modal-header">
                  Rearrange Teams
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <p>
                     <b>Order Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                     <input type="radio" name="order_type" value="0" checked>Custom Order &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="order_type" value="1" <?php if($order_type == 1) echo ' checked'; ?>>Random Order
                  </p>
                  <div class="twss-6310-filter-popup">
                     <p>Drag and drop to change members order</p>
                     <div class="twss-6310-filter-popup-left">
                     <?php
                        if($allCategory){
                           foreach($allCategory as $cat){
                              echo "<div class='twss-6310-filter-popup-title'>Category: ".twss_6310_replace($cat['name'])."</div>";
                              echo "<ul id='twss-6310-sortable'>";
                              foreach ($results as $result) {
                                 echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$result['id']}'>".twss_6310_replace($result['name'])."</li>";
                              }
                              echo "</ul>";
                              break;
                           }
                        }
                     ?>
                     </div>
                     <div class="twss-6310-filter-popup-right">
                     <?php
                        $count = 0;
                        if($allCategory){
                           foreach($allCategory as $cat){
                              if($count){   
                                 echo "<div class='twss-6310-filter-popup-title'>Category: ". twss_6310_replace($cat['name']) ."</div>";
                                 echo "<ul class='twss-6310-sortable' data-id='{$cat['c_name']}' id='twss-6310-sortable-{$cat['c_name']}'>";

                                 if(isset($memList[2]) && $memList[2] != ''){
                                    $memIds = explode('##||##', $memList[2]);
                                    $idList = [];
                                    foreach($memIds as $temp){
                                       $temp = explode('##@@##', $temp);
                                       if(in_array($cat['c_name'], $temp)){
                                          $idList = $temp[1];
                                       }
                                    }
                                    if($idList){
                                       $results = [];
                                       $memberids = explode(",", $idList);
                                       if ($memberids) {
                                          foreach ($memberids as $memid) {
                                             if ($memid) {
                                                $results[] = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id=%d", $memid), ARRAY_A);
                                             }
                                          }
                                       }
                                    }
                                 }

                                 foreach ($results as $result) {
                                    $catList = $result['category'] ? explode(' ', $result['category']) : [];
                                    if($catList && in_array($cat['c_name'], $catList)){
                                       echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$result['id']}'>".twss_6310_replace($result['name'])."</li>";
                                    } 
                                 }
                                 echo "</ul>";
                              }
                              $count++;
                           }
                        }
                     ?>
                     </div>
                  </div>
               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="rearrange-list-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <!-- Rearrange Template -->
      <div id="twss_6310_rearrange_template_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-sm">
            <form action="" method="post">
               <input type="hidden" name="rearrange_template_id" value="<?php echo $id ?>" />
               <input type="hidden" name="rearrange_template_list" id="rearrange_template_list" value="<?php echo $members ?>" />
               <div class="twss-6310-modal-header">
                  Rearrange Template
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <ul id="twss-6310-sortable-template">
                     <?php
                     $serialList = array(
                        "twss_fun_template_name" => "Name",
                        "twss_fun_template_designation" => "Designation",
                        "twss_fun_template_profile_details" => "Profile Details",
                        "twss_fun_template_contact" => "Contact Information",
                        "twss_fun_template_skills" => "Skills",
                        "twss_fun_template_social" => "Social Icon"
                     );
                     foreach ($template_order as $index) {
                        echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$index}'>{$serialList[$index]}</li>";
                     }
                     ?>
                  </ul>
               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="rearrange-template-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-template-sub" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <div id="twss_6310_add_new_media_modal" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-md">
            <form action="" method="post">
               <div class="twss-6310-modal-header">
                  Add/Edit Members
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <input type="hidden" name="styleid" value="<?php echo $id ?>" />
                  <?php wp_nonce_field("twss-6310-nonce-add-member") ?>
                  <table border="0" cellpadding="0" cellspacing="0" class="twss-member-table">
                     <tr height="40" style="font-weight: bold">
                        <td></td>
                        <td>Name</td>
                        <td>Designation</td>
                        <td>Image</td>
                        <td>Icon</td>
                     </tr>
                     <?php
                        $memberList = [];
                        $member_order = [];
                        $allmembers = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
                        if($allmembers){
                           if ($members) {
                              $member_order = explode("||##||", $members);
                              $member_order = ($member_order[0] != '') ? explode(",", $member_order[0]) : [];
                           }
                           if($member_order){
                              foreach($member_order as $mem){
                                 if($mem != ''){
                                    $tempMemebr = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table where id=%d", $mem), ARRAY_A);
                                    if ($tempMemebr) {
                                       $memberList[] = $tempMemebr;
                                    }
                                 }
                              }
                           }

                           foreach ($allmembers as $allMem) {
                              if($member_order && !in_array($allMem['id'], $member_order)){
                                 $memberList[] = $allMem;
                              }
                              else if(!$member_order){
                                 $memberList[] = $allMem;
                              }
                           }
                        }    
                        
                     if (!$memberList) {
                        echo "<tr height='60'>
                           <td colspan='4'>No team members found. For add team member, <a href='" . site_url() . "/wp-admin/admin.php?page=twss-team-showcase-team-member' class='twss-btn-success'>Click Here</a></td>
                     </tr>";
                     } else {
                        foreach ($memberList as $allmember) {
                           if (!$allmember) {
                              continue;
                           }
                           $checked = '';
                           if($member_order && in_array($allmember['id'], $member_order)){
                              $checked = ' checked';
                           }
                     ?>
                           <tr class="twss-row-select" id="<?php echo $allmember['id']; ?>">
                              <td width="20"><input type="checkbox" name="memid[]" value="<?php echo $allmember['id'] ?>" <?php echo $checked; ?> id="chk-box-<?php echo $allmember['id']; ?>" class="twss-row-select-checkbox" /></td>
                              <td width="120"><?php echo twss_6310_replace($allmember['name']) ?></td>
                              <td width="120"><?php echo twss_6310_replace($allmember['designation']) ?></td>
                              <td><img src="<?php echo $allmember['image'] ?>" height="50" /></td>
                              <td>
                                 <?php
                                 if ($allmember['iconids']) {
                                    if ($allmember['iconids']) {
                                       $idExist = explode(',', $allmember['iconids']);
                                       $idExist = implode('', $idExist);
                                       $idExist = trim(str_replace(' ', '', $idExist));
                                       if ($idExist) {
                                          $myIcon = $wpdb->get_results($wpdb->prepare("SELECT * FROM $icon_table WHERE id in (%s)", $allmember['iconids']), ARRAY_A);
                                          if ($myIcon) {
                                             foreach ($myIcon as $k => $v) {
                                                echo "<button class='twss-btn-icon' style='color:" . $v['color'] . "; background-color: " . $v['bgcolor'] . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $v['class_name'] . "'></i></button>";
                                             }
                                          }
                                       }
                                    }
                                 }
                                 ?>
                              </td>
                           </tr>
                     <?php
                        }
                     }
                     ?>
                  </table>

               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="team-member-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>

      <style>
      .twss-6310-ui-state-default {
         padding: 8px 10px;
         cursor: move;
         border-radius: 3px;
      }
   </style>
   <script>
      jQuery(document).ready(function() {
         <?php
            if($order_type == 1){
               echo 'jQuery(".twss-6310-filter-popup").hide();';
            }
         ?>
         jQuery(`#twss-6310-sortable`).sortable();
         jQuery(`#twss-6310-sortable`).disableSelection();

         var sortable = jQuery(".twss-6310-sortable");
         sortable.each(function(){
            let currentId = jQuery(this).attr('id');
            jQuery(`#${currentId}`).sortable();
            jQuery(`#${currentId}`).disableSelection();
         });

         jQuery("#twss-6310-sortable-sub").click(function() {
            let list_sortable = '';
            sortable.each(function(){
            let currentId = jQuery(this).attr('id');
               if(list_sortable != ''){
                  list_sortable += "##||##";
               }
               list_sortable += jQuery(this).data('id') + "##@@##" + jQuery(`#${currentId}`).sortable('toArray').toString();
            });
            jQuery("#rearrange_list").val(jQuery(`#twss-6310-sortable`).sortable('toArray').toString());
            jQuery("#rearrange_list_all").val(list_sortable);
         });

         jQuery("body").on("click", "#twss_6310_rearrange_team", function() {
            var slider = parseInt(jQuery('#twss_fun_template_slider').val());
            
            jQuery("#twss_6310_rearrange_team_modal .twss-6310-modal-content").removeClass('twss-6310-modal-md twss-6310-modal-sm');
            if(slider == 2){     
               jQuery("#twss_6310_rearrange_team_modal .twss-6310-modal-content").addClass('twss-6310-modal-md');
               jQuery('.twss-6310-filter-popup-right, .twss-6310-filter-popup-title').show();
               jQuery('.twss-6310-filter-popup-left').css({
                  'width': 'calc(50% - 15px)',
                  'margin-right': '15px',
                  'float': 'left'
               });
               jQuery('.twss-6310-filter-popup-right').css({
                  'width': '50%',
                  'float': 'left'
               });
            }
            else{
               jQuery('.twss-6310-filter-popup-right, .twss-6310-filter-popup-title').hide();
               jQuery("#twss_6310_rearrange_team_modal .twss-6310-modal-content").addClass('twss-6310-modal-sm');
               jQuery('.twss-6310-filter-popup-left').css({
                  'width': '100%',
                  'margin-right': 0
               });
            }

            jQuery("#twss_6310_rearrange_team_modal").fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
            return false;
         });   


         jQuery('body').on('click', "input[name='order_type']", function(){
            if (jQuery(this).val() == '1' || jQuery(this).val() == 1) {
               jQuery(".twss-6310-filter-popup").hide();
            }
            else{
               jQuery(".twss-6310-filter-popup").show();
            }
         });

         jQuery("body").on("click", ".twss-row-select-checkbox", function(event) {
            event.stopPropagation();
         });
         jQuery("body").on("click", ".twss-row-select", function() {
            var id = jQuery(this).attr("id");
            if (jQuery("#chk-box-" + id).prop('checked') == true) {
               jQuery("#chk-box-" + id).prop('checked', false);
               return false;
            } else {
               jQuery("#chk-box-" + id).prop('checked', true);
               return true;
            }

         });

         jQuery("body").on("click", "#twss_6310_add_new_media", function() {
            jQuery("#twss_6310_add_new_media_modal").fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
            return false;
         });
         jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
            jQuery("#twss_6310_add_new_media_modal, #twss_6310_rearrange_team_modal, #twss_6310_rearrange_template_modal").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         });
         jQuery(window).click(function(event) {
            if (event.target == document.getElementById('twss_6310_rearrange_team_modal')) {
               jQuery("#twss_6310_rearrange_team_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
            if (event.target == document.getElementById('twss_6310_add_new_media_modal')) {
               jQuery("#twss_6310_add_new_media_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
            if (event.target == document.getElementById('twss_6310_rearrange_template_modal')) {
               jQuery("#twss_6310_rearrange_template_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
         });


         jQuery("#twss-6310-sortable-template").sortable();
         jQuery("#twss-6310-sortable-template").disableSelection();
         jQuery("body").on("click", "#twss_6310_rearrange_template", function() {
            jQuery("#twss_6310_rearrange_template_modal").fadeIn(500);
            jQuery("body").css({
               "overflow": "hidden"
            });
         });

         jQuery("#twss-6310-sortable-template-sub").click(function() {
            var list_sortable = jQuery('#twss-6310-sortable-template').sortable('toArray').toString();
            jQuery("#rearrange_template_list").val(list_sortable);
         });

         jQuery(window).click(function(event) {
            if (event.target == document.getElementById('twss_6310_rearrange_team_modal')) {
               jQuery("#twss_6310_rearrange_team_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
            if (event.target == document.getElementById('twss_6310_rearrange_template_modal')) {
               jQuery("#twss_6310_rearrange_template_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
            if (event.target == document.getElementById('twss_6310_add_new_media_modal')) {
               jQuery("#twss_6310_add_new_media_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
         });
      });
   </script>
   <?php
   }
}

if (!function_exists('twss_6310_color_picker_script')) {
   function twss_6310_color_picker_script()
   {
   ?>
      <script>
         jQuery(document).ready(function() {
            jQuery('.twss_6310_color_picker').each(function() {
               jQuery(this).minicolors({
                  control: jQuery(this).attr('data-control') || 'hue',
                  defaultValue: jQuery(this).attr('data-defaultValue') || '',
                  format: jQuery(this).attr('data-format') || 'hex',
                  keywords: jQuery(this).attr('data-keywords') || '',
                  inline: jQuery(this).attr('data-inline') === 'true',
                  letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
                  opacity: jQuery(this).attr('data-opacity'),
                  position: jQuery(this).attr('data-position') || 'bottom left',
                  swatches: jQuery(this).attr('data-swatches') ? jQuery(this).attr('data-swatches').split('|') : [],
                  change: function(value, opacity) {
                     if (!value)
                        return;
                     if (opacity)
                        value += ', ' + opacity;
                     if (typeof console === 'object') {
                        console.log(value);
                     }
                  },
                  theme: 'bootstrap'
               });
            });
         });
      </script>
   <?php
   }
}

if (!function_exists('twss_6310_font_picker_script')) {
   function twss_6310_font_picker_script()
   {
   ?>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery('#twss_jquery_heading_font, #twss_jquery_designation_font, #twss_jquery_heading_font_style1, #twss_jquery_designation_font_style1, #twss_jquery_heading_font_style, #twss_jquery_designation_font_style,#twss_jquery_profile_details_font, #twss-front-end-load,#twss_jquery_contact_font, #contact_font_family, #twss_category_font_family, #description_font_family, #twss_jquery_category_font_family, #twss_jquery_read_more_font_family,#skills_font_family, #twss_jquery_vm_font, #twss_modal_01_name_font_family, #twss_modal_01_designation_font_family, #twss_modal_01_description_font_family, #twss_modal_01_contact_label_font_family, #twss_modal_01_contact_content_font_family, #twss_modal_02_name_font_family, #twss_modal_02_designation_font_family, #twss_modal_02_description_font_family, #twss_modal_02_contact_label_font_family, #twss_modal_02_contact_content_font_family, #twss_modal_03_name_font_family, #twss_modal_03_designation_font_family, #twss_modal_03_description_font_family, #twss_modal_03_contact_label_font_family, #twss_modal_03_contact_content_font_family, #twss_modal_04_name_font_family, #twss_modal_04_designation_font_family, #twss_modal_04_description_font_family, #twss_modal_04_contact_label_font_family, #twss_modal_04_contact_content_font_family, #twss_modal_05_name_font_family, #twss_modal_05_designation_font_family, #twss_modal_05_description_font_family, #twss_modal_05_contact_label_font_family, #twss_modal_05_contact_content_font_family, #twss_modal_06_name_font_family, #twss_modal_06_designation_font_family, #twss_modal_06_description_font_family, #twss_modal_06_contact_label_font_family, #twss_modal_06_contact_content_font_family').fontselect();
         });
      </script>
   <?php
   }
}

function twss_6310_modal_settings_for_member_description($loading, $twss_6310_plugin_url, $cssData)
{  
   global $wpdb;

   //Loading
   $loading = get_option('twss_6310_loading_icon');
   if(!$loading){
   $loading = twss_6310_plugin_dir_url . 'assets/image/loading.gif';
   }

   $loading_width = get_option( 'twss_6310_loading_image_width') > 0 ? get_option( 'twss_6310_loading_image_width') : 100;
   $loading_height = get_option( 'twss_6310_loading_image_height') > 0 ? get_option( 'twss_6310_loading_image_height') : 100;

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
?>
   <div class="twss_6310_loading">
      <img src="<?php echo $loading; ?>" />
   </div>
   <div id="mytwss_6310_modal" class="twss_6310_modal">
      <?php 
          include $twss_6310_plugin_url . 'settings/helper/modal-templates.php';
      ?>
      <br class="twss-6310-clear" />
   </div>
   <script>
      jQuery(document).ready(function(e) {
         jQuery("body").on("click", "a.open_in_new_tab_class", function(event) {
            event.preventDefault();
            if (jQuery(this).closest('.twss_6310_modal').length == 0) {
               if (jQuery(this).attr("target") == "_blank") {
                  window.open(jQuery(this).attr("href"), '_blank').focus();
               } else if (jQuery(this).attr("twss-6310-tooltip") == "yes") {
                  let totalWidth = parseInt(jQuery(this).parent().parent().width()) + 20;
                  let pos = parseInt(jQuery(this).position().left);
                  if (pos - 90 < 0) {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + 0 +
                        'px !important; right: initial !important;}</style>');
                  } else if (totalWidth > 180 && pos + 90 < totalWidth) {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + (pos - 90) +
                        'px !important; right: initial !important;}</style>');
                  } else {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: initial !important; right: ' + 0 +
                        'px !important;}</style>');
                  }
               } else {
                  window.open(jQuery(this).attr("href"), '_parent').focus();
               }
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
                  if (pos - 90 < 0) {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + 0 +
                        'px !important; right: initial !important;}</style>');
                  } else if (totalWidth > 180 && pos + 90 < totalWidth) {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: ' + (pos - 90) +
                        'px !important; right: initial !important;}</style>');
                  } else {
                     jQuery('head').append('<style>.twss-6310-tooltip:after{left: initial !important; right: ' + 0 +
                        'px !important;}</style>');
                  }
               }
            } 
         });

         jQuery("body").on("click", ".twss-6310-custom-field-mail-link-class", function (event) {
            var customField = jQuery(this).attr("twss-data-custom-field");
            if(customField != undefined){
               window.open(customField, '_blank').focus();
               event.preventDefault();
               return false;
            }
         });

         let modalId = '';
         jQuery("body").on("click", ".twss_6310_team_member_info", function() {
            modalId = parseInt(jQuery(this).attr("team-id"));
            var linkId = parseInt(jQuery(this).attr("link-id"));

            if (linkId > 0) {
               if (jQuery(this).attr("target") == "1") {
                  window.open(jQuery(this).attr("link-url"), '_blank').focus();
               } else {
                  window.open(jQuery(this).attr("link-url"), '_parent').focus();
               }
            } else if (modalId > 0) {
               jQuery(".twss_6310_loading").show();
               jQuery("body").css({
                  "overflow": "hidden"
               });
               var datas = {
                  'action': 'twss_6310_team_member_info',
                  'ids': modalId,
                  'styleId': jQuery('.twss_6310_tabs_panel_preview').attr('data-main-template-id'),
                  'clicked': ''
               };

               twss_6310_load_modal(datas);
            }
         });

         jQuery("body").on("click", ".twss_6310_modal_template_before", function() {
            var datas = {
               'action': 'twss_6310_team_member_info',
               'ids': jQuery('.twss_6310_modal').attr('twss-6310-member-id'),
               'styleId': jQuery('.twss_6310_tabs_panel_preview').attr('data-main-template-id'),
               'clicked': 'prev'
            };
            jQuery(".twss_6310_loading").show();
            jQuery('.twss_6310_modal').hide();
            twss_6310_load_modal(datas);
         });

         jQuery("body").on("click", ".twss_6310_modal_template_after", function() {
            var datas = {
               'action': 'twss_6310_team_member_info',
               'ids': jQuery('.twss_6310_modal').attr('twss-6310-member-id'),
               'styleId': jQuery('.twss_6310_tabs_panel_preview').attr('data-main-template-id'),
               'clicked': 'next'
            };
            jQuery(".twss_6310_loading").show();
            jQuery('.twss_6310_modal').hide();
            twss_6310_load_modal(datas);
         });

         jQuery("body").on("click", ".twss-6310-close", function() {
            jQuery("#mytwss_6310_modal").fadeOut(500);
            jQuery("body").css({
               "overflow": "initial"
            });
         });

         jQuery(window).click(function(event) {
            if (event.target == document.getElementById('mytwss_6310_modal')) {
               jQuery("#mytwss_6310_modal").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            }
         });
      });

      function twss_6310_load_modal(datas){
         jQuery.getJSON(ajaxurl, datas, function(data) {
            jQuery(".twss_6310_loading").hide();
            jQuery(".twss_6310_modal-content").css({
               "-webkit-animation-name": "twss-animate" + data['styledata']['effect'],
               "animation-name": "twss-animate" + data['styledata']['effect']
            });
            jQuery("#mytwss_6310_modal").show();
            jQuery('.twss_6310_modal').attr('twss-6310-member-id', data['styledata']['id']);
            var mIds = Number(jQuery(".twss_6310_tabs_panel_preview").attr("data-modal-template"));
            if (mIds == 1) {
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_contact").append(data['contact']);
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_social").append(data['link']);

               jQuery(".twss_6310_modal_template_1 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
            else if (mIds == 2) {
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_2 .twss_6310_modal_contact").append(data['contact']);
            }
            else if (mIds == 3) {
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_3 .twss_6310_modal_contact").append(data['contact']);
            }
            else if (mIds == 4) {
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_contact").append(data['contact']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_template_4 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
            else if (mIds == 5) {
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_5 .twss_6310_modal_contact").append(data['contact']);
            }
            else if (mIds == 6) {
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_img").attr("data-6310-hover-image", data['styledata']['hover_image']);
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_template_6 .twss_6310_modal_contact").append(data['contact']);
            }
            jQuery('.twss_6310_modal').show();
         });
      }
   </script>

   <style type="text/css">
      .twss_6310_modal,
      .twss_6310_loading {
         display: none;
         /* Hidden by default */
         position: fixed;
         /* Stay in place */
         z-index: 9999;
         /* Sit on top */
         padding-top: 50px;
         /* Location of the box */
         left: 0;
         top: 0;
         width: 100%;
         /* Full width */
         height: 100%;
         /* Full height */
         overflow: auto;
         /* Enable scroll if needed */
         background-color: rgba(0, 0, 0, 0.8);
         /* Black w/ opacity */
         font-family: sans-serif;
      }

      /* twss_6310_modal Content */
      .twss_6310_modal-content {
         position: relative;
         background-color: transparent;
         margin: auto;
         padding: 0 0 50px;
         width: 75%;
         border-radius: 5px;
         -webkit-animation-duration: 0.4s;
         animation-duration: 0.4s;
         margin-bottom: 50px;
      }

      /* Add Animation */
      @-webkit-keyframes twss-animatetop {
         from {
            top: -300px;
            opacity: 0
         }

         to {
            top: 0;
            opacity: 1
         }
      }

      @keyframes twss-animatetop {
         from {
            top: -300px;
            opacity: 0
         }

         to {
            top: 0;
            opacity: 1
         }
      }

      @keyframes twss-animatebottom {
         from {
            bottom: -300px;
            opacity: 0
         }

         to {
            bottom: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes twss-animatebottom {
         from {
            bottom: -300px;
            opacity: 0
         }

         to {
            bottom: 0;
            opacity: 1
         }
      }

      @keyframes twss-animateleft {
         from {
            left: -300px;
            opacity: 0
         }

         to {
            left: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes twss-animateleft {
         from {
            left: -300px;
            opacity: 0
         }

         to {
            left: 0;
            opacity: 1
         }
      }

      @keyframes twss-animateright {
         from {
            right: -300px;
            opacity: 0
         }

         to {
            right: 0;
            opacity: 1
         }
      }

      @-webkit-keyframes twss-animateright {
         from {
            right: -300px;
            opacity: 0
         }

         to {
            right: 0;
            opacity: 1
         }
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
         z-index: 9999;
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
         padding-right: 30px;
      }
      .twss_6310_modal_body_content {
         width: calc(100% - 330px);
         float: left;
      }
      .twss_6310_modal_body_picture img {
         float: left;
         width: calc(100% - 10px);
         height: auto;
         padding: 5px;
      }
      #twss_6310_modal_designation {
         font-size: 14px;
         text-transform: uppercase;
         font-weight: 300;
      }
      #twss_6310_modal_name {
         text-transform: capitalize;
         font-size: 22px;
         line-height: 30px;
         margin: 0 0 25px;
         font-weight: 600;
         color: #111;
      }
      #twss_6310_modal_details {
         font-size: 14px;
         line-height: 20px;
      }
      .twss-popup-link {
         width: 35px;
         height: 35px;
         line-height: 35px;
         float: left;
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
      }

      .twss_6310_modal-footer {
         padding: 10px 15px;
         color: white;
      }

      br.twss_6310_clear {
         clear: both;
      }

      .twss_6310_loading {
         padding-top: 170px;
         /* Location of the box */
         text-align: center;
         background-color: rgba(0, 0, 0, 0.7);
         /* Black w/ opacity */
      }

      .twss_6310_loading img {
         border-radius: 50%;
         width: <?php echo $loading_width ?>px;
         height: <?php echo $loading_height ?>px;
      }
   </style>
<?php
}

if (!function_exists('twss_items_per_row')) {
   function twss_items_per_row($id, $rows = NULL)
   {
   ?>
      <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none">
         <div class="twss-6310-modal-content twss-6310-modal-sm">
            <form action="" method="post">
               <div class="twss-6310-modal-header">
                  Numbers of item per row
                  <span class="twss-6310-close">&times;</span>
               </div>
               <div class="twss-6310-modal-body-form">
                  <?php wp_nonce_field("twss_nonce_field_form") ?>
                  <input type="hidden" name="id" value="<?php echo $id ?>" />
                  <table border="0" width="100%" cellpadding="10" cellspacing="0">
                     <tr>
                        <td width="50%"><label class="twss-form-label" for="icon_name">Item Per Row:</label></td>
                        <td>
                           <select name="item_per_row_data" class="twss-form-input">
                              <option value="1" <?php if ($rows == 1) echo " selected" ?>>1 Item per Row</option>
                              <option value="2" <?php if ($rows == 2) echo " selected" ?>>2 Items per Row</option>
                              <option value="3" <?php if ($rows == 3) echo " selected" ?>>3 Items per Row</option>
                              <option value="4" <?php if ($rows == 4) echo " selected" ?>>4 Items per Row</option>
                              <option value="5" <?php if ($rows == 5) echo " selected" ?>>5 Items per Row</option>
                              <option value="6" <?php if ($rows == 6) echo " selected" ?>>6 Items per Row</option>
                           </select>
                        </td>
                     </tr>
                  </table>

               </div>
               <div class="twss-6310-modal-form-footer">
                  <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                  <input type="submit" name="item_per_row_sub" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Update" />
               </div>
            </form>
            <br class="twss-6310-clear" />
         </div>
      </div>
      <script>
         var $ = jQuery;
         jQuery(document).ready(function() {
            jQuery("body").on("click", "#twss_items_per_row", function() {
               jQuery("#twss-6310-modal-add").fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               return false;
            });

            jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
               jQuery("#twss-6310-modal-add, #twss-6310-modal-edit").fadeOut(500);
               jQuery("body").css({
                  "overflow": "initial"
               });
            });
            jQuery(window).click(function(event) {
               if (event.target == document.getElementById('twss-6310-modal-add')) {
                  jQuery("#twss-6310-modal-add").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               } else if (event.target == document.getElementById('twss-6310-modal-edit')) {
                  jQuery("#twss-6310-modal-edit").fadeOut(500);
                  jQuery("body").css({
                     "overflow": "initial"
                  });
               }
            });

         });
      </script>
   <?php
   }
}

?>
