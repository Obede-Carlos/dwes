<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Credenciales:</h1>
    <form name="miformu" action="/autoriza.php" method="GET">
        <p>
            <label for="nombre">Introduce Nombre:</label>
            <input type="text" name="usuario" id="nombreusu">
        </p>
        <p>
            <label for="constraseña">Introduce Contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>
        <p>
            <p>Elige el o los lenguajes que estudias:</p>
            <label for="lenguaje1">PHP</label>
            <input type="checkbox" name="lenguajes[]" id="lenguaje1" value="PHP">
            <label for="lenguaje2">JavaScript</label>
            <input type="checkbox" name="lenguajes[]" id="lenguaje2" value="JavaScript">
            <label for="lenguaje3">Python</label>
            <input type="checkbox" name="lenguajes[]" id="lenguaje3" value="Python">
            <label for="lenguaje4">SQL</label>
            <input type="checkbox" name="lenguajes[]" id="lenguaje4" value="SQL">
        </p>
        <p>Elige tu equipo de baloncesto preferido: </p>
        <p>
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademon" >
            <label for="equipo2">San Pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Obradoiro</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro">
        </p>
        <p>Elige tu plato favorito: </p>
        <p>
            <select name="menus" id="menus" >
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>
        <p>Elige tu plato favorito: (Select multiple)</p>
        <p>
            <select name="menum[]" id="menus" multiple=2>
                <option value="codillo">Codillo Asado</option>
                <option value="ensalada">Ensalada Cesar</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <input type="hidden" name="ip" value="<?=$_SERVER['SERVER_ADDR']?>">

        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>