<?php 
class User{
  public $name;
  public $email;
  function set_name($name){
    $this->name=$name;
  }
  function set_email($email){
    $this->email=$email;
  }
  function name() {
    $arg= func_get_args();
    $no_arguments= func_num_args();
    if($no_arguments==1){
        $this->set_name($arg[0]);
        return $this->name;
    }else{
        return $this->name;
    }  
  }
  function email(){
    $arg= func_get_args();
    $no_arguments= func_num_args();
    if($no_arguments==1){
        $this->set_email($arg[0]);
        return $this->email;
    }else{
        return $this->email;
    }
  }
  function __destruct() {
    echo "Name:{$this->name}.<br>";
    echo "E-mail:{$this->email}.<br>";
  }
}
?>