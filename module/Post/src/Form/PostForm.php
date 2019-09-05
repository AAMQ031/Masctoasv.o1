<?php

namespace Post\Form;

use Zend\Form\Form;


class PostForm extends Form
{
	
	function __construct($name = null)
	{
		parent::__construct('post');
		$this->setAttribute('method');

		$this->add([
			'name' => 'id',
			'type' => 'hidden'
		]);

		$this->add([
			'name' => 'nombre',
			'type' => 'text',
			'options' =>[
				'label' => 'Nombre'
			]
		]);

		$this->add([
			'name' => 'raza',
			'type' => 'text',
			'options' =>[
				'label' => 'Raza'
			]
		]);

		$this->add([
			'name' => 'sexo',
			'type' => 'text',
			'options' =>[
				'label' => 'Sexo'
			]
		]);

		$this->add([
			'name' => 'fecha_de_nacimiento',
			'type' => 'date',
			'options' =>[
				'label' => 'Fecha_de_nacimiento'
			]
		]);

		$this->add([
			'name' => 'caracteristicas',
			'type' => 'textarea',
			'options' =>[
				'label' => 'Caracteristicas'
			]
		]);
	}
}


?>