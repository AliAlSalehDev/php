<?php
class User {
    public int $id;
    public string $name;
    public string $email;

    public function __construct(string $name, string $email, int $id = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}
?>