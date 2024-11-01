<?php
if (!defined('ABSPATH'))
   exit;

if (!current_user_can('edit_others_pages')) {
   wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="twss-6310">
   <h1>How to use</h1>
   <iframe width="95%" height="500" src="https://www.youtube.com/embed/C_YtOl2uPRQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
