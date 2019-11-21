<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Magento 2 </h2>
        <h3 class="section-subheading text-muted">List of cammands.</h3>
      </div>
    </div>
    
      <?php foreach ($data as $d) { ?>
        <div class="row text-center commadlist">
        <p>
          <pre>
            <?php echo $d->command; ?>
          </pre>
          <a href="javasscript:void(0);" class="copyButton">copy</a>
        </p>
        </div>
      <?php } ?>
   
  </div>
</section>