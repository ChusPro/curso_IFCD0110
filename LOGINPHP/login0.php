<?php
/*    ini_set('display_errors', '1');
     ini_set('display_startup_errors', '1');
     error_reporting(E_ALL);*/
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, FETCH, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    // Recogemos todos los datos enviados por el usuario desde l formulario de cliente
     $data = json_decode(file_get_contents('php://input'), true);
     
     // Valores de conexión a la base de datos
     $server = 'localhost';
     $user = 'ifcd0110';
     $pass = 'clase-ifcd0110';
     $db = 'clase';
     $conn = mysqli_connect($server, $user, $pass, $db);
    if (!$conn){
        echo '<h1>ERROR, no se ha podido conectar con la base de datos</h1>';
        http_response_code(500);
        exit;
    }
    
    if(!isset($data['user']) || !isset($data['password'])){
        echo 'ERROR,faltan parametros';
        http_response_code(400);
        exit;
    }
    //Extraemos de los datos el dato de nombre de usuario enviado por el cliente
    $user = $data["user"];
    // Extraemos el password enviado por el cliente
    $password = $data["password"];
    echo $user . ' - ' . $password;
    exit;
    $result = mysqli_query($conn, 'SELECT * from user WHERE login = "$user" && password = "$password"');//esta es la consulta
    //funcion q devuelve la cant de registros
    if(mysqli_num_rows($result)){
        http_response_code(200);
        exit;
    }
    echo 'ERROR de autenticación';
    http_response_code(401);

    //echo "<h1>ENHORABUENA, te has coectado a la base de datos</h1>";
 exit;