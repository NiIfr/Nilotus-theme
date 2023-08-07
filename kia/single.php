<?php get_header(); ?>
<div class="single">
    <div class="container">
        <div class="broadcamp">
          <span class="broadcamp-path">  صفحه اصلی / آموزش ها / آموزش طراحی سایت
            <span class="broadcamp-active">/ آموزش طراحی سایت پیشرفته</span>
          </span>
        </div>
        <!--start single-->
        <div class="single-flex">
            <div class="content">
                <div class="main-single box-shadow">
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <div class="box-post-meta">
                            <div class="post-meta">
                                <svg class="icon">
                                    <use
                                        xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#calender"
                                    ></use>
                                </svg>

                                <span><?php the_time(' d F Y'); ?></span>
                            </div>

                            <div class="post-meta">
                                <svg class="icon">
                                    <use
                                        xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#Show"
                                    ></use>
                                </svg>
                                <span><?php if(function_exists('the_views')) { the_views(); }?></span>
                            </div>

                            <div class="post-meta">
                                <svg class="icon">
                                    <use
                                        xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#category"
                                    ></use>
                                </svg>
                                <span><?php the_category(', '); ?></span>
                            </div>
                        </div>
                    </header>
                    <div class="post-thumbnail">
                        <figure><?php the_post_thumbnail(); ?></figure>
                    </div>
                    <div class="content-single"><?php the_content(); ?></div>
                </div>
                <!-- Start post Navigatio -->
                <div class="post-navigation box-shadow">
                    <div class="navig nav-next">
                        <a href="<?= get_template_directory_uri();?>/assets#">
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#arrow-right"
                                ></use>
                            </svg>
                            <span>حضور در شبکه های اجتماعی خوب است یا بد؟ </span>
                        </a>
                    </div>
                    <div class="navig nav-home">
                        <a href="<?= get_template_directory_uri();?>/assets#">
                            <svg class="icon">
                                <use xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#home"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="navig nav-back">
                        <a href="<?= get_template_directory_uri();?>/assets#">
                            <span>حضور در شبکه های اجتماعی خوب است یا بد؟ </span>
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_template_directory_uri();?>/assets/assets/images/svg-sprite.svg#arrow-right"
                                ></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Start author -->
                <div class="author box-shadow">
                    <div class="author-img">
                        <img src="./assets/images/logo.jpg" alt=""/>
                        <span>نیلوفر وفایی</span>
                    </div>
                    <div class="author-des">
                        <p>
                            در فناوری تشخیص چهره‌ی اپل، یک دوربین و فرستنده‌ی مادون‌قرمز
                            در بالای نمایشگر قرار داده ‌شده‌ است؛ هنگامی‌که آیفون می‌خواهد
                            چهره‌ی شما را تشخیص دهد، فرستنده‌ی نوری نامرئی را به ‌صورت شما
                            می‌تاباند. دوربین مادون‌قرمز، این نور را تشخیص داده و با
                            الگویی که قبلا از صورت شما ثبت کرده، مطابقت می‌دهد و در صورت
                            یکی‌بودن، قفل گوشی را باز می‌کند. اپل ادعا کرده، الگوی صورت را
                            با استفاده از سی هزار نقطه ذخیره می‌کند که دورزدن آن اصلا کار
                            ساده‌ای نیست.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Start sidebar -->
            <?php get_sidebar(); ?>

        </div>
        <!-- end sidebar -->
    </div>
</div>
<?php get_footer(); ?>
