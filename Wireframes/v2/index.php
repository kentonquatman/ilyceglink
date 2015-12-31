<?php
  include 'shared/variables.php';
  $pageTitle = 'Ilyce Glink';
  $bodyId = 'home';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="home-features">
  <ul class="slides">
    <li style="background-image:url(http://placehold.it/1080x600.jpg)">
      <aside>
        <h4>About Ilyce</h4>
        <p>Some infromation about Ilyce. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus. <a href="page.php">Read More &raquo;</a></p>
        <h4>Get the Newsletter</h4>
        <form class="mailing-list">
          <fieldset>
            <input type="text" name="name" placeholder="Name" />
            <input type="text" name="email" placeholder="Email" />
          </fieldset>
          <input type="submit" value="Sign-up" />
        </form>
      </aside>
    </li>
    <li style="background-image:url(http://placehold.it/1080x600.jpg)">
      <aside>
        <h4>Blog Post Title</h4>
        <p>A description about the blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus.</p>
        <a href="blog-post.php" class="button">Read More</a>
      </aside>
    </li>
    <li style="background-image:url(http://placehold.it/1080x600.jpg)">
      <aside>
        <h4>Another Blog Post Title</h4>
        <p>A short summary of the blog post. Suspendisse at magna eget augue luctus faucibus ac lobortis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut laoreet urna, vel suscipit nibh. Suspendisse efficitur volutpat ante eu ultrices. Vivamus scelerisque interdum tellus sed cursus.</p>
        <a href="blog-post.php" class="button">Read More</a>
      </aside>
    </li>
  </ul>
</section>

<section class="as-seen-on">
  <div class="inner">
    <h5>As Seen On</h5>
    <ul>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
      <li><img src="http://placehold.it/90x60.jpg" alt="Logo" /></li>
    </ul>
  </div>
</section>

<section class="home-middle">
  <div class="inner">
    <div class="home-middle__blog">
      <h5 class="heading">Recently on the Blog</h5>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <header>
          <h2><a href="blog-post.php">Blog Post Title</a></h2>
          <p class="post-details"><time>January 1, 2014</time></p>
        </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
          <p class="more"><a href="blog-post.php">Keep reading &raquo;</a></p>
      </article>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <header>
          <h2><a href="blog-post.php">Blog Post Title</a></h2>
          <p class="post-details"><time>January 1, 2014</time></p>
        </header>
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
          <p class="more"><a href="blog-post.php">Keep reading &raquo;</a></p>
      </article>
      <a class="button" href="blog.php">See All Blog Posts</a>
    </div>
    <div class="home-middle__media">
      <h5 class="heading">Recently in the Media</h5>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <header>
          <h2><a href="media-post.php">Media Post Title</a></h2>
          <p class="post-details"><time>January 1, 2014</time> <span>|</span> Syndicated Columns</p>
        </header>
        <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
        <p class="more"><a href="blog-post.php">Keep reading &raquo;</a></p>
      </article>
      <article>
        <figure>
          <img src="http://placehold.it/900x360.jpg" />
        </figure>
        <header>
          <h2><a href="media-post.php">Media Post Title</a></h2>
          <p class="post-details"><time>January 1, 2014</time> <span>|</span> On the Air</p>
        </header>
        <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
        <p class="more"><a href="blog-post.php">Keep reading &raquo;</a></p>
      </article>
      <a class="button" href="media.php">See All Media Posts</a>
    </div>
  </div>
</section>

<section class="home-bottom">
  <div class="inner">
    <article>
      <h3>Work with Ilyce</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id nulla porttitor, sollicitudin tellus et, iaculis velit. Quisque gravida quis purus sed tincidunt. Pellentesque malesuada ante id aliquam condimentum. Vivamus vehicula rutrum lorem quis dictum. Nam erat neque, auctor a egestas a, laoreet id nibh. Mauris hendrerit diam eget tempus porta. Donec id odio ex. Pellentesque ipsum lorem, lacinia quis gravida ut, suscipit id velit. Integer eget eros faucibus, laoreet erat non, luctus neque. Donec mollis ipsum nibh, ut placerat mi ultrices non.</p>
      <a href="contact.php" class="button">Contact Ilyce</a>
    </article>
    <aside>
      <figure>
        <img src="http://placehold.it/300x450.jpg" />
      </figure>
      <h4>Book Title</h4>
      <p>A <em>New York Times</em> Best Seller!</p>
      <p>The one book you must read before you buy a home.</p>
      <a class="button" href="#">Order on Amazon</a>
    </aside>
  </div>
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>