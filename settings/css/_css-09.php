<style>
  .twss_6310_team_style_09 {
    text-align: center;
    cursor: pointer;
    width: calc(100% - 2px);
    float: left;
    border: 1px #006666 solid;
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-style: solid;
    border-width: <?php echo $cssData['border_width'] ?>px;
    border-color: <?php echo $cssData['border_color'] ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;
    overflow: hidden;
    height: 100%;
    background-color: <?php echo $cssData['box_background_color'] ?>
  }

  .twss_6310_team_style_09:hover {
    border-color: <?php echo $cssData['border_hover_color'] ?>;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['twss_hover_box_shadow_color'] ?>;
  }

  .twss_6310_team_style_09_img {
    position: relative;
    overflow: hidden;
    width: 100%;
    float: left;
  }

  .twss_6310_team_style_09_img:after {
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    position: absolute;
    bottom: -100%;
    left: 0;
    transition: all 0.3s ease 0s;
  }

  .twss_6310_team_style_09:hover .twss_6310_team_style_09_img:after {
    bottom: 0;
  }

  .twss_6310_team_style_09 img {
    width: 100%;
    height: auto;
    float: left;
  }

  div.twss_6310_team_style_09_social {
    padding: 0 0 18px 0;
    list-style: none;
    position: absolute;
    top: -150%;
    right: 10px;
    border-radius: 0 0 20px 20px;
    z-index: 1;
    transition: all 0.3s ease 0s;
    display: <?php echo ($cssData['twss_fun_template_social']) ? 'block' : 'none'; ?>;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 0 0;
  }

  .twss_6310_team_style_09:hover div.twss_6310_team_style_09_social {
    top: 5px;
  }

  div.twss_6310_team_style_09_social div {
    display: block;
    margin: 5px 0px;
  }

  div.twss_6310_team_style_09_social div a {
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    width: <?php echo $cssData['social_icon_width'] ?>px;
    height: <?php echo $cssData['social_icon_height'] ?>px;
    line-height: <?php echo $cssData['social_icon_height'] ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    transition: all 0.5s ease 0s;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
    border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -webkit-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['social_border_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['social_border_radius'] ?>px;

  }

  div.twss_6310_team_style_09_social div a i {
    line-height: <?php echo $cssData['social_line_height'] - ($cssData['social_border_width'] * 2) ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
  }

  .twss_6310_team_style_09_caption {
    padding: 10px 0 0;   
    text-align: center;
    z-index: 1;
    float: left;
    width: 100%;
    transition: all 0.5s ease 0s;
   
  }

  .twss_6310_team_style_09:hover {
    background-color: <?php echo $cssData['image_hover_background'] ?>;
  }


  .twss_6310_team_style_09_title {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    margin-top: <?php echo $cssData['member_margin_top'] ?>px;
    line-height: <?php echo $cssData['member_line_height']; ?>px;
    position: relative;
  }

  .twss_6310_team_style_09:hover .twss_6310_team_style_09_title {
    color: <?php echo $cssData['member_font_hover_color'] ?>;
  }

  .twss_6310_team_style_09_title:before {
    content: "";
    width: 50px;
    height: 1px;
    background-color: <?php echo $cssData['member_border_color'] ?>;
    position: absolute;
    bottom: 3px;
    left: 50%;
    transition-duration: 0.25s;
    transform: translateX(-50%);
  }
  .twss_6310_team_style_09_title:after {
    content: "";
    display: block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    margin: 0 auto;
    position: relative;
    bottom: 0px;
    background-color: <?php echo $cssData['member_border_color'] ?>;
  }
  .twss_6310_team_style_09:hover .twss_6310_team_style_09_title:after
 {
    background-color: <?php echo $cssData['member_border_hover_color'] ?>;
  }

  .twss_6310_team_style_09:hover .twss_6310_team_style_09_title:before
 {
    width: 100px;
    background-color: <?php echo $cssData['member_border_hover_color'] ?>;
  }

  .twss_6310_team_style_09_designation {
    display: <?php echo ($cssData['twss_fun_template_designation']) ? 'block' : 'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    padding: 0 15px;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    position: relative;
    z-index: 1;
    padding: 0 0 0 <?php echo $cssData['member_title_padding'] ?>px;
  }

  .twss_6310_team_style_09:hover .twss_6310_team_style_09_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }
  .twss_6310_team_style_09:hover .twss_6310_team_style_09_designation:before {
    background-color: <?php echo $cssData['member_border_hover_color'] ?>;

  }

  div.twss_6310_team_style_09_contact {

    float: left;
    width: 95%;
    transform: translate(3%, 0%);
    display: <?php echo ($cssData['twss_fun_template_contact']) ? 'block' : 'none'; ?>;
    margin-top: <?php echo $cssData['contact_margin_top'] ?>px;
    margin-bottom: <?php echo $cssData['contact_margin_bottom'] ?>px;
  }



  div.twss_6310_team_style_09_contact div {

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
    transition: all 0.6s ease 0s;
    cursor: pointer !important;
  }

  .twss_6310_team_style_09:hover div.twss_6310_team_style_09_contact div {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_09_contact div span {
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_label_text_transform'] ?>;
    margin-right: 4px;
  }

  .twss_6310_team_style_09:hover div.twss_6310_team_style_09_contact div span {
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }



  .twss_6310_team_style_09_profile_details {
    display: <?php echo ($cssData['twss_fun_template_profile_details']) ? 'block' : 'none'; ?>;
    font-size: <?php echo $cssData['details_font_size'] ?>px;
    line-height: <?php echo $cssData['details_line_height'] ?>px;
    color: <?php echo $cssData['details_font_color'] ?>;
    font-weight: <?php echo $cssData['details_font_weight'] ?>;
    text-transform: <?php echo $cssData['details_text_transform'] ?>;
    text-align: <?php echo $cssData['details_text_align'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['details_font_family']); ?>;
    margin-top: <?php echo ($cssData['details_margin_top']) ?>px;
    margin-bottom: <?php echo $cssData['details_margin_bottom'] ?>px;

    float: left;
    width: 95%;
    transform: translate(3%, 0%);
  }

  .twss_6310_team_style_09:hover .twss_6310_team_style_09_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }

  .twss_6310_team_style_09 .twss_6310_team_style_09_read_more {
    width: 95% !important;
    transform: translate(3%, 0%);
  }

  .twss_6310_member_skills_wrapper_09 {
    float: left;
    width: 95% !important;
    transform: translate(3%, 0%);
    margin-top: <?php echo $cssData['progress_bar_margin_top']; ?>px;
    margin-bottom: <?php echo $cssData['progress_bar_margin_bottom']; ?>px;
  }

  .twss_6310_team_style_09,
  .twss_6310_team_style_09_title,
  .twss_6310_team_style_09_designation,
  .twss_6310_team_style_09_designation:before,
  .twss_6310_team_style_09_profile_details,

  ul.twss_6310_team_style_09_contact li,
  .twss_6310_team_style_09,
  .twss_6310_team_style_09_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }
</style>