<?php
  include 'shared/variables.php';
  $pageTitle = 'Page | Ilyce Glink';
  $bodyId = 'page';
  include 'shared/head.php';
  include 'shared/header.php';
?>


<div class="hero">
  <img src="assets/img/photos/placeholder-04.jpg" alt="Photo">
</div>

<section class="main" role="main">
  <div class="inner">
    <div class="main__content">
      <article>
        <header>
          <h1>Page Template</h1>
        </header>
        <p>Infromation about this particular service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et magna nec nunc mollis iaculis. Sed hendrerit tincidunt molestie. Sed a posuere erat. Donec vitae nibh ut magna euismod pellentesque ullamcorper eu ligula. Etiam nec placerat leo. Cras vel leo eget tortor egestas placerat nec vitae mi.</p>
        <p>Aliquam egestas nibh ante, vitae consequat arcu sodales suscipit. Duis feugiat, augue lacinia hendrerit facilisis, turpis diam convallis arcu, sit amet congue urna ex et mi. Aliquam vel lorem ac dolor bibendum scelerisque. Nulla non libero a mauris aliquam condimentum.</p>
        <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
        <h3>H3 Headline</h3>
        <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
        <ol>
          <li>Ordered List</li>
          <li>List item</li>
          <li>List item</li>
          <li>List item</li>
          <li>List item</li>
        </ol>
        <p>Vestibulum eu augue aliquam, consequat sapien vel, fringilla neque. Mauris id vehicula mi. Proin tempor quam id malesuada scelerisque. Praesent tellus purus, tincidunt ut sem sit amet, accumsan hendrerit ante. Integer dapibus arcu at eros ultrices, vel blandit libero pharetra. Proin molestie eros enim, in efficitur diam semper vitae.</p>
      </article>
    </div>
    <div class="sidebar">
      <aside class="twitter-block">
        <a href="#" class="twitter-block__link">
          <div class="twitter-block__text">
            <svg viewBox="0 0 30 30" class="icon twitter-icon">
              <use xlink:href="#twitter-icon"></use>
            </svg>
            <span class="twitter-block__tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum non eros eget semper.</span>
            <span class="twitter-block__time">2 Hours Ago</span>
          </div>
          <span class="twitter-block__follow">
            <strong>Follow @Glink on Twitter</strong>
          </span>
        </a>
      </aside>
      <aside>
        <h3>Find Out More</h3>
        <ol>
          <li><a href="ask.php">Ask Ilyce</a></li>
          <li><a href="page.php">Press Kit</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ol>
        <select>
          <option>Ask Ilyce</option>
          <option>Press Kit</option>
          <option>Contact</option>
        </select>
      </aside>
    </div>
  </div>  
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>