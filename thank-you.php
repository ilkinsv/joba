<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо за вашу заявку!");
?>

<div class="container" style="padding-top: 42px; padding-bottom: 72px; text-align: center;">
    <h1>Спасибо!</h1>
    <h2>Мы получили ваше сообщение и скоро свяжемся с вами.</h2>
    <p>В качестве благодарности, предлагаем вам наш полезный подарок: [ссылка на подарок].</p>
    <a href="/" style="margin-top: 24px; display: inline-block;">Вернуться на главную</a>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
