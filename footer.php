<!--Footer-->
    <div class="container">
      <div class="row">
        <div class="col-md-12 footer">
          <div class="col-md-3">
            <h4>About</h4>
            <ul class="footer-nav">
              <li><a href="#">About Me</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Press Releases</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Customer Service</h4>
            <ul class="footer-nav">
              <li><a href="#">How It Works</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Delivery</a></li>
              <li><a href="#">Returns & Refund Policy</a></li>
              <li><a href="#">Gift Certificates</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Email Newsletter</h4>
            <p class="footer-text">Sign up to get the latest promos and giveaways!</p>
            <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName1" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName1" placeholder="name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
          </div>
          <div class="col-md-3 social">
            <h4>Follow me!</h4>
            <ul class="footer-nav">
              <li><a href="#" target="_blank">FaceBook</a></li>
              <li><a href="#" target="_blank">Twitter</a></li>
              <li><a href="#" target="_blank">Pinterest</a></li>
              <li><a href="#" target="_blank">Instagram</a></li>
              <li><a href="#" target="_blank">YouTube</a></li>
              <li><a href="#" target="_blank">Google+</a></li>
            </ul>
          </div>
        </div>
      </div> <!--End Row-->
      <div class="row footer">
        <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name');?> LLC. All Rights Reserved.</p>
      </div>
      </div> <!--End Footer Container-->
    </div> <!--End Content container-->

    <?php wp_footer(); ?>

    </body>
</html>