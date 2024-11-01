<div id="tab-11">
  <div class="row">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Select Modal Template</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>
            <select name="modal_template_number" class="twss-form-input" id="modal_template_number">
              <?php
              $modal_template = isset($cssData['modal_template_number']) ? $cssData['modal_template_number'] : 1;
              for ($i = 1; $i <= 6; $i++) {
                $selected = ($i == $modal_template) ? ' selected' : '';
                echo "<option value='{$i}'{$selected}>Template 0{$i}</option>";
              }
              ?>
            </select>
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive">
        <tr>
          <td>
            <a href='https://www.wpmart.org/wp-content/wpm-templates/modal_<?php echo $modal_template ?>.png' target="_blank" class="modal-demo-image"><img src="https://www.wpmart.org/wp-content/wpm-templates/modal_<?php echo $modal_template ?>.png" style="width: auto; height: 70px;" /></a>
            <small style="color:blue; display:block;">(Click to preview template design)</small>
          </td>
        </tr>
      </table>
    </div>
    <br class="twss-6310-clear" />
  </div>
  <hr />

  <!-- Modal Template 01 Settings -->
  <div class="row modal-template-field-1 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 1 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_01_name_font_size" id="twss_modal_01_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_01_name_font_size']) && $cssData['modal_01_name_font_size'] !== '') ? $cssData['modal_01_name_font_size'] : '22' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_01_name_font_family" id="twss_modal_01_name_font_family" type="text" value="<?php echo (isset($cssData['modal_01_name_font_family']) && $cssData['modal_01_name_font_family'] !== '') ? $cssData['modal_01_name_font_family'] : 'sans-serif' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_01_name_font_color" id="twss_modal_01_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_01_name_font_color']) && $cssData['modal_01_name_font_color'] !== '') ? $cssData['modal_01_name_font_color'] : 'rgb(17, 1, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_01_designation_font_size" id="twss_modal_01_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_01_designation_font_size']) && $cssData['modal_01_designation_font_size'] !== '') ? $cssData['modal_01_designation_font_size'] : '14' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_01_designation_font_family" id="twss_modal_01_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_01_designation_font_family']) && $cssData['modal_01_designation_font_family'] !== '') ? $cssData['modal_01_designation_font_family'] : 'sans-serif' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_01_designation_font_color" id="twss_modal_01_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_01_designation_font_color']) && $cssData['modal_01_designation_font_color'] !== '') ? $cssData['modal_01_designation_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_01_description_font_size" id="twss_modal_01_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_01_description_font_size']) && $cssData['modal_01_description_font_size'] !== '') ? $cssData['modal_01_description_font_size'] : '14' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_01_description_font_family" id="twss_modal_01_description_font_family" type="text" value="<?php echo (isset($cssData['modal_01_description_font_family']) && $cssData['modal_01_description_font_family'] !== '') ? $cssData['modal_01_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_01_description_font_color" id="twss_modal_01_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_01_description_font_color']) && $cssData['modal_01_description_font_color'] !== '') ? $cssData['modal_01_description_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_01_contact_label_font_size" id="twss_modal_01_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_01_contact_label_font_size']) && $cssData['modal_01_contact_label_font_size'] !== '') ? $cssData['modal_01_contact_label_font_size'] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_01_contact_label_font_family" id="twss_modal_01_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_01_contact_label_font_family']) && $cssData['modal_01_contact_label_font_family'] !== '') ? $cssData['modal_01_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_01_contact_label_font_color" id="twss_modal_01_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_01_contact_label_font_color']) && $cssData['modal_01_contact_label_font_color'] !== '') ? $cssData['modal_01_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_01_contact_content_font_size" id="twss_modal_01_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_01_contact_content_font_size']) && $cssData['modal_01_contact_content_font_size'] !== '') ? $cssData['modal_01_contact_content_font_size'] : '14' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_01_contact_content_font_family" id="twss_modal_01_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_01_contact_content_font_family']) && $cssData['modal_01_contact_content_font_family'] !== '') ? $cssData['modal_01_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_01_contact_content_font_color" id="twss_modal_01_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_01_contact_content_font_color']) && $cssData['modal_01_contact_content_font_color'] !== '') ? $cssData['modal_01_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 02 Settings -->
  <div class="row modal-template-field-2 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 2 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Custom Text</td>
          <td>
            <input type="text" name="modal_02_custom_text" class="twss-form-input" value="<?php echo isset($cssData['modal_02_custom_text']) ? twss_6310_replace($cssData['modal_02_custom_text']) : "HI I'M" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_02_name_font_size" id="twss_modal_02_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_02_name_font_size']) && $cssData['modal_02_name_font_size'] !== '') ? $cssData['modal_02_name_font_size'] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_02_name_font_family" id="twss_modal_02_name_font_family" type="text" value="<?php echo (isset($cssData['modal_02_name_font_family']) && $cssData['modal_02_name_font_family'] !== '') ? $cssData['modal_02_name_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_02_name_font_color" id="twss_modal_02_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_02_name_font_color']) && $cssData['modal_02_name_font_color'] !== '') ? $cssData['modal_02_name_font_color'] : 'rgb(0, 150, 136)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_02_designation_font_size" id="twss_modal_02_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_02_designation_font_size']) && $cssData['modal_02_designation_font_size'] !== '') ? $cssData['modal_02_designation_font_size'] : '20' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_02_designation_font_family" id="twss_modal_02_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_02_designation_font_family']) && $cssData['modal_02_designation_font_family'] !== '') ? $cssData['modal_02_designation_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_02_designation_font_color" id="twss_modal_02_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_02_designation_font_color']) && $cssData['modal_02_designation_font_color'] !== '') ? $cssData['modal_02_designation_font_color'] : 'rgb(96, 125, 139)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_02_description_font_size" id="twss_modal_02_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_02_description_font_size']) && $cssData['modal_02_description_font_size'] !== '') ? $cssData['modal_02_description_font_size'] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_02_description_font_family" id="twss_modal_02_description_font_family" type="text" value="<?php echo (isset($cssData['modal_02_description_font_family']) && $cssData['modal_02_description_font_family'] !== '') ? $cssData['modal_02_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_02_description_font_color" id="twss_modal_02_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_02_description_font_color']) && $cssData['modal_02_description_font_color'] !== '') ? $cssData['modal_02_description_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_02_contact_label_font_size" id="twss_modal_02_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_02_contact_label_font_size']) && $cssData['modal_02_contact_label_font_size'] !== '') ? $cssData['modal_02_contact_label_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_02_contact_label_font_family" id="twss_modal_02_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_02_contact_label_font_family']) && $cssData['modal_02_contact_label_font_family'] !== '') ? $cssData['modal_02_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_02_contact_label_font_color" id="twss_modal_02_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_02_contact_label_font_color']) && $cssData['modal_02_contact_label_font_color'] !== '') ? $cssData['modal_02_contact_label_font_color'] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_02_contact_content_font_size" id="twss_modal_02_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_02_contact_content_font_size']) && $cssData['modal_02_contact_content_font_size'] !== '') ? $cssData['modal_02_contact_content_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_02_contact_content_font_family" id="twss_modal_02_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_02_contact_content_font_family']) && $cssData['modal_02_contact_content_font_family'] !== '') ? $cssData['modal_02_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_02_contact_content_font_color" id="twss_modal_02_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_02_contact_content_font_color']) && $cssData['modal_02_contact_content_font_color'] !== '') ? $cssData['modal_02_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 03 Settings -->
  <div class="row modal-template-field-3 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 3 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Custom Text</td>
          <td>
            <input type="text" name="modal_03_custom_text" class="twss-form-input" value="<?php echo isset($cssData['modal_03_custom_text'])  ? twss_6310_replace($cssData['modal_03_custom_text']) : "I'm" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Custom ToolTip</td>
          <td>
            <input type="text" name="modal_03_custom_tooltip" class="twss-form-input" value="<?php echo isset($cssData['modal_03_custom_tooltip'])  ? twss_6310_replace($cssData['modal_03_custom_tooltip']) : "HELLO" ?>">
          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color</td>
          <td>
            <input type="text" name="modal_03_accent_color" id="twss_modal_03_accent_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_accent_color']) && $cssData['modal_03_accent_color'] !== '') ? $cssData['modal_03_accent_color'] : 'rgb(7, 167, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_03_name_font_size" id="twss_modal_03_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_03_name_font_size']) && $cssData['modal_03_name_font_size'] !== '') ? $cssData['modal_03_name_font_size'] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_03_name_font_family" id="twss_modal_03_name_font_family" type="text" value="<?php echo (isset($cssData['modal_03_name_font_family']) && $cssData['modal_03_name_font_family'] !== '') ? $cssData['modal_03_name_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_03_name_font_color" id="twss_modal_03_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_name_font_color']) && $cssData['modal_03_name_font_color'] !== '') ? $cssData['modal_03_name_font_color'] : 'rgb(7, 203, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_03_designation_font_size" id="twss_modal_03_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_03_designation_font_size']) && $cssData['modal_03_designation_font_size'] !== '') ? $cssData['modal_03_designation_font_size'] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_03_designation_font_family" id="twss_modal_03_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_03_designation_font_family']) && $cssData['modal_03_designation_font_family'] !== '') ? $cssData['modal_03_designation_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_03_designation_font_color" id="twss_modal_03_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_designation_font_color']) && $cssData['modal_03_designation_font_color'] !== '') ? $cssData['modal_03_designation_font_color'] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_03_description_font_size" id="twss_modal_03_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_03_description_font_size']) && $cssData['modal_03_description_font_size'] !== '') ? $cssData['modal_03_description_font_size'] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_03_description_font_family" id="twss_modal_03_description_font_family" type="text" value="<?php echo (isset($cssData['modal_03_description_font_family']) && $cssData['modal_03_description_font_family'] !== '') ? $cssData['modal_03_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_03_description_font_color" id="twss_modal_03_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_description_font_color']) && $cssData['modal_03_description_font_color'] !== '') ? $cssData['modal_03_description_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_03_contact_label_font_size" id="twss_modal_03_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_03_contact_label_font_size']) && $cssData['modal_03_contact_label_font_size'] !== '') ? $cssData['modal_03_contact_label_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_03_contact_label_font_family" id="twss_modal_03_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_03_contact_label_font_family']) && $cssData['modal_03_contact_label_font_family'] !== '') ? $cssData['modal_03_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_03_contact_label_font_color" id="twss_modal_03_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_contact_label_font_color']) && $cssData['modal_03_contact_label_font_color'] !== '') ? $cssData['modal_03_contact_label_font_color'] : 'rgb(0, 0, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_03_contact_content_font_size" id="twss_modal_03_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_03_contact_content_font_size']) && $cssData['modal_03_contact_content_font_size'] !== '') ? $cssData['modal_03_contact_content_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_03_contact_content_font_family" id="twss_modal_03_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_03_contact_content_font_family']) && $cssData['modal_03_contact_content_font_family'] !== '') ? $cssData['modal_03_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_03_contact_content_font_color" id="twss_modal_03_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_03_contact_content_font_color']) && $cssData['modal_03_contact_content_font_color'] !== '') ? $cssData['modal_03_contact_content_font_color'] : 'rgb(128, 128, 128)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 04 Settings -->
  <div class="row modal-template-field-4 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 4 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color</td>
          <td>
            <input type="text" name="modal_04_accent_color" id="twss_modal_04_accent_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_04_name_font_size" id="twss_modal_04_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_04_name_font_size']) && $cssData['modal_04_name_font_size'] !== '') ? $cssData['modal_04_name_font_size'] : '30' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_04_name_font_family" id="twss_modal_04_name_font_family" type="text" value="<?php echo (isset($cssData['modal_04_name_font_family']) && $cssData['modal_04_name_font_family'] !== '') ? $cssData['modal_04_name_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_04_name_font_color" id="twss_modal_04_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_name_font_color']) && $cssData['modal_04_name_font_color'] !== '') ? $cssData['modal_04_name_font_color'] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_04_designation_font_size" id="twss_modal_04_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_04_designation_font_size']) && $cssData['modal_04_designation_font_size'] !== '') ? $cssData['modal_04_designation_font_size'] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_04_designation_font_family" id="twss_modal_04_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_04_designation_font_family']) && $cssData['modal_04_designation_font_family'] !== '') ? $cssData['modal_04_designation_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_04_designation_font_color" id="twss_modal_04_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_designation_font_color']) && $cssData['modal_04_designation_font_color'] !== '') ? $cssData['modal_04_designation_font_color'] : 'rgb(255, 255, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_04_description_font_size" id="twss_modal_04_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_04_description_font_size']) && $cssData['modal_04_description_font_size'] !== '') ? $cssData['modal_04_description_font_size'] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_04_description_font_family" id="twss_modal_04_description_font_family" type="text" value="<?php echo (isset($cssData['modal_04_description_font_family']) && $cssData['modal_04_description_font_family'] !== '') ? $cssData['modal_04_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_04_description_font_color" id="twss_modal_04_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_description_font_color']) && $cssData['modal_04_description_font_color'] !== '') ? $cssData['modal_04_description_font_color'] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height="45">
          <td>Description Text Align</td>
          <td>
            <select name="modal_04_description_text_align" class="twss-form-input" id="twss_modal_04_description_text_align">
              <option value="center" <?php if (isset($cssData['modal_04_description_text_align']) && $cssData['modal_04_description_text_align'] == 'center') echo "selected=''" ?> >
                Center</option>
              <option value="left" <?php if (isset($cssData['modal_04_description_text_align']) && $cssData['modal_04_description_text_align'] == 'left') echo "selected=''" ?> >Left
              </option>
              <option value="right" <?php if (isset($cssData['modal_04_description_text_align']) && $cssData['modal_04_description_text_align'] == 'right') echo "selected=''" ?> >Right
              </option>
            </select>
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Background Color</td>
          <td>
            <input type="text" name="modal_04_contact_background_color" id="twss_modal_04_contact_background_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_contact_background_color']) && $cssData['modal_04_contact_background_color'] !== '') ? $cssData['modal_04_contact_background_color'] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_04_contact_label_font_size" id="twss_modal_04_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_04_contact_label_font_size']) && $cssData['modal_04_contact_label_font_size'] !== '') ? $cssData['modal_04_contact_label_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_04_contact_label_font_family" id="twss_modal_04_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_04_contact_label_font_family']) && $cssData['modal_04_contact_label_font_family'] !== '') ? $cssData['modal_04_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_04_contact_label_font_color" id="twss_modal_04_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_contact_label_font_color']) && $cssData['modal_04_contact_label_font_color'] !== '') ? $cssData['modal_04_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_04_contact_content_font_size" id="twss_modal_04_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_04_contact_content_font_size']) && $cssData['modal_04_contact_content_font_size'] !== '') ? $cssData['modal_04_contact_content_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_04_contact_content_font_family" id="twss_modal_04_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_04_contact_content_font_family']) && $cssData['modal_04_contact_content_font_family'] !== '') ? $cssData['modal_04_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_04_contact_content_font_color" id="twss_modal_04_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_04_contact_content_font_color']) && $cssData['modal_04_contact_content_font_color'] !== '') ? $cssData['modal_04_contact_content_font_color'] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 05 Settings -->
  <div class="row modal-template-field-5 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 5 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Accent Color</td>
          <td>
            <input type="text" name="modal_05_accent_color" id="twss_modal_05_accent_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_accent_color']) && $cssData['modal_05_accent_color'] !== '') ? $cssData['modal_05_accent_color'] : 'rgb(7, 203, 121)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_05_name_font_size" id="twss_modal_05_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_05_name_font_size']) && $cssData['modal_05_name_font_size'] !== '') ? $cssData['modal_05_name_font_size'] : '25' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_05_name_font_family" id="twss_modal_05_name_font_family" type="text" value="<?php echo (isset($cssData['modal_05_name_font_family']) && $cssData['modal_05_name_font_family'] !== '') ? $cssData['modal_05_name_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_05_name_font_color" id="twss_modal_05_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_name_font_color']) && $cssData['modal_05_name_font_color'] !== '') ? $cssData['modal_05_name_font_color'] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_05_designation_font_size" id="twss_modal_05_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_05_designation_font_size']) && $cssData['modal_05_designation_font_size'] !== '') ? $cssData['modal_05_designation_font_size'] : '20' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_05_designation_font_family" id="twss_modal_05_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_05_designation_font_family']) && $cssData['modal_05_designation_font_family'] !== '') ? $cssData['modal_05_designation_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_05_designation_font_color" id="twss_modal_05_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_designation_font_color']) && $cssData['modal_05_designation_font_color'] !== '') ? $cssData['modal_05_designation_font_color'] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_05_description_font_size" id="twss_modal_05_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_05_description_font_size']) && $cssData['modal_05_description_font_size'] !== '') ? $cssData['modal_05_description_font_size'] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_05_description_font_family" id="twss_modal_05_description_font_family" type="text" value="<?php echo (isset($cssData['modal_05_description_font_family']) && $cssData['modal_05_description_font_family'] !== '') ? $cssData['modal_05_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_05_description_font_color" id="twss_modal_05_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_description_font_color']) && $cssData['modal_05_description_font_color'] !== '') ? $cssData['modal_05_description_font_color'] : 'rgb(190, 190, 190)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_05_contact_label_font_size" id="twss_modal_05_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_05_contact_label_font_size']) && $cssData['modal_05_contact_label_font_size'] !== '') ? $cssData['modal_05_contact_label_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_05_contact_label_font_family" id="twss_modal_05_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_05_contact_label_font_family']) && $cssData['modal_05_contact_label_font_family'] !== '') ? $cssData['modal_05_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_05_contact_label_font_color" id="twss_modal_05_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_contact_label_font_color']) && $cssData['modal_05_contact_label_font_color'] !== '') ? $cssData['modal_05_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_05_contact_content_font_size" id="twss_modal_05_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_05_contact_content_font_size']) && $cssData['modal_05_contact_content_font_size'] !== '') ? $cssData['modal_05_contact_content_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_05_contact_content_font_family" id="twss_modal_05_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_05_contact_content_font_family']) && $cssData['modal_05_contact_content_font_family'] !== '') ? $cssData['modal_05_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_05_contact_content_font_color" id="twss_modal_05_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_05_contact_content_font_color']) && $cssData['modal_05_contact_content_font_color'] !== '') ? $cssData['modal_05_contact_content_font_color'] : 'rgb(190, 190, 190)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- Modal Template 06 Settings -->
  <div class="row modal-template-field-6 modal-template-field">
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height="45">
          <td width="55%">
            <b>Template 6 Settings</b><br />
            <small style="color:#FF0000">(No live preview)</small>
          </td>
          <td>

          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Size</td>
          <td>
            <input type="number" name="modal_06_name_font_size" id="twss_modal_06_name_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_06_name_font_size']) && $cssData['modal_06_name_font_size'] !== '') ? $cssData['modal_06_name_font_size'] : '25' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Family</td>
          <td>
            <input name="modal_06_name_font_family" id="twss_modal_06_name_font_family" type="text" value="<?php echo (isset($cssData['modal_06_name_font_family']) && $cssData['modal_06_name_font_family'] !== '') ? $cssData['modal_06_name_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Name Font Color</td>
          <td>
            <input type="text" name="modal_06_name_font_color" id="twss_modal_06_name_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_06_name_font_color']) && $cssData['modal_06_name_font_color'] !== '') ? $cssData['modal_06_name_font_color'] : 'rgb(101, 97, 97)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Size</td>
          <td>
            <input type="number" name="modal_06_designation_font_size" id="twss_modal_06_designation_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_06_designation_font_size']) && $cssData['modal_06_designation_font_size'] !== '') ? $cssData['modal_06_designation_font_size'] : '18' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Family</td>
          <td>
            <input name="modal_06_designation_font_family" id="twss_modal_06_designation_font_family" type="text" value="<?php echo (isset($cssData['modal_06_designation_font_family']) && $cssData['modal_06_designation_font_family'] !== '') ? $cssData['modal_06_designation_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Designation Font Color</td>
          <td>
            <input type="text" name="modal_06_designation_font_color" id="twss_modal_06_designation_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_06_designation_font_color']) && $cssData['modal_06_designation_font_color'] !== '') ? $cssData['modal_06_designation_font_color'] : 'rgb(140, 140, 140)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Size</td>
          <td>
            <input type="number" name="modal_06_description_font_size" id="twss_modal_06_description_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_06_description_font_size']) && $cssData['modal_06_description_font_size'] !== '') ? $cssData['modal_06_description_font_size'] : '16' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
    <div class="twss-col-6">
      <table class="table table-responsive twss_6310_admin_table" width="100%">
        <tr height ="45">
          <td>Description Font Family</td>
          <td>
            <input name="modal_06_description_font_family" id="twss_modal_06_description_font_family" type="text" value="<?php echo (isset($cssData['modal_06_description_font_family']) && $cssData['modal_06_description_font_family'] !== '') ? $cssData['modal_06_description_font_family'] : 'Arimo' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Descritiption Font Color</td>
          <td>
            <input type="text" name="modal_06_description_font_color" id="twss_modal_06_description_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_06_description_font_color']) && $cssData['modal_06_description_font_color'] !== '') ? $cssData['modal_06_description_font_color'] : 'rgb(53, 53, 53)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Size</td>
          <td>
            <input type="number" name="modal_06_contact_label_font_size" id="twss_modal_06_contact_label_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_06_contact_label_font_size']) && $cssData['modal_06_contact_label_font_size'] !== '') ? $cssData['modal_06_contact_label_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Family</td>
          <td>
            <input name="modal_06_contact_label_font_family" id="twss_modal_06_contact_label_font_family" type="text" value="<?php echo (isset($cssData['modal_06_contact_label_font_family']) && $cssData['modal_06_contact_label_font_family'] !== '') ? $cssData['modal_06_contact_label_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Icon/Label Font Color</td>
          <td>
            <input type="text" name="modal_06_contact_label_font_color" id="twss_modal_06_contact_label_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_06_contact_label_font_color']) && $cssData['modal_06_contact_label_font_color'] !== '') ? $cssData['modal_06_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Size</td>
          <td>
            <input type="number" name="modal_06_contact_content_font_size" id="twss_modal_06_contact_content_font_size" class="twss-form-input" value="<?php echo (isset($cssData['modal_06_contact_content_font_size']) && $cssData['modal_06_contact_content_font_size'] !== '') ? $cssData['modal_06_contact_content_font_size'] : '15' ?>" size="20">
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Family</td>
          <td>
            <input name="modal_06_contact_content_font_family" id="twss_modal_06_contact_content_font_family" type="text" value="<?php echo (isset($cssData['modal_06_contact_content_font_family']) && $cssData['modal_06_contact_content_font_family'] !== '') ? $cssData['modal_06_contact_content_font_family'] : 'Amaranth' ?>" />
          </td>
        </tr>
        <tr height ="45">
          <td>Contact Content Font Color</td>
          <td>
            <input type="text" name="modal_06_contact_content_font_color" id="twss_modal_06_contact_content_font_color" class="twss-form-input twss_6310_color_picker minicolors-input" data-format="rgb" value="<?php echo (isset($cssData['modal_06_contact_content_font_color']) && $cssData['modal_06_contact_content_font_color'] !== '') ? $cssData['modal_06_contact_content_font_color'] : 'rgb(68, 68, 68)' ?>" size="20">
          </td>
        </tr>
      </table>
    </div>
  </div>

</div>

<script>
  jQuery(document).ready(function() {
    jQuery('.modal-template-field').hide();
    <?php
    echo "jQuery('.modal-template-field-{$modal_template}').show();";
    ?>

    jQuery('body').on('change', '#modal_template_number', function() {
      var num = jQuery(this).val();
      var url = `https://www.wpmart.org/wp-content/wpm-templates/modal_${num}.png`;
      jQuery('.modal-demo-image').attr('href', url);
      jQuery('.modal-demo-image img').attr('src', url);
      jQuery('.modal-template-field').hide();
      jQuery(`.modal-template-field-${num}`).show();
    });
  });
</script>