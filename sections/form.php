<div class="fc">
  <div class="fc__header">
   <img src="/src/sprites/common/bar.png" alt="" class="img-shadow">
    <div class="fc__header-text js-header">
        <p class="fc__header-suptext">START HERE</p>
        <p class="fc__header-subtext">Get your FREE Personalized Quote</p>
    </div>
  </div>
  <div class="fc__body">
    <div class="step step1">
      <div class="step__title">
          Are you currently processing
          <br />payments?
      </div>
        <div class="step__choice js-click-choice" id="Yes">
          <p>YES &raquo;</p>
          <div class="step__choice-grad"></div>
        </div>
        <div class="step__choice js-click-choice" id="No">
          <p>NO &raquo;</p>
          <div class="step__choice-grad"></div>
        </div>
    </div>
    <div class="step step2">
      <div class="step__title">
        What type of processing do you need?
      </div>
      <div class="step__choice js-click-choice" id="Retail">
        <p>Retail/Swipe &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
      <div class="step__choice js-click-choice" id="Online">
        <p>Online Processing &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
      <div class="step__choice js-click-choice" id="Other">
        <p>Other &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
    </div>
    <div class="step step3">
      <div class="step__title">
        When do you need to start <br /> processing credit card payments ?
      </div>
      <div class="step__choice js-click-choice" id="ASAP">
        <p>As Soon as Possible &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
      <div class="step__choice js-click-choice" id="<= 14 Days">
        <p>Within 14 Days &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
      <div class="step__choice js-click-choice" id=">= 14 Days">
        <p>14 Days or More &raquo;</p>
        <div class="step__choice-grad"></div>
      </div>
    </div>
    <div class="step step4 js-processingStep">
      <p class="processing__title">
        Processing Your Quote...
      </p>
      <div class="processing__bar">
        <div id="bar"></div>
      </div>
      <div class="processing__checklist">
        <div class="processing__checklist-item">
          <div class="processing__checklist-loader"></div>
          <div class="processing__checklist-check"></div>
          <div class="processing__checklist-text">
            Currently Processing?: <strong class="processing__checklist-answer" id="answer_1">Loading...</strong>
          </div>
        </div>
        <div class="processing__checklist-item">
          <div class="processing__checklist-loader"></div>
          <div class="processing__checklist-check"></div>
          <div class="processing__checklist-text">
            Type: <strong class="processing__checklist-answer" id="answer_2">Loading...</strong>
          </div>
        </div>
        <div class="processing__checklist-item">
          <div class="processing__checklist-loader"></div>
          <div class="processing__checklist-check"></div>
          <div class="processing__checklist-text">
            How soon?: <strong class="processing__checklist-answer" id="answer_3">Loading...</strong>
          </div>
        </div>
      </div>
    </div>
    <div class="step step5">
      <div class="step__title">
        <p class="step5__sub">Just give us a few more details to complete <br /> your FREE personalized quote!</p>
      </div>
      <form class="form" action="/thank-you.php" method="post">
          <div class="form__grp">
              <div class="form__grp-input">
                  <input class="form__input" type="text" name="first_name" value="" placeholder="First Name:">
                  <div class="req-msg">This field is required.</div>
              </div>
              <div class="form__grp-input form__grp-input--right">
                  <input class="form__input" type="text" name="last_name" value="" placeholder="Last Name:">
                  <div class="req-msg">This field is required.</div>
              </div>
          </div>
          <input class="form__input" type="text" name="business_name" value="" placeholder="Business Name:">
          <div class="req-msg">This field is required.</div>
          <input class="form__input" maxlength="12" type="text" name="contact_phone" value="" placeholder="Phone:">
          <div class="req-msg">This field is required.</div>
          <input class="form__input" type="email" name="email_address" value="" placeholder="Email:">
          <div class="req-msg">This field is required.</div>

        <button type="submit" class="step__choice form__submit">
          <p>Get My FREE Quote &raquo;</p>
          <div class="step__choice-grad"></div>
        </button>
        <div class="form__legal">
          By clicking "Get My Free Quote » " above, I consent to receive from Pura Payments and any party on Pura Payment's behalf telemarketing calls using an autodialer or pre-recordings and SMS text messages at any time, which could result in wireless charges, at the number provided above. I understand that consent is not a condition of purchase.
        </div>
       <?php include 'hidden-input.php'; ?>
      </form>
    </div>
    <div class="dots cf">
      <div class="dot dot1 active"></div>
      <div class="dot dot2"></div>
      <div class="dot dot3"></div>
      <div class="dot dot4"></div>
    </div>
</div>
</div>
