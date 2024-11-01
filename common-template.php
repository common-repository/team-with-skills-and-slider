<div class="twss-6310">
   <div class="twss-6310-sm">
    <?php 
      include twss_6310_plugin_url . 'settings/helper/team-member-save.php';
      if (!empty($_POST['update_style_change']) && $_POST['update_style_change'] == 'Save' && $_POST['id'] != '') {
        $nonce = $_REQUEST['_wpnonce'];
        if (!wp_verify_nonce($nonce, 'twss_nonce_field_form')) {
            die('You do not have sufficient permissions to access this pagess.');
        } else {
            $css = twss_6310_extract_data($_POST);
            $wpdb->query($wpdb->prepare("UPDATE $style_table SET css = %s WHERE id = %d", $css, sanitize_text_field($_POST['id'])));
        }
      }
      $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
      $css = explode("!!##!!", $styledata['css']);
      $key = explode(",", $css[0]);
      $value = explode("||##||", $css[1]);
      $cssData = array_combine($key, $value);
      $results = twss_6310_extract_members($styledata['memberid'], $styleId);
      $members = $results['members'];
      $filterList = $results['filter_activation'];
      $tablet_row = isset($cssData['tablet_item_per_row']) ? $cssData['tablet_item_per_row'] : 1;
      $mobile_row = isset($cssData['mobile_item_per_row']) ? $cssData['mobile_item_per_row'] : 1;
      $template_order  = explode(",", $styledata['template_order']);
      $template_id = substr($styledata['style_name'], -2);
      
      include twss_6310_plugin_url . "settings/form/_form-{$template_id}.php";
      include twss_6310_plugin_url . "settings/css/_css-{$template_id}.php";
      include twss_6310_plugin_url . "settings/helper/template-{$template_id}.php";
      include twss_6310_plugin_url . 'settings/helper/slider_helper.php';
      twss_6310_skills_css($cssData, "{$template_id}");
      twss_6310_skills_script($cssData, "{$template_id}");
      twss_fun_template_read_more_style($cssData, "{$template_id}");
      twss_fun_template_read_more_script($cssData, "{$template_id}");
     
    ?>
    <div class="twss-plugin-setting-left">
      <div class="twss-preview-box">
          <div class="twss-6310-preview">
            Preview
            <div style="display: inline; float: right">
              <input type="text" id="twss_background_preview"
                class="twss-form-input  twss-pull-right twss_6310_color_picker twss_preview_color_chooser" data-format="rgb"
                data-opacity=".8" value="rgba(255, 255, 255, .8)"></div>
          </div>
          <hr />
      </div>
      <div 
        class="twss_6310_tabs_panel_preview" 
        data-main-template-id="<?php echo $styleId ?>"
        data-modal-template="<?php echo isset($cssData['modal_template_number']) ? $cssData['modal_template_number'] : 1 ?>"
      >
        <?php include twss_6310_plugin_url . 'settings/templates/' . $styledata['style_name'] . '.php';  ?>
      </div>
      <br />
    </div>
    <div class="twss-plugin-setting-right">
        <?php 
          twss_6310_add_new_media($styleId, $member_table, $icon_table, $template_order, $styledata['memberid']);
          twss_6310_modal_settings_for_member_description($loading, twss_6310_plugin_url, $cssData);
        ?>
    </div>
   </div>
</div>   

<style>
  .twss-6310-col-2, .twss-6310-col-3, .twss-6310-col-4, .twss-6310-col-5, .twss-6310-col-6 {
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

</style>