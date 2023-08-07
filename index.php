<?php
require_once __DIR__ . '/services/api.php';

$api = new API();

if (isset($_GET["spaces"])) {
    $slots = array(
        'A' => intval($_GET["slotA"]),
        'B' => intval($_GET["slotB"]),
        'C' => intval($_GET["slotC"]),
        'D' => intval($_GET["slotD"])
    );

    $states = array(
        'A' => intval($_GET["stateA"]),
        'B' => intval($_GET["stateB"]),
        'C' => intval($_GET["stateC"]),
        'D' => intval($_GET["stateD"])
    );
    foreach ($slots as $slot => $slotValue) {
        $stateValue = $states[$slot];
        $api->updateSlot($slotValue, $stateValue);
    }
} else {
    header("Location: dashboard.php");
}
