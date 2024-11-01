<style type="text/css">
  .twss_6310_team_style_20 {
    text-align: center;
    position:relative;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    line-height: 35px;
    font-family: 'Shanti';
    -webkit-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -o-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -moz-border-radius: <?php echo $cssData['image_radius'] ?>px;
    -ms-border-radius: <?php echo $cssData['image_radius'] ?>px;
    border-radius: <?php echo $cssData['image_radius'] ?>px;
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['box_shadow_color'] ?>;
    height: 100%;
  }

  .twss_6310_team_style_20:hover {
    box-shadow: 0px 0px <?php echo ($cssData['box_shadow_blur'] * 2) ?>px <?php echo $cssData['box_shadow_width'] ?>px <?php echo $cssData['hover_box_shadow_color'] ?>;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1),
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_first_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2),
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_second_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3),
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_third_color'] ?> 80%, transparent 20%);

  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4),
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_fourth_color'] ?> 80%, transparent 20%);

  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5),
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_five_color'] ?> 80%, transparent 20%);

  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6),
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20 {
    background: linear-gradient(to top, <?php echo $cssData['box_background_six_color'] ?> 80%, transparent 20%);

  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {

    background: linear-gradient(to top, <?php echo $cssData['box_background_first_hover_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {
    background: linear-gradient(to top, <?php echo $cssData['box_background_second_hover_color'] ?> 80%, transparent 20%);

  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {
    background: linear-gradient(to top, <?php echo $cssData['box_background_third_hover_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {
    background: linear-gradient(to top, <?php echo $cssData['box_background_fourth_hover_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {
    background: linear-gradient(to top, <?php echo $cssData['box_background_five_hover_color'] ?> 80%, transparent 20%);
  }

  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover,
  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) .twss-6310-item .twss_6310_team_style_20:hover {
    background: linear-gradient(to top, <?php echo $cssData['box_background_six_hover_color'] ?> 80%, transparent 20%);

  }

  .twss_6310_team_style_20_title {
    position: absolute;
    top: 0;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $cssData['member_font_size'] ?>px;
    color: <?php echo $cssData['member_font_color'] ?>;
    font-weight: <?php echo $cssData['member_font_weight'] ?>;
    text-transform: <?php echo $cssData['member_text_transform']; ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['member_font_family']); ?>;
    line-height: <?php echo $cssData['member_line_height'] ?>px;
    float: left;
    width: 100%;
    text-align: center;
    margin-left: 15px;
    z-index: 1;
  }

  .twss-6310-row div:nth-child(1) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(1) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_first_color'] ?>;
  }

  .twss-6310-row div:nth-child(2) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(2) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_second_color'] ?>;
  }

  .twss-6310-row div:nth-child(3) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(3) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_third_color'] ?>;
  }

  .twss-6310-row div:nth-child(4) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(4) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_fourth_color'] ?>;
  }

  .twss-6310-row div:nth-child(5) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(5) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_five_color'] ?>;
  }

  .twss-6310-row div:nth-child(6) div div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(6) div div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_six_color'] ?>;
  }

  .twss-6310-row div:nth-child(1) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(1) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_first_hover_color'] ?>;
  }

  .twss-6310-row div:nth-child(2) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(2) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_second_hover_color'] ?>;
  }

  .twss-6310-row div:nth-child(3) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(3) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_third_hover_color'] ?>;
  }

  .twss-6310-row div:nth-child(4) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(4) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_fourth_hover_color'] ?>;
  }

  .twss-6310-row div:nth-child(5) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(5) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_five_hover_color'] ?>;
  }

  .twss-6310-row div:nth-child(6) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-category-filter-row div:nth-child(6) div:hover div.twss_6310_team_style_20_title,
  .twss-6310-owl-stage div:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div:hover div.twss_6310_team_style_20_title {
    background-color: <?php echo $cssData['box_background_six_hover_color'] ?>;
  }

  #pointer:before {
    content: "";
    position: absolute;
    right: -15px;
    top: <?php echo $cssData['member_line_height'] - 1 ?>px;
    width: 0;
    height: 0;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_first_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_second_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_third_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_fourth_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_five_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6) div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6) div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>) div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_six_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(1):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(1n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_first_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(2):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(2n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_second_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(3):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(3n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_third_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(4):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(4n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_fourth_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(5):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(5n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_five_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss-6310-category-filter-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover div div+div#pointer:before,
  .twss-6310-row div.twss-6310-col-<?php echo $cssData['item_per_row'] ?>:nth-child(6):hover div div+div#pointer:before,
  .twss-6310-owl-stage .twss-6310-owl-item:nth-child(6n+<?php echo $cssData['item_per_row'] ?>):hover div div+div#pointer:before {
    border-left: 15px solid <?php echo $cssData['box_background_six_hover_color'] ?>;
    border-bottom: 15px solid transparent;
  }

  .twss_6310_team_style_20_img {
    position: relative;
    width: 100%;
    float: left;
  }

  .twss_6310_team_style_20_img img {
    padding: 15px 0 0 0;
    margin-bottom: -4px;
    transition: all 0.3s ease 0s;
    width: 100%;
    float: left;
    height: auto;
  }

  img.twss_hover_image {
    display: none;
  }

  .twss_6310_team_style_20:hover img.twss_hover_image {
    display: initial;
  }

  .twss_6310_team_style_20:hover img.twss_front_image {
    display: none;
  }

  .twss_6310_team_style_20_caption {
    position: relative;
    float: left;
    width: 100%;
  }

  .twss_6310_team_style_20_designation {
    position: absolute;
    bottom: -4px;

    overflow: hidden;
    display: block;
    width: 100%;
    background-color: rgba(0, 0, 0, .3);
    display: <?php echo ($cssData['twss_fun_template_designation']) ? 'block' : 'none'; ?>;
    font-family: <?php echo $cssData['designation_font_family'] ?>;
    font-size: <?php echo $cssData['designation_font_size'] ?>px;
    color: <?php echo $cssData['designation_font_color'] ?>;
    font-weight: <?php echo $cssData['designation_font_weight'] ?>;
    text-transform: <?php echo $cssData['designation_text_transform'] ?>;
    line-height: <?php echo $cssData['designation_line_height'] ?>px;
    z-index: 1;
    transition: all 0.3s ease 0s;
  }

  .twss_6310_team_style_20:hover .twss_6310_team_style_20_designation {
    color: <?php echo $cssData['designation_font_hover_color'] ?>;
  }

  .twss_6310_team_style_20_profile_details {
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
    float: left !important;
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
  }

  .twss_6310_team_style_20:hover .twss_6310_team_style_20_profile_details {
    color: <?php echo $cssData['details_font_hover_color'] ?>;
  }



  .twss_6310_team_style_20_contact {
    padding: 0;
    float: left !important;
    width: calc(100% - 30px) !important;
    margin-left: 15px !important;
    margin-right: 15px !important;
    float: left !important;
    display: <?php echo ($cssData['twss_fun_template_contact']) ? 'block' : 'none'; ?>;
    margin: <?php echo $cssData['contact_margin_top'] ?>px 0 <?php echo $cssData['contact_margin_bottom'] ?>px 0;

  }

  div.twss_6310_team_style_20_contact div {
    font-size: <?php echo $cssData['contact_font_size'] ?>px;
    color: <?php echo $cssData['contact_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_text_transform'] ?>;
    font-family: <?php echo str_replace("+", " ", $cssData['contact_font_family']); ?>;
    line-height: <?php echo $cssData['contact_line_height'] ?>px;
    text-align: <?php echo $cssData['contact_text_align'] ?>;
    border-bottom: <?php echo ($cssData['contact_border_bottom'] == 'none') ? 'none' : "{$cssData['contact_border_bottom']} solid {$cssData['contact_border_bottom_color']}" ?>;
    float: left;
    width: 100%;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    padding: 2px 0;
    margin: 0;
    transition: all 0.6s ease 0s;
    cursor: pointer !important;
  }

  .twss_6310_team_style_20:hover div.twss_6310_team_style_20_contact div {
    color: <?php echo $cssData['contact_font_hover_color'] ?>;
  }

  div.twss_6310_team_style_20_contact div span {
    font-size: <?php echo $cssData['contact_label_font_size'] ?>px;
    color: <?php echo $cssData['contact_label_font_color'] ?>;
    font-weight: <?php echo $cssData['contact_label_font_weight'] ?>;
    text-transform: <?php echo $cssData['contact_label_text_transform'] ?>;
    margin-right: 4px;
  }

  .twss_6310_team_style_20:hover div.twss_6310_team_style_20_contact div span {
    color: <?php echo $cssData['contact_label_font_hover_color'] ?>;
  }

  .twss_6310_member_skills_wrapper_20 {
    margin-top: <?php echo $cssData['progress_bar_margin_top'] ?>px !important;
    margin-bottom: <?php echo $cssData['progress_bar_margin_bottom'] ?>px !important;
    float: left !important;
    width: calc(100% - 30px) !important;
    margin-left: 15px !important;
    margin-right: 15px !important;
  }
  div.twss_6310_team_style_20_social {
    padding: 0;
    list-style: none;
    width: 90% !important;
    float: left !important;
    transform: translate(4%, 0%);
    text-align: <?php echo $cssData['icon_text_align'] ?>;
    margin: <?php echo $cssData['social_margin_top'] ?>px 0 <?php echo $cssData['social_margin_bottom'] ?>px;
    display: <?php echo ($cssData['twss_fun_template_social']) ? 'block' : 'none'; ?>;
  }

  div.twss_6310_team_style_20_social div {
    display: inline-block;
    margin: 0 8px 8px 0;
  }

  div.twss_6310_team_style_20_social div a {
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

  div.twss_6310_team_style_20_social div a i {
    line-height: <?php echo $cssData['social_line_height'] - ($cssData['social_border_width'] * 2) ?>px;
    font-size: <?php echo ceil(($cssData['social_icon_width'] + $cssData['social_icon_height']) / 4) ?>px;
  }

  div.twss_6310_team_style_20_social div a:hover {
    background: #fff;
    color: #d4434d
  }
  .twss_6310_team_style_20 .twss_6310_team_style_20_read_more {
    width: 95%;
    transform: translate(3%, 0%);
  }

  .twss_6310_team_style_20:hover .twss_6310_team_style_20_img img {
    border-color: #F43662;
  }

  .twss_6310_team_style_20,
  .twss_6310_team_style_20_title,
  .twss_6310_team_style_20_designation,
  .twss_6310_team_style_20_border,
  .twss_6310_team_style_20_border:after,
  .twss_6310_team_style_20_profile_details,
  .twss_6310_team_style_20_contact,
  .twss_6310_team_style_20,
  .twss_6310_team_style_20_social,
  div.twss_6310_team_style_20_social div a,
  .twss_6310_team_style_20_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }
</style>