<?php
    class CStudent
    {
        public $id,$name;
        private $gender,$phone;
        function __construct($id,$name,$gender,$phone)
        {
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
            $this->phone = $phone;
        }
        public function showAll()
        {
            echo $this->id.",".$this->name.",".$this->gender.",".$this->phone;
            echo "<br>";
        }
        public function getGender()
        {
            return $this->gender;
        }
    }
    $obj1 = new CStudent(666,"张三","男","13612345678");
    $obj1->showAll();
    $objMyself = new CStudent(117,"黄科","男","17778608029");
    $objMyself->showAll();
    echo $objMyself->name."<br>";
    echo $objMyself->getGender()."<br>";
    $objMyself->id = 20310220117;
    $objMyself->showAll();
?>