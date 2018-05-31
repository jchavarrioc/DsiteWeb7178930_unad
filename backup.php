<?php
// variables

date_default_timezone_set("America/Bogota");
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad18";



//Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup_file = '"C:\AppServ\www\web\backup\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $username -p$password $dbname > $backup_file");

echo "<script>
                alert('backup realizado satisfactoriamente');
                window.location= 'administrador.php'
    		</script>";


?>