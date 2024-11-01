var $ = jQuery;
jQuery(document).ready(function () {
   jQuery("body").on("click", ".open_in_new_tab_class", function () {
      if (jQuery(".open_in_new_tab_class").attr("target") == "_blank") {
         window.open(jQuery(this).attr("href"), '_blank').focus();
      } else {
         window.open(jQuery(this).attr("href"), '_parent').focus();
      }
      return false;
   });
   jQuery("body").on("click", ".twss_6310_team_member_info", function (event) {
      let allModal = jQuery('.twss_6310_modal');
      allModal.each(function(){
         jQuery(this).remove();
      });
      var modalId = parseInt(jQuery(this).attr("team-id"));
      var linkId = parseInt(jQuery(this).attr("link-id"));
      if (linkId > 0) {
         event.preventDefault();
         if (jQuery(this).attr("target") == "1") {
            window.open(jQuery(this).attr("link-url"), '_blank').focus();
         } else {
            window.open(jQuery(this).attr("link-url"), '_parent').focus();
         }
         return false;
      } else if (modalId > 0) {         
         var mId = Number(jQuery(this).closest('.twss_main_template').attr('twss-6310-modal-template'));
         var tId = Number(jQuery(this).closest('.twss_main_template').attr('twss-6310-carousel-id'));

         var html = `
                  <div id="mytwss_6310_modal" class="twss_6310_modal twss_6310_mmt_${tId}">
                     <div class="twss_6310_modal-content">
                        <span class="twss-6310-close">&times;</span>
                  `;
            if(mId == 2){
               html += `
               <div class="twss_6310_modal_template twss_6310_modal_template_2">
                  <div class="twss_6310_modal_body_picture">
                  <img src="" class="twss_6310_modal_img" />
                  <div class="twss_6310_modal_social"></div>
                  </div>
                  <div class="twss_6310_modal_body_content">
                  <div class="twss_6310_modal_title">
                     Hi i'm <div class="twss_6310_modal_name"></div>
                  </div>
                  <div class="twss_6310_modal_designation"></div>
                  <div class="twss_6310_modal_details"></div>
                  <div class="twss_6310_modal_contact"></div>
                  </div>
               </div>
               `;
            }
            else if (mId == 3) {
               html += `
                  <div class="twss_6310_modal_template twss_6310_modal_template_3">
                     <div class="twss_6310_modal_body_picture">
                        <img src="" class="twss_6310_modal_img" alt="">
                     </div>
                     <div class="twss_6310_modal_body_content">
                        <div class="twss_6310_modal_preword">
                           <div class="twss_6310_modal_pre_title"> HELLO</div>
                        </div>
                        <div class="twss_6310_modal_title">I'm
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
               `;
            }
            else if(mId == 4){
               html += `
                  <div class="twss_6310_modal_template twss_6310_modal_template_4">
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
               `;
            }
            else if(mId == 5){
               html += `
                  <div class="twss_6310_modal_template twss_6310_modal_template_5">
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
               `;
            }
            else if(mId == 6){
               html += `
                  <div class="twss_6310_modal_template twss_6310_modal_template_6">
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
               `;
            }
            else {
               html += `
                  <div class="twss_6310_modal_template twss_6310_modal_template_1">
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
               `;
            }


            html += `
                     <br class="twss_6310_clear" />
                  </div> 
                  <br class="twss_6310_clear" />  
               </div>    
         `;
         jQuery("body").prepend(html);



         jQuery(".twss_6310_loading").show();
         jQuery("body").css({
               "overflow": "hidden"
            });
         jQuery.ajax({
            type: "GET",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {action: "twss_6310_team_member_details", 'ids': modalId},
            success: function (data) {
               jQuery(".twss_6310_loading").hide();
               jQuery(".twss_6310_modal-content").css({
                  "animation-name": "twss-animate" + data['styledata']['effect']
               });
               jQuery("#mytwss_6310_modal").show();               
               jQuery(".twss_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery(".twss_6310_modal_designation").text(data['styledata']['designation']);
               jQuery(".twss_6310_modal_name").text(data['styledata']['name']);
               jQuery(".twss_6310_modal_contact").html("");
               jQuery(".twss_6310_modal_contact").append(data['contact']);
               jQuery(".twss_6310_modal_social").html("");
               jQuery(".twss_6310_modal_social").append(data['link']);
               jQuery(".twss_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
         });
      }
   });
});

function twss_6310_load_modal(dataList) {
   jQuery.ajax({
     type: "GET",
     dataType: "json",
     url: my_ajax_object.ajax_url,
     data: dataList,
     success: function (data) {
       jQuery(".twss_6310_loading").hide();
       jQuery(".twss_6310_modal-content").css({
         "animation-name": "twss-animate" + data["styledata"]["effect"],
       });
       jQuery(".twss_6310_modal").show();
       jQuery('.twss_6310_modal').attr('twss-6310-member-id', data['styledata']['id']);
       jQuery('.twss_6310_modal').attr('twss-6310-carousel-id', dataList['styleId']);
       jQuery(".twss_6310_modal_img").attr("src", data["styledata"]["image"]);
       jQuery(".twss_6310_modal_img").attr("data-6310-hover-image", data["styledata"]["hover_image"]);
       jQuery(".twss_6310_modal_designation").text(
         data["styledata"]["designation"]
       );
       jQuery(".twss_6310_modal_name").text(data["styledata"]["name"]);
       jQuery(".twss_6310_modal_contact").html("");
       jQuery(".twss_6310_modal_contact").append(data["contact"]);
       jQuery(".twss_6310_modal_social").html("");
       jQuery(".twss_6310_modal_social").append(data["link"]);
       jQuery(".twss_6310_modal_details").html(
         data["styledata"]["profile_details"].replace(/\n/g, "<br>")
       );
     },
   });
 }
 