<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hospital</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <h1>Hospital</h1>
  <ul>
    <li><a href="patients.html">Patiënts</a></li>
    <li><a href="clients.html">Clients</a></li>
    <li><a href="species.html">Species</a></li>
  </ul>

  <h2>Patiënts</h2>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Species</th>
        <th>Status</th>
        <th>Client</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <?php foreach ($hospital as $key) { ?>
    </tbody>
      <tr>
        <td>Bobbie</td>
        <td>hond</td>
        <td>Koorts, eet slecht, blaft veel te veel</td>
        <td>John Doe</td>
        <td class="center"><a href="#">edit</a></td>
        <td class="center"><a href="#">delete</a></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
    <p><a href="<?= URL ?>hospital/create">Create</a></p>
    <p><a href="index.html">Home</a></p>
  </body>
</html>