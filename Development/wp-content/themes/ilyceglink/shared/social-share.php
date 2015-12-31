<ol class="post-top__share share-links">
  <li>
    <span class="share-links__heading">Share</span>
  </li>
  <li class="facebook">
    <a onclick="window.open(this.href,'_blank','height=520,width=570');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
      <svg viewBox="0 0 30 30" class="icon facebook-icon">
        <use xlink:href="#facebook-icon"></use>
      </svg>
    </a>
  </li>
  <li class="twitter">
    <a onclick="window.open(this.href,'_blank','height=520,width=570');return false;" href="https://twitter.com/home?status=<?php the_permalink(); ?>">
      <svg viewBox="0 0 30 30" class="icon twitter-icon">
        <use xlink:href="#twitter-icon"></use>
      </svg>
    </a>
  </li>
  <li class="googleplus">
    <a onclick="window.open(this.href,'_blank','height=520,width=570');return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
      <svg viewBox="0 0 30 30" class="icon googleplus-icon">
        <use xlink:href="#googleplus-icon"></use>
      </svg>
    </a>
  </li>
  <li class="email">
    <a href="mailto:?&body=<?php the_permalink(); ?>">
      <svg viewBox="0 0 30 30" class="icon email-icon">
        <use xlink:href="#email-icon"></use>
      </svg>
    </a>
  </li>
</ol>