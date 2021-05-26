<!--&&&&&&&&&&&&&&&Footer start &&&&&&&&&&&&&&&&&&&&&&&&&-->
<div class="footer-area bg-dark text-white p-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
              <?php  dynamic_sidebar('footer_one');?>
              </div>
              <div class="col-md-4">
              <?php  dynamic_sidebar('footer_two');?>
              </div>
              <div class="col-md-4">
              <?php  dynamic_sidebar('footer_three');?>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright text-left bg-info">
      <div class="container">
          <div class="row ">
              <div class="col-md-12">
                 <?php  dynamic_sidebar('footer_copyright');?>
              </div>
          </div>
      </div>
  </div>


  <?php wp_footer();?>
</body>
</html>
<!-- $$$$$$$$$$$$$$$$$$$$$$ footer end $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->