<?php


if (!isset($gCms)) exit;

$this->SetPreference("apikey", "");

// create a permission
$this->CreatePermission('Set Shotbot Prefs','Shotbot : Set Prefs');

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed', $this->GetVersion()));
?>