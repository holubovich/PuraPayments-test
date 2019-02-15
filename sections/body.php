<div class="main">
    <div class="container">
        <div class="solutions">
            Tailored Merchant Processing Solutions for Your Business
        </div>
        <div class="panel__group">
            <div class="panel__group panel__left">
                <div class="hdr__panel">
                    pura rayments offers:
                </div>
                <div class="list">
                    <ul class="list-checked list-left">
                        <li><span class="text-yellow">Competitive</span> Rates starting at 0.40%</li>
                        <li><span class="text-yellow">24/7</span> Dedicated customer<br/> support team</li>
                        <li><span class="text-yellow">EMV and PCI compliant</span> <br/> plus NFC capable equipment</li>
                        <li><span class="text-yellow">Fast & Easy</span> applicathion process <br/>with <strong> no
                                applicathion fees!</strong></li>
                    </ul>
                </div>
                <div class="hdr__call panel_call">
                    <img src="/src/sprites/common/phone.png" class="panel_img"/>

                    <div class="hdr__call button-call">
                        <a href="tel: <?php echo $ty ? $phone_ty : $phone; ?>">
                            <p class="hdr__call-title call-title">CALL FOR A FREE QUOTE</p>

                            <p class="hdr__call-number call-number"><?php echo $ty ? $phone_ty : $phone; ?></p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel__group panel__center">
                <?php
                include 'sections/form.php';
                ?>
            </div>
            <div class="panel__group panel__right">
                <div class="free-term">
                    <div class="hdr__panel__right">*<span class="text-yellow">free</span> terminal</div>
                    <div class="list">
                        <div class="list-items">
                            <ul class="list-checked list-right">
                                <li>Retail/Swipe</li>
                                <li>eCommerce</li>
                                <li>Wireless</li>
                                <li>Mobile</li>
                                <li>>Mail Order/Phone</li>
                            </ul>
                        </div>
                        <div class="list-term-img"><img src="/src/sprites/common/terminal.png"/></div>
                    </div>
                    <div class="button">
                        <div class="arrow"></div>
                        <div class="button-question">

                            <p class="button-answer">Answer a few questions</p>

                            <p class="button-learn">Learn More & Get a FREE Quote!</p>
                        </div>
                    </div>
                </div>
                <div class="free-term-text">
                    *Free terminal only applies for approved Pura Payments merchant
                    account and requires a 1 year contract. If you cancel your agreement
                    before the 1 year term has been completed a cancellation fee will apply.
                    Does not include cost of shipping.
                </div>
            </div>
        </div>
        <div class="call">Call for a FREE Quote: 888-888-8888</div>
    </div>
</div>
