<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="services-grid">
<?php foreach($arResult["ITEMS"] as $arItem):?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>" tabindex="0">
		<div class="title"><?php echo $arItem["NAME"]?></div>
		<?php if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<p><?php echo $arItem["PREVIEW_TEXT"];?></p>
		<?php endif;?>
	</article>
<?php endforeach;?>
</div>
