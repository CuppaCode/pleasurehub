<?php

  $sections = $args['sections'];
  $section_amount = count($args['sections']);

?>

<div class="container pb-4 px-0">
    
    <?php if ( $section_amount == 3 ) : ?>

      <a href="<?php echo $sections[0]['link']['url'] ?>" title="<?php echo $sections[0]['link']['title'] ?>">
        <img loading="lazy" src="<?php echo $sections[0]['image'] ?>" alt="" class="img-fluid border rounded w-100 mb-4">
      </a>

    <?php endif ?>
      
    

    <div class="row align-items-md-stretch">

      <?php foreach( $sections as $key => $section ) : ?>

        <?php if ( $key >= 1 && $section_amount == 3 || $section_amount < 3 ) : ?>

          <div class="col-md-6">

            <a href="<?php echo $section['link']['url'] ?>" title="<?php echo $section['link']['title'] ?>">
              <img loading="lazy" src="<?php echo $section['image'] ?>" alt="" class="img-fluid border rounded w-100 mb-4">
            </a>

          </div>

        <?php endif ?>

      <?php endforeach; ?>

    </div>

</div>