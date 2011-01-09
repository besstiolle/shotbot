<?php


if (!isset($gCms)) exit;


// Verification de la permission
if (! $this->CheckPermission('Set Open Statistics Community Prefs')) {
  return $this->DisplayErrorPage($id, $params, $returnid,$this->Lang('accessdenied'));
}

$tab = '';
if (FALSE == empty($params['active_tab'])) $tab = $params['active_tab'];

$key = $this->getKey();
$config =& $gCms->GetConfig();
$url = $config['root_url'];
if(strpos($url, 'localhost') !== FALSE)
{
	$url = 'http://www.cmsmadesimple.fr';
}


// Formulaire de renseignement de la cle
$smarty->assign('formKeyStart' , $this->CreateFormStart($id, 'adminSavePrefs', $returnid));
$smarty->assign('formKeyInputText' ,$this->CreateInputText($id, 'key', $key, '', 15));
$smarty->assign('submitKey' , $this->CreateInputSubmit($id, 'submitKey', $this->Lang('submit_config')));
$smarty->assign('formKeyEnd' , $this->CreateFormEnd());

// Formulaire de test de la cle
$smarty->assign('formUrlStart' , $this->CreateFormStart($id, 'adminTestKey', $returnid));
$smarty->assign('formUrlInputText' ,$this->CreateInputText($id, 'url', $url, 30, 150));
$smarty->assign('formUrlInputHidden' ,$this->CreateInputHidden($id, 'create', '1'));
$smarty->assign('submitUrl' , $this->CreateInputSubmit($id, 'submitUrl', $this->Lang('submit_test')));
$smarty->assign('formUrlEnd' , $this->CreateFormEnd());

// pass a reference to the module, so smarty has access to module methods
$smarty->assign_by_ref('mod',$this);
$smarty->assign('key' , $key);

echo $this->ProcessTemplate('admindefault.tpl');
?>