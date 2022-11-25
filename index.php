<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-height-viewport="offset-bottom: true" class="uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/cover-20221122085348-cjccv.png" uk-img>
    <div class="uk-width-1-1 uk-section">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="home__card uk-card uk-card-default uk-card-body">
                        <div class="home__item-30-15">
                            <h3 class="home__card__title uk-h3 uk-margin-remove">Chào mừng đến eBank</h3>
                            <div class="home__card__txt">Quý khách vui lòng nhập thông tin để tải ứng dụng eBank</div>
                        </div>
                        <div class="home__item-30-15">
                            <div class="item__10">
                                <input class="home__card__input uk-input" type="text" placeholder="Họ và tên" aria-label="Input">
                            </div>
                            <div class="item__10">
                                <input class="home__card__input uk-input" type="text" placeholder="Số điện thoại" aria-label="Input">
                            </div>
                        </div>
                        <div class="home__item-30-15">
                            <button class="home__card__btnSubmit uk-button uk-button-large uk-background-secondary uk-width-1-1">Gửi thông tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>