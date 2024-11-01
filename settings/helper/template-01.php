<script type="text/javascript">
    jQuery(document).ready(function() {
        //General Setting
        jQuery(`
            #twss_image_radius,
            #twss_border_width,
            #twss_border_color,
            #twss_image_hover_background,
            #twss_box_shadow_width,
            #twss_box_shadow_blur,
            #twss_box_shadow_color,
            #twss_hover_box_shadow_color,
            #twss_box_background_color,

            #twss_member_font_size,           
            #twss_heading_line_height,
            #twss_member_font_color,
            #twss_member_font_hover_color,
            #twss_member_font_weight,
            #twss_member_text_transform,
            #twss_member_text_align,
            #twss_jquery_heading_font,
            #twss_member_margin_top,
            #twss_member_margin_bottom,

            #twss_designation_font_size,
            #twss_designation_line_height,
            #twss_designation_font_color,
            #twss_designation_font_hover_color,
            #twss_designation_font_weight,
            #twss_designation_text_transform,
            #twss_designation_text_align,
            #twss_jquery_designation_font,
            #twss_designation_margin_top,
            #twss_designation_margin_bottom,

            #twss_details_font_size,
            #twss_details_line_height,
            #twss_details_font_color,
            #twss_details_font_hover_color,
            #twss_details_font_weight,
            #twss_details_text_transform,
            #twss_details_text_align,
            #twss_jquery_profile_details_font,
            #twss_details_margin_top,
            #twss_details_margin_bottom,

            #twss_social_border_width,
            #twss_social_icon_width,
            #twss_social_icon_height,
            #twss_social_border_radius,
            #twss_icon_text_align,
            #twss_social_margin_top,
            #twss_social_margin_bottom,

            #twss_contact_label_font_size,
            #twss_contact_label_font_color,
            #twss_contact_label_font_hover_color,
            #twss_contact_label_font_weight,
            #twss_contact_label_text_transform,
            #twss_contact_font_size,
            #twss_contact_line_height,
            #twss_contact_font_color,
            #twss_contact_font_hover_color,
            #twss_contact_font_weight,
            #twss_contact_text_transform,
            #twss_contact_text_align,
            #twss_jquery_contact_font,
            #twss_contact_margin_top,
            #twss_contact_margin_bottom,
            #twss_contact_border_bottom,
            #twss_contact_border_bottom_color,
            #twss_border_hover_color
        `).on('change', function() {
            //General          
            var image_radius = jQuery('#twss_image_radius').val();
            var border_width = parseInt (jQuery('#twss_border_width').val());
            var border_color = jQuery('#twss_border_color').val();
            var image_hover_background = jQuery('#twss_image_hover_background').val();
            var box_shadow_width = parseInt (jQuery('#twss_box_shadow_width').val());
            var box_shadow_blur = jQuery('#twss_box_shadow_blur').val();
            var box_shadow_color = jQuery('#twss_box_shadow_color').val();
            var hover_box_shadow_color = jQuery('#twss_hover_box_shadow_color').val();           
            var box_background_color = jQuery('#twss_box_background_color').val();
            var border_hover_color = jQuery('#twss_border_hover_color').val();
            //Name

            var member_font_size = parseInt (jQuery('#twss_member_font_size').val());
            var heading_line_height = parseInt (jQuery('#twss_heading_line_height').val());
            var member_font_color = jQuery('#twss_member_font_color').val();
            var member_font_hover_color = jQuery('#twss_member_font_hover_color').val();
            var member_font_weight = jQuery('#twss_member_font_weight').val();
            var member_text_transform = jQuery('#twss_member_text_transform').val();
            var member_text_align = jQuery('#twss_member_text_align').val();
            var name_heading_font = jQuery('#twss_jquery_heading_font').val().replace(/\+/g, ' ');
            var member_margin_top = parseInt(jQuery('#twss_member_margin_top').val());
            var member_margin_bottom = parseInt(jQuery('#twss_member_margin_bottom').val());
            // Designation

            var designation_font_size = parseInt(jQuery('#twss_designation_font_size').val());
            var designation_line_height = parseInt(jQuery('#twss_designation_line_height').val());
            var designation_font_color = jQuery('#twss_designation_font_color').val();
            var designation_font_hover_color = jQuery('#twss_designation_font_hover_color').val();
            var designation_font_weight = jQuery('#twss_designation_font_weight').val();
            var designation_text_transform = jQuery('#twss_designation_text_transform').val();
            var designation_text_align = jQuery('#twss_designation_text_align').val();          
            var designation_font_family = jQuery('#twss_jquery_designation_font').val().replace(/\+/g, ' ');
            var designation_margin_top = parseInt(jQuery('#twss_designation_margin_top').val());
            var designation_margin_bottom = parseInt(jQuery('#twss_designation_margin_bottom').val());
            // Details

            var details_font_size = parseInt(jQuery('#twss_details_font_size').val());
            var details_line_height = parseInt(jQuery('#twss_details_line_height').val());
            var details_font_color = jQuery('#twss_details_font_color').val();
            var details_font_hover_color = jQuery('#twss_details_font_hover_color').val();
            var details_font_weight = jQuery('#twss_details_font_weight').val();
            var details_text_transform = jQuery('#twss_details_text_transform').val();
            var details_text_align = jQuery('#twss_details_text_align').val();
            var details_font_family = jQuery('#twss_jquery_profile_details_font').val().replace(/\+/g, ' ');
            var details_margin_top = parseInt(jQuery('#twss_details_margin_top').val());
            var details_margin_bottom = parseInt(jQuery('#twss_details_margin_bottom').val());
            // Social

            var social_border_width = parseInt(jQuery('#twss_social_border_width').val());
            var social_icon_width = parseInt(jQuery('#twss_social_icon_width').val());
            var social_icon_height = parseInt(jQuery('#twss_social_icon_height').val());
            var social_border_radius = parseInt(jQuery('#twss_social_border_radius').val());
            var icon_text_align = jQuery('#twss_icon_text_align').val();
            var social_margin_top = parseInt(jQuery('#twss_social_margin_top').val());
            var social_margin_bottom = parseInt(jQuery('#twss_social_margin_bottom').val());
            // Contact

            var contact_label_font_size = parseInt(jQuery('#twss_contact_label_font_size').val());
            var contact_label_font_color = jQuery('#twss_contact_label_font_color').val();
            var contact_label_font_hover_color = jQuery('#twss_contact_label_font_hover_color').val();
            var contact_label_font_weight = jQuery('#twss_contact_label_font_weight').val();
            var contact_label_text_transform = jQuery('#twss_contact_label_font_weight').val();
            var contact_font_size = parseInt(jQuery('#twss_contact_font_size').val());
            var contact_line_height = parseInt(jQuery('#twss_contact_line_height').val());
            var contact_font_color = jQuery('#twss_contact_font_color').val();
            var contact_font_hover_color = jQuery('#twss_contact_font_hover_color').val();
            var contact_font_weight = jQuery('#twss_contact_font_weight').val();
            var contact_text_transform = jQuery('#twss_contact_text_transform').val(); 
            var contact_text_align = jQuery('#twss_contact_text_align').val();
            var contact_font_family = jQuery('#twss_jquery_contact_font').val().replace(/\+/g, ' ');
            var contact_margin_top = parseInt(jQuery('#twss_contact_margin_top').val());
            var contact_margin_bottom = parseInt(jQuery('#twss_contact_margin_bottom').val());
            var contact_border_bottom = parseInt(jQuery('#twss_contact_border_bottom').val());
            var contact_border_bottom_color = jQuery('#twss_contact_border_bottom_color').val();
         
        
            jQuery(`<style type='text/css'>  .twss_6310_team_style_01 {
                -webkit-border-radius: ${image_radius}px;
                -o-border-radius: ${image_radius}px;
                -moz-border-radius: ${image_radius}px;
                -ms-border-radius: ${image_radius}px;
                border-radius: ${image_radius}px;
                border-width: ${border_width}px;
                border-color: ${border_color};
                box-shadow: 0 0 `+ Math.ceil(box_shadow_blur * 2 )+`px ${box_shadow_width}px ${box_shadow_color};              
                background: ${box_background_color};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  .twss_6310_team_style_01:hover {
                border-color: ${border_hover_color};
                box-shadow: 0 0 `+ Math.ceil(box_shadow_blur * 2 )+`px ${box_shadow_width}px ${hover_box_shadow_color};
                background: ${image_hover_background};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  .twss_6310_team_style_01_title {
                font-size: ${member_font_size}px;
                color: ${member_font_color};
                font-weight: ${member_font_weight};
                text-transform: ${member_text_transform};
                font-family: ${name_heading_font};
                line-height: ${heading_line_height}px;
                margin-top: ${member_margin_top}px;
                margin-bottom: ${member_margin_bottom}px;
                text-align: ${member_text_align};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  .twss_6310_team_style_01_designation {
                font-size: ${designation_font_size}px;
                color: ${designation_font_color};
                font-weight: ${designation_font_weight};
                text-transform: ${designation_text_transform};
                font-family: ${designation_font_family};
                line-height: ${designation_line_height}px;
                margin-top: ${designation_margin_top}px;
                margin-bottom: ${designation_margin_bottom}px;
                text-align: ${designation_text_align};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  .twss_6310_team_style_01_profile_details {            
                font-size: ${details_font_size}px;
                line-height: ${details_line_height}px;
                color: ${details_font_color};
                font-weight: ${details_font_weight};
                text-transform: ${details_text_transform};
                text-align: ${details_text_align} !important;
                font-family: ${details_font_family};
                margin-top: ${details_margin_top}px;
                margin-bottom: ${details_margin_bottom}px;
            }</style>`).appendTo(".twss-6310-preview")
            ;
            jQuery(`<style type='text/css'> .twss_6310_team_style_01_contact {
                margin: ${contact_margin_top}px 0 ${contact_margin_bottom}px;
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  div.twss_6310_team_style_01_contact div {
                font-size: ${contact_font_size}px;
                color: ${contact_font_color};
                font-weight: ${contact_font_weight};
                text-transform: ${contact_text_transform};
                font-family: ${contact_font_family};
                line-height: ${contact_line_height}px;
                text-align: ${contact_text_align};
                border-bottom: `+ (contact_border_bottom == 'none' ? 'none' : `${contact_border_bottom} solid ${contact_border_bottom_color}`)  +`;
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>div.twss_6310_team_style_01_contact div span {
                font-size: ${contact_label_font_size}px;
                color: ${contact_label_font_color};
                font-weight: ${contact_label_font_weight};
                text-transform: ${contact_label_text_transform};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>.twss_6310_team_style_01:hover div.twss_6310_team_style_01_contact div span {
                color: ${contact_label_font_hover_color};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>.twss_6310_team_style_01:hover .twss_6310_team_style_01_title {
                color: ${member_font_hover_color};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>.twss_6310_team_style_01:hover .twss_6310_team_style_01_designation {
                color: ${designation_font_hover_color};
            }</style>`).appendTo(".twss-6310-preview");   

            jQuery(`<style type='text/css'>.twss_6310_team_style_01:hover .twss_6310_team_style_01_profile_details {
                color: ${details_font_hover_color};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>.twss_6310_team_style_01:hover div.twss_6310_team_style_01_contact div {
                color: ${contact_font_hover_color};
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>div.twss_6310_team_style_01_social {
                text-align: ${icon_text_align};
                margin: ${social_margin_top}px 0 ${social_margin_bottom}px;
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>div.twss_6310_team_style_01_social div {
                margin: ` + (icon_text_align == 'left' ? "0 4px 4px 0;" : "0 0 4px 4px;") +`;   
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  div.twss_6310_team_style_01_social div a {
                width: ${social_icon_width}px;
                height: ${social_icon_height}px;
                border-radius: ${social_border_radius}px;
                -moz-border-radius: ${social_border_radius}px;
                -webkit-border-radius: ${social_border_radius}px;
                -o-border-radius: ${social_border_radius}px;
                -ms-border-radius: ${social_border_radius}px;
            }</style>`).appendTo(".twss-6310-preview");

            jQuery(`<style type='text/css'>  div.twss_6310_team_style_01_social div a i {
              font-size:`+ Math.ceil( social_icon_width + (social_icon_height / 4))+`px;

            }</style>`).appendTo(".twss-6310-preview");

             // Designation Start
        jQuery("body").on("click", ".activate-designation", function() {
            var val = parseInt(jQuery(this).val());
            jQuery(".activate-designation").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#twss_fun_template_designation").val(val);
            if (val == 0) {
                jQuery(".twss_6310_team_style_01_designation").hide();
            } else {
                jQuery(".twss_6310_team_style_01_designation").show();
            }
        });
    });
});

</script>