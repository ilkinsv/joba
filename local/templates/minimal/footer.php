</main>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div style="font-weight:700">PC<span style="color:var(--yellow)">Remote</span></div>
        <div class="footer-nav" style="margin-left:auto;display:flex;gap:18px;align-items:center">
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
        <div style="margin-left:18px;opacity:0.8">© <span id="year"></span> PCRemote</div>
      </div>
      <div class="footer-buttons" style="margin-top:24px; padding-top:24px; border-top: 1px solid rgba(255,255,255,0.1); display:flex; gap:12px; justify-content:flex-end;">
        <a href="mailto:hello@pcremote.example" class="cta-secondary">Написать на почту</a>
        <a href="https://t.me/pcremote_example" target="_blank" class="cta-secondary">Написать в телеграм</a>
        <button class="cta-primary" onclick="document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})">Оставить заявку</button>
      </div>
    </div>
  </footer>

  <?php
  use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
  ?>
</body>
</html>
