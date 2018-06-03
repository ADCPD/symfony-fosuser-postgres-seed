<?php


namespace AppBundle\Entity;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author ADCPD
 * 
 * @ORM\Entity 
 * @ORM\Table(name="pixeliser.fos_user")
 */
class User extends BaseUser{
  /**
     * @var int  
     * @ORM\Id
     *  @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     *
     * @ORM\SequenceGenerator(sequenceName="pixeliser.user_id_seq", initialValue=1, allocationSize=999999)
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


}
