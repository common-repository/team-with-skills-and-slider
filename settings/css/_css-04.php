<style type="text/css">
  .twss_6310_team_style_04 {
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
    background: <?php echo $cssData['box_background_color'] ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 100%;
  }

  .twss_6310_team_style_04:hover {
    transform: scale(1.05);
    border-color: <?php echo $cssData['border_hover_color'] ?>;
    background-color: <?php echo $cssData['image_hover_background'] ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
    background: <?php echo $cssData['image_hover_background'] ?>;
  }

  .twss_6310_team_style_04 img {
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
    float: left;
  }

  img.twss_hover_image {
    display: none !important;
  }

  .twss_6310_team_style_04:hover img.twss_hover_image {
    display: initial !important;
  }

  .twss_6310_team_style_04:hover img.twss_front_image {
    display: none !important;
  }

  .twss_6310_team_style_04_caption {
    padding: 0 10px;
    float: left;
    width: 100%;
  }

  .twss_6310_team_style_04_title {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    float: left;
    width: 100%;

    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['member_margin_bottom'] ?>px;
    text-align: <?php echo $cssData['member_text_align'] ?>;
  }


  .twss_6310_team_style_04_designation {
    display: <?php echo ($cssData['twss_fun_template_designation']) ? 'block' : 'none'; ?>;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['designation_font_family']); ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    float: left;
    width: 100%;
    margin-top: <?php echo $cssData['designation_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['designation_margin_bottom'] ?>px;
    text-align: <?php echo $cssData['designation_text_align'] ?>;
  }


  .twss_6310_team_style_04_profile_details {
    display: <?php echo ($cssData['twss_fun_template_profile_details']) ? 'block' : 'none'; ?>;
    font-size: <?php echo $cssData['details_font_size'] ?>px;
    line-height: <?php echo $cssData['details_line_height'] ?>px;
    color: <?php echo $cssData['details_font_color'] ?>;
    font-weight: <?php echo $cssData['details_font_weight'] ?>;
    text-transform: <?php echo $cssData['details_text_transform'] ?>;
    text-align: <?php echo $cssData['details_text_align'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['details_font_family']); ?>;
    margin-top: <?php echo $cssData['details_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['details_margin_bottom'] ?>px;
    float: left;
    width: 100%;
  }

  .twss_6310_team_style_04_contact {
    padding: 0;
    margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px;
    display: block;
    float: left;
    width: 100%;
    display: <?php echo ($cssData['twss_fun_template_contact']) ? 'block' : 'none'; ?>;
  }

  div.twss_6310_team_style_04_contact div {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['contact_font_size'] ?>px;
    color: <?php echo $cssData['contact_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_text_transform'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
    line-height: <?php echo $cssData['contact_line_height'] ?>px;
    float: left;
    width: 100%;
    text-align: <?php echo $cssData['contact_text_align'] ?>;
    border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none') ? 'none' : "{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
    padding: 2px 0;
    margin: 0;
    cursor: pointer !important;
  }


  div.twss_6310_team_style_04_contact div span {
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_label_text_transform'] ?>;
    margin-right: 4px;
  }

  .twss_6310_team_style_04:hover div.twss_6310_team_style_04_contact div span {
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }

  .twss_6310_team_style_04_title,
  .twss_6310_team_style_04_designation,
  .twss_6310_team_style_04_profile_details,
  .twss_6310_team_style_04_contact,
  .twss_6310_team_style_04,
  .twss_6310_team_style_04_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }

  .twss_6310_team_style_04:hover .twss_6310_team_style_04_title {
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }

  .twss_6310_team_style_04:hover .twss_6310_team_style_04_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }

  .twss_6310_team_style_04:hover .twss_6310_team_style_04_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }

  .twss_6310_team_style_04:hover div.twss_6310_team_style_04_contact div {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_04_social {
    display: <?php echo ($cssData['twss_fun_template_social']) ? 'block' : 'none'; ?>;
    padding: 0;
    list-style: none;
    text-align: <?php echo $cssData['icon_text_align'] ?>;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
    float: left;
    width: 100%;
  }

  div.twss_6310_team_style_04_social div {
    display: inline-block;
    margin: <?php echo  $cssData['icon_text_align'] == "left" ? "0 4px 4px 0;" : "0 0 4px 4px;"; ?>;
    padding: 0;
  }

  div.twss_6310_team_style_04_social div a {
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

  div.twss_6310_team_style_04_social div a i {
    line-height: <?php echo $cssData['social_line_height'] - ($cssData['social_border_width'] * 2) ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
  }
</style>