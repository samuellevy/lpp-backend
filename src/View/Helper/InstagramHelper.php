<?php
namespace App\View\Helper;

use Cake\View\Helper;

class InstagramHelper extends Helper {
  public function getLastPic(){
    $token = '268576432.04494fa.634108095f1a486081b85d1d78bce41b';
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
    $token = '268576432.04494fa.634108095f1a486081b85d1d78bce41b';
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
