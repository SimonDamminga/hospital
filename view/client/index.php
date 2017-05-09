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

  <h2>Klanten</h2>
  <table>
    <thead>
      <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Telefoonnummer</th>
        <th>Email</th>
        <th colspan="2">Actie</th>
      </tr>
    </thead>
    <?php foreach ($client as $client) { ?> 
    </tbody>
      <tr>
        <td><?= $client["client_Firstname"] ?></td>
        <td><?= $client["client_Lastname"]?></td>
        <td><?= $client["client_Phone"]?></td>
        <td><?= $client["client_Email"]?></td>
        <td class="center"><a href="<?= URL ?>client/edit/<?= $client['client_ID'] ?>">Aanpassen</a></td>
        <td class="center"><a href="<?= URL ?>client/delete/<?= $client['client_ID'] ?>">Verwijderen</a></td> 
      </tr>
    </tbody>
    <?php } ?>
  </table>
    <p><a href="<?= URL ?>client/create">Klant toevoegen</a></p> 
    <p><a href="index.html">Home</a></p>
<!--   </body>
</html> -->