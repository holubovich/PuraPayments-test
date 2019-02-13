<?php
  global $ty;
  if(strpos($_SERVER['REQUEST_URI'], 'thank-you') !== false) {
    $ty = true;
  } else {
    $ty = false;
  }
?>
<!-- start header -->
<div class="hdr">
  <div class="container cf">
    <div class="flex rel">
      <div class="hdr__logo-cont flex">
        <div class="hdr__logo"></div>
        <div class="hdr__logo-line"></div>
        <div class="hdr__hsp"></div>
      </div>
      <?php //if($show_number) { ?>
        <div class="hdr__call">
          <img src="/src/sprites/common/phone.png"/>
        <a href="tel: <?php echo $ty ? $phone_ty : $phone; ?>">
          <p class="hdr__call-title">CALL FOR A FREE QUOTE</p>
          <p class="hdr__call-number"><?php echo $ty ? $phone_ty : $phone; ?></p>
        </a>
      </div>
      <?php //} ?>
    </div>
  </div>
</div>
<!-- end header -->
