<?php
class Database {
    private $host = "mysql-33eb4912-sau-banphot.e.aivencloud.com:28995";
    private $db_name = "smart_farm_db";
    private $username = "avnadmin";
    private $password = "AVNS_Jq1dxommdVX4hWsu7-t";
    private $conn;
 
    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>