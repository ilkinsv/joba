<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<?php if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="contact-form" style="display:flex;flex-direction:column;gap:10px">
<?=bitrix_sessid_post()?>
	<input
		type="text"
		name="user_name"
		value="<?=$arResult["AUTHOR_NAME"]?>"
		placeholder="Your name"
		style="padding:12px;border-radius:8px;border:1px solid rgba(0,0,0,0.08)">

	<input
		type="text"
		name="user_email"
		value="<?=$arResult["AUTHOR_EMAIL"]?>"
		placeholder="Email"
		style="padding:12px;border-radius:8px;border:1px solid rgba(0,0,0,0.08)">

	<textarea
		name="MESSAGE"
		rows="4"
		placeholder="Project details"
		style="padding:12px;border-radius:8px;border:1px solid rgba(0,0,0,0.08)"><?=$arResult["MESSAGE"]?></textarea>

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div style="display:flex;gap:10px">
        <button type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="cta-primary">Send</button>
        <button type="reset" style="padding:10px 14px;border-radius:8px;border:1px solid rgba(0,0,0,0.08);background:transparent;cursor:pointer">Clear</button>
    </div>
</form>
