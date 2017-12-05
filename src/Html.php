<?php
namespace SyxPHP\Html;

class Html{
  
  public static function builder($method, $params){

    $tag = (new Builder)
       ->params($params)
       ->call($method);
    
    return $tag;
  }
  //executado quando método está inacessível, quando nao existe.
  //Sempre vai executar o __call mesmo sem chamar
  public function __call($method, $params){
    return $this->builder($method, $params);
  }
  
  
  public static function __callStatic($method, $params){
    return self::builder($method, $params);
  }
  
  
  
 /* modelo sem interface 
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
          $data[] = $k. '="'.$v.'"';
        }
        $attribute = implode(' ', $data);
      }
    } */
}
//echo PHP_EOL;