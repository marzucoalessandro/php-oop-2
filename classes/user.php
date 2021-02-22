 <?php
class user{
  public $user_name;
  public $user_lastName;
  public $user_id;
  public $user_password;
  public $user_age_of_birth;

  public function __construct(string $user_name, string $user_lastName, string $user_id, string $user_password, string $user_age_of_birth){

    $this->user_name = $user_name;
    $this->user_lastName = $user_lastName;
    $this->user_id = $user_id;
    $this->user_password = $user_password;
    $this->user_age_of_birth = $user_age_of_birth;
  }
}


 ?>
