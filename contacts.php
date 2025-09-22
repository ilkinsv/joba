<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="container" style="padding-top: 42px; padding-bottom: 72px;">
    <h1>Не знаете, с чего начать? Опишите ситуацию — мы подскажем, что делать.</h1>
    <h2>Работаем удалённо — 90% задач решаем без выезда. Остальное обсуждается.</h2>

    <div class="contacts-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; margin-top: 48px;">
        <div>
            <h3>Офис</h3>
            <h4>Адрес: город Иваново, улица Красной Армии, 18/9</h4>
            <p>Как добраться: 4 этаж, кабинет 411</p>
            <p>Режим работы офиса: По записи</p>

            <h5 style="margin-top: 24px;">Фото офиса</h5>
            <div style="background: #f0f0f0; border-radius: 8px; height: 200px; display:flex; align-items:center; justify-content:center; color: #999;">Место для фото</div>

            <h3 style="margin-top: 36px;">Контакты для связи в рабочее время</h3>
            <h4>Телефон: <a href="tel:+123456789">+1 (234) 567-89</a></h4>
            <h4>Telegram: <a href="https://t.me/pcremote_example" target="_blank">@pcremote_example</a></h4>
            <h4>Email: <a href="mailto:hello@pcremote.example">hello@pcremote.example</a></h4>
        </div>
        <div>
            <h6>Оставьте телефон — мы перезвоним и разберём вашу ситуацию бесплатно</h6>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.feedback",
                "contacts_page_form",
                Array(
                    "EMAIL_TO" => "hello@pcremote.example",
                    "EVENT_MESSAGE_ID" => array("7"), // Placeholder
                    "OK_TEXT" => "Спасибо, ваше сообщение принято. Мы скоро свяжемся с вами.",
                    "REQUIRED_FIELDS" => array("NAME", "PHONE"),
                    "USE_CAPTCHA" => "N"
                )
            );?>
        </div>
    </div>

    <div style="margin-top: 48px;">
        <h3>Мы на карте</h3>
        <div style="background: #f0f0f0; border-radius: 8px; height: 400px; display:flex; align-items:center; justify-content:center; color: #999;">Место для виджета Яндекс.Карт</div>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
