<!DOCTYPE html>
<html>
<head>
    <title>Lista de Autos</title>
</head>
<body>
    <h1>Lista de Autos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Kilometraje</th>
                <th>Precio</th>
                <th>Nombre Vendedor</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            {foreach $autos as $auto}
            <tr>
                <td>{$auto.id_auto}</td>
                <td>{$auto.marca}</td>
                <td>{$auto.modelo}</td>
                <td>{$auto.color}</td>
                <td>{$auto.kilometraje}</td>
                <td>{$auto.precio}</td>
                <td>{$auto.nombre_vendedor}</td>
                <td>{$auto.telefono}</td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</body>
</html>
