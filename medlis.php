<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Registro</title>

    <link href="https://jdmr10.github.io/pdw2/css/metro.css" rel="stylesheet">
    <link href="https://jdmr10.github.io/pdw2/css/metro-icons.css" rel="stylesheet">
    <link href="https://jdmr10.github.io/pdw2/css/metro-responsive.css" rel="stylesheet">

    <script src="https://jdmr10.github.io/pdw2/js/jquery-2.1.3.min.js"></script>
    <script src="https://jdmr10.github.io/pdw2/js/metro.js"></script>
 
<body>
<h5>Agenda de citas</h5>
<hr>
<form action="listafecha.php" method="post">
                        <div class="input-control text" data-role="datepicker" data-other-days="true" data-week-start="1" data-locale="es">
                            <input type="text" name="fecha">
                            <button class="button"><span class="mif-calendar"></span></button>
                        </div>
                    </div>
                    <button class="button bg-blue" type="submit">Enviar</button>

                    </form>
</body>
</html>