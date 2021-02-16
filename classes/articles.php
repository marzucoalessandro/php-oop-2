<?php
include_once  __DIR__ .  "/user.php";


class article extends user{
  public $title;
  public $text;
  public $date;
  public $image;

  public function __construct(string $title, string $text, string $date, string $user_id){

    $this->title = $title;
    $this->text = $text;
    $this->date = $date;
    $this->user_id = $user_id;
  }
}




// var_dump($item1);


 ?>
