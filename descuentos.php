<!DOCTYPE html>
<html>
  <head>
    <title>Bonificación y Descuento</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
      }

      h1 {
        color: #333;
      }

      form {
        width: 60%;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
      }

      label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        padding: 20px;
      }

      input[type="text"],
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 3px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #555;
      }

      table {
        width: 60%;
        margin: 20px auto;
        border-collapse: collapse;
      }

      th,
      td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <h1>Bonificación y Descuento</h1>
    <p>
      Por favor, complete el siguiente formulario para calcular la bonificación
      y descuento.
    </p>

    <form action="#" method="POST">
      <label for="tipo_cliente">Tipo de Cliente:</label>
      <select id="tipo_cliente" name="tipo_cliente">
        <option value="permanente">Permanente</option>
        <option value="periodico">Periódico</option>
        <option value="casual">Casual</option>
        <option value="nuevo">Nuevo</option>
      </select>

      <label for="cantidad_servicios">Cantidad de Servicios Solicitados:</label>
      <input
        type="text"
        id="cantidad_servicios"
        name="cantidad_servicios"
        required
      />

      <input type="submit" value="Calcular Bonificación y Descuento" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ?>
    <table>
      <tr>
        <th>Descripción</th>
        <th>Valor en COP</th>
      </tr>
      <tr>
        <td>Tipo de Cliente:</td>
        <td><?php echo $tipo_cliente; ?></td>
      </tr>
      <tr>
        <td>Cantidad de Servicios Solicitados:</td>
        <td><?php echo $cantidad_servicios; ?></td>
      </tr>
      <tr>
        <td>Precio de un Servicio (COP):</td>
        <td><?php echo $precio_servicio; ?></td>
      </tr>
      <tr>
        <td>Descuento (<?php echo $descuentos[$tipo_cliente]; ?>%):</td>
        <td><?php echo $descuento * $precio_servicio; ?></td>
      </tr>
      <tr>
        <td>Bonificación:</td>
        <td><?php echo $bonificación * $precio_servicio; ?></td>
      </tr>
    </table>
    <?php
    }
    ?>
  </body>
</html>
