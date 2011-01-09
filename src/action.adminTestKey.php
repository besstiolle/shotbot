<?php

if (!isset($gCms)) exit;

// Verification de la permission
if (! $this->CheckPermission('Set Open Statistics Community Prefs')) {
  return $this->DisplayErrorPage($id, $params, $returnid,$this->Lang('accessdenied'));
}


if(isset($params['create']))
{
	$url = $this->newUrlCapture($params['url']);
	//echo $params['url'].'*<br />';
	//echo $url.'*<br />';
	$code = $this->fopen($url);
	if($code != "OK")
	{
		echo "Erreur en ouvrant l'url $url : ".$code;
		exit;	
	}
}


$admintheme =& $gCms->variables['admintheme'];

$url = $this->getUrlCapture($params['url'],"320");
$reload = $this->CreateLink($id, 'adminTestKey', $returnid, $admintheme->DisplayImage('icons/topfile/shortcut.gif', $this->Lang('reload'),'','','systemicon'), array("url"=>$params['url']));
$backlink = $this->CreateLink($id, 'defaultadmin', $returnid, $admintheme->DisplayImage('icons/system/back.gif', $this->Lang('back'),'','','systemicon'));

echo "<img src='$url' /><br/>$reload<br/>$backlink";

?>