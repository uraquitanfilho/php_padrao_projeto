<?php
namespace SyxPHP\Html;

class Html{
 
    public function a($text, $href, array $attribute = null){
      $attribute = $this->attribute($attribute);      
      return "<a href=\"{$href}\" {$attribute}>{$text}</a>";
    }
  
    public function img($src, array $attribute=null){
      $attribute = $this->attribute($attribute);      
      return "<img src=\"{$src}\" {$attribute} />";
    }
  
    private function attribute($attribute){
      if($attribute !== null){
        foreach($attribute as $k=>$v){
          $data[] = $k '="'.$v.'"';
        }
        $attribute = implode(' ', $data);
      }
    }
}
//echo PHP_EOL;