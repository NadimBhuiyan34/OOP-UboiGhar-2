<?php
namespace myapp\flower;
class insertoperation{
  public function insert()
  {

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

  }



}

?>