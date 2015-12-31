<?php
  include 'shared/variables.php';
  $pageTitle = 'Ask Ilyce | Ilyce Glink';
  $bodyId = 'ask';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="main" role="main">
  <div class="inner">
    <div class="main__content">
      <header>
        <h1>Ask Ilyce</h1>
      </header>
      <p>If you have a personal finance question, email us at questions@ilyceglink.com</p>
      <ul>
        <li>As you can imagine, we get hundreds of questions each week. We do open and read every one of them, but we can't answer all of them individually.</li>
        <li>In many instances, we get the same questions; in other cases, the answer is available on our site - please search before you ask.</li>
        <li>We ask that you please ask concise questions when you write to us. If we don't understand your question, we won't be able to answer it.</li>
        <li>Remember, the answer to your question should appear in an article on our site or in our newsletter - check back often.</li>
        <li>Feel free to use the form on this page. When you ask a question, you will be signed up for our free weekly newsletter. While it may take us a while to get to your question, you can read answers to other questions which may also be helpful!</li>
      </ul>
      <form class="ask-form">
        <fieldset>
          <div class="half alpha">
            <h5><label for="name">Name</label> <span class="required">*</span></h5>
            <input type="text" id="name">
          </div>
          <div class="half omega">
            <h5><label for="email">Email</label> <span class="required">*</span></h5>
            <input type="text" id="email">
          </div>
        </fieldset>
        <h5><label for="subject">Subject</label> <span class="required">*</span></h5>
        <input type="text" id="subject">
        <h5><label for="message">Message</label> <span class="required">*</span></h5>
        <textarea id="message"></textarea>
        <input type="submit" value="Send">
      </form>
    </div>
    <div class="sidebar">
      <aside>
        <h3>Subnav</h3>
        <ol>
          <li><a href="page.php">About Ilyce</a></li>
          <li><a href="page.php">Press Kit</a></li>
          <li><a href="page.php">Contact</a></li>
        </ol>
      </aside>
    </div>
  </div>  
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>