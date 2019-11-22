<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Magento 2 </h2>
        <h3 class="section-subheading text-muted">List of cammands.</h3>
      </div>
    </div>

    <?php foreach ($data as $d) {?>
      <div class="row  commadlist">

        <div class="col-lg-10 col-10 col-xl-10 col-sm-10 copyCode"><?php echo $d->command; ?> </div>
        <a href="#" class="col-lg-2 col-xl-2 col-2 col-sm-2 copyButton">copy</a>

      </div>
    <?php }?>

  </div>
</section>