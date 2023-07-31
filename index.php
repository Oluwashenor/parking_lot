<?php
require_once __DIR__ . '/services/api.php';

$api = new API();

if (isset($_GET["spaces"])) {
    $slot = intval($_GET["slot"]);
    $state = intval($_GET["state"]);
    $api->updateSlot($slot, $state);
} else {
    header("Location: dashboard.php");
}
