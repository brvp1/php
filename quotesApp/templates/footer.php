<!-- END CHANGEABLE CONTENT. -->
<?php
if ((is_administrator() && (basename($_SERVER['PHP_SELF']) != 'logout.php'))
    or (isset($loggedin) && $loggedin)) {
    // Create the links:
    print '<hr><h3>Site Admin</h3><p><a href="add_quote.php">Add Quote</a> <-> <a href="view_quotes.php">View All Quotes</a> <-> <a href="logout.php">Logout</a></p>';
    
}

?>

    </div><!-- container -->
    <div id="footer">Content &copy; <?php print date('Y'); ?></div>
</body>
</html>