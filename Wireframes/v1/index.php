<?php
  include 'shared/variables.php';
  $pageTitle = 'Ilyce Glink';
  $bodyId = 'home';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="hero" style="background-image:url(http://placehold.it/1080x720.jpg)">
  <aside>
    <h4>About Me</h4>
    <p>Some infromation about Ilyce. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus. Suspendisse at magna eget augue luctus faucibus ac lobortis lectus.</p>
    <a href="page.php" class="button">See More</a>
  </aside>
</section>

<section class="media">
  <div class="inner">
    <h2>Ilyce in the Media</h2>
    <ol>
      <li>
        <a href="media.php">
          <img src="http://placehold.it/180x180.jpg">
          <h3>On the Air</h3>
        </a>
      </li>
      <li>
        <a href="media.php">
          <img src="http://placehold.it/180x180.jpg">
          <h3>Latest Videos</h3>
        </a>
      </li>
      <li>
        <a href="media.php">
          <img src="http://placehold.it/180x180.jpg">
          <h3>Syndicated Column</h3>
        </a>
      </li>
    </ol>
  </div>
</section>

<section class="bottom">
  <div class="inner">
    <aside class="ask-module">
      <h3>Have a Question?</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus mauris ac sem viverra, id vehicula dui suscipit.</p>
      <a href="ask.php" class="button">Ask Ilyce</a>
    </aside>
    <article class="book">
      <figure class="book__cover">
        <img src="http://placehold.it/300x450.jpg">
      </figure>
      <h3>Book Title</h3>
      <p>A New York Times Bestseller!</p>
      <p>The one book you must read before you buy a home.</p>
      <a href="#" class="button">Order on Amazon</a>
    </article>
  </div>
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>