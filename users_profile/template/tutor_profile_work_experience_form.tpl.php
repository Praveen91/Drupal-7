<div class="ml128 mr128">
            <div class="mt64 mb64"></div>

    <div  id="tutor-experience" class="fullwidth mb64 form-full">
         <div class="fullwidth mb16">
          <?php print drupal_render($form['field_job_title']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_occupational_field']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_employment_type']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_company_name']); ?>
        </div>
        <div class="fullwidth mb16">
              <?php print drupal_render($form['field_country']); ?>
        </div>
        <div class="fullwidth mb32">
              <?php print drupal_render($form['field_city']); ?>
        </div>
        <div class="fullwidth mb32">
              <?php //print drupal_render($form['field_work_start_time']); ?>
        </div>
        <div class="fullwidth mb32">
              <?php //print drupal_render($form['field_work_end_time']); ?>
        </div>
        <div class="fullwidth mb32">
              <?php// print drupal_render($form['field_work_present_time']); ?>
        </div>
      <div class="fullwidth">
             <?php print drupal_render($form['submit']); ?>
      </div>

    </div>

 <?php
    $block = module_invoke('views', 'block_view', 'tutor_work_experience-block');
    print render($block['content']);
  ?>
      <div class="fullwidth mt16">
        <span id="show-exp-form" class="CTAGhost-b6 CTAGhost-Large">add work experience</span>
      </div>
<?php print drupal_render_children($form) ?>
</div>
