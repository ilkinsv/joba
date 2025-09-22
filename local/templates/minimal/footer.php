</main>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div style="font-weight:700">1C<span style="color:var(--yellow)">Dev</span></div>
        <div style="margin-left:auto;display:flex;gap:18px;align-items:center">
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "bottom_menu",
              Array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "1",
                  "MENU_CACHE_GET_VARS" => array(""),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "A",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "bottom",
                  "USE_EXT" => "N"
              )
          );?>
        </div>
        <div style="margin-left:18px;opacity:0.8">© <span id="year"></span> 1C Dev</div>
      </div>
    </div>
  </footer>

  <?php
  use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
  ?>
</body>
</html>
