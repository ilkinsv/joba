<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="cases-track" id="cases-track">
<?php foreach($arResult["ITEMS"] as $arItem):?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<article class="case" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<h3><?php echo $arItem["NAME"]?></h3>
		<?php if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<p><?php echo $arItem["PREVIEW_TEXT"];?></p>
		<?php endif;?>
	</article>
<?php endforeach;?>
</div>

<div class="cases-controls">
  <button onclick="scrollCases(-1)" aria-label="Предыдущие кейсы">←</button>
  <button onclick="scrollCases(1)" aria-label="Следующие кейсы">→</button>
  <div style="margin-left:auto;color:rgba(0,0,0,0.6)">Want to see full cases? <a href="#contacts">Contact us</a></div>
</div>
