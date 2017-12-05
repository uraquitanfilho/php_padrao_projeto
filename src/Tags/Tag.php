<?php
namespace SyxPHP\Html\Tags;
use SyxPHP\Html\Attributes;
abstract class Tag
{
  /**
  *Retorna a tag já criada e validada
  *
  *@param string $content
  *@param Attributes $attributes
  *return string
  */
  
  public function get($content, $attributes = null){
    $this->attributes = $attributes;
    $this->content = $content;
    $this->validate($attributes);
    
    return $this->create();
  }
   
  /**
  *Valida os atributos e conteúdo
  *
  *return void
  */
  abstract protected function validate();
  
  /**
  *cria e retorna a tag pronta
  *
  *return string
  */
  abstract protected function create();
  
  //php 7 suporta tipar as variáveis.
  //abstract protected function create():string;
}
