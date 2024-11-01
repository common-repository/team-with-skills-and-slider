<div class="twss_6310_modal-content">
  <span class="twss-6310-close">&times;</span>
  <!-- Template 01 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_1">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
    <div class="twss_6310_modal_body_picture">
      <img src="" class="twss_6310_modal_img" />
    </div>
    <div class="twss_6310_modal_body_content">
      <div class="twss_6310_modal_designation"></div>
      <div class="twss_6310_modal_name"></div>
      <div class="twss_6310_modal_details"></div>
      <br><br>
      <div class="twss_6310_modal_contact"></div>
      <div class="twss_6310_modal_social"></div>
    </div>
    <br class="twss_6310_clear" />
  </div>

  <!-- Template 02 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_2">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
    <div class="twss_6310_modal_body_picture">
      <img src="" class="twss_6310_modal_img" />
      <div class="twss_6310_modal_social"></div>
    </div>
    <div class="twss_6310_modal_body_content">
      <div class="twss_6310_modal_title">
      <?php echo isset($cssData['modal_02_custom_text'])  ? twss_6310_replace($cssData['modal_02_custom_text']) : "HI I'M" ?> <div class="twss_6310_modal_name"></div>
      </div>
      <div class="twss_6310_modal_designation"></div>
      <div class="twss_6310_modal_details"></div>
      <div class="twss_6310_modal_contact"></div>
    </div>
  </div>

  <!-- Template 03 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_3">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
    <div class="twss_6310_modal_body_picture">
      <img src="" class="twss_6310_modal_img" alt="">
    </div>
    <div class="twss_6310_modal_body_content">
      <div class="twss_6310_modal_preword">
      <div class="twss_6310_modal_pre_title"> <?php echo isset($cssData['modal_03_custom_tooltip'])  ? twss_6310_replace($cssData['modal_03_custom_tooltip']) : "HELLO" ?></div>
      </div>
      <div class="twss_6310_modal_title"><?php echo isset($cssData['modal_03_custom_text'])  ? twss_6310_replace($cssData['modal_03_custom_text']) : "I'M" ?>
        <div class="twss_6310_modal_name"></div>
      </div>
      <div class="twss_6310_modal_designation"></div>
      <div class="twss_6310_modal_hr"> </div>
      <div class="twss_6310_modal_details"></div>
      <div class="twss_6310_modal_contact"></div>
      <div class="twss_6310_modal_footer">
        <div class="twss_6310_modal_social"></div>
      </div>
    </div>
  </div>

  <!-- Template 04 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_4">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
    <div class="twss_6310_modal_upper">
      <div class="twss_6310_modal_upper_right">
        <div class="twss_6310_modal_upper_right_img">
          <img src="" class="twss_6310_modal_img" alt="">
        </div>
      </div>
      <div class="twss_6310_modal_upper_left">
        <div class="twss_6310_modal_name"></div>
        <div class="twss_6310_modal_designation"></div>
        <div class="twss_6310_modal_contact"></div>
        <div class="twss_6310_modal_social"></div>
      </div>
    </div>
    <div class="twss_6310_modal_about">
      <div class="twss_6310_modal_details"></div>
    </div>
  </div>

  <!-- Template 05 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_5">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
    <div class="twss_6310_modal_left_col">
      <div class="twss_6310_modal_profile_pic">
        <img src="" class="twss_6310_modal_img" alt="">
      </div>
      <div class="twss_6310_modal_name"></div>
      <div class="twss_6310_modal_designation"></div>
      <div class="twss_6310_modal_social"></div>
    </div>
    <div class="twss_6310_modal_right_col">
      <div class="twss_6310_modal_title">ABOUT ME</div>
      <div class="twss_6310_modal_details"></div>
      <div class="twss_6310_modal_hr"></div>
      <div class="twss_6310_modal_contact"></div>
    </div>
  </div>

  <!-- Template 06 -->
  <div class="twss_6310_modal_template twss_6310_modal_template_6">
    <div class="twss_6310_modal_template_before"></div>
    <div class="twss_6310_modal_template_after"></div>
      <div class="twss_6310_modal_profile_pic">
        <img src="" class="twss_6310_modal_img" alt="">
      </div>
      <div class="twss_6310_modal_top">
        <div class="twss_6310_modal_name"></div>
        <div class="twss_6310_modal_designation"></div>
        <div class="twss_6310_modal_social"></div>
      </div>
      <div class="twss_6310_modal_hr"></div>
      <div class="twss_6310_modal_details"></div>
      <div class="twss_6310_modal_hr2"></div>
      <div class="twss_6310_modal_contact"></div>
  </div>

  <!-- ****************
  ******** CSS ********
  ********************* -->
  <style>
    .twss_6310_modal_template_before, .twss_6310_modal_template_after{
      position: absolute;
      cursor: pointer;
      z-index: 99999999;
      border-radius: 50%;
    }
    .twss_6310_modal_template_before{
      content: url('<?php echo $prev ?>');
      left: -40px;
      top: calc(50% - 30px);
    }
    .twss_6310_modal_template_after{
      content: url('<?php echo $next ?>');
      right: -35px;
      top: calc(50% - 30px);
    }

    /* Template 01 */
    .twss_6310_modal_template_1 {
        float: left;
        width: 100%;
        padding: 20px;
        background: #fefefe;
        border: 1px solid #888;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      .twss_6310_modal_template_1 .twss_6310_modal_body_picture img {
        border: 1px solid #ccc;
        width: calc(100% - 12px);
      }

      .twss_6310_modal_template_1 .twss_6310_modal_designation {
        font-size: <?php echo (isset($cssData['modal_01_designation_font_size']) && $cssData['modal_01_designation_font_size'] !== '') ? $cssData['modal_01_designation_font_size'] : '14' ?>px;
        font-family: <?php echo (isset($cssData['modal_01_designation_font_family']) && $cssData['modal_01_designation_font_family'])?str_replace("+", " ", $cssData['modal_01_designation_font_family']):'sans-serif' ?>;
        color: <?php echo (isset($cssData['modal_01_designation_font_color']) && $cssData['modal_01_designation_font_color'] !== '') ? $cssData['modal_01_designation_font_color'] : 'rgb(0, 0, 0)' ?>;
        text-transform: uppercase;
        font-weight: 300;
      }

      .twss_6310_modal_template_1 .twss_6310_modal_name {
        font-size: <?php echo (isset($cssData['modal_01_name_font_size']) && $cssData['modal_01_name_font_size'] !== '') ? $cssData['modal_01_name_font_size'] : '22' ?>px;
        font-family: <?php echo (isset($cssData['modal_01_name_font_family']) && $cssData['modal_01_name_font_family'])?str_replace("+", " ", $cssData['modal_01_name_font_family']):'sans-serif' ?>;
        color: <?php echo (isset($cssData['modal_01_name_font_color']) && $cssData['modal_01_name_font_color'] !== '') ? $cssData['modal_01_name_font_color'] : 'rgb(17, 1, 0)' ?>;
        text-transform: capitalize;
        margin-bottom: 25px;
        line-height: 30px;
        font-weight: 600;
      }

      .twss_6310_modal_template_1 .twss_6310_modal_details {
        font-size: <?php echo (isset($cssData['modal_01_description_font_size']) && $cssData['modal_01_description_font_size'] !== '') ? $cssData['modal_01_description_font_size'] : '14' ?>px;
        font-family: <?php echo (isset($cssData['modal_01_description_font_family']) && $cssData['modal_01_description_font_family'])?str_replace("+", " ", $cssData['modal_01_description_font_family']):'Arimo' ?>;
        color: <?php echo (isset($cssData['modal_01_description_font_color']) && $cssData['modal_01_description_font_color'] !== '') ? $cssData['modal_01_description_font_color'] : 'rgb(0, 0, 0)' ?>;
        line-height: calc(<?php echo (isset($cssData['modal_01_description_font_size']) && $cssData['modal_01_description_font_size'] !== '') ? $cssData['modal_01_description_font_size'] : '14' ?>px + 6px);
      }
      .twss_6310_modal_template_1 .twss_6310_modal_contact {
        padding: 0;
      }
      .twss_6310_modal_template_1 .twss-custom-fields-list-label {
        font-size: <?php echo (isset($cssData['modal_01_contact_label_font_size']) && $cssData['modal_01_contact_label_font_size'] !== '') ? $cssData['modal_01_contact_label_font_size'] : '18' ?>px;
        font-family: <?php echo (isset($cssData['modal_01_contact_label_font_family']) && $cssData['modal_01_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_01_contact_label_font_family']):'Amaranth' ?>;
        color: <?php echo (isset($cssData['modal_01_contact_label_font_color']) && $cssData['modal_01_contact_label_font_color'] !== '') ? $cssData['modal_01_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>;
        font-weight: 300;
        line-height: calc(<?php echo (isset($cssData['modal_01_contact_label_font_size']) && $cssData['modal_01_contact_label_font_size'] !== '') ? $cssData['modal_01_contact_label_font_size'] : '18' ?>px + 2px);
        display: inline-block !important;
      }

      .twss_6310_modal_template_1 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
        color: <?php echo (isset($cssData['modal_01_contact_content_font_color']) && $cssData['modal_01_contact_content_font_color'] !== '') ? $cssData['modal_01_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>;
        display: inline-block !important;
      }

      .twss_6310_modal_template_1 .twss-custom-fields-list-content {
        font-size: <?php echo (isset($cssData['modal_01_contact_content_font_size']) && $cssData['modal_01_contact_content_font_size'] !== '') ? $cssData['modal_01_contact_content_font_size'] : '14' ?>px;
        font-family: <?php echo (isset($cssData['modal_01_contact_content_font_family']) && $cssData['modal_01_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_01_contact_content_font_family']):'Amaranth' ?>;
        color: <?php echo (isset($cssData['modal_01_contact_content_font_color']) && $cssData['modal_01_contact_content_font_color'] !== '') ? $cssData['modal_01_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>;
        font-weight: 300;
        line-height: calc(<?php echo (isset($cssData['modal_01_contact_content_font_size']) && $cssData['modal_01_contact_content_font_size'] !== '') ? $cssData['modal_01_contact_content_font_size'] : '14' ?>px + 6px);
        display: inline-block !important;
      }

      .twss_6310_modal_template_1 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
        color: <?php echo (isset($cssData['modal_01_contact_label_font_color']) && $cssData['modal_01_contact_label_font_color'] !== '') ? $cssData['modal_01_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>;
        display: inline-block !important;
      }

    /* Template 02 */
    .twss_6310_modal_template_2 {
      float: left;
      width: 100%;
      padding: 30px;
      font-family: "PT Sans Narrow", sans-serif;
      background: #fefefe;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .twss_6310_modal_template_2 .twss_6310_modal_body_picture img {
      padding: 0 !important;
      width: 100% !important;
      box-shadow: 0 1px 15px 0 rgba(0, 0, 0, 0.30), 0 3px 8px 0 rgba(0, 0, 0, 0.20);
    }

    .twss_6310_modal_template_2 .twss_6310_modal_social {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .twss_6310_modal_template_2 .twss_6310_modal_title {
      font-size: <?php echo (isset($cssData['modal_02_name_font_size']) && $cssData['modal_02_name_font_size'] !== '') ? $cssData['modal_02_name_font_size'] : '30' ?>px;
      font-family: <?php echo (isset($cssData['modal_02_name_font_family']) && $cssData['modal_02_name_font_family'])?str_replace("+", " ", $cssData['modal_02_name_font_family']):'Amaranth' ?>;
      text-transform: uppercase;
      margin: 0 0 5px;
      line-height: initial;
    }

    .twss_6310_modal_template_2 .twss_6310_modal_name {
      color: <?php echo (isset($cssData['modal_02_name_font_color']) && $cssData['modal_02_name_font_color'] !== '') ? $cssData['modal_02_name_font_color'] : 'rgb(0, 150, 136)' ?>;
      display: inline;
    }

    .twss_6310_modal_template_2 .twss_6310_modal_designation {
      font-size: <?php echo (isset($cssData['modal_02_designation_font_size']) && $cssData['modal_02_designation_font_size'] !== '') ? $cssData['modal_02_designation_font_size'] : '20' ?>px;
      font-family: <?php echo (isset($cssData['modal_02_designation_font_family']) && $cssData['modal_02_designation_font_family'])?str_replace("+", " ", $cssData['modal_02_designation_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_02_designation_font_color']) && $cssData['modal_02_designation_font_color'] !== '') ? $cssData['modal_02_designation_font_color'] : 'rgb(96, 125, 139)' ?>;
      line-height: initial;
    }

    .twss_6310_modal_template_2 .twss_6310_modal_details {
      font-size: <?php echo (isset($cssData['modal_02_description_font_size']) && $cssData['modal_02_description_font_size'] !== '') ? $cssData['modal_02_description_font_size'] : '16' ?>px;
      font-family: <?php echo (isset($cssData['modal_02_description_font_family']) && $cssData['modal_02_description_font_family'])?str_replace("+", " ", $cssData['modal_02_description_font_family']):'Arimo' ?>;
      padding: 25px 0;
      color: <?php echo (isset($cssData['modal_02_description_font_color']) && $cssData['modal_02_description_font_color'] !== '') ? $cssData['modal_02_description_font_color'] : 'rgb(0, 0, 0)' ?>;
      line-height: calc(<?php echo (isset($cssData['modal_02_description_font_size']) && $cssData['modal_02_description_font_size'] !== '') ? $cssData['modal_02_description_font_size'] : '15' ?>px + 5px);
      float: left;
      width: 100%;
    }
    .twss_6310_modal_template_2 .twss_6310_modal_contact {
      padding: 0;
    }

    .twss_6310_modal_template_2 .twss-custom-fields-list {
      padding: 3px 0;
    }
    .twss_6310_modal_template_2 .twss-custom-fields-list-label {
      font-size: <?php echo (isset($cssData['modal_02_contact_label_font_size']) && $cssData['modal_02_contact_label_font_size'] !== '') ? $cssData['modal_02_contact_label_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_02_contact_label_font_family']) && $cssData['modal_02_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_02_contact_label_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_02_contact_label_font_color']) && $cssData['modal_02_contact_label_font_color'] !== '') ? $cssData['modal_02_contact_label_font_color'] : 'rgb(0, 150, 136)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_2 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
      color: <?php echo (isset($cssData['modal_02_contact_label_font_color']) && $cssData['modal_02_contact_label_font_color'] !== '') ? $cssData['modal_02_contact_label_font_color'] : 'rgb(0, 150, 136)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_2 .twss-custom-fields-list-content {
      font-size: <?php echo (isset($cssData['modal_02_contact_content_font_size']) && $cssData['modal_02_contact_content_font_size'] !== '') ? $cssData['modal_02_contact_content_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_02_contact_content_font_family']) && $cssData['modal_02_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_02_contact_content_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_02_contact_content_font_color']) && $cssData['modal_02_contact_content_font_color'] !== '') ? $cssData['modal_02_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_2 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
      color: <?php echo (isset($cssData['modal_02_contact_content_font_color']) && $cssData['modal_02_contact_content_font_color'] !== '') ? $cssData['modal_02_contact_content_font_color'] : 'rgb(0, 0, 0)' ?>;
      display: inline-block !important;
    }


    /* Template 03 */

    .twss_6310_modal_template_3 {
      float: left;
      padding: 30px ;
      background: #fefefe;
      border: 1px solid #888;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .twss_6310_modal_template_3 .twss_6310_modal_body_picture img {
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
    }

    .twss_6310_modal_template_3 .twss_6310_modal_preword {
      color: #fff;
      font-size: 14px;
      text-transform: uppercase;
      position: relative;
      margin: 0 0 10px 0;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_pre_title {
      background: <?php echo (isset($cssData['modal_03_accent_color']) && $cssData['modal_03_accent_color'] !== '') ? $cssData['modal_03_accent_color'] : 'rgb(7, 203, 121)' ?>;
      color: #fff;
      font-weight: 700;
      display: inline-block;
      padding: 8px 12px;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_pre_title::before {
      content: "";
      width: 0;
      height: 0;
      top: 100%;
      left: 5px;
      position: absolute;
      border-style: solid;
      border-width: 0 0 8px 8px;
      border-color: transparent;
      border-left-color: #07cb79;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_title {
      font-size: 38px;
      line-height: 45px;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_name {
      display: inline;
      font-weight: 700;
      font-size: <?php echo (isset($cssData['modal_03_name_font_size']) && $cssData['modal_03_name_font_size'] !== '') ? $cssData['modal_03_name_font_size'] : '30' ?>px;
      font-family: <?php echo (isset($cssData['modal_03_name_font_family']) && $cssData['modal_03_name_font_family'])?str_replace("+", " ", $cssData['modal_03_name_font_family']):'Amaranth' ?>;
      text-transform: uppercase;
      color: <?php echo (isset($cssData['modal_03_name_font_color']) && $cssData['modal_03_name_font_color'] !== '') ? $cssData['modal_03_name_font_color'] : 'rgb(7, 203, 121)' ?>;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_designation {
      font-size: <?php echo (isset($cssData['modal_03_designation_font_size']) && $cssData['modal_03_designation_font_size'] !== '') ? $cssData['modal_03_designation_font_size'] : '18' ?>px;
      font-family: <?php echo (isset($cssData['modal_03_designation_font_family']) && $cssData['modal_03_designation_font_family'])?str_replace("+", " ", $cssData['modal_03_designation_font_family']):'Amaranth' ?>;
      font-weight: 400;
      line-height: 1.1;
      color: <?php echo (isset($cssData['modal_03_designation_font_color']) && $cssData['modal_03_designation_font_color'] !== '') ? $cssData['modal_03_designation_font_color'] : 'rgb(128, 128, 128)' ?>;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_hr {
      margin: 2% 0;
      border-bottom: 1px solid <?php echo (isset($cssData['modal_03_accent_color']) && $cssData['modal_03_accent_color'] !== '') ? $cssData['modal_03_accent_color'] : 'rgb(7, 203, 121)' ?>;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_details {
      margin: 25px 0;
      font-size: <?php echo (isset($cssData['modal_03_description_font_size']) && $cssData['modal_03_description_font_size'] !== '') ? $cssData['modal_03_description_font_size'] : '16' ?>px;
      font-family: <?php echo (isset($cssData['modal_03_description_font_family']) && $cssData['modal_03_description_font_family'])?str_replace("+", " ", $cssData['modal_03_description_font_family']):'Arimo' ?>;
      color: <?php echo (isset($cssData['modal_03_description_font_color']) && $cssData['modal_03_description_font_color'] !== '') ? $cssData['modal_03_description_font_color'] : 'rgb(0, 0, 0)' ?>;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_contact {
      padding: 0;
    }

    .twss_6310_modal_template_3 .twss-custom-fields-list {
      padding: 3px 0;
    }

    .twss_6310_modal_template_3 .twss-custom-fields-list-label {
      font-size: <?php echo (isset($cssData['modal_03_contact_label_font_size']) && $cssData['modal_03_contact_label_font_size'] !== '') ? $cssData['modal_03_contact_label_font_size'] : '15' ?>px;
      font-weight: bold;
      font-family: <?php echo (isset($cssData['modal_03_contact_label_font_family']) && $cssData['modal_03_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_03_contact_label_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_03_contact_label_font_color']) && $cssData['modal_03_contact_label_font_color'] !== '') ? $cssData['modal_03_contact_label_font_color'] : 'rgb(0, 0, 0)' ?>;
      padding-right: 10px;
      display: inline-block !important;
    }

    .twss_6310_modal_template_3 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
      color: <?php echo (isset($cssData['modal_03_contact_label_font_color']) && $cssData['modal_03_contact_label_font_color'] !== '') ? $cssData['modal_03_contact_label_font_color'] : 'rgb(0, 0, 0)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_3 .twss-custom-fields-list-content {
      font-size: <?php echo (isset($cssData['modal_03_contact_content_font_size']) && $cssData['modal_03_contact_content_font_size'] !== '') ? $cssData['modal_03_contact_content_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_03_contact_content_font_family']) && $cssData['modal_03_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_03_contact_content_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_03_contact_content_font_color']) && $cssData['modal_03_contact_content_font_color'] !== '') ? $cssData['modal_03_contact_content_font_color'] : 'rgb(128, 128, 128)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_3 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
      color: <?php echo (isset($cssData['modal_03_contact_content_font_color']) && $cssData['modal_03_contact_content_font_color'] !== '') ? $cssData['modal_03_contact_content_font_color'] : 'rgb(128, 128, 128)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_footer {
      background: <?php echo (isset($cssData['modal_03_accent_color']) && $cssData['modal_03_accent_color'] !== '') ? $cssData['modal_03_accent_color'] : 'rgb(7, 203, 121)' ?>;
      padding: 0 0 10px;
      text-align: center;
      margin-top: 15px;
      float: left;
      width: 100%;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_social {
      float: none !important;
      display: flex;
      justify-content: center;
    }

    .twss_6310_modal_template_3 .twss_6310_modal_social a {
      width: 25px !important;
      height: 25px !important;
      line-height: 25px !important;
      margin-top: 10px !important;
      font-size: 15px !important;
    }

    /* Template 04 */
    .twss_6310_modal_template_4 {
      float: left;
      background: #fefefe;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .twss_6310_modal_template_4 .twss_6310_modal_upper {
      background: <?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>;
      position: relative;
      padding-bottom: 10px;
      float: left;
      width: 100%;
      overflow: hidden;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_upper_right {
      float: right;
      width: 350px;
      background-color: <?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>;
      position: relative;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_upper_right::after {
      content: "";
      top: 0;
      left: 0;
      position: absolute;
      border-style: solid;
      border-width: 650px 0 0 100px;
      border-color: transparent transparent transparent <?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>;
    }
    .twss_6310_modal_template_4 .twss_6310_modal_upper_right_img {
      float: left;
      width: 100%;
      position: relative;
    }
    .twss_6310_modal_template_4 .twss_6310_modal_upper_right img {
      width: 100%;
      float: left;
    }
    .twss_6310_modal_template_4 .twss_6310_modal_upper_left {
      float: left;
      width: calc(100% - 350px);
      background: <?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>;
      min-height: 350px;
      position: relative;
    }
    .twss_6310_modal_template_4 .twss_6310_modal_name {
      width: calc(100% - 10%);
      font-weight: 900;
      color: <?php echo (isset($cssData['modal_04_name_font_color']) && $cssData['modal_04_name_font_color'] !== '') ? $cssData['modal_04_name_font_color'] : 'rgb(255, 255, 255)' ?>;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.29);
      padding: 0 5%;
      margin-top: 5%;
      font-size: <?php echo (isset($cssData['modal_04_name_font_size']) && $cssData['modal_04_name_font_size'] !== '') ? $cssData['modal_04_name_font_size'] : '30' ?>px;
      font-family: <?php echo (isset($cssData['modal_04_name_font_family']) && $cssData['modal_04_name_font_family'])?str_replace("+", " ", $cssData['modal_04_name_font_family']):'Amaranth' ?>;
      line-height: calc(<?php echo (isset($cssData['modal_04_name_font_size']) && $cssData['modal_04_name_font_size'] !== '') ? $cssData['modal_04_name_font_size'] : '30' ?>px + 6px);
      margin-bottom: 5px;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_designation {
      width: calc(100% - 10%);
      font-weight: 300;
      margin-bottom: 30px;
      font-size: <?php echo (isset($cssData['modal_04_designation_font_size']) && $cssData['modal_04_designation_font_size'] !== '') ? $cssData['modal_04_designation_font_size'] : '18' ?>px;
      font-family: <?php echo (isset($cssData['modal_04_designation_font_family']) && $cssData['modal_04_designation_font_family'])?str_replace("+", " ", $cssData['modal_04_designation_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_04_designation_font_color']) && $cssData['modal_04_designation_font_color'] !== '') ? $cssData['modal_04_designation_font_color'] : 'rgb(255, 255, 0)' ?>;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.29);
      padding: 0 5%;
      line-height: initial;
    }

    .twss_6310_modal_contact {
      padding: 0 5%;
    }

    .twss_6310_modal_template_4 .twss-custom-fields-list {
      width: 100%;
      margin-bottom: 6px;
      background: <?php echo (isset($cssData['modal_04_contact_background_color']) && $cssData['modal_04_contact_background_color'] !== '') ? $cssData['modal_04_contact_background_color'] : 'rgb(68, 68, 68)' ?>;
      padding: 3px 0;
      float: left;
    }

    .twss_6310_modal_template_4 .twss-custom-fields-list-label {
      float: left;
      color: <?php echo (isset($cssData['modal_04_contact_label_font_color']) && $cssData['modal_04_contact_label_font_color'] !== '') ? $cssData['modal_04_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>;
      font-size: <?php echo (isset($cssData['modal_04_contact_label_font_size']) && $cssData['modal_04_contact_label_font_size'] !== '') ? $cssData['modal_04_contact_label_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_04_contact_label_font_family']) && $cssData['modal_04_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_04_contact_label_font_family']):'Amaranth' ?>;
      padding: 0 10px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      display: inline-block !important;
    }

    .twss_6310_modal_template_4 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
      color: <?php echo (isset($cssData['modal_04_contact_label_font_color']) && $cssData['modal_04_contact_label_font_color'] !== '') ? $cssData['modal_04_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_4 .twss-custom-fields-list-content {
      font-size: <?php echo (isset($cssData['modal_04_contact_content_font_size']) && $cssData['modal_04_contact_content_font_size'] !== '') ? $cssData['modal_04_contact_content_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_04_contact_content_font_family']) && $cssData['modal_04_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_04_contact_content_font_family']):'Amaranth' ?>;
      line-height: 30px;
      color: <?php echo (isset($cssData['modal_04_contact_content_font_color']) && $cssData['modal_04_contact_content_font_color'] !== '') ? $cssData['modal_04_contact_content_font_color'] : 'rgb(255, 255, 255)' ?>;
      float: left;
      display: inline-block !important;
    }

    .twss_6310_modal_template_4 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
      color: <?php echo (isset($cssData['modal_04_contact_content_font_color']) && $cssData['modal_04_contact_content_font_color'] !== '') ? $cssData['modal_04_contact_content_font_color'] : 'rgb(255, 255, 255)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_social {
      padding: 0 5%;
      position: absolute !important;
      bottom: 0;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_about {
      float: left;
      width: 100%;
    }

    .twss_6310_modal_template_4 .twss_6310_modal_details {
      padding: 25px;
      text-align: <?php echo (isset($cssData['modal_04_description_text_align']) && $cssData['modal_04_description_text_align'] !== '') ? $cssData['modal_04_description_text_align'] : 'center' ?>;
      font-family: <?php echo (isset($cssData['modal_04_description_font_family']) && $cssData['modal_04_description_font_family'])?str_replace("+", " ", $cssData['modal_04_description_font_family']):'Arimo' ?>;
      font-size: <?php echo (isset($cssData['modal_04_description_font_size']) && $cssData['modal_04_description_font_size'] !== '') ? $cssData['modal_04_description_font_size'] : '16' ?>px;
      color: <?php echo (isset($cssData['modal_04_description_font_color']) && $cssData['modal_04_description_font_color'] !== '') ? $cssData['modal_04_description_font_color'] : 'rgb(68, 68, 68)' ?>;
      float: left;
      width: 100%;
      border-bottom: 10px solid <?php echo (isset($cssData['modal_04_accent_color']) && $cssData['modal_04_accent_color'] !== '') ? $cssData['modal_04_accent_color'] : 'rgb(6, 167, 99)' ?>;
      line-height: <?php echo (isset($cssData['modal_04_description_font_size']) && $cssData['modal_04_description_font_size'] !== '') ? $cssData['modal_04_description_font_size'] : '16' ?>px;
    }

    /* Template 05 */
    .twss_6310_modal_template_5 {
      float: left;
      width: 100%;
      display: flex;
      background: #fefefe;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .twss_6310_modal_template_5 .twss_6310_modal_left_col {
      background-color: <?php echo (isset($cssData['modal_05_accent_color']) && $cssData['modal_05_accent_color'] !== '') ? $cssData['modal_05_accent_color'] : 'rgb(7, 203, 121)' ?>;
      width: 40%;
      padding: 30px 0;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_profile_pic {
      width: 70%;
      margin-bottom: 15px;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_img {
      border-radius: 50%;
      width: 100%;
      box-shadow: 0px 0px 12px 2px rgba(0, 0, 0, 0.3);
    }

    .twss_6310_modal_template_5 .twss_6310_modal_name {
      font-family: <?php echo (isset($cssData['modal_05_name_font_family']) && $cssData['modal_05_name_font_family'])?str_replace("+", " ", $cssData['modal_05_name_font_family']):'Amaranth' ?>;
      font-size: <?php echo (isset($cssData['modal_05_name_font_size']) && $cssData['modal_05_name_font_size'] !== '') ? $cssData['modal_05_name_font_size'] : '25' ?>px;
      line-height: calc(<?php echo (isset($cssData['modal_05_name_font_size']) && $cssData['modal_05_name_font_size'] !== '') ? $cssData['modal_05_name_font_size'] : '25' ?>px + 5px);
      color: <?php echo (isset($cssData['modal_05_name_font_color']) && $cssData['modal_05_name_font_color'] !== '') ? $cssData['modal_05_name_font_color'] : 'rgb(255, 255, 255)' ?>;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_designation {
      color: <?php echo (isset($cssData['modal_05_designation_font_color']) && $cssData['modal_05_designation_font_color'] !== '') ? $cssData['modal_05_designation_font_color'] : 'rgb(68, 68, 68)' ?>;
      font-size: <?php echo (isset($cssData['modal_05_designation_font_size']) && $cssData['modal_05_designation_font_size'] !== '') ? $cssData['modal_05_designation_font_size'] : '20' ?>px;
      line-height: calc(<?php echo (isset($cssData['modal_05_designation_font_size']) && $cssData['modal_05_designation_font_size'] !== '') ? $cssData['modal_05_designation_font_size'] : '20' ?>px + 5px);
      font-family: <?php echo (isset($cssData['modal_05_designation_font_family']) && $cssData['modal_05_designation_font_family'])?str_replace("+", " ", $cssData['modal_05_designation_font_family']):'Amaranth' ?>;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_social {
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_social a:last-child {
      margin-right: 0px !important;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_right_col {
      background-color: #373737;
      width: 60%;
      color: #fff7f7;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_title {
      width: 100%;
      color: rgb(255, 255, 255);
      font-size: 30px;
      font-weight: bold;
      padding: 5% 0;
      line-height: initial;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_details {
      font-size: <?php echo (isset($cssData['modal_05_description_font_size']) && $cssData['modal_05_description_font_size'] !== '') ? $cssData['modal_05_description_font_size'] : '16' ?>px;
      font-family: <?php echo (isset($cssData['modal_05_description_font_family']) && $cssData['modal_05_description_font_family'])?str_replace("+", " ", $cssData['modal_05_description_font_family']):'Arimo' ?>;
      font-weight: 400;
      line-height: calc(<?php echo (isset($cssData['modal_05_description_font_size']) && $cssData['modal_05_description_font_size'] !== '') ? $cssData['modal_05_description_font_size'] : '15' ?>px + 6px);
      color: <?php echo (isset($cssData['modal_05_description_font_color']) && $cssData['modal_05_description_font_color'] !== '') ? $cssData['modal_05_description_font_color'] : 'rgb(190, 190, 190)' ?>;
      margin-bottom: 30px;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_hr {
      border-bottom: 1px solid <?php echo (isset($cssData['modal_05_accent_color']) && $cssData['modal_05_accent_color'] !== '') ? $cssData['modal_05_accent_color'] : 'rgb(7, 203, 121)' ?>;
    }

    .twss_6310_modal_template_5 .twss_6310_modal_contact {
      padding: 5% 0 0;
    }

    .twss_6310_modal_template_5 .twss-custom-fields-list {
      line-height: 27px;
      padding: 5px 0;
    }

    .twss_6310_modal_template_5 .twss-custom-fields-list-label {
      margin-right: 10px;
      display: inline-block !important;
      float: left;
      color: <?php echo (isset($cssData['modal_05_contact_label_font_color']) && $cssData['modal_05_contact_label_font_color'] !== '') ? $cssData['modal_05_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>;
      font-size: <?php echo (isset($cssData['modal_05_contact_label_font_size']) && $cssData['modal_05_contact_label_font_size'] !== '') ? $cssData['modal_05_contact_label_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_05_contact_label_font_family']) && $cssData['modal_05_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_05_contact_label_font_family']):'Amaranth' ?>;
      font-weight: 700;
      text-transform: uppercase;
    }

    .twss_6310_modal_template_5 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
      color: <?php echo (isset($cssData['modal_05_contact_label_font_color']) && $cssData['modal_05_contact_label_font_color'] !== '') ? $cssData['modal_05_contact_label_font_color'] : 'rgb(255, 255, 255)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_5 .twss-custom-fields-list-content {
      float: left;
      width: 70%;
      font-size: <?php echo (isset($cssData['modal_05_contact_content_font_size']) && $cssData['modal_05_contact_content_font_size'] !== '') ? $cssData['modal_05_contact_content_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_05_contact_content_font_family']) && $cssData['modal_05_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_05_contact_content_font_family']):'Amaranth' ?>;
      font-weight: 400;
      color: <?php echo (isset($cssData['modal_05_contact_content_font_color']) && $cssData['modal_05_contact_content_font_color'] !== '') ? $cssData['modal_05_contact_content_font_color'] : 'rgb(190, 190, 190)' ?>;
      display: inline-block !important;
    }

    .twss_6310_modal_template_5 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
      color: <?php echo (isset($cssData['modal_05_contact_content_font_color']) && $cssData['modal_05_contact_content_font_color'] !== '') ? $cssData['modal_05_contact_content_font_color'] : 'rgb(190, 190, 190)' ?>;
      display: inline-block !important;
    }

    /* Template 06 */
    .twss_6310_modal_template_6 {
      float: left;
      width: 100%;
      text-align: center;
      position: relative;
      background: #fefefe;
      border-radius: 5px;
      margin-top: 100px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .twss_6310_modal_template_6 .twss_6310_modal_profile_pic {
      width: 100%;
      display: flex;
      justify-content: center;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_profile_pic img {
      border-radius: 50%;
      height: 200px;
      width: auto;
      margin-top: -109px;
      position: absolute;
      box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.30), 0 0px 8px 0 rgba(0, 0, 0, 0.20);
      padding: 9px;
      background: #fefefe;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_top {
      margin-top: 130px;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_name {
      font-weight: bold;
      font-size: <?php echo (isset($cssData['modal_06_name_font_size']) && $cssData['modal_06_name_font_size'] !== '') ? $cssData['modal_06_name_font_size'] : '25' ?>px;
      line-height: calc(<?php echo (isset($cssData['modal_06_name_font_size']) && $cssData['modal_06_name_font_size'] !== '') ? $cssData['modal_06_name_font_size'] : '25' ?>px + 5px);
      font-family: <?php echo (isset($cssData['modal_06_name_font_family']) && $cssData['modal_06_name_font_family'])?str_replace("+", " ", $cssData['modal_06_name_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_06_name_font_color']) && $cssData['modal_06_name_font_color'] !== '') ? $cssData['modal_06_name_font_color'] : 'rgb(101, 97, 97)' ?>;
      margin-right: 10px;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_designation {
      font-size: <?php echo (isset($cssData['modal_06_designation_font_size']) && $cssData['modal_06_designation_font_size'] !== '') ? $cssData['modal_06_designation_font_size'] : '18' ?>px;
      font-family: <?php echo (isset($cssData['modal_06_designation_font_family']) && $cssData['modal_06_designation_font_family'])?str_replace("+", " ", $cssData['modal_06_designation_font_family']):'Amaranth' ?>;
      padding: 5px 0;
      color: <?php echo (isset($cssData['modal_06_designation_font_color']) && $cssData['modal_06_designation_font_color'] !== '') ? $cssData['modal_06_designation_font_color'] : 'rgb(140, 140, 140)' ?>;
      margin-right: 10px;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_contact {
      padding: 0;
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_contact .twss-custom-fields-list {
      position: relative;
      text-align: center !important;
      width: initial;
      margin-right: 21px;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_contact .twss-custom-fields-list:last-child {
      margin-right: 0;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_contact .twss-custom-fields-list::after {
      content: '';
      position: absolute;
      top: 0;
      right: -10px;
      border-right: 1px solid silver;
      height: 80%;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_contact .twss-custom-fields-list:last-child::after {
      border-right: none;
    }
    .twss_6310_modal_template_6 .twss-custom-fields-list-label {
      font-size: <?php echo (isset($cssData['modal_06_contact_label_font_size']) && $cssData['modal_06_contact_label_font_size'] !== '') ? $cssData['modal_06_contact_label_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_06_contact_label_font_family']) && $cssData['modal_06_contact_label_font_family'])?str_replace("+", " ", $cssData['modal_06_contact_label_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_06_contact_label_font_color']) && $cssData['modal_06_contact_label_font_color'] !== '') ? $cssData['modal_06_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>;
      margin-right: 5px;
      display: inline-block !important;
    }
    .twss_6310_modal_template_6 .twss-custom-fields-list:hover .twss-custom-fields-list-label {
      color: <?php echo (isset($cssData['modal_06_contact_label_font_color']) && $cssData['modal_06_contact_label_font_color'] !== '') ? $cssData['modal_06_contact_label_font_color'] : 'rgb(0, 100, 0)' ?>;
      display: inline-block !important;
    }
    .twss_6310_modal_template_6 .twss-custom-fields-list-content {
      font-size: <?php echo (isset($cssData['modal_06_contact_content_font_size']) && $cssData['modal_06_contact_content_font_size'] !== '') ? $cssData['modal_06_contact_content_font_size'] : '15' ?>px;
      font-family: <?php echo (isset($cssData['modal_06_contact_content_font_family']) && $cssData['modal_06_contact_content_font_family'])?str_replace("+", " ", $cssData['modal_06_contact_content_font_family']):'Amaranth' ?>;
      color: <?php echo (isset($cssData['modal_06_contact_content_font_color']) && $cssData['modal_06_contact_content_font_color'] !== '') ? $cssData['modal_06_contact_content_font_color'] : 'rgb(68, 68, 68)' ?>;
      display: inline-block !important;
    }
    .twss_6310_modal_template_6 .twss-custom-fields-list:hover .twss-custom-fields-list-content {
      color: <?php echo (isset($cssData['modal_06_contact_content_font_color']) && $cssData['modal_06_contact_content_font_color'] !== '') ? $cssData['modal_06_contact_content_font_color'] : 'rgb(68, 68, 68)' ?>;
      display: inline-block !important;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_social {
      float: none !important;
      display: flex;
      justify-content: center;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_hr {
      border-bottom: 1px solid silver;
      width: 70%;
      margin: 30px auto 0;
      position: relative;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_hr2 {
      border-bottom: 1px solid silver;
      width: 70%;
      margin: 0 auto 30px;
      position: relative;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_hr::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 10px;
      height: 10px;
      background: rgb(102, 205, 170);
      transform: translate(-50%, -50%) rotate(45deg);
      border: 5px solid #fefefe;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_hr2::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 10px;
      height: 10px;
      background: rgb(102, 205, 170);
      transform: translate(-50%, -50%) rotate(45deg);
      border: 5px solid #fefefe;
    }
    .twss_6310_modal_template_6 .twss_6310_modal_details {
      width: calc(100% - 80px);
      font-size: <?php echo (isset($cssData['modal_06_description_font_size']) && $cssData['modal_06_description_font_size'] !== '') ? $cssData['modal_06_description_font_size'] : '16' ?>px;
      line-height: calc(<?php echo (isset($cssData['modal_06_description_font_size']) && $cssData['modal_06_description_font_size'] !== '') ? $cssData['modal_06_description_font_size'] : '15' ?>px + 6px);
      font-family: <?php echo (isset($cssData['modal_06_description_font_family']) && $cssData['modal_06_description_font_family'])?str_replace("+", " ", $cssData['modal_06_description_font_family']):'Arimo' ?>;
      padding: 30px 40px;
      color: <?php echo (isset($cssData['modal_06_description_font_color']) && $cssData['modal_06_description_font_color'] !== '') ? $cssData['modal_06_description_font_color'] : 'rgb(53, 53, 53)' ?>;
    }
    
  </style>

  <script>
    jQuery(document).ready(function() {
      jQuery('.twss_6310_modal_template').hide();
      <?php
      if (isset($cssData['modal_template_number']) && $cssData['modal_template_number']) {
        echo "jQuery('.twss_6310_modal_template_{$cssData['modal_template_number']}').show();";
      } else {
        echo "jQuery('.twss_6310_modal_template_1').show();";
      }
      ?>
    })
  </script>