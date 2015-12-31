<?php
  include 'shared/variables.php';
  $pageTitle = 'Books | Ilyce Glink';
  $bodyId = 'books';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="main no-hero" role="main">
  <div class="inner">
    <div class="main__content books-feed">
      <article>
        <figure class="book-cover">
          <img src="http://placehold.it/300x450.jpg" alt="Cover" />
        </figure>
        <div class="book-summary">
          <h2>Book Title</h2>
          <p>Infromation about this particular service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et magna nec nunc mollis iaculis. Sed hendrerit tincidunt molestie. Sed a posuere erat. Donec vitae nibh ut magna euismod pellentesque ullamcorper eu ligula. Etiam nec placerat leo. Cras vel leo eget tortor egestas placerat nec vitae mi.</p>
        </div>
        <a href="#" class="button">Order</a>
      </article>
      <article>
        <figure class="book-cover">
          <img src="http://placehold.it/300x450.jpg" alt="Cover" />
        </figure>
        <div class="book-summary">
          <h2>Book Title</h2>
          <p>Infromation about this particular service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et magna nec nunc mollis iaculis. Sed hendrerit tincidunt molestie. Sed a posuere erat. Donec vitae nibh ut magna euismod pellentesque ullamcorper eu ligula. Etiam nec placerat leo. Cras vel leo eget tortor egestas placerat nec vitae mi.</p>
        </div>
        <a href="#" class="button">Order</a>
      </article>
      <article>
        <figure class="book-cover">
          <img src="http://placehold.it/300x450.jpg" alt="Cover" />
        </figure>
        <div class="book-summary">
          <h2>Book Title</h2>
          <p>Infromation about this particular service. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et magna nec nunc mollis iaculis. Sed hendrerit tincidunt molestie. Sed a posuere erat. Donec vitae nibh ut magna euismod pellentesque ullamcorper eu ligula. Etiam nec placerat leo. Cras vel leo eget tortor egestas placerat nec vitae mi.</p>
        </div>
        <a href="#" class="button">Order</a>
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
          <li><a href="http://thinkglinkstore.com/">Store</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="page.php">Press Kit</a></li>
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