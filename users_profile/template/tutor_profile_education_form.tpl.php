<div class="ml128 mr128">
     <div class="mt64 mb64"></div>

     <div  id="tutor-education" class="fullwidth mb64 form-full">
         <div class="fullwidth mb16">
          <?php print drupal_render($form['field_tutor_institute']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_country']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_course']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_degree_level']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_field_of_study']); ?>
        </div>
        <div class="fullwidth mb32">
              <?php print drupal_render($form['field_city']); ?>
        </div>
      <div class="fullwidth">
             <?php print drupal_render($form['submit']); ?>
      </div>

    </div>

 <?php
    $block = module_invoke('views', 'block_view', 'tutor_work_experience-education');
    print render($block['content']);
  ?>
      <div class="fullwidth mt16">
        <span id="show-edu-form" class="CTAGhost-b6 CTAGhost-Large">add education</span>
      </div>
<?php print drupal_render_children($form) ?>
</div>
