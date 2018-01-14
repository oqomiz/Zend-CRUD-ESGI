<?php
namespace Crud\Entity;

use Doctrine\ORM\Mapping as ORM;

class Emp 
{

  protected $id;

  protected $title;

  protected $description;

  protected $date_start;

  protected $date_end;
  
  public function getId() 
  {
    return $this->id;
  }


  public function setId($id) 
  {
    $this->id = $id;
  }


  public function getTitle() 
  {
    return $this->title;
  }
  
  public function setTitle($title) 
  {
    $this->title = $title;
  }
  
  public function getDescription() 
  {
    return $this->description;
  }
  
  public function setDescription($description) 
  {
    $this->description = $description;
  }

  public function getDateStart() 
  {
    return $this->date_start;
  }
  
  public function setDateStart($date_start) 
  {
    $this->date_start = $date_start;
  }

  public function getDateEnd() 
  {
    return $this->date_end;
  }
  
  public function setDateEnd($date_end) 
  {
    $this->date_end = $date_end;
  }


}