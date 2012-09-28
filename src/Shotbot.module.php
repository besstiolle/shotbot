<?php
#-------------------------------------------------------------------------
# Module: Shotbot - Module proposant une interface avec l'API du site internet
#           shotbot.fr pour tous les modules de Cms Made Simple.
#
# Version: de Kevin Danezis Aka "Bess"
# Author can be join on the french forum : http://www.cmsmadesimple.fr/forum 
#           or by email : contact [plop] furie [plap] be
#
# The discussion page around the module : N/A
# The author's git page is : http://github.com/besstiolle
# The module's git page is : http://github.com/besstiolle/shotbot
# The module's demo page is : http://www.cmsmadesimple.fr/showroom
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#-------------------------------------------------------------------------
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#-------------------------------------------------------------------------
 
class Shotbot extends CMSModule
{
  function GetName()
  {
    return get_class($this);
  }
  
  function GetFriendlyName()
  {
    return $this->Lang('friendlyname');
  }

  function GetVersion()
  {
    return '1.0.2';
  }
  
  function GetHelp()
  {
    return $this->Lang('help');
  }
  
  function GetAuthor()
  {
    return 'Kevin Danezis (Bess)';
  }

  function GetAuthorEmail()
  {
    return 'contact@furie.be';
  }
  
  function GetChangeLog()
  {
    return $this->Lang('changelog');
  }
  
  function IsPluginModule()
  {
    return false;
  }

  function HasAdmin()
  {
    return true;
  }

  function GetAdminSection()
  {
    return 'extensions';
  }

  function GetAdminDescription()
  {
    return $this->Lang('moddescription');
  }

  function VisibleToAdminUser()
  {
    return true;
  }
  
  function GetDependencies()
  {
    return array();
  }

  function MinimumCMSVersion()
  {
    return "1.11.0"; 
  }
  
  function SetParameters()
  {
	$this->RestrictUnknownParams();
  }
  
  function InstallPostMessage()
  {
    return $this->Lang('postinstall',$this->GetVersion());
  }

  function UninstallPostMessage()
  {
    return $this->Lang('postuninstall');
  }
  
  function UninstallPreMessage()
  {
    return $this->Lang('really_uninstall');
  }

  function newUrlCapture($url)
  {
	$cle = $this->getKey(true);
	$url = "http://add.shotbot.net/k=$cle/$url";
	return $url;
  }
  
  function getUrlCapture($url,$format = "120")
  {
	$md5 = md5($url);
	$md5_1 = substr($md5,0,1);
	$md5_2 = substr($md5,0,2); 
	$url = "http://static.shotbot.net/$md5_1/$md5_2/$md5/$format.jpg";
	return $url;
  }
  
  function updateUrlCapture($url)
  {
	$cle = $this->getKey(true);
	$url = "http://update.shotbot.net/k=$cle/$url";
	return $url;
  }
  
  function getUrlStatus()
  {
	$cle = $this->getKey(true);
	$url = "http://status.shotbot.net/k=$cle";
	return $url;
  }
  
  function getKey($verifKey = false)
  {
	$cle = $this->GetPreference("apikey");
	if($verifKey && $cle == null)
	{
		echo $this->Lang("keynotfound");
		exit;
	}
	return $cle;
  }
  
  function fopen($url)
  {
	$response = "";
	$handler = @fopen ($url, "r");
	if (!$handler) {return "ERR url";}
	while (!feof ($handler)) {$response .= fgets ($handler, 1024);}
	fclose($handler);
	return $response;
  }
}
?>