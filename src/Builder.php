<?php
namespace SyxPHP\Html;

class Builder
{
  
  private $params;
  
  public function params($params){
  //  $this->params[] = ($params[0]) ?? null; //php 7
      $this->params[] = ($params[0]) ? $params[0] : null; //php 7
    unset($params[0]);
    $this->params[] = new Attributes($params);
    return $this;
  }
  
  public function call($method){
    $class = 'SyxPHP\Html\Tags\\'.ucfirst($method);
    
   /* if(!$this->attributes->count()){
      throw new \Exception('Parâmetros estão vazios!');
    }*/
    return call_user_func_array([new $class, 'get'], $this->params);
  }
}
  
 