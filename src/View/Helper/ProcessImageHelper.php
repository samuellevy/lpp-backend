<?php
namespace App\View\Helper;

use Cake\View\Helper;

class ProcessImageHelper extends Helper {
  public function getImages($html_string, $get_attrs = FALSE){
    $post_images = array();
    
    // Get all images
    preg_match_all('/<img (.+) \/>/', $html_string, $image_matches, PREG_SET_ORDER);
    
    // Loop the images and add the raw img html tag to $post_images
    foreach ($image_matches as $image_match)
    {
        // var_dump ($image_match[0]);
        if (!isset($post_image)) 
            $post_image = new \stdClass();
        
        $post_image->html = $image_match[0];
        
        // If attributes have been requested get them and add them to the $post_image
        if ($get_attrs == TRUE)
        {
            preg_match_all('/\s+?(.+)="([^"]*)"/U', $image_match[0], $image_attr_matches, PREG_SET_ORDER);
            
            foreach ($image_attr_matches as $image_attr)
            {
                $post_image->attr->{$image_attr[1]} = $image_attr[2];
            }
        }
        
        $post_images[] = $post_image;
    }
    
    return $post_images;
  }
}
?>