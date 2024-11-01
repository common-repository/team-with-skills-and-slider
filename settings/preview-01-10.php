<?php
if (!defined('ABSPATH'))
  exit;
if (!current_user_can('edit_others_pages')) {
  wp_die(__('You do not have sufficient permissions to access this page.'));
}

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
  $nonce = $_REQUEST['_wpnonce'];
  if (!wp_verify_nonce($nonce, 'twss-nonce-field')) {
    die('You do not have sufficient permissions to access this page.');
  } else {
    $slider = "1||4000|true|fas fa-angle|18|10|rgba(0, 0, 0, 0.8)|rgba(255, 255, 255, 1)|rgba(130, 130, 130, 0.81)|rgba(255, 255, 255, 1)|true|18|18|rgba(0, 0, 0, 0.94)|rgba(250, 0, 0, 0.8)|50|3";
    $name = sanitize_text_field($_POST['style_name']);
    $style_name = sanitize_text_field($_POST['style']);

    if ($_POST['style'] == 'template-01') {
      $css = "_wp_http_referer,id,item_per_row,tablet_item_per_row,mobile_item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_number,social_border_width,social_icon_width,social_icon_height,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=1||##||1||##||3||##||1||##||1||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||center||##||Amaranth||##||0||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||center||##||Amaranth||##||15||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||4||##||1||##||35||##||35||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(8, 128, 114, 0.81)||##||rgba(0, 179, 149, 0.8)||##||rgba(8, 128, 114, 0.81)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 0.8)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||10||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_designation,twss_fun_template_name,twss_fun_template_contact,twss_fun_template_skills,twss_fun_template_profile_details,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-02') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=2||##||2||##||2||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||center||##||Amaranth||##||0||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||center||##||Amaranth||##||15||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(0, 153, 143, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(19, 148, 139, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_designation,twss_fun_template_name,twss_fun_template_contact,twss_fun_template_skills,twss_fun_template_profile_details,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-03') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=4||##||4||##||3||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||center||##||Amaranth||##||0||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||center||##||Amaranth||##||15||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(22, 148, 133, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(22, 148, 133, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 0.8)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_designation,twss_fun_template_name,twss_fun_template_contact,twss_fun_template_skills,twss_fun_template_profile_details,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-04') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=5||##||5||##||2||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||center||##||Amaranth||##||0||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||center||##||Amaranth||##||15||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(30, 143, 130, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(30, 143, 130, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_designation,twss_fun_template_name,twss_fun_template_contact,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-05') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,image_border_width,image_border_color,image_border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_title_background_color,member_title_background_hover_color,member_font_weight,member_text_transform,member_text_align,member_title_padding,member_font_family,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,member_designation_background_color,member_designation_hover_background_color,designation_font_weight,designation_text_transform,designation_text_align,designation_text_padding,designation_font_family,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=6||##||6||##||3||##||1||##||1||##||rgba(237, 237, 237, 0.96)||##||rgba(156, 156, 156, 0.81)||##||4||##||rgba(245, 245, 245, 1)||##||rgba(255, 252, 150, 0.47)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||16||##||30||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgba(255, 200, 82, 0.86)||##||rgba(201, 146, 18, 0.9)||##||600||##||capitalize||##||right||##||0||##||Amaranth||##||0||##||1||##||13||##||28||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgba(17, 23, 38, 0.73)||##||rgba(11, 16, 26, 0.94)||##||100||##||capitalize||##||right||##||0||##||Amaranth||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(11, 153, 136, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(11, 153, 136, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_contact,twss_fun_template_skills,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-06') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,image_border_width,image_border_color,image_border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_title_background_color,member_title_background_hover_color,member_font_weight,member_text_transform,member_text_align,member_title_padding,member_font_family,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,member_designation_background_color,member_designation_hover_background_color,designation_font_weight,designation_text_transform,designation_text_align,designation_text_padding,designation_font_family,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=7||##||7||##||2||##||1||##||1||##||rgba(237, 237, 237, 0.96)||##||rgba(148, 148, 148, 0.81)||##||4||##||rgba(245, 245, 245, 1)||##||rgba(255, 252, 150, 0.47)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||16||##||30||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgba(255, 200, 82, 0.86)||##||rgba(201, 146, 18, 0.9)||##||600||##||capitalize||##||right||##||0||##||Amaranth||##||0||##||1||##||13||##||28||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgba(17, 23, 38, 0.73)||##||rgba(11, 16, 26, 0.94)||##||100||##||capitalize||##||right||##||0||##||Amaranth||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||center||##||10||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-07') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,image_hover_color,image_hover_border_color,image_hover_border_thikness,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_title_padding,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_border_hight,designation_border_width,designation_border_color,designation_border_hover_color,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=8||##||8||##||3||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||rgba(156, 136, 185, 0.7)||##||rgba(240, 240, 240, 0.95)||##||5||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgb(17, 41, 17)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||0||##||Amaranth||##||15||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||3||##||70||##||rgb(11, 158, 0)||##||rgb(0, 33, 94)||##||Amaranth||##||5||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||rgb(49, 204, 199)||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(64, 152, 247)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgb(255, 255, 255)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(255, 255, 255, 0.8)||##||rgba(11, 135, 127, 1)||##||rgba(12, 171, 152, 0.81)||##||rgba(11, 135, 127, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-08') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,image_hover_color,image_hover_border_color,image_hover_border_thikness,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_title_padding,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_border_hight,designation_border_width,designation_border_color,designation_border_hover_color,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=9||##||9||##||2||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(161, 161, 161, 0.82)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||rgba(156, 136, 185, 0.7)||##||rgba(240, 240, 240, 0.95)||##||5||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgb(17, 41, 17)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||0||##||Amaranth||##||15||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||Amaranth||##||3||##||70||##||rgb(11, 158, 0)||##||rgb(0, 33, 94)||##||5||##||0||##||1||##||15||##||14||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Arimo||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||10||##||0||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(64, 152, 247)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgb(255, 255, 255)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 1)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-09') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_border_color,member_border_hover_color,member_font_family,member_margin_top,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=10||##||10||##||3||##||2||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(247, 247, 247, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||rgb(67, 148, 67)||##||rgb(12, 64, 12)||##||Amaranth||##||0||##||1||##||14||##||24||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||Amaranth||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(22, 158, 142, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(22, 158, 142, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 0.8)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    } else if ($_POST['style'] == 'template-10') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_border_color,member_border_hover_color,member_font_family,member_margin_top,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-01-10&styleid=11||##||11||##||2||##||2||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(255, 255, 255, 0.85)||##||rgba(255, 255, 255, 1)||##||rgba(250, 250, 190, 1)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||rgb(67, 148, 67)||##||rgb(12, 64, 12)||##||Amaranth||##||0||##||1||##||14||##||24||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||Amaranth||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||15||##||1||##||35||##||35||##||1||##||2||##||0||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(24, 163, 147, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(24, 163, 147, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    }


    $members = $wpdb->get_results('SELECT * FROM ' . $member_table . ' ORDER BY name ASC', ARRAY_A);
    $membersId = "";
    foreach ($members as $member) {
      if ($membersId) {
        $membersId .= ",";
      }
      $membersId .= $member['id'];
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, template_order, memberid) VALUES ( %s, %s, %s, %s, %s)", array($name, $style_name, $css, $temp_orders, $membersId)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=twss-team-with-skills-slider");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=twss-template-01-10&styleid=$redirect_id");
    }
    echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
    exit;
  }
}

//Load Image
$arr = array(
  twss_6310_plugin_dir_url . 'assets/image/1.jpg||||' . twss_6310_plugin_dir_url . 'assets/image/1_hover.jpg',
  twss_6310_plugin_dir_url . 'assets/image/2.jpg||||' . twss_6310_plugin_dir_url . 'assets/image/2_hover.jpg',
  twss_6310_plugin_dir_url . 'assets/image/3.jpg||||' . twss_6310_plugin_dir_url . 'assets/image/3_hover.jpg',
  twss_6310_plugin_dir_url . 'assets/image/4.jpg||||' . twss_6310_plugin_dir_url . 'assets/image/4_hover.jpg',
  twss_6310_plugin_dir_url . 'assets/image/5.jpg||||' . twss_6310_plugin_dir_url . 'assets/image/5_hover.jpg'
);

$icons = array(
  '<li><a href="https://www.linkedin.com" class="open_in_new_tab_class twss-social-link-linkedin" title="Linkedin" target="_blank" id=""><i class="fab fa-linkedin-in"></i></a></li>',
  '<li><a href="https://www.facebook.com" class="open_in_new_tab_class twss-social-link-facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>',
  '<li><a href="https://www.youtube.com" class="open_in_new_tab_class twss-social-link-youtube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>',
  '<li><a href="https://www.twitter.com" class="open_in_new_tab_class twss-social-link-twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>',
  '<li><a href="https://www.google.com" class="open_in_new_tab_class twss-social-link-google" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>',
  '<li><a href="https://www.pinterest.com" class="open_in_new_tab_class twss-social-link-pinterest" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>',
  '<li><a href="https://www.whatsapp.com" class="open_in_new_tab_class twss-social-link-whatsapp" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>'
);
?>
<div class="twss-6310">
  <h1>Select Template</h1>

  <!-- ******************************************
      template 1 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_01">
          <div class="twss_6310_team_style_01_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_01_caption">
              <div class="twss_6310_team_style_01_designation">Web Developer</div>
              <div class="twss_6310_team_style_01_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "01") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_01">
          <div class="twss_6310_team_style_01_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_01_caption">
              <div class="twss_6310_team_style_01_designation">Web Developer</div>
              <div class="twss_6310_team_style_01_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "01") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_01">
          <div class="twss_6310_team_style_01_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_01_caption">
              <div class="twss_6310_team_style_01_designation">Web Developer</div>
              <div class="twss_6310_team_style_01_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "01") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_01">
          <div class="twss_6310_team_style_01_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_01_caption">
              <div class="twss_6310_team_style_01_designation">Web Developer</div>
              <div class="twss_6310_team_style_01_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "01") ?>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 1
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-01">Create Team</button>
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 1 end
    ****************************************** -->
  <!-- ******************************************
      template 2 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_02">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_02_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            </div>
          </div>
          <div class="twss-6310-col-right">
            <figcaption>
              <div class="twss_6310_team_style_02_caption">
                <div class="twss_6310_team_style_02_designation">Web Developer</div>
                <div class="twss_6310_team_style_02_title">Adam Smith</div>
                <?php echo twss_6310_contacts_skills_social($icons, "02") ?>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_02">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_02_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            </div>
          </div>
          <div class="twss-6310-col-right">
            <figcaption>
              <div class="twss_6310_team_style_02_caption">
                <div class="twss_6310_team_style_02_designation">Web Developer</div>
                <div class="twss_6310_team_style_02_title">Adam Smith</div>
                <?php echo twss_6310_contacts_skills_social($icons, "02") ?>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 2
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-02">Create Team</button>
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
    template 2 end
  ****************************************** -->


  <!-- ******************************************
      template 3 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_03">
          <div class="twss_6310_team_style_03_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_03_caption">
              <div class="twss_6310_team_style_03_designation">Web Developer</div>
              <div class="twss_6310_team_style_03_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "03") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_03">
          <div class="twss_6310_team_style_03_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_03_caption">
              <div class="twss_6310_team_style_03_designation">Web Developer</div>
              <div class="twss_6310_team_style_03_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "03") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_03">
          <div class="twss_6310_team_style_03_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_03_caption">
              <div class="twss_6310_team_style_03_designation">Web Developer</div>
              <div class="twss_6310_team_style_03_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "03") ?>
            </div>
          </figcaption>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_03">
          <div class="twss_6310_team_style_03_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
          </div>
          <figcaption>
            <div class="twss_6310_team_style_03_caption">
              <div class="twss_6310_team_style_03_designation">Web Developer</div>
              <div class="twss_6310_team_style_03_title">Adam Smith</div>
              <?php echo twss_6310_contacts_skills_social($icons, "03") ?>
            </div>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 3
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-03">Create Team</button>
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 3 end
    ****************************************** -->


  <!-- ******************************************
       template 4 start
     ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_04">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_04_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            </div>
          </div>
          <div class="twss-6310-col-right">
            <figcaption>
              <div class="twss_6310_team_style_04_caption">
                <div class="twss_6310_team_style_04_designation">Web Developer</div>
                <div class="twss_6310_team_style_04_title">Adam Smith</div>
                <?php echo twss_6310_contacts_skills_social($icons, "04") ?>
              </div>
            </figcaption>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_04">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_04_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            </div>
          </div>
          <div class="twss-6310-col-right">
            <figcaption>
              <div class="twss_6310_team_style_04_caption">
                <div class="twss_6310_team_style_04_designation">Web Developer</div>
                <div class="twss_6310_team_style_04_title">Adam Smith</div>
                <?php echo twss_6310_contacts_skills_social($icons, "04") ?>
              </div>
            </figcaption>
          </div>
        </div>
      </div>


      <div class="twss-6310-template-list">
        Template 4
        <button type="button" class="twss-btn-success twss_choosen_style" id="template-04">Create Team</button>
      </div>
      <br class="twss-6310-clear" />
    </div>
  </div>
  <!-- ******************************************
       template 4 end
     ****************************************** -->



  <!-- ******************************************
       template 5 start
     ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_05">
          <div class="twss_6310_team_style_05_img">
            <div class="">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_05_title">Adam Smith</div>
              <div class="twss_6310_team_style_05_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss_6310_team_style_05_caption">
            <?php echo twss_6310_contacts_skills_social($icons, "05") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_05">
          <div class="twss_6310_team_style_05_img">
            <div class="">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_05_title">Adam Smith</div>
              <div class="twss_6310_team_style_05_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss_6310_team_style_05_caption">
            <?php echo twss_6310_contacts_skills_social($icons, "05") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_05">
          <div class="twss_6310_team_style_05_img">
            <div class="">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_05_title">Adam Smith</div>
              <div class="twss_6310_team_style_05_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss_6310_team_style_05_caption">
            <?php echo twss_6310_contacts_skills_social($icons, "05") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_05">
          <div class="twss_6310_team_style_05_img">
            <div class="">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_05_title">Adam Smith</div>
              <div class="twss_6310_team_style_05_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss_6310_team_style_05_caption">
            <?php echo twss_6310_contacts_skills_social($icons, "05") ?>
          </div>
        </div>
      </div>

    </div>
    <div class="twss-6310-template-list">
      Template 5
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-05">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
       template 5 end
     ****************************************** -->


  <!-- ******************************************
        template 6 start
      ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_06">
      
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_06_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_06_title">Adam Smith</div>
              <div class="twss_6310_team_style_06_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_06_caption">
              <?php echo twss_6310_contacts_skills_social($icons, "06") ?>
            </div>
          </div>


        </div>
      </div>

      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_06">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_06_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_06_title">Adam Smith</div>
              <div class="twss_6310_team_style_06_designation">Web Developer</div>
            </div>
          </div>
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_06_caption">
              <?php echo twss_6310_contacts_skills_social($icons, "06") ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 6
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-06">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
        template 6 end
      ****************************************** -->

  <!-- ******************************************
      template 7 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_07">
          <div class="twss_6310_team_style_07_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <div class="twss_6310_team_style_07_social_team">
              <ul class="twss_6310_team_style_07_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_07_caption">
            <div class="twss_6310_team_style_07_title">William</div>
            <div class="twss_6310_team_style_07_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "07", false) ?>
          </div>

        </div>

      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_07">
          <div class="twss_6310_team_style_07_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <div class="twss_6310_team_style_07_social_team">
              <ul class="twss_6310_team_style_07_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_07_caption">
            <div class="twss_6310_team_style_07_title">William</div>
            <div class="twss_6310_team_style_07_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "07", false) ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_07">
          <div class="twss_6310_team_style_07_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <div class="twss_6310_team_style_07_social_team">
              <ul class="twss_6310_team_style_07_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_07_caption">
            <div class="twss_6310_team_style_07_title">William</div>
            <div class="twss_6310_team_style_07_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "07", false) ?>
          </div>
        </div>

      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_07">
          <div class="twss_6310_team_style_07_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <div class="twss_6310_team_style_07_social_team">
              <ul class="twss_6310_team_style_07_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_07_caption">
            <div class="twss_6310_team_style_07_title">William</div>
            <div class="twss_6310_team_style_07_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "07", false) ?>
          </div>

        </div>

      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 07
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-07">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 7 end
    ****************************************** -->


  <!-- ******************************************
      template 8 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_08">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_08_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_08_social_team">
                <ul class="twss_6310_team_style_08_social">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_08_caption">
              <div class="twss_6310_team_style_08_title">William</div>
              <div class="twss_6310_team_style_08_designation">Web Desginer</div>
              <?php echo twss_6310_contacts_skills_social($icons, '08', false) ?>
            </div>
          </div>
        </div>
      </div>

      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_08">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_08_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <div class="twss_6310_team_style_08_social_team">
                <ul class="twss_6310_team_style_08_social">
                  <?php
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                    echo $icons[$i];
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_08_caption">
              <div class="twss_6310_team_style_08_title">William</div>
              <div class="twss_6310_team_style_08_designation">Web Desginer</div>
              <?php echo twss_6310_contacts_skills_social($icons, '08', false) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 08
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-08">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 8 end
    ****************************************** -->

  <!-- ******************************************
      template 09 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_09">
          <div class="twss_6310_team_style_09_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <ul class="twss_6310_team_style_09_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="twss_6310_team_style_09_caption">
            <div class="twss_6310_team_style_09_title">William</div>
            <div class="twss_6310_team_style_09_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "09") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_09">
          <div class="twss_6310_team_style_09_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <ul class="twss_6310_team_style_09_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="twss_6310_team_style_09_caption">
            <div class="twss_6310_team_style_09_title">William</div>
            <div class="twss_6310_team_style_09_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "09") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_09">
          <div class="twss_6310_team_style_09_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <ul class="twss_6310_team_style_09_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="twss_6310_team_style_09_caption">
            <div class="twss_6310_team_style_09_title">William</div>
            <div class="twss_6310_team_style_09_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "09") ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_09">
          <div class="twss_6310_team_style_09_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <ul class="twss_6310_team_style_09_social">
              <?php
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                echo $icons[$i];
              }
              ?>
            </ul>
          </div>
          <div class="twss_6310_team_style_09_caption">
            <div class="twss_6310_team_style_09_title">William</div>
            <div class="twss_6310_team_style_09_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "09") ?>
          </div>

        </div>

      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 09
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-09">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 09 end
    ****************************************** -->


  <!-- ******************************************
      template 10 start
    ****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_10">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_10_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <ul class="twss_6310_team_style_10_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_10_caption">
              <div class="twss_6310_team_style_10_title">William</div>
              <div class="twss_6310_team_style_10_designation">Web Desginer</div>
              <?php echo twss_6310_contacts_skills_social($icons, '10', false) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_10">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_10_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <ul class="twss_6310_team_style_10_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_10_caption">
              <div class="twss_6310_team_style_10_title">William</div>
              <div class="twss_6310_team_style_10_designation">Web Desginer</div>
              <?php echo twss_6310_contacts_skills_social($icons, '10', false) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 10
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-10">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
      template 10 end
    ****************************************** -->

  <div id="twss-6310-modal-add" class="twss-6310-modal" style="display: none">
    <div class="twss-6310-modal-content twss-6310-modal-sm">
      <form action="" method="post">
        <div class="twss-6310-modal-header">
          Create Team
          <div class="twss-6310-close">&times;</div>
        </div>
        <div class="twss-6310-modal-body-form">
          <?php wp_nonce_field("twss-nonce-field") ?>
          <input type="hidden" name="style" id="twss-style-hidden" />
          <table border="0" width="100%" cellpadding="10" cellspacing="0">
            <tr>
              <td width="90"><label class="twss-form-label" for="icon_name">Team Name:</label></td>
              <td><input type="text" required="" name="style_name" id="style_name" value="" class="twss-form-input" placeholder="Team Name" style="width: 265px" /></td>
            </tr>
          </table>
        </div>
        <div class="twss-6310-modal-form-footer">
          <button type="button" name="close" class="twss-btn-danger twss-pull-right">Close</button>
          <input type="submit" name="submit" class="twss-btn-primary twss-pull-right twss-margin-right-10" value="Save" />
        </div>
      </form>
      <br class="twss-6310-clear" />
    </div>
  </div>

  <script>
    var $ = jQuery;
    jQuery(document).ready(function() {
      jQuery("body").on("click", ".twss_choosen_style", function() {
        jQuery("#twss-6310-modal-add").fadeIn(500);
        jQuery("#twss-style-hidden").val(jQuery(this).attr("id"));
        jQuery("body").css({
          "overflow": "hidden"
        });
        return false;
      });

      jQuery("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
        jQuery("#twss-6310-modal-add").fadeOut(500);
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
        }
      });
    });
  </script>