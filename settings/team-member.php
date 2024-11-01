<?php
if (!defined('ABSPATH'))
   exit;

   $iconDiv = 1;
  
if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="twss-6310">
   <h1>Team Members <button class="twss-btn-success" id="add-team-member">Add New</button></h1>
   <?php
   if (!defined('ABSPATH'))
      exit;
   if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
   }

   $icon_table = $wpdb->prefix . 'twss_6310_icons';
   $member_table = $wpdb->prefix . 'twss_6310_member';
   $category_table = $wpdb->prefix . 'twss_6310_category';
   wp_enqueue_media();

   twss_6310_color_picker_script();

   $allIconList = "";
   $icon_table_data = $wpdb->get_results('SELECT * FROM ' . $icon_table . ' ORDER BY name ASC', ARRAY_A);
   foreach ($icon_table_data as $value) {
      $allIconList .= "<option value=\"{$value['id']}\">{$value['name']}</option>";
   }

   if (!empty($_POST['rearrange-list-save']) && isset($_POST['member_id']) && is_numeric($_POST['member_id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update-skills-order')) {
         die('You do not have sufficient permissions to access this pageddd.');
      } else {
         
         $wpdb->query($wpdb->prepare("UPDATE $member_table SET skills = %s WHERE id = %d", sanitize_text_field($_POST['rearrange_list']), sanitize_text_field($_POST['member_id']) ));
      }
   }

   if (!empty($_POST['rearrange-contact-list-save']) && isset($_POST['member_id']) && is_numeric($_POST['member_id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update-contacts-order')) {
         die('You do not have sufficient permissions to access this pageddd.');
      } else {
         $wpdb->query($wpdb->prepare("UPDATE $member_table SET contacts = %s WHERE id = %d",  sanitize_text_field($_POST['rearrange_list']), sanitize_text_field($_POST['member_id'])));
      }
   }

   if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-delete')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
         $wpdb->query($wpdb->prepare("DELETE FROM {$member_table} WHERE id = %d", $id));
         twss_6310_delete_member_from_category_info($id);
      }
   } else if (!empty($_POST['save']) && $_POST['save'] == 'Save') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-add')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $myData = array();
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['designation']);
         $myData[2] = sanitize_text_field($_POST['pd']);
         if ($myData[2] == 1) {
            $myData[3] = sanitize_text_field($_POST['url']);
            $myData[4] = sanitize_text_field($_POST['new_tab']);
            $myData[5] = "";
            $myData[6] = "";
         } else if ($myData[2] == 2) {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = sanitize_textarea_field($_POST['profile_details_new']);
            $myData[6] = sanitize_text_field($_POST['effect']);
         } else {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = "";
            $myData[6] = "";
         }
         $myData[7] = sanitize_text_field($_POST['image']);
         $myData[8] = sanitize_text_field($_POST['image_hover']);

         $iconIds = "";
         $iconUrl = "";

         if (isset($_POST['icon_link']) && $_POST['icon_link']) {
            $icon_name = array_map('sanitize_text_field', $_POST['icon_name']);
            $icon_link = array_map('sanitize_text_field', $_POST['icon_link']);
            if ($icon_link) {
               foreach ($icon_link as $dkey => $dvalue) {
                  if ($dvalue) {
                     if ($iconIds) {
                        $iconIds .= ",";
                        $iconUrl .= "||||";
                     }
                     $iconIds .= $icon_name[$dkey];
                     $iconUrl .= $icon_link[$dkey];
                  }
               }
            }
         }
         $myData[9] = $iconIds;
         $myData[10] = $iconUrl;


         $skills = "";
         if (isset($_POST['skills_name']) && $_POST['skills_name']) {
            $skills_name = array_map('sanitize_text_field', $_POST['skills_name']);
            $skills_rating = array_map('sanitize_text_field', $_POST['skills_rating']);
            if($skills_name){
               foreach ($skills_name as $key => $value) {
                  if (strlen($value) > 1) {
                     if ($skills) {
                        $skills .= "####||||####";
                     }
                     $skills .= "{$value}||||{$skills_rating[$key]}";
                  }
               }
            }
         }
         $myData[11] = $skills;

         $contacts = "";
         if (isset($_POST['contact_label']) && $_POST['contact_label']) {
            $contact_label = array_map('sanitize_text_field', $_POST['contact_label']);
            $contact_details = array_map('sanitize_text_field', $_POST['contact_details']);
            foreach ($contact_label as $key => $value) {
               if ($value && $contact_details[$key]) {
                  if ($contacts) {
                     $contacts .= "####||||####";
                  }
                  $contacts .= "{$value}||||{$contact_details[$key]}";
               }
            }
         }
         $myData[12] = $contacts;

         $catList = "";
         if (isset($_POST['catid']) && $_POST['catid']) {
            $catid = array_map('sanitize_text_field', $_POST['catid']);
            foreach ($catid as $cat) {
               if($catList){
                  $catList .= " ";
               }
               $catList .= "{$cat}";
            }
         }
         $myData[13] = $catList;

        $wpdb->query($wpdb->prepare("INSERT INTO {$member_table} set
        name = %s,
        designation = %s,
        profile_details_type = %d,
        profile_url = %s,
        open_new_tab = %d,
        profile_details = %s,
        effect = %s,
        image = %s,
        image_hover = %s,
        iconids = %s,
        iconurl = %s,
        skills = %s,
        contacts = %s,
        category = %s", $myData));
       
        
      }
   } else if (!empty($_POST['update']) && $_POST['update'] == 'Update') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['eid']);
         $myData = array();
         $myData[0] = sanitize_text_field($_POST['name']);
         $myData[1] = sanitize_text_field($_POST['designation']);
         $myData[2] = sanitize_text_field($_POST['pd']);
         if ($myData[2] == 1) {
            $myData[3] = sanitize_text_field($_POST['url']);
            $myData[4] = sanitize_text_field($_POST['new_tab']);
            $myData[5] = "";
            $myData[6] = "";
         } else if ($myData[2] == 2) {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = sanitize_textarea_field( $_POST['profile_details_new'] );
            $myData[6] = sanitize_text_field($_POST['effect']);
         } else {
            $myData[3] = "";
            $myData[4] = "";
            $myData[5] = "";
            $myData[6] = "";
         }
         $myData[7] = sanitize_text_field($_POST['image']);
         $myData[8] = sanitize_text_field($_POST['image_hover']);

         $iconIds = "";
         $iconUrl = "";
         if (isset($_POST['icon_link']) && $_POST['icon_link']) {
            $icon_name = array_map('sanitize_text_field', $_POST['icon_name']);
            $icon_link = array_map('sanitize_text_field', $_POST['icon_link']);
            if ($icon_link) {
               foreach ($icon_link as $dkey => $dvalue) {
                  if ($dvalue) {
                     if ($iconIds) {
                        $iconIds .= ",";
                        $iconUrl .= "||||";
                     }
                     $iconIds .= $icon_name[$dkey];
                     $iconUrl .= $icon_link[$dkey];
                  }
               }
            }
         }
         $myData[9] = $iconIds;
         $myData[10] = $iconUrl;

         $skills = "";
         if (isset($_POST['skills_name']) && $_POST['skills_name']) {
            $skills_name = array_map('sanitize_text_field', $_POST['skills_name']);
            $skills_rating = array_map('sanitize_text_field', $_POST['skills_rating']);
            if($skills_name){
               foreach ($skills_name as $key => $value) {
                  if ($value) {
                     if ($skills) {
                        $skills .= "####||||####";
                     }
                     $skills .= "{$value}||||{$skills_rating[$key]}";
                  }
               }
            }
         }
         $myData[11] = $skills;

         $contacts = "";
         if (isset($_POST['contact_label']) && $_POST['contact_label']) {
            $contact_label = array_map('sanitize_text_field', $_POST['contact_label']);
            $contact_details = array_map('sanitize_text_field', $_POST['contact_details']);
            foreach ($contact_label as $key => $value) {
               if ($value && $contact_details[$key]) {
                  if ($contacts) {
                     $contacts .= "####||||####";
                  }
                  $contacts .= "{$value}||||{$contact_details[$key]}";
               }
            }
         }
         $myData[12] = $contacts;

         $catList = "";
         $catid = [];
         if (isset($_POST['catid']) && $_POST['catid']) {
            $catid = array_map('sanitize_text_field', $_POST['catid']);
            foreach ($catid as $cat) {
               if($catList){
                  $catList .= " ";
               }
               $catList .= "{$cat}";
            }
         }
         $myData[13] = $catList;
         $myData[14] = $id;

         $wpdb->query($wpdb->prepare("UPDATE {$member_table} set
          name = %s,
          designation = %s,
          profile_details_type = %d,
          profile_url = %s,
          open_new_tab = %d,
          profile_details = %s,
          effect = %s,
          image = %s,
          image_hover = %s,
          iconids = %s,
          iconurl = %s,
          skills = %s,
          contacts = %s,
          category = %s
          where id = %d", $myData));

         twss_6310_update_all_category_member_info($id, $catid);    
      }
   } else if (!empty($_POST['rearrange']) && $_POST['rearrange'] == 'Rearrange') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-reorder-skills')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field($_POST['id']);
   ?>

         <div id="twss_6310_rearrange_team_modal" class="twss-6310-modal" style="display: none">
            <div class="twss-6310-modal-content twss-6310-modal-sm">
               <form action="" method="post">
                  <?php wp_nonce_field("twss-6310-nonce-update-skills-order") ?>
                  <input type="hidden" name="member_id" value="<?php echo $id ?>" />
                  <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
                  <div class="twss-6310-modal-header">
                     Rearrange Skills Order
                     <span class="twss-6310-close">&times;</span>
                  </div>
                  <div class="twss-6310-modal-body-form">
                     <ul id="twss-6310-sortable">
                        <?php
                        $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);

                        $skills = explode("####||||####", esc_attr($selMember['skills']));
                        foreach ($skills as $key => $skill) {
                           $temp = explode("||||", $skill);
                           echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$skill}'><b>".twss_6310_replace($temp[0]).":</b> ".twss_6310_replace($temp[1])."%</li>";
                        }
                        ?>
                     </ul>
                  </div>
                  <div class="twss-6310-modal-form-footer">
                     <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                     <input type="submit" name="rearrange-list-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-sub" value="Save" />
                  </div>
               </form>
               <br class="twss-6310-clear" />
            </div>
         </div>
         <style>
            .twss-6310-ui-state-default {
               padding: 8px 10px !important;
               cursor: pointer !important;
               border-radius: 3px !important;
            }
         </style>
         <script>
            jQuery(document).ready(function() {
               jQuery('#twss_6310_rearrange_team_modal').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
            });
            jQuery(function() {
               jQuery("#twss-6310-sortable").sortable();
               jQuery("#twss-6310-sortable").disableSelection();
            });
            jQuery(document).ready(function() {
               jQuery("#twss-6310-sortable-sub").click(function() {
                  var list_sortable = jQuery('#twss-6310-sortable').sortable('toArray').join("####||||####");
                  jQuery("#rearrange_list").val(list_sortable);
               });

               jQuery("body").on("click", ".twss-row-select-checkbox", function(event) {
                  event.stopPropagation();
               });


               jQuery("body").on("click", "#twss_6310_rearrange_team", function() {
                  jQuery("#twss_6310_rearrange_team_modal").fadeIn(500);
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  return false;
               });

               jQuery("body").on("click", "#twss_6310_add_new_media", function() {
                  jQuery("#twss_6310_add_new_media_modal").fadeIn(500);
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  return false;
               });
               jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
                  jQuery("#twss_6310_add_new_media_modal, #twss_6310_rearrange_team_modal").fadeOut(500);
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
               });
            });
         </script>


      <?php
      }
   } else if (!empty($_POST['rearrange-contacts']) && $_POST['rearrange-contacts'] == 'Rearrange') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-reorder-contacts')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field( $_POST['id'] );
      ?>

         <div id="twss_6310_rearrange_team_modal" class="twss-6310-modal" style="display: none">
            <div class="twss-6310-modal-content twss-6310-modal-sm">
               <form action="" method="post">
                  <?php wp_nonce_field("twss-6310-nonce-update-contacts-order") ?>
                  <input type="hidden" name="member_id" value="<?php echo $id ?>" />
                  <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
                  <div class="twss-6310-modal-header">
                     Rearrange Contacts Order
                     <span class="twss-6310-close">&times;</span>
                  </div>
                  <div class="twss-6310-modal-body-form">
                     <ul id="twss-6310-sortable">
                        <?php
                        $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
                        $contacts = explode("####||||####", twss_6310_replace(esc_attr( $selMember['contacts'] )));
                        foreach ($contacts as $key => $contact) {
                           $temp = explode("||||", $contact);
                           $labelText =  twss_6310_replace($temp[0]);
                           if(substr($labelText, 0, 7) == 'fab fa-' || substr($labelText, 0, 7) == 'fas fa-') {
                              $labelText = "<i class='{$labelText}'></i>";
                           }
                           
                           echo "<li class='ui-state-default twss-6310-ui-state-default' id='{$contact}'><b>". $labelText .": </b>".twss_6310_replace($temp[1])."</li>";
                        }
                        ?>
                     </ul>
                  </div>
                  <div class="twss-6310-modal-form-footer">
                     <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
                     <input type="submit" name="rearrange-contact-list-save" class="twss-btn-primary twss-pull-right twss-margin-right-10" id="twss-6310-sortable-sub" value="Save" />
                  </div>
               </form>
               <br class="twss-6310-clear" />
            </div>
         </div>
         <style>
            .twss-6310-ui-state-default {
               padding: 8px 10px !important;
               cursor: pointer !important;
               border-radius: 3px !important;
            }
         </style>
         <script>
            var $ = jQuery;
            jQuery(document).ready(function() {
               jQuery('#twss_6310_rearrange_team_modal').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
            });
            jQuery(function() {
               jQuery("#twss-6310-sortable").sortable();
               jQuery("#twss-6310-sortable").disableSelection();
            });
            jQuery(document).ready(function() {
               jQuery("#twss-6310-sortable-sub").click(function() {
                  var list_sortable = jQuery('#twss-6310-sortable').sortable('toArray').join("####||||####");
                  jQuery("#rearrange_list").val(list_sortable);
               });

               jQuery("body").on("click", ".twss-row-select-checkbox", function(event) {
                  event.stopPropagation();
               });


               jQuery("body").on("click", "#twss_6310_rearrange_team", function() {
                  jQuery("#twss_6310_rearrange_team_modal").fadeIn(500);
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  return false;
               });

               jQuery("body").on("click", "#twss_6310_add_new_media", function() {
                  jQuery("#twss_6310_add_new_media_modal").fadeIn(500);
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  return false;
               });
               jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
                  jQuery("#twss_6310_add_new_media_modal, #twss_6310_rearrange_team_modal").fadeOut(500);
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
               });
            });
         </script>


      <?php
      }
   } else if (!empty($_POST['edit']) && $_POST['edit'] == 'Edit') {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'twss-nonce-field-edit')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         $id = (int) sanitize_text_field( $_POST['id'] );
         $selMember = $wpdb->get_row($wpdb->prepare("SELECT * FROM $member_table WHERE id = %d ", $id), ARRAY_A);
      ?>
         <div id="twss-6310-modal-edit" class="twss-6310-modal" style="display: none">
            <div class="twss-6310-modal-content twss-6310-modal-md">
               <form action="" method="post">
                  <?php wp_nonce_field("twss-6310-nonce-update") ?>
                  <input type="hidden" name="eid" value="<?php echo $id; ?>" />
                  <div class="twss-6310-modal-header">
                     Edit Member
                     <span class="twss-6310-close">&times;</span>
                  </div>
                  <div class="twss-6310-modal-body-form">
                     <table border="0" width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                           <td style="width: 150px;"><label class="twss-form-label" for="name-edit">Full Name:</label></td>
                           <td><input type="text" name="name" id="name-edit" value="<?php echo twss_6310_replace(esc_attr( $selMember['name'] )) ?>" class="twss-form-input lg" placeholder="Full Name" /></td>
                        </tr>
                        <tr>
                           <td><label class="twss-form-label" for="designation-edit">Designation:</label></td>
                           <td><input type="text" name="designation" id="designation-edit" value="<?php echo twss_6310_replace(esc_attr( $selMember['designation'] )) ?>" class="twss-form-input lg" placeholder="Designation" /></td>
                        </tr>
                        <tr>
                           <td><label class="twss-form-label" for="pd-edit">Profile Details Type:</label></td>
                           <td>
                              <input type="hidden" name="pd" id="pd-edit" value="<?php echo $selMember['profile_details_type'] ?>" />
                              <button type="button" value="1" class="twss-btn-multi profile-details-type-edit<?php if (esc_attr($selMember['profile_details_type']) == 1) echo " active"; ?>">Link</button>
                              <button type="button" value="2" class="twss-btn-multi profile-details-type-edit<?php if (esc_attr($selMember['profile_details_type']) == 2) echo " active"; ?>">Pop Up</button>
                              <button type="button" value="0" class="twss-btn-multi profile-details-type-edit<?php if (esc_attr($selMember['profile_details_type']) == 0) echo " active"; ?>">None</button>
                           </td>
                        </tr>
                        <tr id="profile_url-edit">
                           <td><label class="twss-form-label" for="url">Profile URL:</label></td>
                           <td>
                              <input type="text" name="url" value="<?php echo esc_attr($selMember['profile_url']) ?>" class="twss-form-input lg" id="url-edit" placeholder="http://www.example.com/profile" />
                           </td>
                        </tr>
                        <tr id="profile_url_tab-edit">
                           <td><label class="twss-form-label" for="new_tab-edit">Open new tab:</label></td>
                           <td>
                              <input type="hidden" name="new_tab" id="new_tab-edit" value="<?php echo esc_attr($selMember['open_new_tab']) ?>" />
                              <button type="button" value="1" class="twss-btn-multi profile-new-tab-edit<?php if (esc_attr($selMember['open_new_tab']) == 1) echo " active" ?>">Yes</button>
                              <button type="button" value="0" class="twss-btn-multi profile-new-tab-edit<?php if (esc_attr($selMember['open_new_tab']) == 0) echo " active" ?>">No</button>
                           </td>
                        </tr>
                        <tr id="profile_details-edit">
                           <td><label class="twss-form-label" for="profile_details">Profile Details:</label></td>
                           <td>
                              <?php
                              $selMember['profile_details'] = twss_6310_replace($selMember['profile_details']);
                              $settings = array(
                                 'teeny' => TRUE,
                                 'media_buttons' => false,
                                 'textarea_rows' => 5
                              );
                              wp_editor($selMember['profile_details'], "profile_details_new", $settings);
                              ?>
                           </td>
                        </tr>
                        <tr id="effect-appearance-edit">
                           <td><label class="twss-form-label" for="popup_app-edit">Popup Effect Appearance:</label></td>
                           <td>
                              <select name="effect" class="twss-form-input lg" id="popup_app-edit">
                                 <option value="top" <?php if (esc_attr($selMember['effect']) == 'top') echo " selected=''"; ?>>Top</option>
                                 <option value="bottom" <?php if (esc_attr($selMember['effect']) =='bottom') echo " selected=''"; ?>>Bottom</option>
                                 <option value="left" <?php if (esc_attr($selMember['effect']) =='left') echo " selected=''"; ?>>Left</option>
                                 <option value="right" <?php if (esc_attr($selMember['effect']) =='right') echo " selected=''"; ?>>Right</option>
                                 <option value="top-left" <?php if (esc_attr($selMember['effect']) =='top-left') echo " selected=''"; ?>>Top-Left</option>
                                 <option value="top-right" <?php if (esc_attr($selMember['effect']) =='top-right') echo " selected=''"; ?>>Top-Right</option>
                                 <option value="bottom-left" <?php if (esc_attr($selMember['effect']) =='bottom-left') echo " selected=''"; ?>>Bottom-Left</option>
                                 <option value="bottom-right" <?php if (esc_attr($selMember['effect']) =='bottom-right') echo " selected=''"; ?>>Bottom-Right</option>
                              </select>
                           </td>
                        </tr>

                        <tr>
                           <td colspan="2">
                              <label class="twss-form-label" for="social_icon-edit">Social Icon <small>(Make Blank if you Don't want all)</small>:</label>
                              <br />
                              <?php
                              $iconList = $selMember['iconids'];
                              if ($iconList) {
                                 $iconList = explode(",", esc_attr( $iconList ));
                                 $iconUrl = explode("||||", esc_attr( $selMember['iconurl'] ));
                                 $i = 0;
                                 foreach ($iconList as $list) {
                              ?>
                                    <div style="margin-bottom: -6px; width: 100%; display: block;">
                                       <div class="twss_6310_additonal_info_2">
                                          <select name="icon_name[]" class="twss-form-input">
                                             <?php
                                             foreach ($icon_table_data as $itd) {
                                                if ($itd['id'] == $list) {
                                                   echo "<option value='" . $itd['id'] . "' selected>{$itd['name']}</option>";
                                                } else {
                                                   echo "<option value='" . $itd['id'] . "'>{$itd['name']}</option>";
                                                }
                                             }
                                             ?>
                                          </select>
                                       </div>
                                       <div class="twss_6310_additonal_info_3"><input type="text" name="icon_link[]" value="<?php echo $iconUrl[$i] ?>" class="twss-form-input" placeholder="https://www.example.com/"></div>&nbsp;
                                       <button type="button" class="twss-btn-danger sm twss_6310_icon_remove-edit-exist" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button>
                                       <br class="twss-6310-clear" />
                                       <br class="twss-6310-clear" />
                                    </div>
                                 <?php
                                    $i++;
                                 }
                              } else {
                                 ?>
                                 <div style="margin-bottom: -6px; width: 100%; display: block;">
                                    <div class="twss_6310_additonal_info_2">
                                       <select name="icon_name[]" class="twss-form-input">
                                          <?php
                                          echo $allIconList;
                                          ?>
                                       </select>
                                    </div>
                                    <div class="twss_6310_additonal_info_3"><input type="text" name="icon_link[]" class="twss-form-input" placeholder="https://www.example.com/"></div>
                                    <br class="twss-6310-clear" />
                                 </div><br />
                              <?php } ?>

                              <div class="twss_6310_additonal_info" id="twss_6310_icon_new-edit">
                                 <input type="button" class="twss-btn-default twss_6310_icon_new-edit" value="Add Row"><br />
                              </div>
                           </td>
                        </tr>

                        <!-- Contact List -->
                        <tr>
                           <td colspan="2">
                              <br />
                              <label class="twss-form-label" for="popup_app-edit">
                                 Contact List
                                 <small>(Make Blank if you Don't want)</small>
                                 :
                              </label>      
                              <input type="hidden" id="icon_select_div">
                              <div class="contact-info" style="width: 100%; float: left;">
                             
                              <?php
                              $contacts = twss_6310_replace(esc_attr($selMember['contacts']));
                              if ($contacts) {
                                 $contacts = explode("####||||####", $contacts);
                                 foreach ($contacts as $contact) {
                                    $contact = explode("||||", $contact);
                              ?>
                              <div class="twss_6310_additonal_info" id='twss_6310_icon_div_<?php echo $iconDiv++ ?>'>
                                 <div class="twss_6310_additonal_info_2">
                                    <div class="twss-6310-plus-icon" id="modal-icons-add"><i class="fas fa-plus-circle twss-6310-plus"></i></div>
                                    <input type="text" name="contact_label[]" id="icons_name" class="twss-form-input" value="<?php echo $contact[0]; ?>" placeholder="Email, Phone, Fax, etc.">
                                 </div>
                                 <div class="twss_6310_additonal_info_3">
                                    <input name="contact_details[]" type="text" class="twss-form-input" placeholder="email@example.com" value="<?php echo twss_6310_replace($contact[1]) ?>">
                                 </div>
                                 <div class="twss_6310_additonal_info_4"> 
                                    &nbsp;&nbsp;<button type="button" class="twss-btn-danger sm twss_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button>
                                 </div> 
                              </div>
                                 <?php
                                 }
                              } else {
                                 ?>
                                <div class="twss_6310_additonal_info" id='twss_6310_icon_div_<?php echo $iconDiv++ ?>'>
                                    <div style="margin-bottom: 10px; float: left;">
                                    <div class="twss-6310-plus-icon" id="modal-icons-add"><i class="fas fa-plus-circle twss-6310-plus"></i></div>
                                       <input type="text" name="contact_label[]" class="twss-form-input" placeholder="Email, Phone, Fax, etc.">
                                       <input name="contact_details[]" type="text" class="twss-form-input" placeholder="email@example.com">
                                    </div>
                                 </div>
                                 
                              <?php
                              }
                              ?>
                              </div>   
                              <div class="twss_6310_additonal_contact" id="twss_6310_contact_new-edit" style="float: left;">
                                 <input type="button" class="twss-btn-default twss_6310_contact_new-edit" value="Add Row"><br />
                              </div>

                           </td>
                        </tr>

                        <!-- Skills List -->
                        <tr>
                           <td colspan="2">
                              <br />
                              <div style="width: 100%; display: block;" class="skill-edit-button">
                              <label class="twss-form-label" for="popup_app-edit">
                                 Skills List
                                 <small>(Make Blank if you Don't want)</small>
                                 :
                              </label>
                              <?php
                              $skills = esc_attr( $selMember['skills'] );
                              if ($skills) {
                                 $skills = explode("####||||####", $skills);
                                 foreach ($skills as $skill) {
                                    $skill = explode("||||", $skill);
                              ?>
                                    <div class="skills-info">
                                       <input type="text" name="skills_name[]" class="twss-form-input skills-name" value="<?php echo twss_6310_replace($skill[0]) ?>" placeholder="Enter Skills Name">
                                       <input name="skills_rating[]" type="range" step="5" min="20" max="100" value="<?php echo twss_6310_replace($skill[1]) ?>" data-rangeSlider title="">
                                       <output></output><span><button type="button" class="twss-btn-danger sm twss_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                                    </div>
                                 <?php
                                 }
                                 ?>

                              <?php
                              } else {
                              ?>
                                 <div class="skills-info">
                                    <input type="text" name="skills_name[]" class="twss-form-input skills-name" placeholder="Enter Skills Name">
                                    <input name="skills_rating[]" type="range" step="5" min="20" max="100" data-rangeSlider title="">
                                    <output></output><span><button type="button" class="twss-btn-danger sm twss_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                                 </div>
                              <?php
                              }
                              ?>
                              </div>
                              <div class="twss_6310_additonal_skills" id="twss_6310_skills_new-edit">
                                 <input type="button" class="twss-btn-default twss_6310_skills_new-edit" value="Add Row"><br />
                              </div>

                           </td>
                        </tr>                      
                        <td colspan="2">
                           <br />
                           <label class="twss-form-label" for="popup_app-edit">
                              Team Category:
                           </label>
                           <div>
                              <?php
                              $category = $wpdb->get_results("SELECT * FROM {$category_table} where c_name!='c-1588100157' ORDER BY serial ASC", ARRAY_A);

                              $selCategory = esc_attr( $selMember['category'] );
                              if($selCategory){
                                 $selCategory = explode(" ", $selCategory);
                              }

                              foreach ($category as $cat) {
                                 $selected = "";
                                 if($selCategory && in_array($cat['c_name'], $selCategory)){
                                    $selected = " checked ";
                                 }
                                 echo "<div class='twss-row-select-cat' id='{$cat['id']}'>
                                       <input type='checkbox' name='catid[]' value='".twss_6310_replace($cat['c_name'])."'
                                       id='cat-box-{$cat['id']}'
                                       {$selected}
                                       class='twss-row-select-cat-checkbox' />
                                       ". twss_6310_replace($cat['name'])."
                                    </div>";
                              }
                              ?>
                           </div>
                        </td>
                     </tr>
                        <tr>
                           <td>Profile Picture</td>
                           <td>
                              <input type="text" name="image" id="twss_6310_upload_team_member_image_src_edit" value="<?php echo esc_attr( $selMember['image'] ) ?>" class="twss-form-input lg">
                              <input type="button" id="twss_6310_upload_team_member_image_edit" value="Upload Picture" class="twss-btn-default">
                           </td>
                        </tr>
                        <tr>
                           <td>Profile Hover Picture</td>
                           <td>
                              <input type="text" name="image_hover" id="twss_6310_upload_team_member_image_hover_src_edit" value="<?php echo esc_attr( $selMember['image_hover'] ) ?>" class="twss-form-input lg">
                              <input type="button" id="twss_6310_upload_team_member_image_hover_edit" value="Upload Hover Picture" class="twss-btn-default">
                           </td>
                        </tr>
                     </table>

                  </div>
                  <div class="twss-6310-modal-form-footer">
                     <button type="button" name="close" id="twss-from-close-edit" class="twss-btn-danger twss-pull-right">Close</button>
                     <input type="submit" name="update" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Update" />
                  </div>
                  <br class="twss-6310-clear" />
               </form>
            </div>
            <br class="twss-6310-clear" />
         </div>
         

         <script>
            var $ = jQuery;
            jQuery(document).ready(function() {
               jQuery('#twss-6310-modal-edit').fadeIn(500);
               jQuery("body").css({
                  "overflow": "hidden"
               });
               <?php
               if ($selMember['profile_details_type'] == 1) {
                  echo 'jQuery("#profile_details-edit, #effect-appearance-edit").hide();';
               } else if ($selMember['profile_details_type'] == 2) {
                  echo 'jQuery("#profile_url-edit, #profile_url_tab-edit").hide();';
               } else {
                  echo 'jQuery("#profile_details-edit, #effect-appearance-edit, #profile_url-edit, #profile_url_tab-edit").hide();';
               }
               ?>

               /* Profile Details Type Start */
               jQuery("body").on("click", ".profile-details-type-edit", function() {
                  var val = parseInt(jQuery(this).val());
                  jQuery(".profile-details-type-edit").removeClass("active");
                  jQuery(this).addClass("active");

                  if (val == 0) {
                     jQuery("#profile_details-edit, #effect-appearance-edit, #profile_url-edit, #profile_url_tab-edit").hide();
                  } else if (val == 1) {
                     jQuery("#profile_url-edit, #profile_url_tab-edit").show();
                     jQuery("#profile_details-edit, #effect-appearance-edit").hide();
                  } else if (val == 2) {
                     jQuery("#profile_details-edit, #effect-appearance-edit").show();
                     jQuery("#profile_url-edit, #profile_url_tab-edit").hide();
                  }
                  jQuery("#pd-edit").val(val);
                  return false;
               });

               jQuery("body").on("click", ".profile-new-tab-edit", function() {
                  var val = parseInt(jQuery(this).val());
                  jQuery(".profile-new-tab-edit").removeClass("active");
                  jQuery(this).addClass("active");
                  jQuery("#new_tab-edit").val(val);
                  return false;
               });
               /* Profile Details Type End */

               /* Social Icon Start */
               jQuery("body").on("click", ".twss_6310_icon_new-edit", function(e) {
                  var html = '<div class="twss_6310_additonal_info"><div class="twss_6310_additonal_info_2"><select name="icon_name[]" class="twss-form-input"><?php echo $allIconList; ?></select></div><div class="twss_6310_additonal_info_3"><input type="text" name="icon_link[]" class="twss-form-input" placeholder="https://www.example.com" ></div><div class="twss_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="twss-btn-danger sm twss_6310_icon_remove-edit" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div><br /></div>';
                  jQuery("body").css({
                     "overflow": "hidden"
                  });
                  jQuery("#twss_6310_icon_new-edit").before(html);
               });
               jQuery("body").on("click", ".twss_6310_icon_remove-edit", function(e) {
                  jQuery(this).parent().parent().remove();
                  return false;
               });
               jQuery("body").on("click", ".twss_6310_icon_remove-edit-exist", function(e) {
                  jQuery(this).parent().remove();
                  return false;
               });
               /* Social Icon End */

               jQuery("body").on("click", ".twss-6310-close-edit, #twss-from-close-edit", function() {
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

               /* ######### Media Start ########### */
               jQuery("body").on("click", "#twss_6310_upload_team_member_image_edit", function(e) {
                  e.preventDefault();
                  var image = wp.media({
                        title: 'Upload Image',
                        multiple: false
                     }).open()
                     .on('select', function(e) {
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        jQuery("#twss_6310_upload_team_member_image_src_edit").val(image_url);
                     });
                  jQuery("#twss_6310_add_new_media").css({
                     "overflow-x": "hidden",
                     "overflow-y": "auto"
                  });
               });

               jQuery("body").on("click", "#twss_6310_upload_team_member_image_hover_edit", function(e) {
                  e.preventDefault();
                  var image = wp.media({
                        title: 'Upload Image',
                        multiple: false
                     }).open()
                     .on('select', function(e) {
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        jQuery("#twss_6310_upload_team_member_image_hover_src_edit").val(image_url);
                     });
                  jQuery("#twss_6310_add_new_media").css({
                     "overflow-x": "hidden",
                     "overflow-y": "auto"
                  });
               });


               /* ######### Media End ########### */
            });
         </script>

         </script>
   <?php
      }
   }
   ?>

   <table class="twss-table">
      <tr>
         <td>Full Name</td>
         <td style="width: 120px">Designation</td>
         <td style="width: 80px">Social Icon</td>
         <td style="width: 150px">Skills</td>
         <td style="width: 160px">Contacts</td>
         <td style="width: 160px">Category</td>
         <td style="width: 70px">Picture</td>
         <td style="width: 70px">Hover Picture</td>
         <td style="width: 100px">Edit Delete</td>
      </tr>

      <?php
      $allCategory = $wpdb->get_results('SELECT * FROM ' . $category_table . ' ORDER BY name ASC', ARRAY_A);
      $data = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY id DESC', ARRAY_A);
      foreach ($data as $value) {
         echo '<tr>';
         echo '<td>' . twss_6310_replace(esc_attr( $value['name'] )) . '</td>';
         echo '<td>' . twss_6310_replace(esc_attr( $value['designation'] )) . '</td>';

         echo "<td>";
         if ($value['iconids']) {
            if($value['iconids']) {
               $iconIds = explode(",", esc_attr( $value['iconids'] ));
               $iconUrl = explode("||||", esc_attr( $value['iconurl'] ));

               $myIcon = $wpdb->get_results($wpdb->prepare("SELECT * FROM $icon_table WHERE id in (%s)", esc_attr( $value['iconids'] )));
               if ($myIcon) {
                  foreach ($myIcon as $k => $v) {
                     echo "<button class='twss-btn-icon' style='color:" . $v->color . "; background-color: " . $v->bgcolor . "; margin-right: 5px; margin-bottom: 5px;'><i class='" . $v->class_name . "'></i></button>";
                  }
               }
            }
         }
         echo "</td>";
         echo "<td>";
         if ($value['skills']) {
            $skills = explode("####||||####", twss_6310_replace(esc_attr( $value['skills'] )));
            $skl = 0;
            foreach ($skills as $skill) {
               if ($skl) {
                  echo ",<br />";
               }
               $skill = explode("||||", $skill);
               echo "<b>{$skill[0]}</b>: {$skill[1]}%";
               $skl = 1;
            }
            echo '<form method="post">
          ' . wp_nonce_field("twss-nonce-field-reorder-skills") . '
          <input type="hidden" name="id" value="' . $value['id'] . '">
          <button class="twss-btn-primary twss-margin-right-10 twss-change-order" title="Rearrange  Skills"  type="submit" value="Rearrange" name="rearrange">Change Order</button>
          </form>';
         } else {
            echo "---";
         }
         echo "</td>";

         echo "<td style='font-size: 12px'>";
         if ($value['contacts']) {
            $contacts = explode("####||||####", twss_6310_replace(esc_attr( $value['contacts'] )));
            $skl = 0;
            foreach ($contacts as $contact) {
               if ($skl) {
                  echo ",<br />";
               }
               $contact = explode("||||", $contact);
               $labelText =  twss_6310_replace($contact[0]);
               if(substr($labelText, 0, 7) == 'fab fa-' || substr($labelText, 0, 7) == 'fas fa-') {
                  $labelText = "<i class='{$labelText}'></i>";
               }
               
               echo "<b>" . twss_6310_replace(str_replace("\\", "", $labelText)) . "</b> : ".twss_6310_replace($contact[1])."";
               $skl = 1;
            }
            echo '<form method="post">
          ' . wp_nonce_field("twss-nonce-field-reorder-contacts") . '
          <input type="hidden" name="id" value="' . $value['id'] . '">
          <button class="twss-btn-primary twss-margin-right-10  twss-change-order"  title="Rearrange  Contact"  type="submit" value="Rearrange" name="rearrange-contacts">Change Order</button>
          </form>';
         } else {
            echo "---";
         }
         echo "</td>";
         
         if ($value['category']) {
            $catIds = explode(" ", twss_6310_replace(esc_attr( $value['category'] )));
            if($catIds && $allCategory){
               echo "<td>";
               $counter = 0;
               foreach($catIds as $catid){
                  foreach($allCategory as $category){
                     if($category['c_name'] == $catid){
                        if($counter){
                           echo ", ";
                        }
                        $counter = 1;
                        echo $category['name'];
                     }
                  }
               }
               echo "</td>";
            }
         }
         else{
            echo "<td>---</td>";
         }

         if ($value['image']) {
            echo "<td><img src='" . $value['image'] . "' height='68' /></td>";
         } else {
            echo '<td>Not Avaliable</td>';
         }

         if ($value['image_hover']) {
            echo "<td><img src='" . $value['image_hover'] . "' height='68' /></td>";
         } else {
            echo '<td>Not Avaliable</td>';
         }

         echo '<td>

        <form method="post">
        ' . wp_nonce_field("twss-nonce-field-edit") . '
        <input type="hidden" name="id" value="' . $value['id'] . '">
        <button class="twss-btn-success twss-margin-right-10" style="float:left"  title="Edit member"  type="submit" value="Edit" name="edit"><i class="fas fa-edit" aria-hidden="true"></i></button>
        </form>
        <form method="post">
        ' . wp_nonce_field("twss-nonce-field-delete") . '
        <input type="hidden" name="id" value="' . $value['id'] . '">
        <button class="twss-btn-danger" style="float:left"  title="Delete Member"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>
        </form>

        </td>';
      }
      ?>


   </table>
   <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none; z-index: 999">
      <div class="twss-6310-modal-content twss-6310-modal-md">
         <form action="" method="post">
            <div class="twss-6310-modal-header">
               Add Member
               <span class="twss-6310-close">&times;</span>
            </div>
            <div class="twss-6310-modal-body-form">
               <?php wp_nonce_field("twss-6310-nonce-add") ?>
               <table border="0" width="100%" cellpadding="10" cellspacing="0">
                  <tr>
                     <td style="width: 150px;"><label class="twss-form-label" for="name">Full Name:</label></td>
                     <td><input type="text" name="name" id="name" value="" class="twss-form-input lg" placeholder="Full Name" /></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="designation">Designation:</label></td>
                     <td><input type="text" name="designation" id="designation" value="" class="twss-form-input lg" placeholder="Designation" /></td>
                  </tr>
                  <tr>
                     <td><label class="twss-form-label" for="pd">Profile Details Type:</label></td>
                     <td>
                        <input type="hidden" name="pd" id="pd" value="1" />
                        <button type="button" value="1" class="twss-btn-multi profile-details-type active">Link</button>
                        <button type="button" value="2" class="twss-btn-multi profile-details-type">Pop Up</button>
                        <button type="button" value="0" class="twss-btn-multi profile-details-type">None</button>
                     </td>
                  </tr>
                  <tr id="profile_url">
                     <td><label class="twss-form-label" for="url">Profile URL:</label></td>
                     <td>
                        <input type="text" name="url" value="" class="twss-form-input lg" id="url" placeholder="http://www.example.com/profile" />
                     </td>
                  </tr>
                  <tr id="profile_url_tab">
                     <td><label class="twss-form-label" for="new_tab">Open new tab:</label></td>
                     <td>
                        <input type="hidden" name="new_tab" id="new_tab" value="1" />
                        <button type="button" value="1" class="twss-btn-multi profile-new-tab active">Yes</button>
                        <button type="button" value="0" class="twss-btn-multi profile-new-tab">No</button>
                     </td>
                  </tr>
                  <tr id="profile_details">
                     <td><label class="twss-form-label" for="profile_details">Profile Details:</label></td>
                     <td>
                        <?php
                        $settings = array(
                           'teeny' => TRUE,
                           'media_buttons' => false,
                           'textarea_rows' => 5
                        );
                        wp_editor("", "profile_details_new", $settings);
                        ?>
                     </td>
                  </tr>
                  <tr id="effect-appearance">
                     <td><label class="twss-form-label" for="popup_app">Popup Effect Appearance:</label></td>
                     <td>
                        <select name="effect" class="twss-form-input lg" id="popup_app">
                           <option value="top">Top</option>
                           <option value="bottom">Bottom</option>
                           <option value="left">Left</option>
                           <option value="right">Right</option>
                           <option value="top-left">Top-Left:</option>
                           <option value="top-right">Top-Right</option>
                           <option value="bottom-left">Bottom-Left</option>
                           <option value="bottom-right">Bottom-Right</option>
                        </select>
                     </td>
                  </tr>

                  <tr>
                     <td colspan="2">
                        <label class="twss-form-label" for="social_icon">Social Icon <small>(Make Blank if you Don't want all)</small>:</label>
                        <br />
                        <div style="margin-bottom: -6px; width: 100%; display: block;">
                           <div class="twss_6310_additonal_info_2">
                              <select name="icon_name[]" class="twss-form-input">
                                 <?php
                                 echo $allIconList;
                                 ?>
                              </select>
                           </div>
                           <div class="twss_6310_additonal_info_3"><input type="text" name="icon_link[]" class="twss-form-input" placeholder="https://www.example.com/"></div>
                           <br class="twss-6310-clear" />
                        </div>

                        <br />
                        <div class="twss_6310_additonal_info" id="twss_6310_icon_new">
                           <input type="button" class="twss-btn-default twss_6310_icon_new" value="Add Row"><br />
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <br />
                        <input type="hidden" id="icon_select_div">
                        <div style="width: 100%; display: block; margin-bottom: 10px;">
                           <label class="twss-form-label" for="popup_app-edit">
                              Contact List
                              <small>(Make Blank if you Don't want)</small>
                              :
                           </label>
                           <br class="twss-6310-clear" />
                        </div>

                        <style>
                        .twss_6310_additonal_info{
                           float: left;
                           width: 100%;
                           margin-bottom: 15px;
                        }
                        </style>

                        <div class="twss_6310_additonal_info" id="twss_6310_icon_div_1">
                           <div class="twss_6310_additonal_info_2">
                              <div class="twss-6310-plus-icon" id="modal-icons-add"><i class="fas fa-plus-circle twss-6310-plus"></i></div>
                              <input type="text" name="contact_label[]" id="icons_name" class="twss-form-input" value="<?php echo twss_6310_replace(str_replace("\\", "", htmlentities($contact[0]))) ?>" placeholder="Email, Phone, Fax, etc.">
                           </div>
                           <div class="twss_6310_additonal_info_3"><input name="contact_details[]" value="<?php echo twss_6310_replace($contact[1]) ?>" type="text" class="twss-form-input" placeholder="email@example.com"></div>
                        </div>

                        <div class="twss_6310_additonal_contact" id="twss_6310_contact_new">
                           <input type="button" class="twss-btn-default twss_6310_contact_new" value="Add Row"><br />
                        </div>

                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <br />
                        <div style="width: 100%; display: block;">
                           <label class="twss-form-label" for="popup_app-edit">
                              Skills List
                              <small>(Make Blank if you Don't want)</small>
                              :
                           </label>
                           <div class="skills-info">
                              <input type="text" name="skills_name[]" class="twss-form-input skills-name" placeholder="Enter Skills Name">
                              <input name="skills_rating[]" type="range" step="5" min="20" max="100" data-rangeSlider title="">
                              <output></output><span><button type="button" class="twss-btn-danger sm twss_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span>
                           </div>
                        </div>

                        <div class="twss_6310_additonal_skills" id="twss_6310_skills_new">
                           <input type="button" class="twss-btn-default twss_6310_skills_new" value="Add Row"><br />
                        </div>

                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">
                        <br />
                        <label class="twss-form-label" for="popup_app-edit">
                           Team Category:
                        </label>
                        <div>
                           <?php
                           $category = $wpdb->get_results("SELECT * FROM {$category_table} where c_name!='c-1588100157' ORDER BY serial ASC", ARRAY_A);


                           foreach ($category as $cat) {
                              echo "<div class='twss-row-select-cat' id='{$cat['id']}'>
                                    <input type='checkbox' name='catid[]' value='{$cat['c_name']}'
                                    id='cat-box-{$cat['id']}'
                                    class='twss-row-select-cat-checkbox' />
                                    {$cat['name']}
                                 </div>";
                           }
                           ?>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>Profile Picture</td>
                     <td>
                        <input type="text" name="image" id="twss_6310_upload_team_member_image_src" class="twss-form-input lg">
                        <input type="button" id="twss_6310_upload_team_member_image" value="Upload Picture" class="twss-btn-default">
                     </td>
                  </tr>
                  <tr>
                     <td>Profile Hover Picture</td>
                     <td>
                        <input type="text" name="image_hover" id="twss_6310_upload_team_member_image_hover_src" class="twss-form-input lg">
                        <input type="button" id="twss_6310_upload_team_member_image_hover" value="Upload Hover Picture" class="twss-btn-default">
                     </td>
                  </tr>
               </table>

            </div>
            <div class="twss-6310-modal-form-footer">
               <button type="button" name="close" id="twss-from-close" class="twss-btn-danger twss-pull-right">Close</button>
               <input type="submit" name="save" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save" />
            </div>
            <br class="twss-6310-clear" />
         </form>
      </div>
      <br class="twss-6310-clear" />
   </div>
</div>

<!-- Icon List -->
<div id="twss_6310_social_icon" class="twss-6310-modal" style="display: none">
   <div class="twss-6310-modal-content twss-6310-modal-xl">
      <form action="" method="post">
         <?php wp_nonce_field("twss-6310-nonce-update-icon-order") ?>

         <input type="hidden" name="rearrange_list" id="rearrange_list" value="" />
         <div class="twss-6310-modal-header">
            <span style="float: left; margin-right: 15px;">Choose your Icon</span>
            <input type="text" id="icon-filter" class="twss-6310-form-input-sm" placeholder="Search Icon" />
            <span class="twss-6310-icon-close" style="float: right;">&times;</span>
         </div>
         <div class="twss-6310-modal-body-form">
            <ul class="twss-6310-choose-icon">
               <?php
               echo twss_6310_fa_icon_list('li', '</li>');
               ?>
            </ul>
         </div>
         <div class="twss-6310-modal-form-footer">
            <button type="button" name="close" id="twss-6310-font-icon-close" class="twss-6310-btn-danger twss-6310-pull-right">Close</button>
         </div>
      </form>
      <br class="twss-6310-clear" />
   </div>
</div>


<script>

let iconDiv = <?php echo $iconDiv ?>;
   var $ = jQuery;
   jQuery(document).ready(function() {
      jQuery("body").on("click", ".twss-row-select-cat-checkbox", function(event) {
         event.stopPropagation();
      });
      jQuery("body").on("click", ".twss-row-select-cat", function() {
         var id = jQuery(this).attr("id");
         if (jQuery("#cat-box-" + id).prop('checked') == true) {
            jQuery("#cat-box-" + id).prop('checked', false);
            return false;
         } else {
            jQuery("#cat-box-" + id).prop('checked', true);
            return true;
         }
      });

      jQuery("#profile_details, #effect-appearance").hide();
      jQuery("body").on("click", "#add-team-member", function() {
         jQuery("#twss-6310-modal-add").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         return false;
      });

      /* Profile Details Type Start */
      jQuery("body").on("click", ".profile-details-type", function() {
         var val = parseInt(jQuery(this).val());
         jQuery(".profile-details-type").removeClass("active");
         jQuery(this).addClass("active");

         if (val == 0) {
            jQuery("#profile_details, #effect-appearance, #profile_url, #profile_url_tab").hide();
         } else if (val == 1) {
            jQuery("#profile_url, #profile_url_tab").show();
            jQuery("#profile_details, #effect-appearance").hide();
         } else if (val == 2) {
            jQuery("#profile_details, #effect-appearance").show();
            jQuery("#profile_url, #profile_url_tab").hide();
         }
         jQuery("#pd").val(val);
         return false;
      });
      jQuery("body").on("click", ".profile-new-tab", function() {
         var val = parseInt(jQuery(this).val());
         jQuery(".profile-new-tab").removeClass("active");
         jQuery(this).addClass("active");
         jQuery("#new_tab").val(val);
         return false;
      });
      /* Profile Details Type End */

      /* Social Icon Start */
      jQuery("body").on("click", ".twss_6310_icon_new", function(e) {
         var html = '<div class="twss_6310_additonal_info" id="twss_6310_icon_div_'+iconDiv+'"><div class="twss_6310_additonal_info_2"><select name="icon_name[]" class="twss-form-input"><?php echo $allIconList; ?></select></div><div class="twss_6310_additonal_info_3"><input type="text" name="icon_link[]" class="twss-form-input" placeholder="https://www.example.com" ></div><div class="twss_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="twss-btn-danger sm twss_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#twss_6310_icon_new").before(html);
      });
      jQuery("body").on("click", ".twss_6310_icon_remove", function(e) {
         jQuery(this).parent().parent().remove();
         return false;
      });
      /* Social Icon End */


      jQuery("body").on("click", ".twss_6310_additonal_info_1 i", function () {
         if(jQuery('#icon-filter').val()) {
            jQuery('#icon-filter').val('');
            jQuery(".twss-6310-choose-icon li").filter(function() {
               jQuery(this).toggle();
            });
         }
         
         jQuery("#twss_6310_social_icon").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery('#icon-filter').focus();
         let divId = jQuery(this).closest('.twss_6310_additonal_info').attr('id');
         divId = divId.substring(19);
         jQuery('#icon_select_div').val(divId);  
         return false;
      });

      /* Contact New */
      jQuery("body").on("click", ".twss_6310_contact_new", function(e) {
         iconDiv++;
         var html = '<div class="twss_6310_additonal_info" id="twss_6310_icon_div_'+iconDiv+'"><div class="twss_6310_additonal_info_2"><div class="twss-6310-plus-icon" id="modal-icons-add"><i class="fas fa-plus-circle twss-6310-plus"></i></div><input type="text" name="contact_label[]" id="icons_name" class="twss-form-input" value="" placeholder="Email, Phone, Fax, etc."></div><div class="twss_6310_additonal_info_3"><input name="contact_details[]" type="text" class="twss-form-input" placeholder="email@example.com" ></div><div class="twss_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="twss-btn-danger sm twss_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#twss_6310_contact_new").before(html);
      });

      /* Contact Edit */
      jQuery("body").on("click", ".twss_6310_contact_new-edit", function(e) {
         iconDiv++;
         var html = '<div class="twss_6310_additonal_info" id="twss_6310_icon_div_'+iconDiv+'"><div class="twss_6310_additonal_info_2"><div class="twss-6310-plus-icon" id="modal-icons-add"><i class="fas fa-plus-circle twss-6310-plus"></i></div><input type="text" name="contact_label[]" id="icons_name" class="twss-form-input" value="" placeholder="Email, Phone, Fax, etc."></div><div class="twss_6310_additonal_info_3"><input name="contact_details[]" type="text" class="twss-form-input" placeholder="email@example.com" ></div><div class="twss_6310_additonal_info_4"> &nbsp;&nbsp;<button type="button" class="twss-btn-danger sm twss_6310_icon_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></div></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#twss_6310_contact_new-edit").before(html);
      });

      /* Contact Delete */
      jQuery("body").on("click", ".twss_6310_contact_remove", function(e) {
         jQuery(this).parent().parent().remove();
         return false;
      });

      /* Skills New */
      jQuery("body").on("click", ".twss_6310_skills_new", function(e) {
         var html = '<div class="skills-info"><input type="text" name="skills_name[]" class="twss-form-input skills-name" placeholder="Enter Skills Name"><input name="skills_rating[]" type="range" step="5" min="20" max="100" data-rangeSlider title="">&nbsp;<output></output><span><button type="button" class="twss-btn-danger sm twss_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery("#twss_6310_skills_new").before(html);

         (function() {
            var selector = '[data-rangeSlider]',
               elements = document.querySelectorAll(selector);

            function valueOutput(element) {
               var value = element.value,
                  output = element.parentNode.getElementsByTagName('output')[0];
               output.innerHTML = value;
            }
            Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function(el) {
               el.addEventListener('input', function(e) {
                  valueOutput(e.target);
               }, false);
            });
            rangeSlider.create(elements, {
               onInit: function() {},
            });
         })();
      });

      /* Skills Edit */
      jQuery("body").on("click", ".twss_6310_skills_new-edit", function(e) {
         var html = '<div class="skills-info"><input type="text" name="skills_name[]" class="twss-form-input skills-name" placeholder="Enter Skills Name"><input name="skills_rating[]" type="range" step="5" min="20" max="100" data-rangeSlider title="">&nbsp;<output></output><span><button type="button" class="twss-btn-danger sm twss_6310_skills_remove" value="Remove"><i class="far fa-times-circle" aria-hidden="true"></i></button></span></div>';
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery(".twss_6310_skills_new-edit").before(html);
         

         (function() {
            var selector = '[data-rangeSlider]',
               elements = document.querySelectorAll(selector);

            function valueOutput(element) {
               var value = element.value,
                  output = element.parentNode.getElementsByTagName('output')[0];
               output.innerHTML = value;
            }
            Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function(el) {
               el.addEventListener('input', function(e) {
                  valueOutput(e.target);
               }, false);
            });
            rangeSlider.create(elements, {
               onInit: function() {},
            });
         })();
      });

      /* Skills Remove */
      jQuery("body").on("click", ".twss_6310_skills_remove", function(e) {
         jQuery(this).parent().parent().remove();
         return false;
      });
      /* Modal Close Start */
      jQuery("body").on("click", ".twss-6310-close, #twss-from-close", function() {
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
      /* Modal Close End */

       /* ######### Add Icon Start ########### */
      jQuery("#icon-filter").on("keyup", function() {
         var value = jQuery(this).val().toLowerCase();
         jQuery(".twss-6310-choose-icon li").filter(function() {
            jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1);
         });
      });
      jQuery("body").on("click", "#twss-6310-font-icon-close, .twss-6310-icon-close", function() {
         jQuery("#twss_6310_social_icon").fadeOut(500);
      });
      jQuery(window).click(function(event) {
         if (event.target == document.getElementById('twss_6310_social_icon')) {
            jQuery("#twss_6310_social_icon").fadeOut(500);
         }
      });
      jQuery("body").on("click", "#modal-icons-add", function() {
         if (jQuery('#icon-filter').val()) {
            jQuery('#icon-filter').val('');
            jQuery(".twss-6310-choose-icon li").filter(function() {
               jQuery(this).toggle();
            });
         }
         jQuery("#twss_6310_social_icon").fadeIn(500);
         jQuery("body").css({
            "overflow": "hidden"
         });
         jQuery('#icon-filter').focus();
         let divId = jQuery(this).closest('.twss_6310_additonal_info').attr('id');
         divId = divId.substring(19);
         jQuery('#icon_select_div').val(divId);  
         return false;
      });

      jQuery("body").on("click", "ul.twss-6310-choose-icon li", function() {
         let cls = jQuery(this).find('i').attr('class');
         let divId = jQuery('#icon_select_div').val();
         jQuery(`#twss_6310_icon_div_${divId} .twss_6310_additonal_info_2 input`).val(cls);
         jQuery("#twss_6310_social_icon").fadeOut(500);
      });
      
      /* ######### Media Start ########### */
      jQuery("body").on("click", "#twss_6310_upload_team_member_image", function(e) {
         e.preventDefault();
         var image = wp.media({
               title: 'Upload Image',
               multiple: false
            }).open()
            .on('select', function(e) {
               var uploaded_image = image.state().get('selection').first();
               var image_url = uploaded_image.toJSON().url;
               jQuery("#twss_6310_upload_team_member_image_src").val(image_url);
            });
         jQuery("#twss_6310_add_new_media").css({
            "overflow-x": "hidden",
            "overflow-y": "auto"
         });
      });

      jQuery("body").on("click", "#twss_6310_upload_team_member_image_hover", function(e) {
         e.preventDefault();
         var image = wp.media({
               title: 'Upload Image',
               multiple: false
            }).open()
            .on('select', function(e) {
               var uploaded_image = image.state().get('selection').first();
               var image_url = uploaded_image.toJSON().url;
               jQuery("#twss_6310_upload_team_member_image_hover_src").val(image_url);
            });
         jQuery("#twss_6310_add_new_media").css({
            "overflow-x": "hidden",
            "overflow-y": "auto"
         });
      });
      /* ######### Media End ########### */
   });
</script>