<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tamara examen servidor</title>


    </head>
    <body>


        <form action="datosFormu" method="post">
            <h2>FORMULARIO</h2>
            <input type="hidden" name="_token" value=" {{ csrf_token () }}"><br />
            {{ csrf_field() }}
            <p>Usuario: <input type="text" name="Usuario" /></p>
            <p><input type="submit" value="enviar" /></p>
        </form>

    </body>
</html>
