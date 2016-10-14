



<div id="schedule" class="ui stackable grid">
  <section class="twelve wide column centered">
    <h2 class="ui horizontal divider header">Schedule</h2>
    <div class="ui stackable">
      <?php $app->render('Partials/time-table.php'); ?>
    </div>
  </section>
</div>


<?php $app->render('Partials/accepted-papers.php'); ?>

<?php $app->render('Partials/accepted-posters.php'); ?>

<?php $app->render('Partials/accepted-demos.php'); ?>

