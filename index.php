<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!-- This is the modal with the default close button -->
<div id="modal-close-default-thanksyou" class="uk-flex-top home__modalThanksyou" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title home__modalThanksyou__title uk-text-center">Tải app ngay</h2>
        <form class="uk-padding-small uk-position-relative uk-form-stacked home__modalThanksyou__box uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/a6bikyly20221122072014.jpg" uk-img>
            <div class="uk-position-relative">
                <label class="uk-form-label home__modalThanksyou__box__txt" for="form-stacked-text">Lưu ý: Sau khi tải app, bắt buộc nhập Mã giới thiệu</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
                        <input class="uk-input home__modalThanksyou__box__input" type="text" placeholder="CODE NUMBER" aria-label="Clickable icon">
                    </div>
                </div>
            </div>
        </form>
        <div class="uk-text-center"><img src="images/swync-download-android-ios-removebg-preview-20220713041319.png" alt=""></div>
    </div>
</div>
<script>
    const x = document.querySelector.bind(document);
    const xx = document.querySelectorAll.bind(document);

    const app = {
        render: function () {
            const modal_thanksyou = x('#modal-close-default-thanksyou');

            if (modal_thanksyou){
                UIkit.modal(modal_thanksyou).show();
            }
        },
        start: function () {
            this.render();
        }
    }

    window.addEventListener("load", ()=>{
        console.log("page is fully loaded");
        app.start();
    })
</script>
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