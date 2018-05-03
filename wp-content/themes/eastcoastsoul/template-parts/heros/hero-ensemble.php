<header class="container-fluid jumbotron transparent text-center" style="height:100vh; background-image:url('<?php the_field("sub_page_hero_image");?>');">
  <div class="content">
    <div class="title">
      <p>The</p>
      <h1><?php the_title(); ?></h1>
      <p>Ensemble</p>
    </div>
    <?php if( get_field('sub_page_hero_tagline') ): ?>
      <h2 class="d-none d-lg-block lead col-sm-12 col-md-8 col-lg-8 margin-1-auto">
        <?php the_field('sub_page_hero_tagline');?>
      </h2>
    <?php endif; ?>
    <div class="d-flex justify-content-center">
      <button type="button" class="margin-1-auto btn btn-primary-outline btn-lg" data-toggle="modal" data-target="#bookingModal">
        Book This Band &raquo;
      </button>
    </div>
  </div>
  <div class="overlay"></div>

  <!-- MODAL -->
  <div class="modal fade bs-example-modal-lg" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="myModalLabel">Book The <?php the_title();?> Ensemble</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <iframe height="960" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://seanodavies.wufoo.com/embed/w11h0lyz1gi4sog/"><a href="https://seanodavies.wufoo.com/forms/w11h0lyz1gi4sog/">Fill out my Wufoo form!</a></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</header>
