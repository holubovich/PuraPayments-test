<div class="tybox">
  <div class="fc__header">
    <img src="" alt="">
    <div class="tybox__header">
      <?php echo $show_number ? 'FINAL STEP!' : 'THANK YOU!'; ?>
    </div>
  </div>
  <div class="tybox__content">
    <div class="tybox__content-text <?php echo $show_number ? '' : 'tybox__content-text--oh'; ?>">
      <?php if($show_number) { ?>
        Your quote is ready!<br/>Call the number below to access
      <?php } else { ?>
        Your quote is ready!<br/><br/>A representative will contact you<br />shortly with it.
      <?php } ?>
    </div>
    <?php if($show_number) { ?>
      <img class="tybox__arrow" src="" alt="" />
      <a class="tybox__callbtn" href="tel: <?php echo $phone_ty; ?>">
        <div class="tybox__callbtn-number"><?php echo $phone_ty; ?></div>
      </a>
    <?php } ?>
  </div>
</div>
