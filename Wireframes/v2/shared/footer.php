<footer class="site-footer">
  <div class="inner">
    <aside id="mailing-list" class="mailinglist-module">
      <h5>Get the Newsletter</h5>
      <form>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <input type="submit" value="Subscribe">
      </form>
    </aside>
    <div class="site-footer__links">
      <h2><a href="index.php">Ilyce Glink</a></h2>
      <nav class="footer-navigation">
        <?php include 'shared/navigation.php';?>
        <ol class="legal-links">
          <li><a href="page.php">Terms &amp; Conditions</a></li>
          <li><a href="page.php">Privacy Policy</a></li>
        </ol>
      </nav>
      <?php include 'shared/social-links.php';?>
    </div>
    <small class="copyright">&copy; <?php echo date('Y'); ?> Ilyce GLink</small>
  </div>
</footer>