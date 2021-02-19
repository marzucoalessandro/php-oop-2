<?php
include_once  __DIR__ .  "/user.php";


class article extends user{
  public $title;
  public $text;
  public $date;
  public $image;

  public function __construct(string $user_id, string $title, string $text, string $date){
    // parent::__construct($user_id);
    $this->user_id = $user_id; 
    $this->title = $title;
    $this->text = $text;
    $this->date = $date;

  }
}




// var_dump($item1);


 ?>
