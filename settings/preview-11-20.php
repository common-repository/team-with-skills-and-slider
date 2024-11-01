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

    if ($_POST['style'] == 'template-11') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=12||##||12||##||3||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(0, 0, 0, 0.81)||##||rgba(46, 196, 182, 0.95)||##||rgba(1, 22, 39, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||22||##||rgb(17, 41, 17)||##||rgb(255, 255, 255)||##||600||##||capitalize||##||Amaranth||##||5||##||0||##||1||##||14||##||18||##||rgb(255, 255, 255)||##||rgb(46, 196, 182)||##||100||##||capitalize||##||Amaranth||##||20||##||0||##||1||##||15||##||12||##||18||##||rgb(0, 20, 36)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(255, 255, 255)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||15||##||1||##||35||##||35||##||1||##||2||##||10||##||1||##||13||##||rgb(1, 22, 39)||##||rgb(255, 255, 255)||##||500||##||capitalize||##||14||##||20||##||rgb(1, 22, 39)||##||rgb(46, 196, 182)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(1, 22, 39)||##||rgb(255, 255, 255)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(46, 196, 182)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(2, 158, 140, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(2, 158, 140, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_designation,twss_fun_template_name,twss_fun_template_skills,twss_fun_template_profile_details,twss_fun_template_social,twss_fun_template_contact";
    } else if ($_POST['style'] == 'template-12') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=13||##||13||##||3||##||0||##||0||##||rgba(255, 255, 255, 0.93)||##||rgba(5, 5, 5, 0.81)||##||rgba(255, 255, 255, 0.95)||##||rgba(240, 240, 240, 0.89)||##||2||##||3||##||rgba(224, 224, 224, 0.97)||##||rgba(163, 163, 163, 0.91)||##||20||##||26||##||rgb(17, 41, 17)||##||rgb(67, 148, 67)||##||600||##||capitalize||##||Amaranth||##||15||##||0||##||1||##||14||##||18||##||rgb(94, 94, 94)||##||rgb(67, 148, 67)||##||100||##||capitalize||##||Amaranth||##||10||##||0||##||1||##||15||##||12||##||18||##||rgb(67, 148, 67)||##||rgb(59, 59, 59)||##||100||##||capitalize||##||left||##||Amaranth||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||10||##||1||##||35||##||35||##||1||##||2||##||10||##||2||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||none||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||5000||##||true||##||fas fa-angle||##||25||##||10||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||14||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.8)||##||rgba(9, 158, 141, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(9, 158, 141, 1)||##||true||##||20||##||20||##||rgba(6, 204, 171, 0.9)||##||rgba(0, 94, 78, 0.8)||##||50||##||3||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 0.8)||##||rgba(54, 54, 54, 0.8)||##||100||##||Amaranth||##||30||##||40||##||9||##||20||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_social,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact";
    } else if ($_POST['style'] == 'template-13') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=14||##||14||##||3||##||0||##||8||##||rgba(59, 51, 106, 0.8)||##||rgba(15, 15, 15, 0.81)||##||rgba(255, 255, 255, 0.8)||##||rgba(173, 173, 173, 0.37)||##||4||##||4||##||rgba(219, 219, 219, 0.8)||##||rgba(125, 125, 125, 0.8)||##||20||##||26||##||rgb(0, 0, 143)||##||rgb(1, 20, 97)||##||400||##||capitalize||##||center||##||Allerta||##||15||##||1||##||1||##||12||##||22||##||rgb(0, 0, 143)||##||rgb(0, 0, 82)||##||100||##||capitalize||##||center||##||Allerta||##||3||##||3||##||1||##||15||##||12||##||16||##||rgb(0, 0, 143)||##||rgb(0, 0, 87)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||1||##||35||##||35||##||1||##||3||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(55, 110, 55)||##||100||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(55, 110, 55)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(67, 148, 67)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||1||##||10||##||0||##||0||##||4000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(255, 0, 0, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(54, 54, 54, 0.8)||##||100||##||Arimo||##||30||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-14') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_text_align,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,social_margin_top,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=15||##||15||##||2||##||0||##||8||##||rgba(59, 51, 106, 0.8)||##||rgba(0, 0, 0, 0.81)||##||rgba(255, 255, 255, 0.8)||##||rgba(173, 173, 173, 0.37)||##||4||##||4||##||rgba(219, 219, 219, 0.8)||##||rgba(125, 125, 125, 0.8)||##||20||##||26||##||rgb(0, 0, 143)||##||rgb(1, 20, 97)||##||400||##||capitalize||##||center||##||Allerta||##||15||##||1||##||1||##||12||##||22||##||rgb(0, 0, 143)||##||rgb(0, 0, 82)||##||100||##||capitalize||##||center||##||Allerta||##||3||##||3||##||1||##||15||##||12||##||16||##||rgb(0, 0, 143)||##||rgb(0, 0, 87)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||1||##||35||##||35||##||1||##||3||##||10||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||lowercase||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||3000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 138, 115, 0.9)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||30||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-15') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_align,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_text_align,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=17||##||17||##||3||##||10||##||3||##||rgba(231, 231, 231, 1)||##||rgba(14, 118, 245, 1)||##||rgba(116, 177, 247, 1)||##||rgba(33, 135, 252, 1)||##||4||##||4||##||rgba(219, 219, 219, 0.8)||##||rgba(125, 125, 125, 0.8)||##||16||##||22||##||rgb(0, 0, 143)||##||rgb(255, 255, 255)||##||400||##||center||##||capitalize||##||Allerta||##||20||##||1||##||1||##||12||##||18||##||rgb(231, 231, 231)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||1||##||25||##||12||##||18||##||rgb(0, 0, 143)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||50||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||1||##||35||##||35||##||1||##||0||##||center||##||10||##||0||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(255, 255, 255)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(255, 255, 255)||##||100||##||lowercase||##||center||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(0, 0, 0)||##||rgb(235, 235, 235)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||30||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-16') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,box_background_color,box_middle_background_color,box_middle_hover_background_color,image_hover_background,box_border_width,box_border_color,box_border_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_align,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=18||##||18||##||3||##||15||##||rgba(255, 0, 50, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(0, 89, 191, 1)||##||0||##||rgba(0, 0, 0, 0.57)||##||rgba(212, 212, 212, 0.82)||##||4||##||4||##||rgba(219, 219, 219, 0.8)||##||rgba(125, 125, 125, 0.8)||##||16||##||22||##||rgb(0, 0, 143)||##||rgb(0, 0, 0)||##||400||##||flex-start||##||capitalize||##||Allerta||##||20||##||10||##||1||##||12||##||18||##||rgb(0, 0, 143)||##||rgb(148, 148, 148)||##||100||##||capitalize||##||Allerta||##||1||##||25||##||12||##||18||##||rgb(0, 0, 143)||##||rgb(20, 20, 20)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||1||##||35||##||35||##||1||##||3||##||center||##||10||##||0||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(148, 148, 148)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(3, 102, 168)||##||100||##||lowercase||##||center||##||Amaranth||##||10||##||1||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(0, 0, 0)||##||rgb(24, 106, 199)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(5, 5, 5, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||30||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-17') {
      $css = "_wp_http_referer,id,item_per_row,image_radius,border_width,border_color,border_hover_color,box_background_color,box_gradient_start_color,box_gradient_end_color,box_gradient_start_hover_color,box_gradient_end_hover_color,image_hover_background,box_shadow_width,box_shadow_blur,box_shadow_color,twss_hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_align,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=19||##||19||##||3||##||0||##||0||##||rgba(167, 157, 227, 0.8)||##||rgba(26, 24, 24, 0.81)||##||rgba(255, 255, 255, 0.8)||##||rgba(52, 62, 194, 0.67)||##||rgba(0, 214, 61, 0.8)||##||rgba(112, 0, 0, 1)||##||rgba(189, 176, 0, 1)||##||rgba(224, 220, 220, 0.53)||##||4||##||4||##||rgba(219, 219, 219, 0.8)||##||rgba(125, 125, 125, 0.8)||##||20||##||26||##||rgb(0, 0, 143)||##||rgb(1, 20, 97)||##||400||##||center||##||capitalize||##||Allerta||##||15||##||1||##||1||##||12||##||22||##||rgb(0, 0, 143)||##||rgb(0, 0, 82)||##||100||##||capitalize||##||Allerta||##||3||##||3||##||1||##||15||##||12||##||16||##||rgb(0, 0, 143)||##||rgb(0, 0, 87)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||0||##||1||##||Read more||##||35||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||0||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||10||##||10||##||1||##||35||##||35||##||1||##||3||##||center||##||10||##||0||##||1||##||13||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||500||##||capitalize||##||14||##||20||##||rgb(55, 110, 55)||##||rgb(189, 8, 28)||##||100||##||lowercase||##||left||##||Amaranth||##||10||##||0||##||1px||##||rgb(0, 112, 95)||##||1||##||13||##||18||##||||##||rgb(67, 148, 67)||##||rgb(189, 8, 28)||##||100||##||Amaranth||##||10||##||10||##||1||##||rgb(55, 110, 55)||##||1||##||rgb(255, 255, 255)||##||rgb(64, 152, 247)||##||rgba(0, 89, 191, 1)||##||1||##||10||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||30||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-18') {
      $css = "_wp_http_referer,id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_border_width,box_border_color,box_border_hover_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_bg_color,member_font_weight,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=20||##||20||##||3||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||rgba(255, 255, 255, 1)||##||||##||rgba(158, 158, 158, 0.82)||##||rgba(61, 59, 59, 0.81)||##||rgba(22, 160, 133, 1)||##||rgba(41, 128, 185, 0.8)||##||rgba(243, 156, 18, 0.8)||##||rgba(75, 44, 80, 0.8)||##||rgba(206, 217, 48, 0.8)||##||rgba(235, 29, 29, 0.64)||##||0||##||5||##||rgba(227, 227, 227, 0.8)||##||||##||20||##||40||##||rgb(0, 44, 133)||##||rgb(255, 255, 255)||##||rgb(235, 235, 235)||##||100||##||capitalize||##||Amaranth||##||15||##||0||##||1||##||14||##||20||##||rgb(0, 66, 189)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||Allerta||##||15||##||0||##||1||##||15||##||12||##||18||##||rgb(0, 66, 189)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||15||##||0||##||1||##||Read more||##||30||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||1||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||20||##||1||##||35||##||35||##||1||##||0||##||center||##||0||##||20||##||1||##||12||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||12||##||20||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||10||##||10||##||1px||##||rgb(230, 230, 230)||##||1||##||13||##||18||##||||##||rgb(62, 64, 64)||##||rgb(255, 255, 255)||##||400||##||Amaranth||##||10||##||25||##||1||##||rgb(41, 134, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(66, 148, 255)||##||rgba(0, 111, 255, 1)||##||1||##||15||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(5, 5, 5, 0.81)||##||100||##||Arimo||##||20||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-19') {
      $css = "_wp_http_referer,id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_img_border_width,box_img_background_color,box_img_hover_background_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_bg_color,member_text_transform,member_font_family,member_margin_top,member_margin_bottom,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_bg_color,designation_font_weight,designation_text_transform,designation_font_family,designation_margin_top,designation_margin_bottom,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=22||##||22||##||3||##||rgba(22, 160, 133, 1)||##||rgba(41, 128, 185, 0.8)||##||rgba(243, 156, 18, 0.8)||##||rgba(75, 44, 80, 0.8)||##||rgba(206, 217, 48, 0.8)||##||rgba(235, 29, 29, 0.64)||##||3||##||rgba(255, 255, 255, 1)||##||rgba(0, 11, 163, 1)||##||rgba(55, 207, 215, 1)||##||rgba(55, 207, 215, 1)||##||rgba(55, 207, 215, 1)||##||rgba(55, 207, 215, 1)||##||rgba(55, 207, 215, 1)||##||rgba(55, 207, 215, 1)||##||2||##||5||##||rgba(227, 227, 227, 0.8)||##||rgba(130, 130, 130, 0.8)||##||20||##||40||##||rgb(209, 209, 209)||##||rgb(255, 255, 255)||##||100||##||rgba(87, 87, 87, 0.75)||##||capitalize||##||Amaranth||##||0||##||0||##||1||##||13||##||30||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgba(87, 87, 87, 0.75)||##||100||##||capitalize||##||Amaranth||##||-25||##||0||##||1||##||15||##||12||##||18||##||rgb(237, 237, 237)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||15||##||0||##||1||##||Read more||##||30||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(204, 49, 49)||##||rgb(204, 49, 49)||##||1||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||20||##||1||##||35||##||35||##||1||##||0||##||center||##||0||##||20||##||1||##||12||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||12||##||20||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||10||##||10||##||1px||##||rgb(230, 230, 230)||##||1||##||13||##||18||##||||##||rgb(62, 64, 64)||##||rgb(255, 255, 255)||##||400||##||Amaranth||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||15||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(0, 0, 0, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||20||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
    } else if ($_POST['style'] == 'template-20') {
      $css = "_wp_http_referer,id,item_per_row,box_background_first_color,box_background_second_color,box_background_third_color,box_background_fourth_color,box_background_five_color,box_background_six_color,box_background_first_hover_color,box_background_second_hover_color,box_background_third_hover_color,box_background_fourth_hover_color,box_background_five_hover_color,box_background_six_hover_color,box_shadow_width,box_shadow_blur,box_shadow_color,hover_box_shadow_color,member_font_size,member_line_height,member_font_color,member_font_hover_color,member_font_weight,member_text_transform,member_font_family,twss_fun_template_designation,designation_font_size,designation_line_height,designation_font_color,designation_font_hover_color,designation_font_weight,designation_text_transform,designation_font_family,twss_fun_template_profile_details,details_summary_words,details_font_size,details_line_height,details_font_color,details_font_hover_color,details_font_weight,details_text_transform,details_text_align,details_font_family,details_margin_top,details_margin_bottom,twss_fun_template_read_more,read_more_text,read_more_height,read_more_width,read_more_font_size,read_more_font_color,read_more_font_hover_color,read_more_border_width,read_more_border_color,read_more_border_hover_color,read_more_border_radius,read_more_backbround_color,read_more_backbround_hover_color,read_more_font_weight,read_more_text_transform,read_more_text_align,read_more_font_family,read_more_margin_top,read_more_margin_bottom,twss_fun_template_social,social_icon_width,social_icon_height,social_border_width,social_border_radius,icon_text_align,social_margin_top,social_margin_bottom,twss_fun_template_contact,contact_label_font_size,contact_label_font_color,contact_label_font_hover_color,contact_label_font_weight,contact_label_text_transform,contact_font_size,contact_line_height,contact_font_color,contact_font_hover_color,contact_font_weight,contact_text_transform,contact_text_align,contact_font_family,contact_margin_top,contact_margin_bottom,contact_border_bottom,contact_border_bottom_color,twss_fun_template_skills,skills_font_size,skills_line_height,skills_text_transform,skills_font_color,skills_font_hover_color,skills_font_weight,skills_font_family,progress_bar_height,progress_bar_border_radius,progress_bar_border_size,progress_bar_border_color,progress_bar_type,progress_bar_background_color,progress_bar_color,progress_bar_alternate_color,progress_bar_animation,progress_bar_margin_top,progress_bar_margin_bottom,twss_fun_template_slider,effect_duration,prev_next_active,slider_icon_style,slider_prev_next_icon_size,slider_prev_next_icon_border_radius,slider_prev_next_bgcolor,slider_prev_next_color,slider_prev_next_hover_bgcolor,slider_prev_next_hover_color,category_font_size,category_font_color,category_font_hover_color,category_border_width,category_border_radius,category_border_color,category_border_hover_color,category_background_color,category_background_hover_color,indicator_activation,slider_indicator_width,slider_indicator_height,slider_indicator_active_color,slider_indicator_color,slider_indicator_border_radius,slider_indicator_margin,category_active_background_color,category_active_font_color,category_active_border_color,category_font_weight,category_font_family,category_margin_bottom,category_menu_height,category_margin_right,category_padding_right_left,custom_css,modal_template_number,modal_01_name_font_size,modal_01_name_font_family,modal_01_name_font_color,modal_01_designation_font_size,modal_01_designation_font_family,modal_01_designation_font_color,modal_01_description_font_size,modal_01_description_font_family,modal_01_description_font_color,modal_01_contact_label_font_size,modal_01_contact_label_font_family,modal_01_contact_label_font_color,modal_01_contact_content_font_size,modal_01_contact_content_font_family,modal_01_contact_content_font_color,modal_02_name_font_size,modal_02_name_font_family,modal_02_name_font_color,modal_02_designation_font_size,modal_02_designation_font_family,modal_02_designation_font_color,modal_02_description_font_size,modal_02_description_font_family,modal_02_description_font_color,modal_02_contact_label_font_size,modal_02_contact_label_font_family,modal_02_contact_label_font_color,modal_02_contact_content_font_size,modal_02_contact_content_font_family,modal_02_contact_content_font_color,modal_03_accent_color,modal_03_name_font_size,modal_03_name_font_family,modal_03_name_font_color,modal_03_designation_font_size,modal_03_designation_font_family,modal_03_designation_font_color,modal_03_description_font_size,modal_03_description_font_family,modal_03_description_font_color,modal_03_contact_label_font_size,modal_03_contact_label_font_family,modal_03_contact_label_font_color,modal_03_contact_content_font_size,modal_03_contact_content_font_family,modal_03_contact_content_font_color,modal_04_accent_color,modal_04_name_font_size,modal_04_name_font_family,modal_04_name_font_color,modal_04_designation_font_size,modal_04_designation_font_family,modal_04_designation_font_color,modal_04_description_font_size,modal_04_description_font_family,modal_04_description_font_color,modal_04_description_text_align,modal_04_contact_background_color,modal_04_contact_label_font_size,modal_04_contact_label_font_family,modal_04_contact_label_font_color,modal_04_contact_content_font_size,modal_04_contact_content_font_family,modal_04_contact_content_font_color,modal_05_accent_color,modal_05_name_font_size,modal_05_name_font_family,modal_05_name_font_color,modal_05_designation_font_size,modal_05_designation_font_family,modal_05_designation_font_color,modal_05_description_font_size,modal_05_description_font_family,modal_05_description_font_color,modal_05_contact_label_font_size,modal_05_contact_label_font_family,modal_05_contact_label_font_color,modal_05_contact_content_font_size,modal_05_contact_content_font_family,modal_05_contact_content_font_color,modal_06_name_font_size,modal_06_name_font_family,modal_06_name_font_color,modal_06_designation_font_size,modal_06_designation_font_family,modal_06_designation_font_color,modal_06_description_font_size,modal_06_description_font_family,modal_06_description_font_color,modal_06_contact_label_font_size,modal_06_contact_label_font_family,modal_06_contact_label_font_color,modal_06_contact_content_font_size,modal_06_contact_content_font_family,modal_06_contact_content_font_color,update_style_change!!##!!/wordpress-new/wp-admin/admin.php?page=twss-template-11-20&styleid=23||##||23||##||3||##||rgba(22, 160, 133, 1)||##||rgba(40, 127, 184, 1)||##||rgba(242, 156, 17, 1)||##||rgba(174, 184, 35, 1)||##||rgba(206, 217, 48, 1)||##||rgba(235, 29, 29, 1)||##||rgba(9, 112, 95, 1)||##||rgba(18, 84, 128, 1)||##||rgba(189, 119, 6, 1)||##||rgba(161, 150, 0, 1)||##||rgba(174, 184, 35, 1)||##||rgba(179, 0, 0, 1)||##||2||##||5||##||rgba(227, 227, 227, 0.8)||##||rgba(145, 145, 145, 0.8)||##||20||##||40||##||rgb(255, 255, 255)||##||rgb(212, 212, 212)||##||100||##||capitalize||##||Amaranth||##||1||##||14||##||35||##||rgb(214, 224, 255)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||Allerta||##||1||##||15||##||12||##||18||##||rgb(0, 66, 189)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||15||##||0||##||1||##||Read more||##||30||##||120||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1px||##||rgb(255, 255, 255)||##||rgb(204, 49, 90)||##||1||##||rgb(49, 204, 199)||##||rgb(204, 49, 90)||##||100||##||capitalize||##||center||##||Amaranth||##||0||##||20||##||1||##||35||##||35||##||2||##||0||##||center||##||0||##||20||##||1||##||12||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||12||##||20||##||rgb(0, 59, 148)||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Allerta||##||10||##||10||##||1px||##||rgb(230, 230, 230)||##||1||##||13||##||18||##||||##||rgb(62, 64, 64)||##||rgb(255, 255, 255)||##||400||##||Amaranth||##||8||##||25||##||1||##||rgb(38, 143, 255)||##||1||##||rgb(240, 240, 240)||##||rgb(38, 143, 255)||##||rgba(9, 123, 245, 1)||##||1||##||15||##||0||##||0||##||1000||##||true||##||fas fa-angle||##||30||##||0||##||rgba(87, 87, 87, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(150, 150, 150, 0.8)||##||rgba(255, 255, 255, 1)||##||15||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||1||##||0||##||rgba(15, 15, 15, 0.81)||##||rgba(16, 143, 135, 1)||##||rgba(0, 179, 149, 0.8)||##||rgba(16, 143, 135, 1)||##||true||##||10||##||10||##||rgba(255, 0, 0, 0.8)||##||rgba(156, 59, 137, 0.8)||##||1||##||1||##||rgba(0, 94, 78, 0.8)||##||rgba(255, 255, 255, 1)||##||rgba(0, 0, 0, 0.81)||##||100||##||Arimo||##||20||##||40||##||5||##||10||##||||##||1||##||22||##||sans-serif||##||rgb(17, 1, 0)||##||14||##||sans-serif||##||rgb(0, 0, 0)||##||14||##||Arimo||##||rgb(0, 0, 0)||##||18||##||Amaranth||##||rgb(0, 100, 0)||##||14||##||Amaranth||##||rgb(0, 0, 0)||##||30||##||Amaranth||##||rgb(0, 150, 136)||##||20||##||Amaranth||##||rgb(96, 125, 139)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||rgb(7, 167, 121)||##||30||##||Amaranth||##||rgb(7, 203, 121)||##||18||##||Amaranth||##||rgb(128, 128, 128)||##||16||##||Arimo||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(0, 0, 0)||##||15||##||Amaranth||##||rgb(128, 128, 128)||##||rgb(6, 167, 99)||##||30||##||Amaranth||##||rgb(255, 255, 255)||##||18||##||Amaranth||##||rgb(255, 255, 0)||##||16||##||Arimo||##||rgb(68, 68, 68)||##||center||##||rgb(68, 68, 68)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||rgb(7, 203, 121)||##||25||##||Amaranth||##||rgb(255, 255, 255)||##||20||##||Amaranth||##||rgb(68, 68, 68)||##||16||##||Arimo||##||rgb(190, 190, 190)||##||15||##||Amaranth||##||rgb(255, 255, 255)||##||15||##||Amaranth||##||rgb(190, 190, 190)||##||25||##||Amaranth||##||rgb(101, 97, 97)||##||18||##||Amaranth||##||rgb(140, 140, 140)||##||16||##||Arimo||##||rgb(53, 53, 53)||##||15||##||Amaranth||##||rgb(0, 100, 0)||##||15||##||Amaranth||##||rgb(68, 68, 68)||##||Save";

      $temp_orders = "twss_fun_template_name,twss_fun_template_designation,twss_fun_template_profile_details,twss_fun_template_skills,twss_fun_template_contact,twss_fun_template_social";
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
      $url = admin_url("admin.php?page=twss-template-11-20&styleid=$redirect_id");
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
$html = '';
?>
<div class="twss-6310">
  <h1>Select Template</h1>

  <!-- ******************************************
template 11 start
****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_11">
          <div class="twss_6310_team_style_11_img_border">
            <div class="twss_6310_team_style_11_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <?php
            $html .= "<ul class='twss_6310_team_style_11_social'>";
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              $html .=  $icons[$i];
            }
            $html .=  "</ul>";
            echo $html;
            ?>
          </div>
          <div class="twss_6310_team_style_11_caption">
            <div class="twss_6310_team_style_11_title">William</div>
            <div class="twss_6310_team_style_11_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_11">
          <div class="twss_6310_team_style_11_img_border">
            <div class="twss_6310_team_style_11_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <?php
            $html .= "<ul class='twss_6310_team_style_11_social'>";
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              $html .=  $icons[$i];
            }
            $html .=  "</ul>";
            echo $html;
            ?>
          </div>
          <div class="twss_6310_team_style_11_caption">
            <div class="twss_6310_team_style_11_title">William</div>
            <div class="twss_6310_team_style_11_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>

        </div>

      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_11">
          <div class="twss_6310_team_style_11_img_border">
            <div class="twss_6310_team_style_11_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <?php
            $html .= "<ul class='twss_6310_team_style_11_social'>";
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              $html .=  $icons[$i];
            }
            $html .=  "</ul>";
            echo $html;
            ?>
          </div>
          <div class="twss_6310_team_style_11_caption">
            <div class="twss_6310_team_style_11_title">William</div>
            <div class="twss_6310_team_style_11_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>

        </div>

      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_11">
          <div class="twss_6310_team_style_11_img_border">
            <div class="twss_6310_team_style_11_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <?php
            $html .= "<ul class='twss_6310_team_style_11_social'>";
            shuffle($icons);
            for ($i = 0; $i < 4; $i++) {
              $html .=  $icons[$i];
            }
            $html .=  "</ul>";
            echo $html;
            ?>
          </div>
          <div class="twss_6310_team_style_11_caption">
            <div class="twss_6310_team_style_11_title">William</div>
            <div class="twss_6310_team_style_11_designation">Web Desginer</div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>

        </div>

      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 11
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-11">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
template 11 end
****************************************** -->
  <!-- ******************************************
template 12 start
****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_12">
          <div class="twss_6310_team_style_12_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            <div class="twss_6310_team_style_12_team_social_icon">
              <ul class="twss_6310_team_style_12_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_12_caption">
            <div class="twss_6310_team_style_12_title">Williamson</div>
            <div class="twss_6310_team_style_12_designation">web developer</div>
            <div class="twss_6310_team_style_12_description">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_12">
          <div class="twss_6310_team_style_12_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            <div class="twss_6310_team_style_12_team_social_icon">
              <ul class="twss_6310_team_style_12_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_12_caption">
            <div class="twss_6310_team_style_12_title">Williamson</div>
            <div class="twss_6310_team_style_12_designation">web developer</div>
            <div class="twss_6310_team_style_12_description">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_12">
          <div class="twss_6310_team_style_12_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            <div class="twss_6310_team_style_12_team_social_icon">
              <ul class="twss_6310_team_style_12_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_12_caption">
            <div class="twss_6310_team_style_12_title">Williamson</div>
            <div class="twss_6310_team_style_12_designation">web developer</div>
            <div class="twss_6310_team_style_12_description">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_12">
          <div class="twss_6310_team_style_12_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            <div class="twss_6310_team_style_12_team_social_icon">
              <ul class="twss_6310_team_style_12_social">
                <?php
                shuffle($icons);
                for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="twss_6310_team_style_12_caption">
            <div class="twss_6310_team_style_12_title">Williamson</div>
            <div class="twss_6310_team_style_12_designation">web developer</div>
            <div class="twss_6310_team_style_12_description">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, "11", false) ?>
          </div>
        </div>
      </div>

    </div>

    <div class="twss-6310-template-list">
      Template 12
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-12">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>
  <!-- ******************************************
template 12 end
****************************************** -->

  <!-- ******************************************
template 13 end
****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_13">
          <div class="twss_6310_team_style_13_img">
            <?php $temp = explode("||||", $arr[0]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <?php
              echo "<ul class='twss_6310_team_style_13_social'>";
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
              }
              echo "</ul>";
            ?>
          </div>
          <div class="twss_6310_team_style_13_caption">
            <div class="twss_6310_team_style_13_title">William</div>
            <div class="twss_6310_team_style_13_designation">Web Desginer</div>
            <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="twss_6310_member_skills_wrapper_">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_13">
          <div class="twss_6310_team_style_13_img">
            <?php $temp = explode("||||", $arr[1]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <?php
              echo "<ul class='twss_6310_team_style_13_social'>";
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
              }
              echo "</ul>";
            ?>
          </div>
          <div class="twss_6310_team_style_13_caption">
            <div class="twss_6310_team_style_13_title">William</div>
            <div class="twss_6310_team_style_13_designation">Web Desginer</div>
            <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="twss_6310_member_skills_wrapper_">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_13">
          <div class="twss_6310_team_style_13_img">
            <?php $temp = explode("||||", $arr[2]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <?php
              echo "<ul class='twss_6310_team_style_13_social'>";
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
              }
              echo "</ul>";
            ?>
          </div>
          <div class="twss_6310_team_style_13_caption">
            <div class="twss_6310_team_style_13_title">William</div>
            <div class="twss_6310_team_style_13_designation">Web Desginer</div>
            <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-4">
        <div class="twss_6310_team_style_13">
          <div class="twss_6310_team_style_13_img">
            <?php $temp = explode("||||", $arr[3]);  ?>
            <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
            <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
            <?php
              echo "<ul class='twss_6310_team_style_13_social'>";
              shuffle($icons);
              for ($i = 0; $i < 4; $i++) {
                  echo $icons[$i];
              }
              echo "</ul>";
            ?>
          </div>
          <div class="twss_6310_team_style_13_caption">
            <div class="twss_6310_team_style_13_title">William</div>
            <div class="twss_6310_team_style_13_designation">Web Desginer</div>
            <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="twss_6310_member_skills_wrapper_">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
          </div>
        </div>
      </div>        
    </div>
    <div class="twss-6310-template-list">
      Template 13
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-13">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 13 end
****************************************** -->


  <!-- ******************************************
template 14 end
****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-2">
        <div class="twss_6310_team_style_14">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_14_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <?php
                  echo "<ul class='twss_6310_team_style_14_social'>";
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                      echo $icons[$i];
                  }
                  echo "</ul>";
              ?>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_14_caption">
              <div class="twss_6310_team_style_14_title">William</div>
              <div class="twss_6310_team_style_14_designation">Web Desginer</div>
              <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="twss_6310_member_skills_wrapper_">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-2">
      <div class="twss_6310_team_style_14">
          <div class="twss-6310-col-left">
            <div class="twss_6310_team_style_14_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_hover_image" alt="Team with Skills and Slider">
              <?php
                  echo "<ul class='twss_6310_team_style_14_social'>";
                  shuffle($icons);
                  for ($i = 0; $i < 4; $i++) {
                      echo $icons[$i];
                  }
                  echo "</ul>";
              ?>
            </div>
          </div>
          <div class="twss-6310-col-right">
            <div class="twss_6310_team_style_14_caption">
              <div class="twss_6310_team_style_14_title">William</div>
              <div class="twss_6310_team_style_14_designation">Web Desginer</div>
              <?php
              echo "<ul class='twss_6310_team_style_contact'>
                <li>email: email@example.com</li>
                <li>phone: +1234567890</li>
                <li>fax: +1 12345678</li>
              </ul>";
            
              echo '<div class="twss_6310_member_skills_wrapper_">
                  <div class="twss_6310_skills_label_">CSS</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--1-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">HTML</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--2-" data-progress-animation="90%" data-appear-animation-delay="400" style="width: 90%;"></div>
                </div>
                
                      <div class="twss_6310_skills_label_">JavaScript</div>
                <div class="twss_6310_skills_prog_">
                  <div class="twss_6310_fill_ fill--3-" data-progress-animation="100%" data-appear-animation-delay="400" style="width: 100%;"></div>
                </div>
            
              </div>';
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 14
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-14">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 14 end
****************************************** -->



  <!-- ******************************************
template 15 start
****************************************** -->
  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_15">
          <div class="twss_6310_team_style_15_details">
            ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
          <div class="twss_6310_team_style_15_caption">
            <div class="twss_6310_team_style_15_img">
              <?php $temp = explode("||||", $arr[4]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_15_content_group">
              <div class="twss_6310_team_style_15_title">Davit Miller</div>
              <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
            </div>
          </div>
          <div class="twss_6310_team_style_15_team_social_icon">
            <ul class="twss_6310_team_style_15_social">
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

      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_15">
          <div class="twss_6310_team_style_15_details">
            ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
          <div class="twss_6310_team_style_15_caption">
            <div class="twss_6310_team_style_15_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_15_content_group">
              <div class="twss_6310_team_style_15_title">Davit Miller</div>
              <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
            </div>
          </div>
          <div class="twss_6310_team_style_15_team_social_icon">
            <ul class="twss_6310_team_style_15_social">
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
      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_15">
          <div class="twss_6310_team_style_15_details">
            ipsum dolor sit amet, consectetur adipisicing elit. Officia repudiandae expedita magni et dolorum ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
          <div class="twss_6310_team_style_15_caption">
            <div class="twss_6310_team_style_15_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_15_content_group">
              <div class="twss_6310_team_style_15_title">Davit Miller</div>
              <div class="twss_6310_team_style_15_designation">CEO, Skyline</div>
            </div>
          </div>
          <div class="twss_6310_team_style_15_team_social_icon">
            <ul class="twss_6310_team_style_15_social">
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
    </div>
    <div class="twss-6310-template-list">
      Template 15
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-15">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>


  <!-- ******************************************
  template 15 end
  ****************************************** -->


  <!-- ******************************************
template 15 end
****************************************** -->



  <!-- ******************************************
template 16 start
****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">

      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_16">
          <div class="twss_6310_team_style_16-content">
            <div class="twss_6310_team_style_16_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_16-content-group">
              <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
              <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>
            </div>
          </div>
          <div class="twss_6310_team_style_16_caption">
            <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
            <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
          </div>
        </div>
      </div>


      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_16">
          <div class="twss_6310_team_style_16-content">
            <div class="twss_6310_team_style_16_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_16-content-group">
              <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
              <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>

            </div>
          </div>
          <div class="twss_6310_team_style_16_caption">
            <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
            <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
          </div>
        </div>
      </div>


      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_16">
          <div class="twss_6310_team_style_16-content">
            <div class="twss_6310_team_style_16_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_16-content-group">
              <div class="twss_6310_team_style_16-content-member">Davit Miller</div>
              <div class="twss_6310_team_style_16-content-designation">Marketing Manager</div>

            </div>
          </div>
          <div class="twss_6310_team_style_16_caption">
            <div class="twss_6310_team_style_16_details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id accusamus provident, neque inventore nisi ad nemo dicta autem molestiae fuga!</div>
            <?php echo twss_6310_contacts_skills_social($icons, '16') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 16
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-16">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 16 end
****************************************** -->

  <!-- ******************************************
template 17 start
****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">

      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_17">
          <svg version="1.1" class="wavey-top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
            <linearGradient id="SVGID_1" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
              <stop offset="0" />
              <stop offset="1" />
            </linearGradient>
            <path fill="url(#SVGID_1)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
          </svg>
          <div class="twss_6310_team_style_17_top">
            <div class="twss_6310_team_style_17_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_17_content_group">
              <div class="twss_6310_team_style_17_title">Davit Miller</div>
              <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
            </div>
          </div>
          <div class="twss_6310_team_style_17_caption">
            <div class="twss_6310_team_style_17_details">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_17">
          <svg version="1.1" class="wavey-top-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
            <linearGradient id="SVGID_2" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
              <stop offset="0" />
              <stop offset="1" />
            </linearGradient>
            <path fill="url(#SVGID_2)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
          </svg>
          <div class="twss_6310_team_style_17_top">
            <div class="twss_6310_team_style_17_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_17_content_group">
              <div class="twss_6310_team_style_17_title">Davit Miller</div>
              <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
            </div>
          </div>
          <div class="twss_6310_team_style_17_caption">
            <div class="twss_6310_team_style_17_details">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
          </div>
        </div>
      </div>
      <div class="twss-6310-col-3">
        <div class="twss_6310_team_style_17">
          <svg version="1.1" class="wavey-top-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
            <linearGradient id="SVGID_3" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
              <stop offset="0" />
              <stop offset="1" />
            </linearGradient>
            <path fill="url(#SVGID_3)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
          </svg>
          <div class="twss_6310_team_style_17_top">
            <div class="twss_6310_team_style_17_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_17_content_group">
              <div class="twss_6310_team_style_17_title">Davit Miller</div>
              <div class="twss_6310_team_style_17_designation">Marketing Manager</div>
            </div>
          </div>
          <div class="twss_6310_team_style_17_caption">
            <div class="twss_6310_team_style_17_details">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolore, porro minima tempore, ipsam impedit rem veniam molestias aspernatur et.
            </div>
            <?php echo twss_6310_contacts_skills_social($icons, '17') ?>
          </div>
        </div>
      </div>

    </div>
    <div class="twss-6310-template-list">
      Template 17
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-17">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 17 end
****************************************** -->
  <!-- ******************************************
    template 18 start
    ****************************************** -->


  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss_6310_team_style_18_background">

        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_18">
            <div class="twss_6310_team_style_18_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_18_caption">
              <div class="twss_6310_team_style_18_title">JHON DOE</div>
              <div class="twss_6310_team_style_18_designation">Web Desginer</div>
              <div class="twss-padding-0-15">
                <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_18">
            <div class="twss_6310_team_style_18_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_18_caption">
              <div class="twss_6310_team_style_18_title">JHON DOE</div>
              <div class="twss_6310_team_style_18_designation">Web Desginer</div>
              <div class="twss-padding-0-15">
                <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_18">
            <div class="twss_6310_team_style_18_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_18_caption">
              <div class="twss_6310_team_style_18_title">JHON DOE</div>
              <div class="twss_6310_team_style_18_designation">Web Desginer</div>
              <div class="twss-padding-0-15">
                <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
              </div>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_18">
            <div class="twss_6310_team_style_18_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_18_caption">
              <div class="twss_6310_team_style_18_title">JHON DOE</div>
              <div class="twss_6310_team_style_18_designation">Web Desginer</div>
              <div class="twss-padding-0-15">
                <?php echo twss_6310_contacts_skills_social($icons, '18') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 18
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-18">Create Team</button>
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 18 end
****************************************** -->


  <!-- ******************************************
      template 2519 start
      ****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss_6310_team_style_19_background">
        <div class="twss-6310-col-4">

          <div class="twss_6310_team_style_19">
            <div class="twss_6310_team_style_19_title">JHON</div>
            <div class="twss_6310_team_style_19_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_19_designation">Web Desginer</div>
            <div class="twss_6310_team_style_19_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
            </div>
          </div>
        </div>

        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_19">
            <div class="twss_6310_team_style_19_title">JHON</div>
            <div class="twss_6310_team_style_19_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_19_designation">Web Desginer</div>
            <div class="twss_6310_team_style_19_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
            </div>
          </div>
        </div>

        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_19">
            <div class="twss_6310_team_style_19_title">JHON</div>
            <div class="twss_6310_team_style_19_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_19_designation">Web Desginer</div>
            <div class="twss_6310_team_style_19_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_19">
            <div class="twss_6310_team_style_19_title">JHON</div>
            <div class="twss_6310_team_style_19_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
            </div>
            <div class="twss_6310_team_style_19_designation">Web Desginer</div>
            <div class="twss_6310_team_style_19_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '19') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 19
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-19">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

  <!-- ******************************************
template 19 end
****************************************** -->


  <!-- ******************************************
template 20 start
****************************************** -->

  <?php shuffle($arr); ?>
  <div class="twss-6310-row twss-6310_team-style-boxed">
    <div class="twss-padding-15">
      <div class="twss_6310_team_style_20_background">
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_20">
            <div class="twss_6310_team_style_20_title">JHON DOE</div>
            <div id="pointer"></div>
            <div class="twss_6310_team_style_20_img">
              <?php $temp = explode("||||", $arr[1]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
              <div class="twss_6310_team_style_20_designation">Web Desginer</div>
            </div>
            <div class="twss_6310_team_style_20_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
            </div>
          </div>
        </div>


        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_20">
            <div class="twss_6310_team_style_20_title">JHON DOE</div>
            <div id="pointer"></div>
            <div class="twss_6310_team_style_20_img">
              <?php $temp = explode("||||", $arr[0]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
              <div class="twss_6310_team_style_20_designation">Web Desginer</div>
            </div>
            <div class="twss_6310_team_style_20_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_20">
            <div class="twss_6310_team_style_20_title">JHON DOE</div>
            <div id="pointer"></div>
            <div class="twss_6310_team_style_20_img">
              <?php $temp = explode("||||", $arr[3]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
              <div class="twss_6310_team_style_20_designation">Web Desginer</div>
            </div>
            <div class="twss_6310_team_style_20_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
            </div>
          </div>
        </div>
        <div class="twss-6310-col-4">
          <div class="twss_6310_team_style_20">
            <div class="twss_6310_team_style_20_title">JHON DOE</div>
            <div id="pointer"></div>
            <div class="twss_6310_team_style_20_img">
              <?php $temp = explode("||||", $arr[2]);  ?>
              <img src="<?php echo $temp[1] ?>" class="twss-image-responsive twss_front_image" alt="Team with Skills and Slider">
              <img src="<?php echo $temp[0] ?>" class="twss-image-responsive twss_hover_image" alt="Team Showcase">
              <div class="twss_6310_team_style_20_designation">Web Desginer</div>
            </div>
            <div class="twss_6310_team_style_20_caption">
              <?php echo twss_6310_contacts_skills_social($icons, '20') ?>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="twss-6310-template-list">
      Template 20
      <button type="button" class="twss-btn-success twss_choosen_style" id="template-20">Create Team</button>
      
    </div>
    <br class="twss-6310-clear" />
  </div>

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
    $(document).ready(function() {
      $("body").on("click", ".twss_choosen_style", function() {
        $("#twss-6310-modal-add").fadeIn(500);
        $("#twss-style-hidden").val($(this).attr("id"));
        jQuery("body").css({
          "overflow": "hidden"
        });
        return false;
      });

      $("body").on("click", ".twss-6310-close, .twss-btn-danger", function() {
        $("#twss-6310-modal-add").fadeOut(500);
        jQuery("body").css({
          "overflow": "initial"
        });
      });
      $(window).click(function(event) {
        if (event.target == document.getElementById('twss-6310-modal-add')) {
          $("#twss-6310-modal-add").fadeOut(500);
          jQuery("body").css({
            "overflow": "initial"
          });
        }
      });
    });
  </script>