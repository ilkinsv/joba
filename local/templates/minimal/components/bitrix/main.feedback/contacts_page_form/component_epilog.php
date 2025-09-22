<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (isset($arResult["OK_MESSAGE"]) && !empty($arResult["OK_MESSAGE"]))
{
    LocalRedirect("/thank-you.php");
}
?>
