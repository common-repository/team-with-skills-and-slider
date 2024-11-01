<?php
if ($cssData['twss_fun_template_slider'] != 1) {
  echo "<div class='twss-6310-noslider-{$ids}'>";
    twss_6310_search_template($ids, $cssData); 
    if ($cssData['twss_fun_template_slider'] == 2) {
      twss_6310_category_menu($categoryData, $ids, 1); 
    }
    
    echo "<div class='twss-6310-row c-1588100157'>";
    foreach ($members as $value) {
        if ($value['profile_details_type'] == 1) {
          $cls = " twss_6310_team_member_info";
          $attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
        } else if ($value['profile_details_type'] == 2) {
          $cls = " twss_6310_team_member_info";
          $attr = " link-id='0' team-id='{$value['id']}'";
        }
        ?>
        <div class="twss-6310-col-<?php echo $cssData['item_per_row'] ?> ">
          <div class="<?php echo "twss_6310_team_style_{$ids}" ?> twss_6310_image_hover_effect" member-id="<?php echo $value['id'] ?>">
              <div class="twss_6310_team_style_<?php echo $ids ?>_img">
                <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
              </div>
              <figcaption>
                <div class="twss_6310_team_style_<?php echo $ids ?>_caption">
                    <?php
                    foreach ($template_order as $td) {
                      if ($td == 'twss_fun_template_name') {
                          twss_fun_template_name($value['name'], $styleId, $ids);
                      } else if ($td == 'twss_fun_template_designation') {
                          twss_fun_template_designation($value['designation'], $cssData, $styleId, $ids);
                      } else if ($td == 'twss_fun_template_profile_details') {
                          twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                      } else if ($td == 'twss_fun_template_contact') {
                          twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
                      } else if ($td == 'twss_fun_template_social') {
                          twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids);
                      } else if ($td == 'twss_fun_template_skills') {
                          twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
                      }
                    }
                    if ($value['profile_details_type'] > 0) {
                      twss_fun_template_read_more($cssData, $ids, $cls, $attr);
                    }

                    ?>
                </div>
              </figcaption>
          </div>
        </div>
    <?php 
    }
    echo "</div>";
    //All Member End

    //Categorized Members
    if($filterList){
      foreach($filterList as $filterKey => $filterValue){
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
         <div class="twss-6310-col-<?php echo $cssData['item_per_row'] ?> ">
            <div class="<?php echo "twss_6310_team_style_{$ids}" ?> twss_6310_image_hover_effect" member-id="<?php echo $value['id'] ?>">
               <div class="twss_6310_team_style_<?php echo $ids ?>_img">
                  <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
               </div>
               <figcaption>
                  <div class="twss_6310_team_style_<?php echo $ids ?>_caption">
                     <?php
                     foreach ($template_order as $td) {
                        if ($td == 'twss_fun_template_name') {
                           twss_fun_template_name($value['name'], $styleId, $ids);
                        } else if ($td == 'twss_fun_template_designation') {
                           twss_fun_template_designation($value['designation'], $cssData, $styleId, $ids);
                        } else if ($td == 'twss_fun_template_profile_details') {
                           twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
                        } else if ($td == 'twss_fun_template_contact') {
                           twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
                        } else if ($td == 'twss_fun_template_social') {
                           twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids);
                        } else if ($td == 'twss_fun_template_skills') {
                           twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
                        }
                     }
                     if ($value['profile_details_type'] > 0) {
                        twss_fun_template_read_more($cssData, $ids, $cls, $attr);
                     }
   
                        ?>
                     </div>
                  </figcaption>
               </div>
            </div>
         <?php 
            }
            echo "</div>";
         }
      }
   }  
  echo "</div>";
} else {
  echo "<div class='twss-6310-carousel'>
  <div id='twss-6310-slider-{$ids}' class='twss-6310-owl-carousel'>";
 
  if ($members) {
  foreach ($members as $value) {
     if ($value['profile_details_type'] == 1) {
        $link_type = " class='twss_6310_team_style_{$ids} twss_6310_team_member_info' link-id='{$value['id']}' link-url='".twss_6310_validate_profile_url($value['profile_url'])."' target='{$value['open_new_tab']}' team-id='0'";
     } else if ($value['profile_details_type'] == 2) {
        $link_type = " class='twss_6310_team_style_{$ids} twss_6310_team_member_info' link-id='0' team-id='{$value['id']}'";
     } else {
        $link_type = " class='twss_6310_team_style_{$ids}' link-id='0' team-id='0'";
     }
     if ($value['profile_details_type'] == 1) {
         $cls = " twss_6310_team_member_info";
         $attr = " link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
      } else if ($value['profile_details_type'] == 2) {
         $cls = " twss_6310_team_member_info";
         $attr = " link-id='0' team-id='{$value['id']}'";
      }
  ?>
  <div class="twss-6310-item">
  <div class="<?php echo "twss_6310_team_style_{$ids}" ?> twss_6310_image_hover_effect" member-id="<?php echo $value['id'] ?>">
     <div class="twss_6310_team_style_<?php echo $ids; ?>_img">
        <img src="<?php echo $value['image'] ?>" alt="<?php echo twss_6310_replace($value['name']); ?>" image_hover="<?php echo $value['image_hover'] ?>" class="img_<?php echo $value['id'] ?>">
     </div>
     <figcaption>
        <div class="twss_6310_team_style_<?php echo $ids; ?>_caption">
           <?php
           foreach ($template_order as $td) {
              if ($td == 'twss_fun_template_name') {
                 twss_fun_template_name($value['name'], $styleId, $ids);
              } else if ($td == 'twss_fun_template_designation') {
                 twss_fun_template_designation($value['designation'], $cssData, $styleId, $ids);
              } else if ($td == 'twss_fun_template_profile_details') {
                 twss_fun_template_profile_details($value, $cssData, $styleId, $ids);
              } else if ($td == 'twss_fun_template_contact') {
                 twss_fun_template_contact($value['contacts'], $cssData, $styleId, $ids);
              } else if ($td == 'twss_fun_template_social') {
                 twss_fun_template_social($value, $cssData, $icon_table, $styleId, $ids);
              } else if ($td == 'twss_fun_template_skills') {
                 twss_fun_template_skills($value['skills'], $ids, $cssData, $value['id']);
              }
           }
           if ($value['profile_details_type'] > 0) {
              twss_fun_template_read_more($cssData, $ids, $cls, $attr);
           }

           ?>
        </div>
     </figcaption>
  </div>
  </div>
  <?php
  }
  }
  
  echo "</div>
  </div>";
}
?>
