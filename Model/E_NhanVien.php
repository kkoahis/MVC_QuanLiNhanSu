<?php
class Entity_NhanVien{
   public $id;
   public $name;
   public $idpb;
   public $diachi;

   public function __construct($_id, $_name, $_idpb, $_diachi)
   {
      $this->id = $_id;
      $this->name = $_name;
      $this->idpb = $_idpb;
      $this->diachi = $_diachi;
   }
}
