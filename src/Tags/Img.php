<?php

namespace SyxPHP\Html\Tags;

class Img extends Tag
{
  
  protected function validate(){
    if($this->content === null){
      throw new \Exception('URL é obrigatório');
    }
  }
  
  protected function create(){
    $content = $this->content;
    return "<img src=\"{$content}\" />";
  }
  
}