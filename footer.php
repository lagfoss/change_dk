</section>

<footer>
  <div class="FooterProject">
    <h2 id="NeedASuccessfulProject">NEED A SUCCESSFUL PROJECT?</h2>
  <a class="CallToActionFooter" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> &#8594;</a>
  </div>

  <div class="letstalkfooter">
    <h4>LETS TALK!</h4>
    <h2 id="phonenumberfooter">+45 25 70 20 19</h2>
  </div>

  <div class="SoMefooter">
    <?php if( get_field('someicons') ): ?>

    <img src="<?php the_field('someicons'); ?>" />

    <?php endif; ?>
  </div>

  <div class="ContactFooter">
    <p id="MailFooter">KONTAKT@CHANGE.DK</p>
    <p>Edisonsvej 2,</p>
    <p>5000 Odense C,</p>
    <p>Denmark</p>
  </div>

</footer>
<div class="container-fluid">
  <div class="row justify-content-center cvr">
    <div class="align-self-center">Change Aps &#9474; CVR: 37197351</div>
  </div>
</div>







</body>
<script type="text/javascript" src="public_html/wp-content/themes/change_dk/js/javascript.js">

</script>
</html>


<?php wp_footer(); ?>
