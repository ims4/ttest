<?php
namespace Page;

class Page
{
	private $titulo; 

	public function __construct($titulo = []){
		$this->titulo = isset($titulo['titulo'])?$titulo['titulo']:'';
	}

	public function mostrar(){
		return $this->titulo;
	}

}