# 121140203_Novita-Rahmadhani_UAS-PemWeb

Nama : Novita Rahmadhani
NIM : 121140203
Kelas : RB

Bagian 1: Client-side Programming
![1](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/357c4991-d1fa-47dd-a426-a70bd6669585)

![2](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/121cfcf6-1a3c-4abc-8489-05ed129ab67d)

1. Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.

Jawab :

![3](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/b1b3de5b-9c7c-4350-9e6d-a82c3fd61e1f)

Pada kode ini merupakan bagian dari pemrograman di sisi server (server-side programming) yang terkait dengan Bagian 1.1: Form Input dan Menampilkan Data. Dalam konteks ini, formulir web yang dibuat memiliki elemen-elemen input seperti id produk, nama produk, jumlah stok,id supplies dan persediaan (radio button). Pengguna dapat memasukkan data melalui formulir tersebut. Kemudian, data yang dimasukkan melalui formulir akan ditangani oleh objek yang disebut $classhandle. Objek ini bertugas menangani proses penambahan atau penghapusan data dari database. Dengan kata lain, objek $classhandle berfungsi sebagai perantara antara formulir web dan database, memproses data yang dikirimkan oleh pengguna melalui formulir. Setelah data dimasukkan ke dalam database, informasi tersebut kemudian dapat ditampilkan di halaman web. Ini menunjukkan bahwa aplikasi web ini memiliki fitur untuk menampilkan data yang disimpan dalam database kepada pengguna. Dengan demikian, proses formulir input tidak hanya mencakup penyimpanan data ke dalam database, tetapi juga kemampuan untuk mengambil dan menampilkan data dari database ke halaman web.

2. Buatlah beberapa event untuk menghandle interaksi pada halaman web

Jawab :

a. form submission handling
![4](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/04e3982e-6fb0-422f-a3ff-ac0aa84cf467)

proses penanganan yang terjadi ketika pengguna mengisi formulir dan menekan tombol submit yang memiliki nama 'submit'. Pada saat peristiwa ini terjadi, metode bernama `addData` dari objek `$classhandle` dipanggil. langkah-langkahnya setelah pengguna mengisi formulir dan menekan tombol submit, event ini memicu pemanggilan metode `addData` pada objek `$classhandle`. Metode ini kemudian melakukan proses penambahan data ke dalam database sesuai dengan informasi yang telah dimasukkan oleh pengguna melalui formulir.

b. form deletion handling

![5](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/40088ccb-4c8d-4d88-b0e5-7fad6e56561f)

proses penanganan yang terjadi ketika pengguna mengisi formulir dan menekan tombol submit yang memiliki nama 'hapus'. Pada saat peristiwa ini terjadi, sebuah event di sisi server akan memicu pemanggilan metode removeData dari objek $classhandle.Dengan kata lain, langkah-langkahnya adalah saat pengguna mengklik tombol submit pada formulir dengan nama 'hapus', event ini memicu pemanggilan metode removeData pada objek $classhandle. Metode ini kemudian bertanggung jawab untuk menghapus data yang terkait dengan formulir tersebut dari database.
  
Bagian 2: Server-side Programming 

1. Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Jawab :
![6](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/965a08bf-9acc-48bb-b8a3-1d6668f5a3d9)

Dalam bagian ini, proses pemrosesan data dari formulir dilaksanakan di sisi server menggunakan PHP. Setelah pengguna mengisi formulir dan menekan tombol submit, data dikirim ke server untuk diolah dengan menggunakan objek Classhandle. Objek ini berperan sebagai perantara antara formulir web dan database. Pada tahap pemrosesan, dua metode khusus, yaitu `addData` dan `removeData`, digunakan dalam objek Classhandle. Metode `addData` bertujuan menambahkan data baru ke dalam database, sementara `removeData` digunakan untuk menghapus data yang telah ada. Hasil dari proses ini, seperti pesan keberhasilan atau pesan kesalahan, disimpan dalam variabel $info. Data dari variabel ini dapat ditampilkan kembali kepada pengguna di halaman web, memberikan informasi yang relevan terkait dengan aksi yang telah dilakukan pada formulir. Dengan pendekatan ini, formulir web memungkinkan interaksi yang dinamis antara pengguna dan aplikasi, dengan pengelolaan data yang efektif di sisi server.

2. Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Jawab :

![7](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/07d852e7-ea28-4cee-99a6-88df7bccfa3d)

Dalam bagian ini, terdapat definisi kelas Classhandle yang mencakup metode addData dan removeData. Kedua metode ini dirancang untuk menambahkan dan menghapus data dari database secara berurutan. Dalam implementasinya, metode addData bertanggung jawab untuk memproses penambahan data ke dalam database, sementara metode removeData ditujukan untuk menghapus data yang telah ada. Kode yang disediakan mencerminkan pendekatan berbasis objek dalam pemrosesan data pada sisi server menggunakan PHP. Pendekatan ini memanfaatkan konsep pemrograman berorientasi objek, yang memungkinkan kelolaan yang lebih baik dan pengelolaan fungsi-fungsi terkait data dalam satu entitas kelas, yaitu Classhandle. Dengan adanya kelas dan metodenya, pengelolaan data menjadi lebih terstruktur dan modular, memfasilitasi pemeliharaan dan pengembangan aplikasi web secara efisien.

Bagian 3: Database Management (Bobot: 20%)

1. Buatlah sebuah tabel pada database MySQL

jawab :
![9](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/55a30ac9-cf81-45c7-a220-311c398ed591)
![8](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/998d07b7-34b6-44db-84c2-be39d025e42b)

3. Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.

Jawab :
![10](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/c12c5859-7ed8-4de7-988b-cf5d4f63454a)

Dalam konteks pengembangan server-side programming, terdapat sebuah metode yang signifikan bernama getData(). Metode ini terkait dengan Bagian 3: Database Management, khususnya Bagian 3.3 yang fokus pada pengambilan data dari tabel database. Pada metode getData(), terdapat penggunaan query SQL yang dirancang untuk mengambil seluruh data dari tabel identitas di dalam database. Hasil dari query ini kemudian diproses dan diorganisir dalam bentuk array. Melalui mekanisme ini, metode getData() berfungsi sebagai perantara antara aplikasi dan database, bertanggung jawab untuk mengambil data yang diperlukan dan menyediakannya kembali dalam bentuk array untuk digunakan oleh bagian-bagian lain dari aplikasi. Keseluruhan kode ini mencerminkan tahapan penting dalam manajemen database, menekankan pada proses pengambilan data yang dapat membentuk dasar informasi untuk berbagai fungsi aplikasi.


Bagian 4: State Management

1.Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Jawab :

![11](https://github.com/203Novita/121140203_Novita-Rahmadhani_UAS-PemWeb/assets/116406235/0599dc8c-5af8-4718-9aea-e606747adf3d)

Dalam potongan kode tersebut, manajemen sesi dalam PHP diimplementasikan untuk mengelola proses login dan logout pengguna. Fungsi `session_start()` digunakan untuk memulai atau melanjutkan sesi, yang penting dalam menyimpan informasi pengguna secara konsisten di seluruh aplikasi. Ketika pengguna berhasil login melalui `$classhandle->validateUser`, informasi pengguna seperti nama pengguna disimpan dalam variabel sesi `$_SESSION['user']`. Ini memungkinkan identifikasi pengguna selama sesi berlangsung tanpa perlu mengandalkan data yang dikirim kembali dari pengguna. Selain itu, potongan kode ini mengimplementasikan langkah-langkah logout. Ketika parameter 'logout' terdeteksi dalam query string melalui `isset($_GET['logout'])`, sesi pengguna diakhiri menggunakan `session_destroy()`. Hal ini membersihkan data sesi dan mengembalikan pengguna ke status logout. Dengan demikian, pendekatan ini memastikan keamanan dan konsistensi informasi pengguna selama interaksi dengan aplikasi web. Manajemen sesi seperti ini sangat berguna dalam menjaga status login dan menyediakan pengalaman pengguna yang aman dan terkontrol.
