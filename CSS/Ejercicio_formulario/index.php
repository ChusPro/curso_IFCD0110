<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Background</title>
    <link href="css/index.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <header>
        <nav>
            <a href="index.html"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="contacto.html">Contacto</a>
            <a href="oferta.html">Oferta</a>
        </nav>
    </header>
    <div class="background">
        <!--
        Background igual que el de index     
        -->
    </div>
<!--Empieza el formulario-->
        <!-- Estamos usando lista desordenada para los campos de formulario.
        Es también habitual hacerlo con los elementos de los menús de navegación
        -->
             <!-- 
                H1 y H2 aquí van dentro de la etqueta UL para que no se solape con los campos,
                ya que este UL está en posición absoluta
             -->
            <h2>Envíanos tus datos</h2>
            <h1>Cubre el formulario</h1>
    <!--Si está declarado ...-->
    <?php if (isset($_POST['nombre'])){?>
    <button onclick="javascript:history.back();">Volver</button>
        <!--HTML-->
        <ul>
            <li>Nombre: <?php echo $_POST['nombre'];?></li><br>
            <li>Edad: <?php echo $_POST['edad'];?></li><br>
            <li>Email: <?php echo $_POST['email'];?></li><br>
            <li>Teléfono: <?php echo $_POST['tel'];?></li><br>
            <li>Curso: <?php echo $_POST['curso'];?></li><br>
            <li>Ganas: <?php echo $_POST['cuantoganas'];?></li><br>
            <li>Gastas: <?php echo $_POST['cuantogastas'];?><br>
                <ul>
                    <li>Te queda: <?php echo $_POST['cuantoganas'] - $_POST['cuantogastas'];?></li><br>
                </ul>
            </li>
        </ul>
    <?php } else {?>
        <!--HTML mostramos el formulario action "index.php"-->
        <form target="_self" name="form" id="form" action="index.php" method="post"> 
            <ul>
                <li>
                    <!-- Campo obligatorio tipo texto-->
                    <label for="nombre"><span class="required">*</span> Tu nombre</label><br>
                    <input type="text" name="nombre" id="nombre" required>
                </li>
                <li>
                    <!-- Campo tipo numérico-->
                    <label for="edad">Tu edad</label><br>
                    <input type="number" name="edad">
                </li>
                <li>
                    <!-- Campo obligatorio tipo Email-->
                    <label for="email"><span class="required">*</span> Email</label><br>
                    <input type="email" name="email" id="email"  required>
                </li>
                <li>
                    <!-- Campo tipo Tel (teléfono)-->
                    Teléfono <br>(formato xxx yyy zzz):<br>
                <input type="tel" name="tel">
                </li>
                <li>
                    <!-- Campo tipo select, que crea un menú desplegable con las ociones
                    -->
                    ¿Qué curso quieres?
                    <!--<label for="curso">Elige uno</label>-->
                    <select name="curso" id="curso">
                        <!-- Este sería el valor seleccionado por defecto -->
                        <option value="" selected>Elige uno...</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JS">JAVASCRIPT</option>
                    </select>
                </li>
                <li>
                    <label for="cuantoganas"><span class="required">*</span> ¿Cuanto ganas?</label><br>
                    <input type="number" name="cuantoganas" id="cuantoganas" required></li>
                </li>
                <li>
                    <label for="cuantogastas"><span class="required">*</span> ¿Cuanto gastas?</label><br>
                    <input type="number" name="cuantogastas" id="cuantogastas" required>
                </li>
                 <!-- Botón de enviar.
                        Es un input pero no envía valores, 
                        aunque tiene un value que es el texto que se ve en el botón,  
                        y por defecto (si no se pone) es "submit".
                    -->
                <input type="submit" name="Enviar" value="Enviar">
            </ul>         
        </form>
    <?php }?>
</body>
</html>