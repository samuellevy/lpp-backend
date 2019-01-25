<?php
namespace App\View\Helper;

use Cake\View\Helper;

class FetchHtmlHelper extends Helper {
  public function getAttributes($html=null, $tag=null, $id=null){
       //Load the HTML page
       $html = $component->content;
       //Create a new DOM document
       $dom = new DOMDocument;
       
       //Parse the HTML. The @ is used to suppress any parsing errors
       //that will be thrown if the $html string isn't valid XHTML.
       @$dom->loadHTML($html);
       
       //Get all links. You could also use any other tag name here,
       //like 'img' or 'table', to extract other tags.
       $links = $dom->getElementsByTagName('a');
       
       //Iterate over the extracted links and display their URLs
       foreach ($links as $link){
       //Extract and show the "href" attribute. 
       echo $link->getAttribute('href'), '<br>';
       }
  }
}
?>
