<?php
require_once "../config/Database.php";
require_once "../models/User.php";

class UserController {
    private PDO $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getUsers(): array {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser(string $name, string $email): void {
        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute(['name' => $name, 'email' => $email]);
    }
}
?>