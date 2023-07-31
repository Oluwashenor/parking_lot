<!doctype html>
<html>

<?php

require_once __DIR__ . '/services/api.php';
$api = new API();
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="10">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Parking Lot</title>

  <style>
    body {
      background-color: #333333;
      color: white;
      padding-top: 1vh;

    }

    .pLot {
      border: 1px solid #FFD700;
      border-style: dashed;
      height: 35vh;
      border-top: none;
      border-bottom: none;
    }

    .topLot {
      max-width: 40vw;
      border: 1px solid white;
      border-style: dashed;
      border-top: none;
    }

    .bottomLot {
      max-width: 40vw;
      border: 1px solid white;
      border-style: dashed;
      border-bottom: none;
    }

    .pkImg {
      max-width: 60%;
      opacity: 0.3;
    }

    .parkingStatus {
      width: 30px;
      height: 30px;
      border-radius: 50px;
    }
  </style>
</head>

<body>

  <?php

  $slotA = $api->getSlot(1);
  $slotB = $api->getSlot(2);
  $slotC = $api->getSlot(3);
  $slotD = $api->getSlot(4);
  ?>

  <div class="flex mt-1 mb-10 justify-center items-center">
    <p class="text-2xl ...">Parking Spaces</p>
  </div>

  <div class="box-border mx-auto px-4 topLot">
    <div class="gap-20 columns-2">
      <div class="pLot block items-center">
        <div class="flex-grow-8 flex justify-center items-center">
          <img src="<?php echo $slotA == "true" ? "assets/images/parking-area.png" : "assets/images/no-parking.png" ?>" class="pkImg" alt="">
        </div>
        <div class="flex mt-5 justify-center items-center">
          <strong>Parking Space A</strong>
        </div>

        <div class="flex mt-2 justify-center items-center">
          <strong><?php echo $slotA == "true" ?  "Available" : "Unavailable" ?></strong>
        </div>
        <div class="flex mt-2 justify-center items-center">
          <div class="parkingStatus" style="<?php echo $slotA == "true" ?  " background-color: green;" : " background-color: red;" ?>">
          </div>
        </div>

      </div>
      <div class="pLot block items-center ">
        <div class="flex-grow-8 flex justify-center items-center">
          <img src="<?php echo $slotB == "true" ? "assets/images/parking-area.png" : "assets/images/no-parking.png" ?>" class="pkImg" alt="">
        </div>
        <div class="flex-grow-2 flex mt-5 justify-center items-center">
          <strong>Parking Space B</strong>
        </div>
        <div class="flex mt-2 justify-center items-center">
          <strong><?php echo $slotB == "true" ?  "Available" : "Unavailable" ?></strong>
        </div>
        <div class="flex-grow-2 flex mt-2 justify-center items-center">
          <div class="parkingStatus" style="<?php echo $slotB == "true" ? "background-color: green;" : "background-color: red;" ?>">
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="pLine box-border mx-auto px-4 mt-20 bottomLot">
    <div class="gap-20 columns-2">

      <div class="block items-center pLot">
        <div class="flex-grow-8 pt-4 flex justify-center items-center">
          <img src="<?php echo $slotC == "true" ? "assets/images/parking-area.png" : "assets/images/no-parking.png" ?>" class="pkImg" alt="">
        </div>
        <div class="flex-grow-2 flex mt-5 justify-center items-center">
          <strong>Parking Space C</strong>
        </div>
        <div class="flex mt-2 justify-center items-center">
          <strong><?php echo $slotC == "true" ?  "Available" : "Unavailable" ?></strong>
        </div>
        <div class="flex-grow-2 flex mt-2 justify-center items-center">
          <div class="parkingStatus" style="<?php echo $slotC == "true" ? "background-color: green;" : "background-color: red;" ?>">
          </div>
        </div>
      </div>

      <div class="block items-center pLot">
        <div class="flex-grow-8 pt-5 flex justify-center items-center">
          <img src="<?php echo $slotD == "true" ? "assets/images/parking-area.png" : "assets/images/no-parking.png" ?>" class="pkImg" alt="">
        </div>
        <div class="flex mt-5 justify-center items-center">
          <strong>Parking Space D</strong>
        </div>
        <div class="flex mt-2 justify-center items-center">
          <strong><?php echo $slotD == "true" ?  "Available" : "Unavailable" ?></strong>
        </div>
        <div class="flex mt-2 justify-center items-center">
          <div class="parkingStatus" style="<?php echo $slotD == "true" ? "background-color: green;" : "background-color: red;" ?>">
          </div>
        </div>
      </div>

    </div>
  </div>


</body>

<!--
  <a href="https://www.flaticon.com/free-icons/parking" title="parking icons">Parking icons created by Prosymbols Premium - Flaticon</a> 
<a href="https://www.flaticon.com/free-icons/no-parking" title="no parking icons">No parking icons created by Bartama Graphic - Flaticon</a>
  <a href="https://www.flaticon.com/free-icons/car-parking" title="car parking icons">Car parking icons created by vectorsmarket15 - Flaticon</a>
 -->

</html>