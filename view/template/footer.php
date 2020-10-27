</main>
  
  <footer class="jumbotron-fluid">
    <section class="container">
      <p class="lead">Copyright Bank-Root.com.</p>
      <?php
        echo "Aujourd'hui, nous sommes le " . date("d/m/Y")."<br>". "Il est  " . date("h:i:sa");;
      ?>
    </section>
  </footer>

  <!-- Add your site or application content here -->
  <!-- <p>Hello world! This is HTML5 Boilerplate.</p> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="public/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="public/js/plugins.js"></script>
  <!-- <script src="js/main.js"></script> -->
<?php 
  echo $script;
?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>