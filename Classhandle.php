<?php
class Classhandle {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function addData($IdProduk, $NamaProduk, $JumlahStok, $supplies, $persediaan) {
        $connection = $this->data->getConnection();

        $IdProduk = $connection->real_escape_string($IdProduk);
        $NamaProduk = $connection->real_escape_string($NamaProduk);
        $JumlahStok = $connection->real_escape_string($JumlahStok);
        $supplies = $connection->real_escape_string($supplies);
        $persediaan = $connection->real_escape_string($persediaan);

        $existingData = $connection->query("SELECT * FROM produk WHERE IdProduk = '$IdProduk'");
        
        if ($existingData->num_rows == 0) {
            $query = "INSERT INTO produk (IdProduk,  NamaProduk, JumlahStok, supplies, persediaan) VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssiss", $IdProduk, $NamaProduk, $JumlahStok, $supplies, $persediaan);
            
            if ($stmt->execute()) {
                // Query executed successfully
            } else {
                // Handle error
            }

            $stmt->close();
        }
    }

    public function getData() {
        $connection = $this->data->getConnection();
        $result = $connection->query("SELECT * FROM produk");

        $info = array();
        while ($row = $result->fetch_assoc()) {
            $info[] = $row;
        }
        return $info;
    }

    public function removeData($IdProduk) {
        $connection = $this->data->getConnection();
        $IdProduk = $connection->real_escape_string($IdProduk);

        $query = "DELETE FROM produk WHERE IdProduk = ?";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $IdProduk);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function registerUser($username, $hashedPassword) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);

        $query = "INSERT INTO akun (username, password) VALUES (?, ?)";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $username, $hashedPassword);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function validateUser($username, $password) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);
        $password = $connection->real_escape_string($password);

        $query = "SELECT * FROM akun WHERE username = '$username'";
        $result = $connection->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return password_verify($password, $row['password']);
        } else {
            return false;
        }
    }
}
?>