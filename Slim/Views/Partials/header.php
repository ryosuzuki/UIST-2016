
<section id="header">
  <div class="ui two column centered grid" style="margin-top: 0px">
    <div class="column centered row">
      <div class="ui secondary pointing fluid seven item menu">
        <?php $app->render("Partials/menu.php"); ?>
      </div>
      <button id="menu-button" class="ui basic black button">
        <i class="fa fa-bars"></i>
        Menu
      </button>
    </div>
  </div>
</section>

<div class="ui stackable grid">
  <section id="top-img" class="eleven wide column centered">
    <div id="header-normal">
      <img id="top-header-img" src="<?php echo BASE_PATH; ?>/lib/img/top-2.png" alt="" style="width: 100%">
    </div>
    <div id="header-mobile">
      <img id="top-header-img" src="<?php echo BASE_PATH; ?>/lib/img/top-3.png" alt="" style="width: 100%">
    </div>
  </section>
</div>
