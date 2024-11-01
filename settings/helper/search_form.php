<div id="tab-12">
  <div class="row">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Activate Search</b><br />
            <small style="color:#2196F3">(Available only in non-slider)</small>
          </td>
          <td>
            <label class="switch" for="twss_search_activation">
              <input type="checkbox" name="search_activation" id="twss_search_activation" value="1" <?php echo (isset($cssData['search_activation']) && $cssData['search_activation']) ? 'checked' : '' ?>>
              <span class="slider round"></span>
            </label>
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Placeholder Text</b></td>
          <td>
            <input type="text" name="search_placeholder" id="twss_search_placeholder" class="twss-form-input" value="<?php echo (isset($cssData['search_placeholder']) && $cssData['search_placeholder'] !== '') ? $cssData['search_placeholder'] : 'Search by Name or Designation' ?>">
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Alignment</b></td>
          <td>
            <select name="search_align" class="twss-form-input" id="twss_search_align">
              <option value="center" <?php if (isset($cssData['search_align']) && $cssData['search_align'] == 'center') echo "selected" ?>>
                Center</option>
              <option value="flex-start" <?php if (isset($cssData['search_align']) && $cssData['search_align'] == 'flex-start') echo "selected" ?>>Left
              </option>
              <option value="flex-end" <?php if (!isset($cssData['search_align']) || (isset($cssData['search_align']) && $cssData['search_align'] == 'flex-end')) echo "selected" ?>>Right
              </option>
            </select>
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Font Color</b></td>
          <td>
            <input type="text" name="search_font_color" id="twss_search_font_color"
              class="twss-form-input twss_6310_color_picker" data-format="rgb"
              value="<?php echo (isset($cssData['search_font_color']) && $cssData['search_font_color'] !== '') ? $cssData['search_font_color'] : 'rgb(0, 0, 0)' ?>">
          </td>
        </tr>
        <tr height="45" class="search_act_field">
          <td><b>Placeholder Font Color</b></td>
          <td>
            <input type="text" name="search_placeholder_font_color" id="twss_search_placeholder_font_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" value="<?php echo (isset($cssData['search_placeholder_font_color']) && $cssData['search_placeholder_font_color'] !== '') ? $cssData['search_placeholder_font_color'] : 'rgb(128, 128, 128)' ?>">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6" >
      <table class="table table-responsive twss_6310_admin_table search_act_field">
        <tr height="45">
          <td width="55%"><b>Search Box Height</b></td>
          <td>
            <input type="number" min="0" name="search_height" value="<?php echo (isset($cssData['search_height']) && $cssData['search_height'] !== '') ? $cssData['search_height'] : 40 ?>" class="twss-form-input" id="twss_search_height" />
          </td>
        </tr>
        <tr height="45">
          <td width="55%"><b>Border Width</b></td>
          <td>
            <input type="number" min="0" name="search_border_width" value="<?php echo (isset($cssData['search_border_width']) && $cssData['search_border_width'] !== '') ? $cssData['search_border_width'] : 2 ?>" class="twss-form-input" id="twss_search_border_width" />
          </td>
        </tr>
        <tr height="45">
          <td><b>Border Color</b></td>
          <td>
            <input type="text" name="search_border_color" id="twss_search_border_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($cssData['search_border_color']) && $cssData['search_border_color'] !== '') ? $cssData['search_border_color'] : 'rgba(0, 0, 0, 1)' ?>">
          </td>
        </tr>
        <tr height="45">
          <td><b>Border Radius</b></td>
          <td>
            <input type="number" min="0" name="search_border_radius" value="<?php echo (isset($cssData['search_border_radius']) && $cssData['search_border_radius'] !== '') ? $cssData['search_border_radius'] : 50 ?>" class="twss-form-input" id="twss_search_border_radius" />
          </td>
        </tr>
        <tr height="45">
          <td width='55%'><b>Margin Bottom</b></td>
          <td>
            <input name="search_margin_bottom" id="twss_search_margin_bottom" type="number" min="0"
              value="<?php echo (isset($cssData['search_margin_bottom']) && $cssData['search_margin_bottom'] !== '') ? $cssData['search_margin_bottom'] : 10;?>" class="twss-form-input" />
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function(){
    <?php
      if(!(isset($cssData['search_activation']) && $cssData['search_activation'] != '') ){
        echo 'jQuery(".twss-6310-search-container").hide();';
        echo 'jQuery(".search_act_field").hide();';
      }
    ?>
    jQuery('body').on('click', '#twss_search_activation', function(){
      if (jQuery(this).prop('checked') == true) {
        jQuery('.twss-6310-search-box').val('');
        jQuery(".twss-6310-search-container").show();
        jQuery(".search_act_field").show();
      }
      else{
        jQuery(".twss-6310-search-container").hide();
        jQuery(".search_act_field").hide();
      }
      var category = Number(jQuery('#category_activation').val());
      if(category == 1){
        jQuery('.twss_6310_category_list_active').trigger('click');
      }
    });

    //Filter members 
    jQuery(".twss-6310-search-box").on("keyup", function() {
      var value = jQuery(this).val().toLowerCase();     
      var ids = jQuery(this).data('twss-6310-template-id'); 
      var category = Number(jQuery('#category_activation').val());
      let className = '';
      if(category == 1){
        className = jQuery('.twss_6310_category_list_active').attr('twss-data-filter');
      }
      else{
        className = "c-1588100157";
      }
      jQuery(`#twss-6310-noslider-<?php echo $styleId ?> .${className} .twss-6310-col-<?php echo $cssData['item_per_row']; ?>`).filter(function() {
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

    // Search
    jQuery("body").on("keyup", '#twss_search_placeholder', function () {
        var value = jQuery(this).val();
        jQuery('.twss-6310-search-template-<?php echo $template_id ?> input').attr('placeholder', value);
    });
    jQuery("#twss_search_align").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .twss-6310-search-<?php echo $template_id ?> { justify-content: " + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_border_width").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input { border-width: " + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_border_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input { border-color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> i.search-icon { color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input:focus { border-color:" + value + " !important;} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_border_radius").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input { border-radius: " + value + "; -moz-border-radius: " + value + "; -ms-border-radius: " + value + "; -o-border-radius: " + value + "; -webkit-border-radius: " + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input { color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_margin_bottom").on("change", function () {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> { margin-bottom:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_placeholder_font_color").on("change", function () {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input::placeholder { color:" + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
    jQuery("#twss_search_height").on("change", function () {
        var value = jQuery(this).val() + 'px';
        jQuery("<style type='text/css'>.twss-6310-search-template-<?php echo $template_id ?> input { height: " + value + ";} </style>").appendTo(".twss_6310_tabs_panel_preview");
    });
  });
</script>