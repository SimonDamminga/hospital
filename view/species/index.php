<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hospital</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body> -->
  <h1>Dierenkliniek</h1>
  <ul>
    <li><a href="<?= URL ?>patient/index">Patiënten</a></li>
    <li><a href="<?= URL ?>client/index">Klanten</a></li>
    <li><a href="<?= URL ?>species/index">Soorten</a></li>
  </ul>

  <h2>Soorten</h2>
  <table>
    <thead>
      <tr>
        <th>Naam</th>
        <th colspan="2">Actie</th>
      </tr>
    </thead>
    <?php foreach ($species as $species) { ?>
    </tbody>
      <tr>
        <td><?= $species["species_Description"] ?></td>
        <td class="center"><a href="<?= URL ?>species/edit/<?= $species['species_ID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td class="center"><a href="<?= URL ?>species/delete/<?= $species['species_ID'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
    <p><a href="<?= URL ?>species/create">Soort toevoegen</a></p>
    <p><a href="index.html">Home</a></p>
<!--   </body>
</html> -->