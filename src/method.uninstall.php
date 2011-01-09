<?php


if (!isset($gCms)) exit;

$this->RemovePreference("apikey");

$this->RemovePermission('Set Shotbot Prefs');

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>