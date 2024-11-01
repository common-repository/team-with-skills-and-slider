<div id="twss-6310-noslider-<?php echo $styleId ?>">
   <?php
   twss_6310_search_template($template_id, $cssData);
   twss_6310_category_menu($categoryData, $styleId);
   $counter = 0;
   if ($members) {
      echo "<div class='twss-6310-row c-1588100157'>";
      foreach ($members as $value) {
         $counter++;
         if ($value['profile_details_type'] == 1) {
            $cls = " twss_6310_team_member_info";
            $attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $cls = " twss_6310_team_member_info";
            $attr = " link-id='0' team-id='{$value['id']}'";
         }
   ?>
         <div class="twss-6310-col-<?php echo $cssData['item_per_row'] ?>">
            <div class="">
               <div class="twss_6310_team_style_17 twss_6310_image_hover_effect">
                  <svg version="1.1" class="wavey-top-<?php echo $counter ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                     <linearGradient id="SVGID_1_<?php echo $counter ?>" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                        <stop offset="0" />
                        <stop offset="1" />
                     </linearGradient>
                     <path fill="url(#SVGID_1_<?php echo $counter ?>)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
                  </svg>
                  <div class="twss_6310_team_style_17_caption">

                     <div class="twss_6310_team_style_17_img">
                        <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                     </div>
                     <div class="twss_6310_team_style_17_content_group">

                        <?php
                        foreach ($template_order as $td) {
                           if ($td == 'twss_fun_template_name') {
                              twss_fun_template_name($value['name'], $styleId, '17');
                           } else if ($td == 'twss_fun_template_designation') {
                              twss_fun_template_designation($value['designation'], $cssData, $styleId, '17');
                           }
                        }
                        ?>
                     </div>
                  </div>
                  <figcaption>
                     <div class="twss_6310_team_style_17_team_social">
                        <?php
                        foreach ($template_order as $td) {
                           if ($td == 'twss_fun_template_profile_details') {
                              twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                           } else if ($td == 'twss_fun_template_social') {
                              twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                           } else if ($td == 'twss_fun_template_contact') {
                              twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                           } else if ($td == 'twss_fun_template_skills') {
                              twss_fun_template_skills($value['skills'], '17', $cssData, $value['id']);
                           }
                        }
                        if ($value['profile_details_type'] > 0) {
                           twss_fun_template_read_more($cssData, '17', $cls, $attr);
                        }
                        ?>
                     </div>
                  </figcaption>
               </div>
            </div>
         </div>
         <?php
      }
      echo "</div>";
   }


   if ($filterList) {
      foreach ($filterList as $filterKey => $filterValue) {
         $counter++;
         $returnMember = twss_6310_extract_members($filterValue);
         $catMembers = $returnMember['members'];
         if ($catMembers) {
            echo "<div class='twss-6310-row {$filterKey}' style='display: none'>";
            foreach ($catMembers as $value) {
               if ($value['profile_details_type'] == 1) {
                  $cls = " twss_6310_team_member_info";
                  $attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
               } else if ($value['profile_details_type'] == 2) {
                  $cls = " twss_6310_team_member_info";
                  $attr = " link-id='0' team-id='{$value['id']}'";
               }
         ?>
               <div class="twss-6310-col-<?php echo $cssData['item_per_row'] . " twss-6310-category-filter-items " . $value['category'] ?>">
                  <div class="">
                     <div class="twss_6310_team_style_17 twss_6310_image_hover_effect">
                        <svg version="1.1" class="wavey-top-<?php echo $counter ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                           <linearGradient id="SVGID_1_<?php echo $counter ?>" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                              <stop offset="0" />
                              <stop offset="1" />
                           </linearGradient>
                           <path fill="url(#SVGID_1_<?php echo $counter ?>)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
                        </svg>
                        <div class="twss_6310_team_style_17_caption">

                           <div class="twss_6310_team_style_17_img">
                              <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                           </div>
                           <div class="twss_6310_team_style_17_content_group">

                              <?php
                              foreach ($template_order as $td) {
                                 if ($td == 'twss_fun_template_name') {
                                    twss_fun_template_name($value['name'], $styleId, '17');
                                 } else if ($td == 'twss_fun_template_designation') {
                                    twss_fun_template_designation($value['designation'], $cssData, $styleId, '17');
                                 }
                              }
                              ?>
                           </div>
                        </div>
                        <figcaption>
                           <div class="twss_6310_team_style_17_team_social">
                              <?php
                              foreach ($template_order as $td) {
                                 if ($td == 'twss_fun_template_profile_details') {
                                    twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                                 } else if ($td == 'twss_fun_template_social') {
                                    twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                                 } else if ($td == 'twss_fun_template_contact') {
                                    twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                                 } else if ($td == 'twss_fun_template_skills') {
                                    twss_fun_template_skills($value['skills'], '17', $cssData, $value['id']);
                                 }
                              }
                              if ($value['profile_details_type'] > 0) {
                                 twss_fun_template_read_more($cssData, '17', $cls, $attr);
                              }
                              ?>
                           </div>
                        </figcaption>
                     </div>
                  </div>
               </div>
   <?php
            }
            echo "</div>";
         }
      }
   }
   ?>
</div>

<div id="twss-6310-slider-<?php echo $styleId ?>" class="twss-6310-owl-carousel">
   <?php
   if ($members) {
      foreach ($members as $value) {
         $counter++;
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='twss_6310_team_style_17 twss_6310_team_member_info' link-id='{$value['id']}' link-url='" . twss_6310_validate_profile_url($value['profile_url']) . "' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='twss_6310_team_style_17 twss_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='twss_6310_team_style_17' link-id='0' team-id='0'";
         }
   ?>
         <div class="twss-6310-item">
            <div class="">
            <div class="twss_6310_team_style_17 twss_6310_image_hover_effect">
                  <svg version="1.1" class="wavey-top-<?php echo $counter ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 200">
                     <linearGradient id="SVGID_1_<?php echo $counter ?>" gradientUnits="userSpaceOnUse" x1="0" y1="100" x2="500" y2="100">
                        <stop offset="0" />
                        <stop offset="1" />
                     </linearGradient>
                     <path fill="url(#SVGID_1_<?php echo $counter ?>)" d="M0,200C35,144.5,73.824,69.896,245.5,69.5C462,69,486,14,500,0H0V200z" />
                  </svg>
                  <div class="twss_6310_team_style_17_caption">

                     <div class="twss_6310_team_style_17_img">
                        <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
                     </div>
                     <div class="twss_6310_team_style_17_content_group">

                        <?php
                        foreach ($template_order as $td) {
                           if ($td == 'twss_fun_template_name') {
                              twss_fun_template_name($value['name'], $styleId, '17');
                           } else if ($td == 'twss_fun_template_designation') {
                              twss_fun_template_designation($value['designation'], $cssData, $styleId, '17');
                           }
                        }
                        ?>
                     </div>
                  </div>
                  <figcaption>
                     <div class="twss_6310_team_style_17_team_social">
                        <?php
                        foreach ($template_order as $td) {
                           if ($td == 'twss_fun_template_profile_details') {
                              twss_fun_template_profile_details($value, $cssData, $styleId, '17');
                           } else if ($td == 'twss_fun_template_social') {
                              twss_fun_template_social($value, $cssData, $icon_table, $styleId, '17');
                           } else if ($td == 'twss_fun_template_contact') {
                              twss_fun_template_contact($value['contacts'], $cssData, $styleId, '17');
                           } else if ($td == 'twss_fun_template_skills') {
                              twss_fun_template_skills($value['skills'], '17', $cssData, $value['id']);
                           }
                        }
                        if ($value['profile_details_type'] > 0) {
                           twss_fun_template_read_more($cssData, '17', $cls, $attr);
                        }
                        ?>
                     </div>
                  </figcaption>
               </div>
            </div>
         </div>
   <?php
      }
   }
   ?>
</div>