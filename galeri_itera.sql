SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE akun (
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO akun (username, password) VALUES
('Novita', 'ITERA');


CREATE TABLE Produk (
Produk_Id varchar (100) NOT NULL,
   -> Produk_Nama varchar (100) NOT NULL,
   -> Jumlah_Stok varchar (100) NOT NULL,
   -> Supplies_id varchar (255) NOT NULL,
   -> Persediaan varchar (200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO Produk VALUES
 ('P114', 'Milo 100', '100 pcs', 'S001', 'Available'),
 ('P115', 'Hilo 100', '50 pcs', 'S003', 'Available'),
 ('P115', 'Aqua 250', '300 pcs', 'S001', 'Available'),
 ('P311', 'Grand 350', '400 pcs', 'S004', 'Available'),
 ('P441', 'Ades 300', '450 pcs', 'S002', 'Available');
COMMIT;
