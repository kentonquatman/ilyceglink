<?php
  include 'shared/variables.php';
  $pageTitle = 'Ilyce Glink';
  $bodyId = 'home';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="home-features">
  <ul class="slides">
    <li style="background-image:url('assets/img/slides/slide-01.jpg')">
      <aside>
        <div class="aside-text">
          <h2>About Ilyce</h2>
          <p>Some infromation about Ilyce. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus.</p>
        </div>
        <div class="aside-form">
          <h4>Get the Newsletter</h4>
          <form class="mailing-list">
            <fieldset>
              <input type="text" name="name" placeholder="Name" />
              <input type="text" name="email" placeholder="Email" />
            </fieldset>
            <input type="submit" value="Sign-up" />
          </form>
        </div>
      </aside>
    </li>
    <li style="background-image:url('assets/img/slides/slide-02.jpg')">
      <aside>
        <div class="aside-text">
          <h2>Blog Post Title</h2>
          <p>A description about the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus.</p>
        </div>
        <footer>
          <a href="blog-post.php" class="button">Read More</a>
        </footer>
      </aside>
    </li>
    <li style="background-image:url('assets/img/slides/slide-03.jpg')">
      <aside>
        <div class="aside-text">
          <h2>Blog Post Title</h2>
          <p>A short summary of the blog post. Suspendisse at magna eget augue luctus faucibus ac lobortis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus.</p>
        </div>
        <footer>
          <a href="blog-post.php" class="button">Read More</a>
        </footer>
      </aside>
    </li>
  </ul>
</section>

<section class="as-seen-on">
  <div class="inner">
    <h4>As Seen On</h4>
    <ul>
      <li><img src="assets/img/brands/cbs-logo-01.png" alt="Logo" width="70" height="45" /></li>
      <li><img src="assets/img/brands/discover-logo-01.png" alt="Logo" width="95" height="60" /></li>
      <li><img src="assets/img/brands/equifax-logo-01.png" alt="Logo" width="130" height="35" /></li>
      <li><img src="assets/img/brands/washington-post-logo-01.png" alt="Logo" width="150" height="30" /></li>
      <li><img src="assets/img/brands/yahoo-logo-01.png" alt="Logo" width="120" height="35" /></li>
      <li><img src="assets/img/brands/zillow-logo-01.png" alt="Logo" width="125" height="30" /></li>
    </ul>
  </div>
</section>

<section class="home-middle">
  <div class="inner">
    <div class="home-middle__blog">
      <h5 class="heading">Recently on the Blog</h5>
      <article>
        <figure>
          <img src="assets/img/photos/placeholder-01.jpg" alt="photo">
        </figure>
        <div class="post-summary">
          <header>
            <h2><a href="blog-post.php">Blog Post Title</a></h2>
            <p class="post-details"><time>January 1, 2014</time></p>
          </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
        </div>
        <footer><a href="blog-post.php">Read More</a></footer>
      </article>
      <article>
        <figure>
          <img src="assets/img/photos/placeholder-02.jpg" alt="photo">
        </figure>
        <div class="post-summary">
          <header>
            <h2><a href="blog-post.php">Blog Post Title</a></h2>
            <p class="post-details"><time>January 1, 2014</time></p>
          </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
        </div>
        <footer><a href="blog-post.php">Read More</a></footer>
      </article>
      <a class="button" href="blog.php">See All Blog Posts</a>
    </div>
    <div class="home-middle__media">
      <h5 class="heading">Recently in the Media</h5>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <div class="post-summary">
          <header>
            <h2><a href="media-post.php">Media Post Title</a></h2>
            <p class="post-details"><time>January 1, 2014</time> <span class="spacer">|</span> <a href="media.php">Columns</a></p>
          </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla.</p>
        </div>
        <footer><a href="blog-post.php">Read More</a></footer>
      </article>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <div class="post-summary">
          <header>
            <h2><a href="media-post.php">Media Post Title</a></h2>
            <p class="post-details"><time>January 1, 2014</time> <span class="spacer">|</span> <a href="media.php">Video</a></p>
          </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla.</p>
        </div>
        <footer><a href="blog-post.php">Read More</a></footer>
      </article>
      <a class="button" href="media.php">See All Media Posts</a>
    </div>
  </div>
</section>

<section class="home-bottom">
  <div class="inner">
    <article>
      <h3>Work with Ilyce</h3>
      <ul class="work-categories">
        <li>
          <h4>Speaking</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nulla porttitor, sollicitudin tellus et, iaculis velit. Quisque gravida quis purus sed tincidunt. Pellentesque malesuada ante id aliquam condimentum.</p>
          <a href="page.php" class="button">Details</a>
        </li>
        <li>
          <h4>Think Glink Media</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nulla porttitor, sollicitudin tellus et, iaculis velit. Quisque gravida quis purus sed tincidunt. Pellentesque malesuada ante id aliquam condimentum.</p>
          <a href="page.php" class="button">Details</a>
        </li>
        <li>
          <h4>Marketing Strategy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nulla porttitor, sollicitudin tellus et, iaculis velit. Quisque gravida quis purus sed tincidunt. Pellentesque malesuada ante id aliquam condimentum.</p>
          <a href="page.php" class="button">Details</a>
        </li>
      </ul>
    </article>
    <aside>
      <div class="shop-item">
        <figure>
          <img src="http://placehold.it/300x450.jpg" />
        </figure>
        <div class="product-details">
          <h4>Book Title</h4>
          <p>A <em>New York Times</em> Best Seller!</p>
          <p>The one book you must read before you buy a home.</p>
        </div>
        <a class="button" href="#">Order</a>
      </div>
    </aside>
  </div>
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>