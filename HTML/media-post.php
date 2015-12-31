<?php
  include 'shared/variables.php';
  $pageTitle = 'Media Post | Ilyce Glink';
  $bodyId = 'media';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="hero">
  <figure class="post-image">
    <img src="assets/img/photos/placeholder-05.jpg" alt="photo">
  </figure>
</section>

<section class="main" role="main">
  <div class="inner">
    <div class="main__content media-post">
      <article>
        <header>
          <h1>Media Post Title</h1>
          <p class="post-top__date"><time>January 1, 2014</time> <span class="spacer">|</span> <a href="#">Video</a></p>
          <ol class="post-top__share share-links">
            <li>
              <span class="share-links__heading">Share</span>
            </li>
            <li class="facebook">
              <a href="#">
                <svg viewBox="0 0 30 30" class="icon facebook-icon">
                  <use xlink:href="#facebook-icon"></use>
                </svg>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <svg viewBox="0 0 30 30" class="icon twitter-icon">
                  <use xlink:href="#twitter-icon"></use>
                </svg>
              </a>
            </li>
            <li class="googleplus">
              <a href="#">
                <svg viewBox="0 0 30 30" class="icon googleplus-icon">
                  <use xlink:href="#googleplus-icon"></use>
                </svg>
              </a>
            </li>
            <li class="email">
              <a href="#">
                <svg viewBox="0 0 30 30" class="icon email-icon">
                  <use xlink:href="#email-icon"></use>
                </svg>
              </a>
            </li>
          </ol>
        </header>
        <div class="media-video">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/XQu8TTBmGhA" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="post-body">
          <p>Lorem ipsum dolor sit <strong>bold text</strong> amet, consectetur adipiscing elit. Nam sit amet aliquam quam, eget dictum eros. Suspendisse hendrerit, lacus ut vestibulum commodo, nisi nulla hendrerit eros, et hendrerit urna metus quis elit. Vestibulum congue nunc et urna rhoncus ornare. Sed feugiat porta nibh eget sodales. Suspendisse potenti. Aliquam erat volutpat. Etiam ultricies luctus metus, eget egestas lacus volutpat in.</p>
          <h1>H1 Headline</h1>
          <p>Aliquam egestas nibh ante, vitae consequat arcu sodales suscipit. Duis feugiat, augue lacinia hendrerit facilisis, turpis diam convallis arcu, sit amet congue urna ex et mi. Aliquam vel lorem ac dolor bibendum scelerisque. Nulla non libero a mauris aliquam condimentum.</p>
          <h2>H2 Headline</h2>
          <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
          <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
          <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
          <ol>
            <li>Ordered List</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ol>
          <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
          <ul>
            <li>Un-ordered List</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
          </ul>
          <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
        </div>
        <footer>
          <a class="back" href="media.php">Back to Media</a>
        </footer>
      </article>
    </div>
    <?php include 'shared/blog-sidebar.php'; ?>
  </div>  
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>