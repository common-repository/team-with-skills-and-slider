<div class="twss_6310_tabs_panel_settings">
  <form method="post">
    <?php wp_nonce_field("twss_nonce_field_form") ?>
    <input type="hidden" name="id" value="<?php echo $styleId ?>" />
    <div class="twss_6310_padding_15_px">
      <?php include twss_6310_plugin_url . 'settings/helper/tab-menu.php'; ?>
    </div>
    <div class="twss-tab-content">
      <div id="tab-1">
        <div class="row twss_6310_padding_15_px">
          <h3 class="twss-tab-menu-settings">General Settings</h3>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
            <tr>
                <td width="55%">
                  <b>Desktop Item Per Row</b>
                  <div class="twss-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <select name="item_per_row" class="twss-form-input twss-no-preview">
                    <?php
                      for($i = 1; $i <= 6; $i++){
                        $selected = isset($cssData['item_per_row']) && $i == $cssData['item_per_row'] ? 'selected' : '';
                        $items = $i > 1 ? 'Items' : 'Item';
                        echo "<option value='{$i}' {$selected}>{$i} {$items} per Row</option>";
                      }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="55%">
                  <b>Tablet Item Per Row</b>
                  <div class="twss-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <select name="tablet_item_per_row" class="twss-form-input twss-no-preview">
                    <?php
                      for($i = 1; $i <= 3; $i++){
                        $selected = isset($cssData['tablet_item_per_row']) && $i == $cssData['tablet_item_per_row'] ? 'selected' : '';
                        $items = $i > 1 ? 'Items' : 'Item';
                        echo "<option value='{$i}' {$selected}>{$i} {$items} per Row</option>";
                      }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="55%">
                  <b>Mobile Item Per Row</b>
                  <div class="twss-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <select name="mobile_item_per_row" class="twss-form-input twss-no-preview">
                    <?php
                      for($i = 1; $i <= 3; $i++){
                        $selected = isset($cssData['mobile_item_per_row']) && $i == $cssData['mobile_item_per_row'] ? 'selected' : '';
                        $items = $i > 1 ? 'Items' : 'Item';
                        echo "<option value='{$i}' {$selected}>{$i} {$items} per Row</option>";
                      }
                    ?>
                  </select>
                </td>
              </tr>
              <tr height="45">
                <td>
                    <b>Items Margin</b>
                    <div class="twss-6310-no-live-preview">*Preview-on-change  not available</div>
                </td>
                <td>
                  <input type="number" name="item_margin" id="twss_item_margin" class="twss-form-input" value="<?php echo (isset($cssData['item_margin']) && $cssData['item_margin'])?$cssData['item_margin']:"15" ?>">
                </td>
              </tr>
              <tr>
                <td><b>Image Radius</b></td>
                <td>
                  <input type="number" min="0" name="image_radius" value="<?php echo $cssData['image_radius'] ?>" class="twss-form-input" id="twss_image_radius" />
                </td>
              </tr>
              <tr>
                <td><b>Box Border Width</b></td>
                <td>
                  <input type="number" min="0" name="border_width" value="<?php echo $cssData['border_width'] ?>" class="twss-form-input" id="twss_border_width" />
                </td>
              </tr>
              <tr>
                <td><b>Box Border Color</b></td>
                <td>
                  <input type="text" name="border_color" id="twss_border_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo $cssData['border_color'] ?>">
                </td>
              </tr>
            </table>
          </div>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr>
                <td width="55%"><b>Box Border Hover Color</b></td>
                <td>
                  <input type="text" name="border_hover_color" id="twss_border_hover_color" class="twss-form-input twss_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo $cssData['border_hover_color'] ?>">
                </td>
              </tr>
              <tr>
                <td><b>Box Background</b></td>
                <td>
                  <input type="text" name="box_background_color" id="twss_box_background_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo $cssData['box_background_color'] ?>">
                </td>
              </tr>
              <tr>
                <td width="55%"><b>Box Hover Background</b></td>
                <td>
                  <input type="text" name="image_hover_background" id="twss_image_hover_background" class="twss-form-input twss_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo $cssData['image_hover_background'] ?>">
                </td>

              </tr>
              <tr>
                <td><b>Box Shadow Width</b></td>
                <td>
                  <input type="number" min="0" name="box_shadow_width" value="<?php echo $cssData['box_shadow_width'] ?>" class="twss-form-input" step="1" id="twss_box_shadow_width" />
                </td>
              </tr>
              <tr>
                <td><b>Box Shadow Blur</b></td>
                <td>
                  <input type="number" min="0" name="box_shadow_blur" value="<?php echo $cssData['box_shadow_blur'] ?>" class="twss-form-input" step="1" id="twss_box_shadow_blur" />
                </td>
              </tr>
              <tr>
                <td><b>Box Shadow Color</b></td>
                <td>
                  <input type="text" name="box_shadow_color" id="twss_box_shadow_color" class="twss-form-input twss_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo $cssData['box_shadow_color'] ?>">
                </td>
              </tr>
              <tr>
                <td><b>Hover Box Shadow Color</b></td>
                <td>
                  <input type="text" name="twss_hover_box_shadow_color" id="twss_hover_box_shadow_color" class="twss-form-input twss_6310_color_picker" data-opacity=".8" data-format="rgb" value="<?php echo $cssData['twss_hover_box_shadow_color'] ?>">
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div id="tab-2">
        <div class="row">
          <h3 class="twss-tab-menu-settings">Name Settings</h3>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr>
                <td><b>Font Size</b></td>
                <td>
                  <input type="number" min="0" name="member_font_size" value="<?php echo $cssData['member_font_size'] ?>" class="twss-form-input" step="1" id="member_font_size" />
                </td>
              </tr>
              <tr>
                <td><b>Line Height</b></td>
                <td>
                  <input name="member_line_height" id="twss_heading_line_height" type="number" value="<?php echo $cssData['member_line_height'] ?>" class="twss-form-input" />
                </td>
              </tr>
              <tr>
                <td><b>Font Color</b></td>
                <td>
                  <input type="text" name="member_font_color" id="twss_member_font_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" value="<?php echo $cssData['member_font_color'] ?>">
                </td>
              </tr>
              <tr>
                <td><b>Font Hover Color</b></td>
                <td>
                  <input type="text" name="member_font_hover_color" id="twss_member_font_hover_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" value="<?php echo $cssData['member_font_hover_color'] ?>">
                </td>
              </tr>
              <tr>
                <td><b>Font Weight</b></td>
                <td>
                  <select name="member_font_weight" class="twss-form-input" id="twss_member_font_weight">
                    <option value="100" <?php if ($cssData['member_font_weight'] == '100') echo " selected=''" ?>>100</option>
                    <option value="200" <?php if ($cssData['member_font_weight'] == '200') echo " selected=''" ?>>200</option>
                    <option value="300" <?php if ($cssData['member_font_weight'] == '300') echo " selected=''" ?>>300</option>
                    <option value="400" <?php if ($cssData['member_font_weight'] == '400') echo " selected=''" ?>>400</option>
                    <option value="500" <?php if ($cssData['member_font_weight'] == '500') echo " selected=''" ?>>500</option>
                    <option value="600" <?php if ($cssData['member_font_weight'] == '600') echo " selected=''" ?>>600</option>
                    <option value="700" <?php if ($cssData['member_font_weight'] == '700') echo " selected=''" ?>>700</option>
                    <option value="800" <?php if ($cssData['member_font_weight'] == '800') echo " selected=''" ?>>800</option>
                    <option value="900" <?php if ($cssData['member_font_weight'] == '900') echo " selected=''" ?>>900</option>
                    <option value="normal" <?php if ($cssData['member_font_weight'] == 'normal') echo " selected=''" ?>>Normal</option>
                    <option value="bold" <?php if ($cssData['member_font_weight'] == 'bold') echo " selected=''" ?>>Bold</option>
                    <option value="lighter" <?php if ($cssData['member_font_weight'] == 'lighter') echo " selected=''" ?>>Lighter</option>
                    <option value="initial" <?php if ($cssData['member_font_weight'] == 'initial') echo " selected=''" ?>>Initial</option>
                  </select>
                </td>
              </tr>
            </table>
          </div>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">

              <tr>
                <td><b>Text Transform</b></td>
                <td>
                  <select name="member_text_transform" class="twss-form-input" id="twss_member_text_transform">
                    <option value="capitalize" <?php if ($cssData['member_text_transform'] == 'capitalize') echo " selected=''" ?>>Capitalize</option>
                    <option value="uppercase" <?php if ($cssData['member_text_transform'] == 'uppercase') echo " selected=''" ?>>Uppercase</option>
                    <option value="lowercase" <?php if ($cssData['member_text_transform'] == 'lowercase') echo " selected=''" ?>>Lowercase</option>
                    <option value="none" <?php if ($cssData['member_text_transform'] == 'none') echo " selected=''" ?>>As Input</option>

                  </select>
                </td>
              </tr>
              <tr>
                <td><b>Font Family</b></td>
                <td>
                  <input name="member_font_family" id="twss_jquery_heading_font" type="text" value="<?php echo $cssData['member_font_family'] ?>" />
                </td>
              </tr>
              <tr>
                <td><b>Margin Top</b></td>
                <td>
                  <input name="member_margin_top" id="twss_member_margin_top" type="number" value="<?php echo $cssData['member_margin_top'] ?>" class="twss-form-input" />
                </td>
              </tr>
              <tr>
                <td><b>Margin Bottom</b></td>
                <td>
                  <input name="member_margin_bottom" id="twss_member_margin_bottom" type="number" value="<?php echo $cssData['member_margin_bottom'] ?>" class="twss-form-input" />
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div id="tab-3">
        <div class="row">
          <h3 class="twss-tab-menu-settings">Designation Settings</h3>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr>
                <td>
                  <b>Activate Designation</b>
                </td>
                <td>
                  <input type="hidden" name="twss_fun_template_designation" id="twss_fun_template_designation" value="<?php echo $cssData['twss_fun_template_designation'] ?>">
                  <button type="button" value="1" class="twss-btn-multi activate-designation<?php if ($cssData['twss_fun_template_designation'] == 1) echo " active" ?>">Yes</button>
                  <button type="button" value="0" class="twss-btn-multi activate-designation<?php if ($cssData['twss_fun_template_designation'] == 0) echo " active" ?>">No</button>
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Font Size</b></td>
                <td>
                  <input type="number" min="0" name="designation_font_size" value="<?php echo $cssData['designation_font_size'] ?>" class="twss-form-input" step="1" id="twss_designation_font_size" />
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Line Height</b></td>
                <td>
                  <input name="designation_line_height" id="twss_designation_line_height" type="number" value="<?php echo $cssData['designation_line_height'] ?>" class="twss-form-input" />
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Font Color</b></td>
                <td>
                  <input type="text" name="designation_font_color" id="twss_designation_font_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" value="<?php echo $cssData['designation_font_color'] ?>">
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Font Hover Color</b></td>
                <td>
                  <input type="text" name="designation_font_hover_color" id="twss_designation_font_hover_color" class="twss-form-input twss_6310_color_picker" data-format="rgb" value="<?php echo $cssData['designation_font_hover_color'] ?>">
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Font Weight</b></td>
                <td>
                  <select name="designation_font_weight" class="twss-form-input" id="twss_designation_font_weight">
                    <option value="100" <?php if ($cssData['designation_font_weight'] == '100') echo " selected=''" ?>>100</option>
                    <option value="200" <?php if ($cssData['designation_font_weight'] == '200') echo " selected=''" ?>>200</option>
                    <option value="300" <?php if ($cssData['designation_font_weight'] == '300') echo " selected=''" ?>>300</option>
                    <option value="400" <?php if ($cssData['designation_font_weight'] == '400') echo " selected=''" ?>>400</option>
                    <option value="500" <?php if ($cssData['designation_font_weight'] == '500') echo " selected=''" ?>>500</option>
                    <option value="600" <?php if ($cssData['designation_font_weight'] == '600') echo " selected=''" ?>>600</option>
                    <option value="700" <?php if ($cssData['designation_font_weight'] == '700') echo " selected=''" ?>>700</option>
                    <option value="800" <?php if ($cssData['designation_font_weight'] == '800') echo " selected=''" ?>>800</option>
                    <option value="900" <?php if ($cssData['designation_font_weight'] == '900') echo " selected=''" ?>>900</option>
                    <option value="normal" <?php if ($cssData['designation_font_weight'] == 'normal') echo " selected=''" ?>>Normal</option>
                    <option value="bold" <?php if ($cssData['designation_font_weight'] == 'bold') echo " selected=''" ?>>Bold</option>
                    <option value="lighter" <?php if ($cssData['designation_font_weight'] == 'lighter') echo " selected=''" ?>>Lighter</option>
                    <option value="initial" <?php if ($cssData['designation_font_weight'] == 'initial') echo " selected=''" ?>>Initial</option>
                  </select>
                </td>
              </tr>

            </table>
          </div>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr  class="designation_act_field">
                <td><b>Text Transform</b></td>
                <td>
                  <select name="designation_text_transform" class="twss-form-input" id="twss_designation_text_transform">
                    <option value="capitalize" <?php if ($cssData['designation_text_transform'] == 'capitalize') echo " selected=''" ?>>Capitalize</option>
                    <option value="uppercase" <?php if ($cssData['designation_text_transform'] == 'uppercase') echo " selected=''" ?>>Uppercase</option>
                    <option value="lowercase" <?php if ($cssData['designation_text_transform'] == 'lowercase') echo " selected=''" ?>>Lowercase</option>
                    <option value="none" <?php if ($cssData['designation_text_transform'] == 'none') echo " selected=''" ?>>As Input</option>

                  </select>
                </td>
              </tr>

              <tr  class="designation_act_field">
                <td><b>Font Family</b></td>
                <td>
                  <input name="designation_font_family" id="twss_jquery_designation_font" type="text" value="<?php echo $cssData['designation_font_family'] ?>" />
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Margin Top</b></td>
                <td>
                  <input name="designation_margin_top" id="twss_designation_margin_top" type="number" value="<?php echo $cssData['designation_margin_top'] ?>" class="twss-form-input" />
                </td>
              </tr>
              <tr  class="designation_act_field">
                <td><b>Margin Bottom</b></td>
                <td>
                  <input name="designation_margin_bottom" id="twss_designation_margin_bottom" type="number" value="<?php echo $cssData['designation_margin_bottom'] ?>" class="twss-form-input" />
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <?php include twss_6310_plugin_url . 'settings/helper/details_form.php'; ?>
      <div id="tab-5">
        <div class="row">
          <h3 class="twss-tab-menu-settings">Social Icon Settings</h3>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr>
                <td>
                  <b>Activate Social Icons</b>
                </td>
                <td>
                  <input type="hidden" name="twss_fun_template_social" id="twss_fun_template_social" value="<?php echo $cssData['twss_fun_template_social'] ?>">
                  <button type="button" value="1" class="twss-btn-multi activate-social<?php if ($cssData['twss_fun_template_social'] == 1) echo " active" ?>">Yes</button>
                  <button type="button" value="0" class="twss-btn-multi activate-social<?php if ($cssData['twss_fun_template_social'] == 0) echo " active" ?>">No</button>
                </td>
              </tr>
              <tr class="social_act_field">
                <td><b>Social Icon Width</b></td>
                <td>
                  <input type="number" min="0" name="social_icon_width" value="<?php echo $cssData['social_icon_width'] ?>" class="twss-form-input" id="twss_social_icon_width" />
                </td>
              </tr>
              <tr class="social_act_field">
                <td><b>Social Icon Height</b></td>
                <td>
                  <input type="number" min="0" name="social_icon_height" value="<?php echo $cssData['social_icon_height'] ?>" class="twss-form-input" id="twss_social_icon_height" />
                </td>
              </tr>
              <tr class="social_act_field">
                <td width="55%"><b>Social Icon Border Width</b></td>
                <td>
                  <input type="number" min="0" name="social_border_width" value="<?php echo $cssData['social_border_width'] ?>" class="twss-form-input" id="twss_social_border_width" />
                </td>
              </tr>
              <tr class="social_act_field">
                <td><b>Social Icon Border Radius</b></td>
                <td>
                  <input type="number" min="0" name="social_border_radius" value="<?php echo $cssData['social_border_radius'] ?>" class="twss-form-input" id="twss_social_border_radius" />
                </td>
              </tr>

            </table>
          </div>
          <div class="twss-col-6">
            <table class="table table-responsive twss_6310_admin_table">
              <tr class="social_act_field">
                <td><b>Margin Top</b></td>
                <td>
                  <input name="social_margin_top" id="twss_social_margin_top" type="number" value="<?php echo $cssData['social_margin_top'] ?>" class="twss-form-input" />
                </td>
              </tr>
              <tr class="social_act_field">
                <td><b>Margin Bottom</b>
                  <div class="twss-6310-no-live-preview">Margin Bottom = Margin Top - 8 [Recommended]</div>
                </td>
                <td>
                  <input name="social_margin_bottom" id="twss_social_margin_bottom" type="number" value="<?php echo $cssData['social_margin_bottom'] ?>" class="twss-form-input" />
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <?php include twss_6310_plugin_url . 'settings/helper/slider_form.php'; ?>
      <?php include twss_6310_plugin_url . 'settings/helper/search_form.php'; ?>
      <?php include twss_6310_plugin_url . 'settings/helper/modal_form.php'; ?>

      <br class="twss-6310-clear" />
      <br class="twss-6310-clear" />
      <hr />
      <input type="submit" name="update_style_change" value="Save" class="twss-btn-primary twss-pull-right" style="margin-right: 15px; margin-bottom: 10px; display: block" />
      <br class="twss-6310-clear" />
    </div>
  </form>
</div>