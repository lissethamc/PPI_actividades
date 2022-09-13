 <?php
    $servername= "localhost";
    $username= "username";
    $password= "password";
    $database= "database";
    try{
        $conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password); //se hace una instancia de la PDO para hacer una conexión con la BD
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }

?>

 //llama a una pag, se ejecuta y se olvida de todo, la conexion se establece en cada archivo de php, en una vista se pierde la memoria de la conexion porque no tiene consciencia del estado el lenguaje, no todos los lenguajes tienen cosnciencia del estado

