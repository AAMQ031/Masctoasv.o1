<?php
 	
namespace Post\Model;



/**
 * 
 */
class Post 
{
	protected $id;
	protected $nombre;
	protected $raza;
	protected $sexo;
	protected $fecha_de_nacimiento;
	protected $caracteristicas;
     

	public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->nombre = !empty($data['nombre']) ? $data['nombre'] : null;
        $this->raza  = !empty($data['raza']) ? $data['raza'] : null;
        $this->sexo  = !empty($data['sexo']) ? $data['sexo'] : null;
        $this->fecha_de_nacimiento  = !empty($data['fecha_de_nacimiento']) ? $data['fecha_de_nacimiento'] : null;
        $this->caracteristicas  = !empty($data['caracteristicas']) ? $data['caracteristicas'] : null;
    }
    public function getId(){
    return $this->id;        
    }
    public function getNombre(){
    return $this->nombre;        
    }
    public function getRaza(){
    return $this->raza;        
    }
    public function getSexo(){
    return $this->sexo;        
    }
    public function getFecha_de_nacimiento(){
    return $this->fecha_de_nacimiento;        
    }
    public function getCaracteristicas(){
    return $this->caracteristicas;        
    }
}

