<?php get_header(); ?>

    <div class="single">
        <div class="container">
            <div class="broadcamp">
          <span class="broadcamp-path"
          >صفحه اصلی / آموزش ها / آموزش طراحی سایت
            <span class="broadcamp-active"
            >/ آموزش طراحی سایت پیشرفته</span
            ></span
          >
            </div>
            <!--start single-->
            <div class="single-flex">
                <div class="content">
                    <div class="main-category box-shadow">
                        <div class="article_box">

                            <?php
                            if (have_posts()):
                                while (have_posts()):the_post(); ?>
                                    <div class="article box-shadow">
                                        <div class="img_article">
                                            <img <?php the_post_thumbnail(); ?>>
                                            <img class="teacher" <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                                        </div>
                                        <div class="body_article">
                                            <div class="title_article">
                                                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                            </div>
                                            <div class="excerp_article">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="meta_article">
                                                <p>
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/images/svg-sprite.svg#calender"></use>
                                                    </svg>
                                                    <span><?php the_time(' d F Y'); ?></span>
                                                </p>
                                                <p>
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/images/svg-sprite.svg#calender"></use>
                                                    </svg>
                                                    <span><?php
                                                        global $post;
                                                        $visitor_count = get_post_meta($post->ID, '_post_views_count', true);
                                                        if ($visitor_count == '') {
                                                            $visitor_count = 0;
                                                        }
                                                        if ($visitor_count >= 1000) {
                                                            $visitor_count = round(($visitor_count / 1000), 2);
                                                            $visitor_count = $visitor_count . 'k';
                                                        }
                                                        echo esc_attr($visitor_count);
                                                        echo ' بازدید';
                                                        ?></span>
                                                </p>
                                                <p>
                                                    <svg class="icon">
                                                        <use xlink:href="/assets/images/svg-sprite.svg#calender"></use>
                                                    </svg>
                                                    <span><?php the_category(', '); ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>

                        </div>

                        <div class="navigation">
                            <nav class="nav">
                                <ul class="pagination">
                                    <li class="page_item">
                                        <a class="page_link" href="#">
                                            <svg class="icon">
                                                <use xlink:href="/assets/images/svg-sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="page_item">
                                        <a class="page_link" href="#">1</a>
                                    </li>
                                    <li class="page_item">
                                        <a class="page_link" href="#">1</a>
                                    </li>
                                    <li class="page_item">
                                        <a class="page_link" href="#">1</a>
                                    </li>
                                    <li class="page_item">
                                        <a class="page_link" href="#">1</a>
                                    </li>
                                    <li class="page_item">
                                        <a class="page_link" href="#">
                                            <svg class="icon">
                                                <use xlink:href="/assets/images/svg-sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>