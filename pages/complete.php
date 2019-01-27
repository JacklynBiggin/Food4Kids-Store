<div class="complete-background">
  <div class="container">
      <div class="row thanks-box">
        <div class="col-12">
          <h2>Thank you!</h2>
          <p>Thanks for donating $<?php echo htmlspecialchars(number_format(($_GET['total']/100), 2, ".", " ")); ?> to Food4Kids Hamilton! Your donation will help support X children's meals.</p>
        </div>
      </div>
  <div class="row thanks-box">
    <div class="col">

    <!-- Js the facebook extension -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-share-button" data-href="https://www.food4kidshamilton.ca/" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.food4kidshamilton.ca%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    </div>
    <div class="col">
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="I just donated to Food 4 Kids Hamilton, an organization who&#39;s goal is to help feed children in the Hamilton Region! Check them out and provide a child a meal!" data-via="Food4KidsHamOnt" data-hashtags="ProvideSupport" data-lang="en" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>