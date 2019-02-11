<script src="v1/dist/js/index.js" async></script>
<script type="text/javascript">
  function DOMready(fn) {
    // runs in ie8
    if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
      appendIsTest();
      // runs in all other browsers
    } else {
      document.addEventListener('DOMContentLoaded', appendIsTest);
    }
  }
  function appendIsTest() {
    if($('form').length > 0) {
      input = document.createElement("input");
      input.setAttribute("type", "hidden");
      input.setAttribute("name", "is_test");
      input.setAttribute("value", "<?php echo $istest; ?>");
      document.getElementsByTagName('form')[0].appendChild(input);
    }
  }
  DOMready();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
  WebFont.load({
      google: {
        families: ['Open+Sans:300,400,600,700,800,900']
      }
    });
</script>