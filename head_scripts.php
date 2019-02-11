<script type="text/javascript">
  (function() { var field = 'xxTrustedFormCertUrl'; var provideReferrer = false; var tf = document.createElement('script'); tf.type = 'text/javascript'; tf.async = true; tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') + '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' +escape(field) + '&l='+new Date().getTime()+Math.random(); var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s); } )();
</script>
<noscript>
  <img src="//api.trustedform.com/ns.gif" />
</noscript>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
  window.addEventListener('landing_pixel_fired', function() {
      function getCookie(name)
      {
          var re = new RegExp(name + "=([^;]+)");
          var value = re.exec(document.cookie);
          return (value != null) ? unescape(value[1]) : null;
      }
      var cfTrkS = getCookie('CF_Trk_S');

      $('form').append('<input type="hidden" id="cf_s" name="cf_s" value="'+ cfTrkS  + '">');
  })
</script>

<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->