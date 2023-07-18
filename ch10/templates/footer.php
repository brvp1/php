<!-- END CHANGEABLE CONTENT. --> </div>
</main>

<footer container class="siteFooter">
  <p>Design uses
    <a href="http://concisecss.com/">
      Concise CSS Framework
    </a>
  </p>
  <p class="float-right">
    <?php // print current date and time
        // Set the timezone:
        date_default_timezone_set('America/New_York');

        // Now print the date and time:
        print date('g:i a l F j');
    ?>
</footer>
</body>
</html>
<?php ob_end_flush(); ?>