<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<?php
include 'top.php';
include "menu.php";
?>




        <?= $content ?>

<div class="footer ab" >
    <div class="my-container">
        <div class="footer-in">
            <div class="footer-in-l ">
                <a href="index.html" class="logos">
                    <img src="img/png/gerb.png" alt="logo" class="logo">
                    <p class="txt-20">Qashqadaryo viloyati
                        Xalq ta’lim boshqarmasi</p>
                </a>
                <div class="blog ab">
                    <p class="card-blog">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 10C7.75 7.37665 9.87665 5.25 12.5 5.25C15.1233 5.25 17.25 7.37665 17.25 10C17.25 12.6234 15.1233 14.75 12.5 14.75C9.87665 14.75 7.75 12.6234 7.75 10ZM12.5 6.75C10.7051 6.75 9.25 8.20507 9.25 10C9.25 11.7949 10.7051 13.25 12.5 13.25C14.2949 13.25 15.75 11.7949 15.75 10C15.75 8.20507 14.2949 6.75 12.5 6.75Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.02244 8.85685C4.37677 4.55824 7.96892 1.25 12.2821 1.25H12.7141C17.0273 1.25 20.6194 4.55824 20.9737 8.85685C21.1641 11.166 20.4508 13.4589 18.9841 15.2526L14.1911 21.1144C13.3161 22.1845 11.6801 22.1845 10.8051 21.1144L6.01204 15.2526C4.54538 13.4589 3.8321 11.166 4.02244 8.85685ZM12.2821 2.75C8.74957 2.75 5.80756 5.45948 5.51737 8.98008C5.35895 10.9019 5.9526 12.8102 7.17326 14.3031L11.9663 20.1649C12.2412 20.501 12.755 20.501 13.0299 20.1649L17.8229 14.3031C19.0436 12.8102 19.6372 10.9019 19.4788 8.98008C19.1886 5.45948 16.2466 2.75 12.7141 2.75H12.2821Z" fill="white"/>
                        </svg>

                        <span class="txt-16">
                                Farg’ona viloyati, farg’ona shaxar, Boychechak 4
                            </span>
                    </p>
                    <p class="card-blog">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49933 3.25C7.91354 3.25 8.24933 3.58579 8.24933 4V5.66763C11.077 5.4158 13.9216 5.4158 16.7493 5.66763V4C16.7493 3.58579 17.0851 3.25 17.4993 3.25C17.9135 3.25 18.2493 3.58579 18.2493 4V5.81644C19.7423 6.02754 20.9219 7.20847 21.1215 8.71484L21.2081 9.36779C21.5721 12.1141 21.5407 14.8984 21.1147 17.6359C20.9037 18.9919 19.8021 20.0335 18.4363 20.1681L17.2433 20.2858C14.0883 20.5969 10.9103 20.5969 7.75526 20.2858L6.56225 20.1681C5.19651 20.0335 4.09485 18.9919 3.88384 17.6359C3.45788 14.8984 3.42644 12.1141 3.79048 9.36779L3.87703 8.71484C4.07671 7.20845 5.25626 6.02751 6.74933 5.81643V4C6.74933 3.58579 7.08512 3.25 7.49933 3.25ZM7.94449 7.2028C10.9737 6.90408 14.0249 6.90408 17.0541 7.2028L17.9595 7.2921C18.8263 7.37757 19.5201 8.04854 19.6345 8.91194L19.7211 9.56489C19.7513 9.793 19.7787 10.0214 19.8032 10.25H5.19539C5.21988 10.0214 5.24723 9.79301 5.27747 9.5649L5.36402 8.91194C5.47847 8.04854 6.17229 7.37757 7.03904 7.2921L7.94449 7.2028ZM5.07616 11.75C4.97798 13.6381 5.07471 15.5332 5.366 17.4052C5.47184 18.0854 6.02442 18.6078 6.70946 18.6754L7.90247 18.793C10.9596 19.0945 14.039 19.0945 17.0961 18.793L18.2891 18.6754C18.9741 18.6078 19.5267 18.0854 19.6326 17.4052C19.9239 15.5332 20.0206 13.6381 19.9224 11.75H5.07616Z" fill="white"/>
                        </svg>
                        <span class="txt-16">
                                Dushanba - Juma: 9:00 - 18:00 <br>
                                Shanba - Yakshanba: Dam olish kunlari
                            </span>
                    </p>
                    <p class="card-blog">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.34193 9.85617C8.12925 13.748 11.3098 16.8422 15.2635 18.5188L15.276 18.5241L16.0398 18.8645C17.0125 19.2979 18.1557 18.9901 18.7793 18.127L20.0537 16.3633C20.1315 16.2556 20.1114 16.1058 20.008 16.0223L17.7833 14.2275C17.6727 14.1383 17.51 14.1591 17.4254 14.2732L16.5596 15.4416C16.3493 15.7254 15.9695 15.824 15.6478 15.6784C12.6914 14.3404 10.3156 11.9647 8.97769 9.00833C8.83207 8.68656 8.93067 8.30681 9.21442 8.09653L10.3828 7.23067C10.497 7.14606 10.5178 6.98344 10.4285 6.87284L8.63348 4.6478C8.55005 4.54438 8.40031 4.5243 8.29258 4.60207L6.51928 5.88223C5.65049 6.50942 5.34454 7.66226 5.788 8.63771L6.34134 9.85487C6.34154 9.85531 6.34174 9.85574 6.34193 9.85617ZM14.6716 19.8971C10.3756 18.0735 6.9202 14.7105 4.97816 10.4807L4.97699 10.4782L4.42249 9.2585C3.68339 7.63275 4.19331 5.71134 5.6413 4.66603L7.41459 3.38587C8.16871 2.84146 9.21694 2.98207 9.80093 3.70596L11.596 5.93101C12.2206 6.70518 12.0751 7.84357 11.2759 8.43581L10.6064 8.93197C11.7374 11.1263 13.5297 12.9187 15.7241 14.0496L16.2203 13.3801C16.8125 12.581 17.9509 12.4355 18.7251 13.0601L20.9498 14.8548C21.6739 15.439 21.8144 16.4877 21.2695 17.2418L19.9951 19.0055C18.9558 20.444 17.0504 20.957 15.4294 20.2347L14.6716 19.8971Z" fill="white"/>
                        </svg>
                        <span class="txt-16">
                                +998 97 628 28 82
                            </span>
                    </p>
                    <p class="card-blog">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.30207 8.35318C3.02193 10.9561 3.03442 13.9581 3.42424 16.5504C3.63994 17.9848 4.81061 19.0844 6.25568 19.2101L7.76591 19.3413C10.915 19.6151 14.0818 19.6151 17.2309 19.3413L18.7411 19.2101C20.1862 19.0844 21.3569 17.9848 21.5726 16.5504C21.9624 13.9581 21.9749 10.9563 21.6947 8.35333C21.6585 8.05157 21.6178 7.75022 21.5726 7.44937C21.3569 6.01498 20.1862 4.91533 18.7411 4.78971L17.2309 4.65843C14.0818 4.38469 10.915 4.38469 7.76591 4.65843L6.25568 4.78971C4.81061 4.91533 3.63994 6.01498 3.42424 7.44937C3.37901 7.75016 3.33829 8.05147 3.30207 8.35318ZM7.89581 6.1528C10.9584 5.88657 14.0384 5.88657 17.101 6.1528L18.6112 6.28408C19.3655 6.34965 19.9766 6.92367 20.0892 7.67242C20.1009 7.75018 20.1123 7.82797 20.1234 7.9058L14.5624 10.9953C13.2788 11.7084 11.718 11.7084 10.4344 10.9953L4.87343 7.90584C4.88449 7.828 4.89587 7.75019 4.90756 7.67242C5.02016 6.92367 5.63125 6.34965 6.38558 6.28408L7.89581 6.1528ZM20.3069 9.51977C20.5009 11.7875 20.4283 14.0724 20.0892 16.3273C19.9766 17.0761 19.3655 17.6501 18.6112 17.7157L17.101 17.847C14.0384 18.1132 10.9584 18.1132 7.89581 17.847L6.38558 17.7157C5.63125 17.6501 5.02016 17.0761 4.90756 16.3273C4.56847 14.0724 4.49591 11.7876 4.68988 9.5198L9.7059 12.3065C11.4426 13.2713 13.5542 13.2713 15.2908 12.3065L20.3069 9.51977Z" fill="white"/>
                        </svg>


                        <span class="txt-16">
                                Faksa.the@gmail.com
                            </span>
                    </p>

                </div>
                <div class="bottom-r">
                    <p class="txt-16">Ijtimoiy tarmoqlar</p>
                    <div class="images">
                        <a href="#">
                            <img src="" alt="">
                        </a>
                        <a href="#">
                            <img src="" alt="">
                        </a>
                        <a href="#">
                            <img src="" alt="">
                        </a>
                        <a href="#">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-in-r ab2">
                <iframe class="top"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1592677.6865074537!2d64.88553858293466!3d38.770616270708764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4c0f733ef3784f%3A0xad8977474640b0e7!2z0JrQsNGI0LrQsNC00LDRgNGM0Y8sINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1661334741387!5m2!1sru!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer-in-form ab3">
                <h1 class="txt-20">
                    Biz bilan bog’laning
                </h1>
                <form class="form-footer">
                    <label for="in1" class="label txt-16">
                        Ismingiz
                    </label>
                    <input type="text" placeholder="Fakhriy" id="in1" class="input txt-16">
                    <label for="in2" class="label txt-16">
                        Elektron pochta
                    </label>
                    <input type="email" placeholder="Faksa.the@gmail.com" id="in2" class="input txt-16">
                    <label for="in3" class="label txt-16">
                        Elektron pochta
                    </label>
                    <textarea id="in2" class="input txt-16" placeholder="*********" cols="30" rows="3"></textarea>
                    <button class="glavni-btn txt-18">
                        Yuborish
                    </button>
                </form>
            </div>
        </div>
        <div class="bottom">


            <p class="bottom-l txt-14 al">
                Portalda eʼlon qilingan materiallardan nusxa koʻchirish, tarqatish va boshqa shakllarda foydalanish faqat tahririyat yozma roziligi bilan amalga oshirilishi mumkin.
            </p>
            <p class="txt-14 bottom-r ar">
                Qashqadaryo viloyat xalq ta’limi boshqarmasi © 2020-2021.
            </p>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
