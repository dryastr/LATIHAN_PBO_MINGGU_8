<?php
class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'pbo_latihan';
    private $conn;

    // Constructor untuk membuat koneksi
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    // Method untuk eksekusi query SELECT
    public function selectData($query) {
        $result = $this->conn->query($query);

        if ($result === false) {
            die("Error dalam eksekusi query: " . $this->conn->error);
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Method untuk eksekusi query INSERT, UPDATE, DELETE
    public function executeQuery($query) {
        $result = $this->conn->query($query);

        if ($result === false) {
            die("Error dalam eksekusi query: " . $this->conn->error);
        }

        return $result;
    }

    // Destructor untuk menutup koneksi ketika objek dihancurkan
    public function __destruct() {
        $this->conn->close();
    }
}

// Contoh penggunaan
$database = new Database();

// Contoh eksekusi query SELECT
$querySelect = "SELECT username, nama FROM users";
$resultSelect = $database->selectData($querySelect);
foreach ($resultSelect as $row) {
    echo "Username: " . $row['username'] . ", Nama: " . $row['nama'] . "<br>";
}

// Contoh eksekusi query INSERT
$queryInsert = "INSERT INTO users (username, nama) VALUES ('John', '5432')";
$resultInsert = $database->executeQuery($queryInsert);
if ($resultInsert === true) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan data: " . $database->conn->error;
}
?>
