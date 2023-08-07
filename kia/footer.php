<!-- Start new Footer -->
<footer style="background-color: blanchedalmond">
    <div class="top-footer container">
        <div class="social-footer">
            <div class="social-info">
                <svg class="icon-large">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#message"></use>
                </svg>
                <span> از شبکه های اجتماعی دور نباشید </span>
            </div>
            <div class="social-icon">
                <div class="soc-ic">
                    <svg class="icon-large">
                        <use
                            xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#instagram_social"
                        ></use>
                    </svg>
                </div>
                <div class="soc-ic">
                    <svg class="icon-large">
                        <use
                            xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#discord_social"
                        ></use>
                    </svg>
                </div>
                <div class="soc-ic">
                    <svg class="icon-large">
                        <use
                            xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#skype_social"
                        ></use>
                    </svg>
                </div>
                <div class="soc-ic">
                    <svg class="icon-large">
                        <use
                            xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#telegram_social"
                        ></use>
                    </svg>
                </div>
                <div class="soc-ic">
                    <svg class="icon-large">
                        <use
                            xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#linkdin_social"
                        ></use>
                    </svg>
                </div>
            </div>
        </div>
        <div class="email-footer">
            <p>
                اگر می خواهید بهترین پیشنهادات و تخفیفات و هدایای ما را زودتر از همه
                دریافت کنید، می توانید عضو خبرنامه نیلرن شوید
            </p>
            <form action="">
                <input
                    class="email-box"
                    type="email"
                    placeholder="آدرس ایمیل خود را وارد کنید"
                />
                <button type="submit" class="btn btn-danger" name="submit">
                    <svg class="icon-large media">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/images/svg-sprite.svg#message"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="mid-footer container">
        <div class="item widget-footer-1">
            <article class="article-full">
                <p>
                    وبسافت3 فعالیت خود را در تاریخ 1393/10/7 در زمینه تولید فیلم های
                    آموزش طراحی سایت و و وردپرس آغاز کرده. یکی از دغدغه های بیشتر
                    افراد محصل در رشته های مختلف و به خصوص رشته کامپیوتر، ترس از
                    بیکاری و بدست نیاوردن شغل مورد علاقه شان بعد از فارغ التحصیلی هست.
                    ما با در نظر گرفتن این موضوع و تلاش برای پوشش دادن این نوع دغدغه
                    ها در حد توان به عنوان یک مرجع آموزشی سعی میکنیم با آموزش دادن و
                    پرورش متخصص برای بازارکار در حوضه طراحی سایت به علاقه مندان کمک
                    کنیم تا از این راه به اهداف شغلی خود دست پیدا کنند.
                </p>
            </article>
        </div>
        <div class="item widget-footer-2">
            <ul>
                <li><a href="#" target="_blank">درباره ما</a></li>
                <li><a href="#" target="_blank">تماس با ما</a></li>
                <li><a href="#" target="_blank">قوانین و مقررات</a></li>
            </ul>
        </div>
        <div class="item widget-footer-3">
            <ul>
                <li><a href="#" target="_blank">دوره طراحی قالب وردپرس</a></li>
                <li><a href="#" target="_blank">دوره متخصص Next.js</a></li>
                <li><a href="#" target="_blank">دوره متخصص وب</a></li>
                <li><a href="#" target="_blank">دوره سیر تا پیاز فتوشاپ</a></li>
                <li><a href="#" target="_blank">دوره متخصص امنیت وردپرس</a></li>
                <li><a href="#" target="_blank">دوره کسب و کار وردپرس</a></li>
            </ul>
        </div>
        <div class="item widget-footer-4">
            <a
                href="https://www.nilofarvafaei.ir/"
                target="_blank"
                rel="noopener"
                dideo-checked="true"
            >
                <img src="<?= get_template_directory_uri(); ?>/assets/images/back.jpg"
                /></a>
        </div>
    </div>

    <div class="down-footer">
        <div class="d-foot container">
            <div class="copy-right">
                <span>تمامی حقوق برای نیلوعه همینی که هست</span>
            </div>
            <div class="webdesigner">
                <span>ساخته شده با تمام پارگی توسط نیلوی لنتی و کیای بی اعصاب</span>
            </div>
            <div class="go-up"></div>
        </div>
    </div>
</footer>

<!-- Start Footer -->

<div class="mobile-menu-down">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
<!-- End Footer -->
<?php wp_footer(); ?>
</body>
</html>