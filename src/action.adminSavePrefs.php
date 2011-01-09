<?php

if (!isset($gCms)) exit;

// Verification de la permission
if (! $this->CheckPermission('Set Open Statistics Community Prefs')) {
  return $this->DisplayErrorPage($id, $params, $returnid,$this->Lang('accessdenied'));
}


$this->SetPreference('apikey',$params['key']);

// write to the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('prefsupdated') );

// redirect back to default admin page
$this->Redirect($id, 'defaultadmin', $returnid, array('tab_message'=> 'prefsupdated', 'active_tab' => 'configuration'));
?>