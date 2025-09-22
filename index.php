<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1C Development Services — Minimal");
?>

<section class="container hero" aria-labelledby="hero-heading">
  <div class="hero-grid">
    <div>
      <?$APPLICATION->IncludeFile(
          SITE_TEMPLATE_PATH . "/includes/hero_text.php",
          Array(),
          Array("MODE"=>"html")
      );?>
    </div>

    <!-- Illustration: minimal SVG placeholder -->
    <div aria-hidden="true">
      <svg width="480" height="320" viewBox="0 0 480 320" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Abstract 1C illustration">
        <rect x="8" y="8" width="464" height="304" rx="14" stroke="#000" stroke-opacity="0.06" fill="#fff"/>
        <g transform="translate(40,40)">
          <rect x="0" y="0" width="160" height="96" rx="8" stroke="#000" stroke-opacity="0.08" fill="#fff"/>
          <rect x="180" y="20" width="220" height="80" rx="8" stroke="#000" stroke-opacity="0.08" fill="#fff"/>
          <circle cx="60" cy="160" r="30" stroke="#000" stroke-opacity="0.08" fill="#fff"/>
          <path d="M0 120 L340 120" stroke="#FFD400" stroke-width="4" stroke-linecap="round" />
        </g>
      </svg>
    </div>
  </div>
</section>

<section id="services" class="container services" aria-labelledby="services-heading">
  <h2 id="services-heading" style="font-size:var(--fs-h2);margin:0 0 18px;font-weight:800">Services</h2>
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"services_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1", // Placeholder, user will need to set this
		"IBLOCK_TYPE" => "services", // Placeholder, user will need to set this
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Услуги",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</section>

<section class="container kpis" aria-label="Наш опыт">
  <?$APPLICATION->IncludeFile(
      SITE_TEMPLATE_PATH . "/includes/kpis.php",
      Array(),
      Array("MODE"=>"html")
  );?>
</section>

<section id="cases" class="container cases" aria-labelledby="cases-heading">
  <h2 id="cases-heading" style="font-size:var(--fs-h2);margin:0 0 18px;font-weight:800">Case studies</h2>

  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"cases_list",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2", // Placeholder, user will need to set this
		"IBLOCK_TYPE" => "cases", // Placeholder, user will need to set this
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Кейсы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</section>

<section class="container" style="padding:36px 0">
  <div class="cta-strip">
    <?$APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . "/includes/cta_strip.php",
        Array(),
        Array("MODE"=>"html")
    );?>
  </div>
</section>

<section id="contacts" class="container" style="padding:36px 0 80px">
  <h2 style="font-size:var(--fs-h2);margin:0 0 18px;font-weight:800">Contacts</h2>
  <div style="display:grid;grid-template-columns:1fr 360px;gap:28px;align-items:start">
    <div>
      <?$APPLICATION->IncludeFile(
          SITE_TEMPLATE_PATH . "/includes/contacts_info.php",
          Array(),
          Array("MODE"=>"html")
      );?>
    </div>

    <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contact_form",
	Array(
		"EMAIL_TO" => "sale@1cdev.example", // Placeholder
		"EVENT_MESSAGE_ID" => array("7"), // Placeholder
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "N"
	)
);?>
  </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
