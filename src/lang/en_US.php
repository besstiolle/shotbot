<?php
$lang['friendlyname'] = 'ShotBot API';
$lang['postinstall'] = 'Module version %s installed';
$lang['postuninstall'] = 'Module Uninstalled.';
$lang['really_uninstall'] = 'Really? You\'re sure you want to uninstall this module?';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed';
$lang['upgraded'] = 'Module version %s updated';

$lang['title_config'] = 'Client Configuration';
$lang['text_config'] = 'Type below your shotbot\'s api key. If you don\'t have one, you have to create an account directly on the website : <a href="http://www.shotbot.fr/creer-un-compte-webmaster.php">http://www.shotbot.fr/creer-un-compte-webmaster.php</a>';
$lang['submit_config'] = 'Save My Key';


$lang['title_test'] = 'Test Your Key';
$lang['text_test'] = 'You can test your key below indicating the URL of a website.';
$lang['submit_test'] = 'Test My Key !';


$lang['reload'] = 'Reload this picture';
$lang['back'] = 'Go back home';
$lang['keynotfound'] = 'Key not found!';
$lang['prefsupdated'] = 'Key updated';


$lang['moddescription'] = 'This module is an implementation for <a href="http://www.shotbot.fr">shotbot</a>\'s API, also nammed "Ascreen generator"';
$lang['changelog'] = '<ul>
	<li>V1.0.0 : stable release</li>
</ul>
';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module let you generate thumbnails from a website within another module</p>
<h3>How to use...</h3>
<p>Install. it\'s already good :)</p>

<p>Exemple of code</p>
<code>
	$modops = cmsms()->GetModuleOperations();
	$shotbotApi = $modops->get_module_instance("Shotbot");
	
	$url = "http://www.cmsmadesimple.fr";
	
	//Make a new capture
	shotbotApi->newUrlCapture($url);
  
	//Give me the picture url in width of ... (default = 120); 
  	shotbotApi->getUrlCapture($url);
  	shotbotApi->getUrlCapture($url,80);		//(80x60)
  	shotbotApi->getUrlCapture($url,92);		//(92x69)
  	shotbotApi->getUrlCapture($url,120);	//(120x90)
  	shotbotApi->getUrlCapture($url,160);	//(160x120)
  	shotbotApi->getUrlCapture($url,240);	//(240x180)
  	shotbotApi->getUrlCapture($url,320);	//(320x240)
  	shotbotApi->getUrlCapture($url,1024);	//(1024x768)
	
  
	//Refresh the picture
  	shotbotApi->updateUrlCapture($url);
  
	//What is my actual quota ?
	shotbotApi->getUrlStatus();
</code>

<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report, please visit the Module Forge
<a href="http://dev.cmsmadesimple.org/projects/osc">OSC Page</a>.</li>
<li>Want to see the source code on GitHub ? please visit the 
<a href="http://github.com/besstiolle/Open-Statistics-Community">GitHub page</a>.</li>
<li>and for which statistics are they?
<a href="http://www.cmsmadesimple.fr/statistiques">look for yourself</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://www.cmsmadesimple.fr/forum/viewtopic.php?pid=17090#p17090">French CMS Made Simple Forums </a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &amp;copy; 2009, Kevin Danezis aka &quot;Bess&quot; <a href="mailto:besstiolle@gmail.com"><besstiolle@gmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['alert_not_send'] = 'The last attempt to send statistics to the server has a failure. You should take a look and see what it is.';
?>