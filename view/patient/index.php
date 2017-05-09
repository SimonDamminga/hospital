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

  <h2>Patiënten</h2>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Soort</th>
        <th>Status</th>
        <th>Geslacht dier</th>
        <th>Klant</th>
        <th colspan="2">Actie</th>
      </tr>
    </thead>
    <?php foreach ($patient as $patient_info) { ?>
    </tbody>
      <tr>
        <td><?= $patient_info["name"] ?></td>
        <td><?= $patient_info["species_Description"]?></td>
        <td><?= $patient_info["status"]?></td>
        <td><?= $patient_info["patient_Gender"] ?></td>
        <td><?= $patient_info["client_Firstname"] . " " . $patient_info["client_Lastname"]?></td>
        <td class="center"><a href="<?= URL ?>patient/edit/<?= $patient_info['id'] ?>">Aanpassen</a></td>
        <td class="center"><a href="<?= URL ?>patient/delete/<?= $patient_info['id'] ?>">Verwijderen</a></td>  
      </tr>
    </tbody>
    <?php } ?>
  </table>
    <p><a href="<?= URL ?>patient/create">Nieuwe patiënt</a></p>
    <p><a href="index.html">Home</a></p>
<!--   </body>
</html> -->