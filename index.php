<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
</head>
<body>
    <?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    
    ];
    ?>


    <!-- Stampare hotel con i dati disponibili  -->

    <?php
    var_dump($hotels) . '<br>';
    ?>

    <!-- Tabella -->
    <table>
      <thead>
        <tr>
          <th> Name </th>
          <th> Description </th>
          <th> Parking </th>
          <th> Vote </th>
          <th> Distance to center </th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach($hotels as $hotel) {
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'] ? '&check;' : '&cross;';
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center'];

            echo "<tr>
                  <td> $name </td>
                  <td> $description </td>
                  <td> $parking </td>
                  <td> $vote </td>
                  <td> $distance </td>
                  </tr>";
          }
        ?>
      </tbody>  
    </table>
    
</body>
</html>