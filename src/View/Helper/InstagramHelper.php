<?php
namespace App\View\Helper;

use Cake\View\Helper;

class InstagramHelper extends Helper {
  public function getLastPic(){
    $token = '2349678369.144cf0f.217ea087bae247d299e552272c81dc88';
    $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$token;
    $user_info = (file_get_contents($url)); 

    $user_info = json_decode($user_info);

    foreach($user_info->data as $data):
        $return = $data;
        break;
    endforeach;

    return $return;
  }
  public function getPics(){
    $token = '2349678369.144cf0f.217ea087bae247d299e552272c81dc88';
    $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$token;
    $user_info = (file_get_contents($url)); 

    $user_info = json_decode($user_info);

    // foreach($user_info->data as $data):
    //     echo '<img src="'.$data->images->standard_resolution->url.'"/>';
    // endforeach;

    return $user_info->data;
  }
}
?>
