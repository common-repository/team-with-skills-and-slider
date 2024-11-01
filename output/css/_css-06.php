<style type="text/css">
  .twss_6310_team_style_<?php echo $ids; ?> {
    text-align: center;
    overflow: hidden;
    position: relative;
    z-index: 1;
    letter-spacing: .04em;
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-style: solid;
    border-width: <?php echo $cssData['border_width'] ?>px;
    border-color: <?php echo $cssData['border_color'] ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background-color: <?php echo $cssData['box_background_color'] ?>;
    height: 100%;
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover {
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    border-color: <?php echo $cssData['border_hover_color'] ?>;
    background-color: <?php echo $cssData['image_hover_background'] ?>;
    margin-top: -10px;
    margin-bottom: 10px;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  }

  .twss_6310_team_style_<?php echo $ids; ?>_img {
    float: left;
    width: 100%;
    height: auto;
    position: relative;
  }

  .twss-6310-col-left,
  .twss-6310-col-right {
    float: left;
    width: 50%;
  }

  

  .twss_6310_team_style_<?php echo $ids; ?>_img img {
    width: 90%;
    height: calc(90% - 38px);
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 100%;
    border: <?php echo $cssData['image_border_width'] ?>px solid <?php echo $cssData['image_border_color'] ?>;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover img {
    transform: scale(1.03) rotate(14deg);
    -webkit-filter: none;
    border: <?php echo $cssData['image_border_width'] ?>px solid <?php echo $cssData['image_border_hover_color'] ?>;
  }

  .twss-6310-owl-carousel .twss-6310-owl-item img {
    display: inline !important;
    width: 90% !important;
    height: calc(90% - 38px);
  }

  .twss_6310_team_style_<?php echo $ids; ?>_caption {
    width: 100%;
    float: left;
    padding: 0 10px;
  }

  .twss_6310_team_style_<?php echo $ids; ?>_title {
    background: <?php echo $cssData['member_title_background_color'] ?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    position: absolute;
    height: <?php echo $cssData['member_line_height'] ?>px;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    bottom: <?php echo ($cssData['designation_line_height'] + $cssData['member_margin_bottom']) ?>px;
    float: <?php echo $cssData['member_text_align'] == "left" ? "left" : "right"; ?>;
    <?php
    echo ($cssData['member_text_align'] == "right") ? "right: {$cssData['member_title_padding']}px;" : "left: {$cssData['member_title_padding']}px;";
    ?>padding-left: 3px;
    padding-right: 3px;
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_title {
    background: <?php echo $cssData['member_title_background_hover_color'] ?>;
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }

  .twss_6310_team_style_<?php echo $ids; ?>_designation {
    background: <?php echo $cssData['member_designation_background_color'] ?>;
    padding: 0 15px;
    position: absolute;
    display: <?php echo ($cssData['twss_fun_template_designation']) ? 'block' : 'none'; ?>;
    color: <?php echo $cssData['designation_font_color'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    height: <?php echo $cssData['designation_line_height'] ?>px;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;    
    bottom: <?php echo ($cssData['designation_margin_bottom']) ?>px;
    z-index: 1;
    float: <?php echo $cssData['designation_text_align'] == "left" ? "left" : "right"; ?>;
    <?php echo ($cssData['designation_text_align'] == "right") ? "right: {$cssData['designation_text_padding']}px;" : "left: {$cssData['designation_text_padding']}px;";?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['designation_font_family']); ?>;

  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_designation {
    background-color: <?php echo $cssData['member_designation_hover_background_color'] ?>;
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }

  .twss_6310_team_style_<?php echo $ids; ?>_profile_details {
    display: <?php echo ($cssData['twss_fun_template_profile_details']) ? 'block' : 'none'; ?>;
    font-size: <?php echo $cssData['details_font_size'] ?>px;
    line-height: <?php echo $cssData['details_line_height'] ?>px;
    color: <?php echo $cssData['details_font_color'] ?>;
    font-weight: <?php echo $cssData['details_font_weight'] ?>;
    text-transform: <?php echo $cssData['details_text_transform'] ?>;
    text-align: <?php echo $cssData['details_text_align'] ?> !important;
    font-family: <?php echo str_replace("+", " ", $cssData['details_font_family']); ?>;
    margin-top: <?php echo $cssData['details_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['details_margin_bottom'] ?>px;
    float: left;
    width: 100%;
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover .twss_6310_team_style_<?php echo $ids; ?>_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_social {
    display: <?php echo ($cssData['twss_fun_template_social']) ? 'block' : 'none'; ?>;
    padding: 0;
    list-style: none;
    text-align: <?php echo $cssData['icon_text_align'] ?>;
    margin-top: <?php echo $cssData['social_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['social_margin_bottom'] ?>px;
    width: 100%;
    float: left;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_social div {
    display: inline-block;
    margin: <?php echo  $cssData['icon_text_align'] == "left" ? "0 4px 4px 0;" : "0 0 4px 4px;"; ?>;
    padding: 0;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_social div a {
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    width: <?php echo $cssData['social_icon_width'] ?>px;
    height: <?php echo $cssData['social_icon_height'] ?>px;
    line-height: <?php echo $cssData['social_icon_height'] ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    margin: 0;
    padding: 0;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -webkit-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_social div a i {
    line-height: <?php echo $cssData['social_line_height'] - ($cssData['social_border_width'] * 2) ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_contact {
    width: 100%;
    float: left;
    display: <?php echo ($cssData['twss_fun_template_contact']) ? 'block' : 'none'; ?>;
    margin-top: <?php echo $cssData['contact_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['contact_margin_bottom'] ?>px;

  }

  div.twss_6310_team_style_<?php echo $ids; ?>_contact div {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['contact_font_size'] ?>px;
    color: <?php echo $cssData['contact_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_text_transform'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
    line-height: <?php echo $cssData['contact_line_height'] ?>px;
    width: 100%;
    text-align: <?php echo $cssData['contact_text_align'] ?>;
    border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none') ? 'none' : "{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
    padding: 2px 0;
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover div.twss_6310_team_style_<?php echo $ids; ?>_contact div {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_<?php echo $ids; ?>_contact div span {
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_label_text_transform'] ?>;
    margin-right: 4px;
  }

  .twss_6310_team_style_<?php echo $ids; ?>:hover div.twss_6310_team_style_<?php echo $ids; ?>_contact div span {
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }

  .twss_6310_team_style_<?php echo $ids; ?>,
  .twss_6310_team_style_<?php echo $ids; ?>_title,
  .twss_6310_team_style_<?php echo $ids; ?>_designation,
  .twss_6310_team_style_<?php echo $ids; ?>_profile_details,
  .twss_6310_team_style_<?php echo $ids; ?>_contact,
  .twss_6310_team_style_<?php echo $ids; ?>,
  .twss_6310_team_style_<?php echo $ids; ?>_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }
</style>