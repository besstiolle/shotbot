<fieldset><legend>{$mod->Lang('title_config')}</legend>
{$formKeyStart}

	<p>{$mod->Lang('text_config')}</p>
	<p>{$formKeyInputText}</p>
	<p>{$submitKey}</p>

{$formKeyEnd}
</fieldset>
{if !empty($key)}
<fieldset><legend>{$mod->Lang('title_test')}</legend>
{$formUrlStart}

	<p>{$mod->Lang('text_test')}</p>
	<p>{$formUrlInputText}{$formUrlInputHidden}</p>
	<p>{$submitUrl}</p>

{$formUrlEnd}
</fieldset>
{/if}