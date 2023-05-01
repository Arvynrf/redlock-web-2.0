<?php
#declare enviroment yang sama dengan yang ada di docker-compose
$host = 'database';
$user = 'user';
$pass = 'change_me';
$mydatabase = 'redlock_database';

#menyambungkan mysql dengan eviroment 
$conn = new mysqli($host, $user, $pass, $mydatabase);
#pilih dari table users
$sql = 'SELECT * FROM users';

#jika isi tabel masih maka masukan data ke users[]
if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}
#print semua jika user tersebut nyata
foreach ($users as $user) {
    echo "<br>";
    echo $user->ID . " " . $user->Nama . " " . $user->Alamat . " " . $user->Jabatan;
    echo "<br>";
}

?>


