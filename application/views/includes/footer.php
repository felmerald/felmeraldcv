
    <!-- Modal -->
  <?php $this->load->view('includes/modals'); ?>
    
  
    <!--end of container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <?php if($this->router->fetch_class()=='frontend_controller'): ?>
      <!--[if IE]>
      <script type="text/javascript">
        var console = { log: function() {} };
      </script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url().'resources/fullpage/js/fullpage.js'; ?>"></script>
      <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            anchors: ['firstPage', 'secondPage', '3rdPage'],
            sectionsColor: ['', '', '#111111'],
            navigation: true,
            navigationPosition: 'right'
        });
    </script>
  <?php endif;?>
  <script src="<?php echo base_url().'resources/js/jqBootstrapValidation.js'; ?>"></script>
  <script src="<?php echo base_url().'resources/js/contact_me.js';?>"></script>
  <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
  <script type="text/javascript">
     (function(){
        emailjs.init("user_9qeIRmjsvFRia5m8bglAT");
     })();
  </script>
    
  </body>
</html>