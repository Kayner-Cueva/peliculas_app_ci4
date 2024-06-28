<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte Auditorias</title>
</head>

<body>
  <style>
    thead th {
      background: #7FFFD4;
    }

    h1 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid;
    }
  </style>
  <h1>REPORTE AUDITORIAS </h1><BR></BR>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>Accion</th>
        <th>Tabla</th>
        <th>Fecha</th>
        <th>Ip</th>
        <th>Host</th>
        <th>Sentencia</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $contador = 0;
      foreach ($auditorias as $auditoria) {
        $contador++;
      ?>
        <tr>
          <td><?= $contador ?></td>
          <td><?= $auditoria['nombre_completo'] ?></td>
          <td><?= $auditoria['accion'] ?></td>
          <td><?= $auditoria['tabla'] ?></td>
          <td><?= $auditoria['fecha'] ?></td>
          <td><?= $auditoria['ip'] ?></td>
          <td><?= $auditoria['host'] ?></td>
          <td><?= $auditoria['sentencia'] ?></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>