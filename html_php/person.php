<?php

 class person {
    private $id;
    private $fristname;
    private $lastname;
    private $age;
    private $password;
    private $email;
    
   function __construct(){}
   public function construct($id , $fristname , $lastname , $age , $password , $email) {
        $this->id = $id;
        $this->fristname= $fristname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->password = $password;
        $this->email = $email;
    }
     
     
    public function set($name , $value){
        switch($name){
            case 'id' :
                $this->id = $value;
                break;
            case 'fristname' :
                $this->fristname = $value;
                break;    
            case 'lastname' :
                $this->lastname = $value;
                break;
            case 'age' :
                $this->age = $value;
                break;
            case 'email' :
                $this->email = $value;
                break;
        }
        
    }
    public function get($name){
         switch($name){
             case 'id' :
                return $this->id;
                 
             case 'fristname' :
               return $this->fristname;
                 
             case 'lastname':
               return $this->lastname;
                 
             case 'age':
               return $this->age;
                 
             case 'email':
               return $this->email;
        }
    }    

}
