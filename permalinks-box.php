<?php
/*
Plugin Name: Permalinks Box
Plugin URI: http://www.ilwebmaster21.it/wordpress-add-permalinks-box/
Version: 1.1
Description: After the post add a simple box with permalinks
Author: Vittorio Li Mandri
Author URI: http://ilwebmaster21.it/
*/
       
add_action('the_content', 'permalinks_box',1);
function permalinks_box($text) {  
       
 $text = get_the_content() . '<p><div class="old-post"><form><td>Permalink to: ' . get_the_title() . '</td><textarea cols="68" rows="2" readonly="readonly" onclick="select()"/>' . get_permalink( $id ) . '</textarea></form><form><td>Include this: ' . get_the_title() . '</td><textarea cols="68" rows="2" readonly="readonly" onclick="select()"/><a href="'.get_permalink( $id ).'"><"'.get_the_title().'"></a></textarea></form></div></p>' ;

return $text;

}
?>