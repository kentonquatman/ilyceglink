<?php
  include 'shared/variables.php';
  $pageTitle = 'Contact | Ilyce Glink';
  $bodyId = 'contact';
  include 'shared/head.php';
  include 'shared/header.php';
?>

<section class="main" role="main">
  <div class="inner">
    <header>
      <h1>Contact Ilyce</h1>
    </header>
    <aside class="contact-info">
      <p>For business or PR related queries, please contact using the form or this page, or with the information listed below.</p>
      <p><strong>Email</strong> business@ilyceglink.com</p>
      <address>
        361 PArk Ave, Suite 200<br>
        Glencoe, IL 60022
      </address>
      <p>For questions about personal finance, please visit the <a href="ask.php">Ask Ilyce</a> page.</p>
    </aside>
    <form class="contact-form">
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
</section>

<?php
  include 'shared/footer.php';
  include 'shared/foot.php';
?>