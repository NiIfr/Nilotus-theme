<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


      <?php wp_head(); ?>

    <title>نیلوفر وفایی</title>
  </head>
  <body>
    <!--Start Header-->

<!-- The Modal -->


    <div class="top-head">
      <div class="top container">
        <div class="menu-top">
          <ul>
            <li><a href="#">آموزش وردپرس</a></li>
            <li><a href="#">آموزش اینستاگرام</a></li>
            <li><a href="#">آموزش Adobe XD</a></li>
          </ul>
        </div>

        <div class="contact-me">
          <span>09300822695</span>
          <span class="icon-container">
            <svg class="icon">
              <use xlink:href="/assets/images/svg-sprite.svg#calling"></use>
            </svg>
          </span>
          <span>info@niloo.com</span>
          <span class="icon-container">
            <svg class="icon">
              <use xlink:href="/assets/images/svg-sprite.svg#mail"></use>
            </svg>
          </span>
        </div>
      </div>
    </div>
    <div class="sticky-head">
      <div class="sticky container">
        <a class="nav-logo" href="#">
          <div id="progress">
            <img id="myImg" class="progress-value" src="<?php echo get_template_directory_uri().'/assets/images/logo.jpg'?>"  />
          </div>

          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <a href="https:instagram.com/niloofarvafaei.ir"><img class="modal-content" src=" <?php echo get_template_directory_uri() .'/assets/images/instagram.jpg'?>"/>
            </a>
              <div id="caption"></div>
          </div>

        </a>


        <div class="humber-menu">
          <div class="nav__toggler">
            <div class="bar bar-one"></div>
            <div class="bar bar-two"></div>
            <div class="bar bar-three"></div>
          </div>

          <div id="mySidenav" class="sidenav">
            <a class="closebtn">&times;</a>

            <ul>
              <li><a class="nav-item" href="#">خانه</a></li>
              <li><a class="nav-item" href="#">آموزش</a></li>
              <li><a class="nav-item" href="#">فروشگاه</a></li>
              <li><a class="nav-item" href="#">وبلاگ</a></li>
              <li><a class="nav-item" href="#">درباره من</a></li>
              <li><a class="nav-item" href="#">تماس با من</a></li>
            </ul>

          </div>
        </div>

        <nav class="navbar">

          <ul>
            <li><a href="#">خانه</a></li>
            <li><a href="#">آموزش</a></li>
            <li><a href="#">فروشگاه</a></li>
            <li><a href="#">وبلاگ</a></li>
            <li><a href="#">درباره من</a></li>
            <li><a href="#">تماس با من</a></li>
          </ul>


        </nav>
        <div class="login">
          <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="/assets/images/svg-sprite.svg#search"></use>
              </svg>
            </span>
          </a>
          <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="/assets/images/svg-sprite.svg#buy"></use>
              </svg>
            </span>
          </a>

          <a href="#"
            ><span class="icon-container">
              <svg class="icon">
                <use xlink:href="/assets/images/svg-sprite.svg#profile"></use>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>


    <!--End Header-->

    <!--Start  hero-->

    <div class="container-hero">
      <section class="hero">
        <din class="main-hero">
          <div class="hero_text">
            <h2>
              تا اتمام مسیر یادگیری برنامه نویسی سایت با شما هستیم فقط باید شروع
              کنی
            </h2>
            <h3>
              بهترین و تخصصی ترین متد یادگیری برنامه نیوسی به سبک مدرن توسط
              اساتید مجرب نیلوفر وفایی
            </h3>
            <div class="border"></div>
            <div class="lets">
              <a class="btn" href="#">بزن بریم !</a>
            </div>
          </div>
          <div class="hero_img">
            <img src=" <?php echo get_template_directory_uri() .'/assets/images/banner.webp' ?>" />
            <div class="shade"></div>
          </div>
        </din>
      </section>
    </div>

    <!--End  hero-->

    <!--Start Course Slider-->

    <!--End Course Slider-->

    <div class="container">
      <section class="sec-courses box-shadow">
        <div class="course-head">
          <h3>
            <svg class="icon-large">
              <use xlink:href="/assets/images/svg-sprite.svg#student"></use>
            </svg>
            دوره ها
          </h3>
          <a class="btn" href="#"> دیدن همه</a>
        </div>

        <div class="swiper-rel">
          <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="the-course">
                  <figure class="img-course">
                    <div class="top-info">
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#student"
                          ></use>
                        </svg>
                        1234</span
                      >
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#teach"
                          ></use>
                        </svg>
                        نیلوفر وفایی</span
                      >
                    </div>
                    <img
                      class="box-shadow"
                      src=" <?php echo get_template_directory_uri() .'/assets/images/course1.png'?>" />
                  </figure>
                  <div class="course-des">
                    <h4 class="course-title">آموزش دوره طراحی سایت</h4>
                    <div class="course-info">
                      <span>
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                          ></use>
                        </svg>
                        7:12:40
                      </span>
                      <span class="rec-done">
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#rec-done"
                          ></use>
                        </svg>
                        تکمیل ضبط
                      </span>
                    </div>
                    <div class="course-show">
                      <span class="reg">
                        <a href="#"
                          >مشاهده اطلاعات دوره

                          <svg class="icon arrow">
                            <use
                              xlink:href="/assets/images/svg-sprite.svg#arrow-right"
                            ></use>
                          </svg>
                        </a>
                      </span>
                    </div>

                    <div class="register">
                      <span class="btn reg-btn">
                        <a href="#"> ثبت نام </a>
                      </span>
                      <div class="course-price">
                        <span class="off-price">
                          <span class="main-pr"
                            >2150
                            <span>تومان</span>
                          </span>
                          <span class="off-pr"
                            >1900
                            <span>تومان</span>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="the-course">
                  <figure class="img-course">
                    <div class="top-info">
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#student"
                          ></use>
                        </svg>
                        1234</span
                      >
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#teach"
                          ></use>
                        </svg>
                        نیلوفر وفایی</span
                      >
                    </div>
                    <img
                      class="box-shadow"
                      src="./assets/images/course1.png"
                      alt=""
                    />
                  </figure>
                  <div class="course-des">
                    <h4 class="course-title">آموزش دوره طراحی سایت</h4>
                    <div class="course-info">
                      <span>
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                          ></use>
                        </svg>
                        7:12:40
                      </span>
                      <span class="rec-done">
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#rec-done"
                          ></use>
                        </svg>
                        تکمیل ضبط
                      </span>
                    </div>
                    <div class="course-show">
                      <span class="reg">
                        <a href="#"
                          >مشاهده اطلاعات دوره

                          <svg class="icon arrow">
                            <use
                              xlink:href="/assets/images/svg-sprite.svg#arrow-right"
                            ></use>
                          </svg>
                        </a>
                      </span>
                    </div>

                    <div class="register">
                      <span class="btn reg-btn">
                        <a href="#"> ثبت نام </a>
                      </span>
                      <div class="course-price">
                        <span class="off-price">
                          <span class="main-pr"
                            >2150
                            <span>تومان</span>
                          </span>
                          <span class="off-pr"
                            >1900
                            <span>تومان</span>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="the-course">
                  <figure class="img-course">
                    <div class="top-info">
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#student"
                          ></use>
                        </svg>
                        1234</span
                      >
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#teach"
                          ></use>
                        </svg>
                        نیلوفر وفایی</span
                      >
                    </div>
                    <img
                      class="box-shadow"
                      src=" <?php echo get_template_directory_uri() .'/assets/images/course1.png'?>" />
                  </figure>
                  <div class="course-des">
                    <h4 class="course-title">آموزش دوره طراحی سایت</h4>
                    <div class="course-info">
                      <span>
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                          ></use>
                        </svg>
                        7:12:40
                      </span>
                      <span class="rec-done">
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#rec-done"
                          ></use>
                        </svg>
                        تکمیل ضبط
                      </span>
                    </div>
                    <div class="course-show">
                      <span class="reg">
                        <a href="#"
                          >مشاهده اطلاعات دوره

                          <svg class="icon arrow">
                            <use
                              xlink:href="/assets/images/svg-sprite.svg#arrow-right"
                            ></use>
                          </svg>
                        </a>
                      </span>
                    </div>

                    <div class="register">
                      <span class="btn reg-btn">
                        <a href="#"> ثبت نام </a>
                      </span>
                      <div class="course-price">
                        <span class="main-price"
                          >2150
                          <span>تومان</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="the-course">
                  <figure class="img-course">
                    <div class="top-info">
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#student"
                          ></use>
                        </svg>
                        1234</span
                      >
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#teach"
                          ></use>
                        </svg>
                        نیلوفر وفایی</span
                      >
                    </div>
                    <img
                      class="box-shadow"
                      src="./assets/images/course1.png"
                      alt=""
                    />
                  </figure>
                  <div class="course-des">
                    <h4 class="course-title">آموزش دوره طراحی سایت</h4>
                    <div class="course-info">
                      <span>
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                          ></use>
                        </svg>
                        7:12:40
                      </span>
                      <span class="recording">
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#recording"
                          ></use>
                        </svg>
                        در حال ضبط
                      </span>
                    </div>
                    <div class="course-show">
                      <span class="reg">
                        <a href="#"
                          >مشاهده اطلاعات دوره

                          <svg class="icon arrow">
                            <use
                              xlink:href="/assets/images/svg-sprite.svg#arrow-right"
                            ></use>
                          </svg>
                        </a>
                      </span>
                    </div>

                    <div class="register">
                      <span class="reg-btn registered">
                        <a href="#"> دانشجوی این دوره هستید</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="the-course">
                  <figure class="img-course">
                    <div class="top-info">
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#student"
                          ></use>
                        </svg>
                        1234</span
                      >
                      <span>
                        <svg class="icon-small">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#teach"
                          ></use>
                        </svg>
                        نیلوفر وفایی</span
                      >
                    </div>
                    <img
                      class="box-shadow"
                      src=" <?php echo get_template_directory_uri() .'/assets/images/course1.png'?>" />
                  </figure>
                  <div class="course-des">
                    <h4 class="course-title">آموزش دوره طراحی سایت</h4>
                    <div class="course-info">
                      <span>
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                          ></use>
                        </svg>
                        7:12:40
                      </span>
                      <span class="rec-done">
                        <svg class="icon">
                          <use
                            xlink:href="/assets/images/svg-sprite.svg#rec-done"
                          ></use>
                        </svg>
                        تکمیل ضبط
                      </span>
                    </div>
                    <div class="course-show">
                      <span class="reg">
                        <a href="#"
                          >مشاهده اطلاعات دوره

                          <svg class="icon arrow">
                            <use
                              xlink:href="/assets/images/svg-sprite.svg#arrow-right"
                            ></use>
                          </svg>
                        </a>
                      </span>
                    </div>

                    <div class="register">
                      <span class="btn reg-btn">
                        <a href="#"> ثبت نام </a>
                      </span>
                      <div class="course-price">
                        <span class="main-price">
                          <span>رایگان</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need scrollbar -->
          </div>
        </div>
      </section>
    </div>

    <!--Start Services Box-->
    <div class="container">
      <section class="services">
        <div class="container">
          <div class="d-flex">
            <div class="services-title">
              <svg class="services-icon">
                <use xlink:href="/assets/images/svg-sprite.svg#services"></use>
              </svg>
              <h5>خدمات نیلرن</h5>
            </div>
            <div class="services-body">
              <div class="services-box">
                <svg class="icon-large media">
                  <use
                    xlink:href="/assets/images/svg-sprite.svg#discord_social"
                  ></use>
                </svg>
                <h6>طراحی وبسایت</h6>
                <p>سفارش انواع طراحی سایت و وب اپلیکیشن</p>
              </div>
              <div class="services-box">
                <svg class="icon-large media">
                  <use
                    xlink:href="/assets/images/svg-sprite.svg#discord_social"
                  ></use>
                </svg>
                <h6>سرور دیسکورد</h6>
                <p>درخواست ساخت سرور دیسکورد با امکانات مدنظر</p>
              </div>
              <div class="services-box">
                <svg class="icon-large media">
                  <use
                    xlink:href="/assets/images/svg-sprite.svg#discord_social"
                  ></use>
                </svg>
                <h6>آموزش های مختلف</h6>
                <p>درخواست ساخت سرور دیسکورد با امکانات مدنظر</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--End Services Box-->

    <!--start Radio Box-->
    <div class="container">
      <div class="radio box-shadow">
        <div class="radio_title">
          <div class="right">
            <svg class="icon-large">
              <use xlink:href="/assets/images/svg-sprite.svg#voice"></use>
            </svg>
            <h5>رادیونیل !</h5>
          </div>
          <div class="left">
            <a href="#" class="btn">مشاهده همه</a>
          </div>
        </div>
        <div class="radio_slide">
          <div class="radio_box">
            <div class="radio_img">
              <img src="/assets/images/radio1.jpg" alt="" />
            </div>
            <div class="radio_audio">
              <audio controls preload="none">
                <source
                  src="/assets/media/Vadim Kiselev - Separation.mp3"
                  type="audio/mp3"
                />
              </audio>
            </div>
            <div class="radio_content">
              <h3>نقشه راه برنامه نویسی</h3>
              <div class="radio_detail">
                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  <span>دسته بندی :</span>
                  <span> سایت</span>
                </div>

                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  <span> 4 روز قبل</span>
                </div>
              </div>
            </div>
          </div>

          <div class="radio_box">
            <div class="radio_img">
              <img src="/assets/images/radio1.jpg" alt="" />
            </div>
            <div class="radio_audio">
              <audio controls preload="none">
                <source
                  src="/assets/media/Vadim Kiselev - Separation.mp3"
                  type="audio/mp3"
                />
              </audio>
            </div>
            <div class="radio_content">
              <h3>نقشه راه برنامه نویسی</h3>
              <div class="radio_detail">
                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  <span>دسته بندی :</span>
                  <span> سایت</span>
                </div>

                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  <span> 4 روز قبل</span>
                </div>
              </div>
            </div>
          </div>

          <div class="radio_box">
            <div class="radio_img">
              <img src="/assets/images/radio1.jpg" alt="" />
            </div>
            <div class="radio_audio">
              <audio controls preload="none">
                <source
                  src="/assets/media/Vadim Kiselev - Separation.mp3"
                  type="audio/mp3"
                />
              </audio>
            </div>
            <div class="radio_content">
              <h3>نقشه راه برنامه نویسی</h3>
              <div class="radio_detail">
                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  <span>دسته بندی :</span>
                  <span> سایت</span>
                </div>

                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  <span> 4 روز قبل</span>
                </div>
              </div>
            </div>
          </div>

          <div class="radio_box">
            <div class="radio_img">
              <img src="/assets/images/radio1.jpg" alt="" />
            </div>
            <div class="radio_audio">
              <audio controls preload="none">
                <source
                  src="/assets/media/Vadim Kiselev - Separation.mp3"
                  type="audio/mp3"
                />
              </audio>
            </div>
            <div class="radio_content">
              <h3>نقشه راه برنامه نویسی</h3>
              <div class="radio_detail">
                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  <span>دسته بندی :</span>
                  <span> سایت</span>
                </div>

                <div class="category">
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  <span> 4 روز قبل</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--End Radio Box-->

    <!-- Start Customres Comment -->
    <div class="container">
      <section class="customres">
        <div class="container">
          <div class="flex">
            <div class="cus-head">
              <svg class="icon-large media box-shadow-primary">
                <use xlink:href="/assets/images/svg-sprite.svg#edit"></use>
              </svg>
              <h5>نظرات دانشجویان نیلرن</h5>
              <p>اینا فقط بخش کوچکی از تجربه دانشجویان نیلرن هست</p>
            </div>

            <!-- Swiper -->

            <div class="swiper customer-swiper">
              <div class="swiper-wrapper">
                <!-- Swiper Slider -->
                <div class="swiper-slide box-shadow">
                  <div class="p-2">
                    <h3>Html Css</h3>
                    <p>
                      من قبلا این حوزه رو آموزش دیده بودم داخل دانشگاه و وقتی
                      تصمیم به شروع گرفتم به خود خانم وفایی هم گفتم نیازی به این
                      دوره ندارم و میخواستم برم سراغ جی اس وقتی استارت جی اس رو
                      زدم تازه فهمیدم عملا هیچی نمیدونم این دوره رو استارت زدم
                      با اینکه ی کلی مشکلات برام پیش اومد و مدام فرآیند آموزش
                      دیدنم استاپ میشد ولی پروژه اصلی دوره طوری بود ک من فقط
                      یبار دیگه مباحث FLEX و GRID رو دیدم و کماکان اوکی بود
                      مطالب خیلی خوب و با انسجام بیان میشه داخل پروژه نهایی
                    </p>
                    <div class="border-customer"></div>
                    <div class="box-cus">
                      <div class="info-cus">
                        <div class="gravatar-cus">
                          <img src="assets/images/user.png" />
                        </div>
                        <div class="detail-cus">
                          <div class="name-cus">
                            <h6>علی همتی</h6>
                            <span class="date-cus">(1402/02/29)</span>
                          </div>
                          <span class="course-cus"
                            >دانشجو دوره طراحی وب ریسپانسیو</span
                          >
                        </div>
                      </div>

                      <div class="comment-star">
                        <svg class="icon">
                          <use
                            xlink:href="./assets/images/svg-sprite.svg#Starfull"
                          ></use>
                        </svg>
                        <svg class="icon">
                          <use
                            xlink:href="./assets/images/svg-sprite.svg#Starfull"
                          ></use>
                        </svg>
                        <svg class="icon">
                          <use
                            xlink:href="./assets/images/svg-sprite.svg#Starfull"
                          ></use>
                        </svg>
                        <svg class="icon-small">
                          <use
                            xlink:href="./assets/images/svg-sprite.svg#star"
                          ></use>
                        </svg>
                        <svg class="icon-small">
                          <use
                            xlink:href="./assets/images/svg-sprite.svg#star"
                          ></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Swiper Slider -->
                <div class="swiper-slide box-shadow">
                  <div class="p-2">
                    <h3>Html Css</h3>
                    <p>
                      من قبلا این حوزه رو آموزش دیده بودم داخل دانشگاه و وقتی
                      تصمیم به شروع گرفتم به خود آقای محمدی هم گفتم نیازی به این
                      دوره ندارم و میخواستم برم سراغ جی اس وقتی استارت جی اس رو
                      زدم تازه فهمیدم عملا هیچی نمیدونم این دوره رو استارت زدم
                      با اینکه ی کلی مشکلات برام پیش اومد و مدام فرآیند آموزش
                      دیدنم استاپ میشد ولی پروژه اصلی دوره طوری بود ک من فقط
                      یبار دیگه مباحث FLEX و GRID رو دیدم و کماکان اوکی بود
                      مطالب خیلی خوب و با انسجام بیان میشه داخل پروژه نهایی
                    </p>
                    <div class="border-customer"></div>
                    <div class="box-cus">
                      <div class="info-cus">
                        <div class="gravatar-cus">
                          <img src="assets/images/user.png" />
                        </div>
                        <div class="detail-cus">
                          <div class="name-cus">
                            <h6>کیانوش شریفی مهر</h6>
                            <span class="date-cus">(1402/02/29)</span>
                          </div>
                          <span class="course-cus"
                            >دانشجو دوره طراحی وب ریسپانسیو</span
                          >
                        </div>
                      </div>
                      <span class="rate-cus">
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- Swiper Slider -->
                <div class="swiper-slide box-shadow">
                  <div class="p-2">
                    <h3>Html Css</h3>
                    <p>
                      من قبلا این حوزه رو آموزش دیده بودم داخل دانشگاه و وقتی
                      تصمیم به شروع گرفتم به خود آقای محمدی هم گفتم نیازی به این
                      دوره ندارم و میخواستم برم سراغ جی اس وقتی استارت جی اس رو
                      زدم تازه فهمیدم عملا هیچی نمیدونم این دوره رو استارت زدم
                      با اینکه ی کلی مشکلات برام پیش اومد و مدام فرآیند آموزش
                      دیدنم استاپ میشد ولی پروژه اصلی دوره طوری بود ک من فقط
                      یبار دیگه مباحث FLEX و GRID رو دیدم و کماکان اوکی بود
                      مطالب خیلی خوب و با انسجام بیان میشه داخل پروژه نهایی
                    </p>
                    <div class="border-customer"></div>
                    <div class="box-cus">
                      <div class="info-cus">
                        <div class="gravatar-cus">
                          <img src="assets/images/user.png" />
                        </div>
                        <div class="detail-cus">
                          <div class="name-cus">
                            <h6>کیانوش شریفی مهر</h6>
                            <span class="date-cus">(1402/02/29)</span>
                          </div>
                          <span class="course-cus"
                            >دانشجو دوره طراحی وب ریسپانسیو</span
                          >
                        </div>
                      </div>
                      <span class="rate-cus">
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- Swiper Slider -->
                <div class="swiper-slide box-shadow">
                  <div class="p-2">
                    <h3>Html Css</h3>
                    <p>
                      من قبلا این حوزه رو آموزش دیده بودم داخل دانشگاه و وقتی
                      تصمیم به شروع گرفتم به خود آقای محمدی هم گفتم نیازی به این
                      دوره ندارم و میخواستم برم سراغ جی اس وقتی استارت جی اس رو
                      زدم تازه فهمیدم عملا هیچی نمیدونم این دوره رو استارت زدم
                      با اینکه ی کلی مشکلات برام پیش اومد و مدام فرآیند آموزش
                      دیدنم استاپ میشد ولی پروژه اصلی دوره طوری بود ک من فقط
                      یبار دیگه مباحث FLEX و GRID رو دیدم و کماکان اوکی بود
                      مطالب خیلی خوب و با انسجام بیان میشه داخل پروژه نهایی
                    </p>
                    <div class="border-customer"></div>
                    <div class="box-cus">
                      <div class="info-cus">
                        <div class="gravatar-cus">
                          <img src="assets/images/user.png" />
                        </div>
                        <div class="detail-cus">
                          <div class="name-cus">
                            <h6>کیانوش شریفی مهر</h6>
                            <span class="date-cus">(1402/02/29)</span>
                          </div>
                          <span class="course-cus"
                            >دانشجو دوره طراحی وب ریسپانسیو</span
                          >
                        </div>
                      </div>
                      <span class="rate-cus">
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- End Customres Comment -->

    <!-- start of recent blogs -->

    <div class="container">
      <article class="article-blogs box-shadow">
        <div class="top-blog">
          <h3>
            <svg class="icon-large">
              <use xlink:href="/assets/images/svg-sprite.svg#article"></use>
            </svg>
            مقالات اخیر
          </h3>
          <a class="btn" href="#">همه مقالات</a>
        </div>
        <div class="blogs">
          <div class="the-blog">
            <figure class="img-sec">
              <img class="blog-img" src="./assets/images/course2.png" alt="" />
              <img class="author-img" src="./assets/images/user3.webp" alt="" />
            </figure>
            <div class="blog-des">
              <h4>موضوع بلاگ</h4>
              <span>
                توضیحات بلاگ در این قسمت نوشته میسود که میتواند کمی طولانی و
                جذاب باشد</span
              >
              <div class="blog-info">
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  دسته بندی</span
                >
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  تاریخ</span
                >
              </div>
            </div>
            <a class="btn btn-article" href="#">ادامه مطالب</a>
          </div>

          <div class="the-blog">
            <figure class="img-sec">
              <img class="blog-img" src="./assets/images/course2.png" alt="" />
              <img class="author-img" src="./assets/images/user1.webp" alt="" />
            </figure>
            <div class="blog-des">
              <h4>موضوع بلاگ</h4>
              <span>
                توضیحات بلاگ در این قسمت نوشته میسود که میتواند کمی طولانی و
                جذاب باشد</span
              >
              <div class="blog-info">
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  دسته بندی</span
                >
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  تاریخ</span
                >
              </div>
            </div>
            <a class="btn btn-article" href="#">ادامه مطالب</a>
          </div>

          <div class="the-blog">
            <figure class="img-sec">
              <img class="blog-img" src="./assets/images/course2.png" alt="" />
              <img class="author-img" src="./assets/images/user3.webp" alt="" />
            </figure>
            <div class="blog-des">
              <h4>موضوع بلاگ</h4>
              <span>
                توضیحات بلاگ در این قسمت نوشته میسود که میتواند کمی طولانی و
                جذاب باشد</span
              >
              <div class="blog-info">
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#category"
                    ></use>
                  </svg>
                  دسته بندی</span
                >
                <span>
                  <svg class="icon">
                    <use
                      xlink:href="/assets/images/svg-sprite.svg#time-circle-reg"
                    ></use>
                  </svg>
                  تاریخ</span
                >
              </div>
            </div>
            <a class="btn btn-article" href="#">ادامه مطالب</a>
          </div>
        </div>
      </article>
    </div>

    <!-- End of recent blogs -->

    <!-- Start new Footer -->
    <footer>
      <div class="top-footer container">
        <div class="social-footer">
        <div class="social-back">
          <div class="title">
            <h4>
              <span>نیلرن</span>
              در سوشال مدیا
            </h4>
            <p>
              از خبرها دور نباشید
              <i class="fal fa-long-arrow-left"></i>
            </p>
          </div>
          <!-- social -->
          <div class="social">
            <!-- telegram -->
            <a
              href="https://t.me/account"
              target="_blank"
              rel="external nofollow ugc noopener"
            >
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="1">
                  <path
                    d="M19.9549 13.3637L14.6822 18.6364L22.5913 26.5455L27.864 5.45459L4.13672 14.6819L9.40945 17.3182L12.0458 25.2273L16.0004 19.9546"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span class="bg-gray"></span>
              <span class="bg-gradiant"></span>
            </a>
            <!-- twitter -->
            <a
              href="https://twitter.com/account"
              target="_blank"
              rel="external nofollow ugc noopener"
            >
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="1">
                  <path
                    d="M29.182 5.46781C27.8638 6.11372 26.572 6.37604 25.2274 6.77281C23.7498 5.10531 21.5589 5.01304 19.4538 5.80131C17.3487 6.58958 15.9699 8.51677 16.0002 10.7274V12.0455C11.7227 12.1549 7.91313 10.2067 5.45472 6.77281C5.45472 6.77281 -0.0579134 16.5709 10.7274 21.2728C8.25981 22.9166 5.79877 24.0252 2.81836 23.9092C7.1789 26.2859 11.931 27.1031 16.045 25.9089C20.7641 24.538 24.6422 21.0013 26.1304 15.7035C26.5744 14.0922 26.7948 12.4276 26.7855 10.7564C26.7829 10.4281 28.776 7.10236 29.182 5.46649V5.46781Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span class="bg-gray"></span>
              <span class="bg-gradiant"></span>
            </a>
            <!-- linkdin -->
            <a
              href="https://www.linkedin.com/in/account/"
              target="_blank"
              rel="external nofollow ugc noopener"
            >
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="1">
                  <path
                    d="M23.9096 5.45459H8.09144C6.63542 5.45459 5.45508 6.63493 5.45508 8.09095V23.9091C5.45508 25.3652 6.63542 26.5455 8.09144 26.5455H23.9096C25.3657 26.5455 26.546 25.3652 26.546 23.9091V8.09095C26.546 6.63493 25.3657 5.45459 23.9096 5.45459Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M10.7266 14.6819V21.2728"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M10.7266 10.7273V10.7427"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M16 21.2728V14.6819"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M21.2727 21.2728V17.3182C21.2727 16.619 20.995 15.9485 20.5006 15.4541C20.0061 14.9596 19.3356 14.6819 18.6364 14.6819C17.9372 14.6819 17.2666 14.9596 16.7722 15.4541C16.2778 15.9485 16 16.619 16 17.3182"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span class="bg-gray"></span>
              <span class="bg-gradiant"></span>
            </a>
            <!-- pinterest -->
            <a
              href="https://www.pinterest.com/account/"
              target="_blank"
              rel="external nofollow ugc noopener"
            >
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="1">
                  <path
                    d="M10.7266 26.5455L15.9993 14.6819"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M14.2855 18.6364C14.8615 20.3012 16.1705 21.2727 17.6468 21.2727C20.3768 21.2727 22.59 19.2243 22.59 16C22.5911 15.0375 22.3814 14.0864 21.9757 13.2136C21.5699 12.3409 20.9779 11.5675 20.2412 10.948C19.5046 10.3285 18.6412 9.87789 17.7118 9.62778C16.7823 9.37767 15.8094 9.33416 14.8613 9.50031C13.9133 9.66647 13.0131 10.0383 12.2241 10.5895C11.4352 11.1408 10.7765 11.8582 10.2944 12.6913C9.81236 13.5244 9.51861 14.4529 9.43382 15.4117C9.34904 16.3705 9.47527 17.3362 9.80365 18.2409"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M16.0004 27.8637C22.5525 27.8637 27.864 22.5522 27.864 16.0001C27.864 9.44801 22.5525 4.13647 16.0004 4.13647C9.44825 4.13647 4.13672 9.44801 4.13672 16.0001C4.13672 22.5522 9.44825 27.8637 16.0004 27.8637Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span class="bg-gray"></span>
              <span class="bg-gradiant"></span>
            </a>
            <!-- youtube -->
            <a
              href="https://www.youtube.com/channel/account"
              target="_blank"
              rel="external nofollow ugc noopener"
            >
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g opacity="1">
                  <path
                    d="M22.5913 6.77271H9.40945C6.4974 6.77271 4.13672 9.13339 4.13672 12.0454V19.9545C4.13672 22.8666 6.4974 25.2273 9.40945 25.2273H22.5913C25.5033 25.2273 27.864 22.8666 27.864 19.9545V12.0454C27.864 9.13339 25.5033 6.77271 22.5913 6.77271Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M13.3633 12.0454L19.9542 16L13.3633 19.9545V12.0454Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              <span class="bg-gray"></span>
              <span class="bg-gradiant"></span>
            </a>
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
                <use xlink:href="/assets/images/svg-sprite.svg#message"></use>
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
            <img src="assets/images/back.jpg"
          /></a>
        </div>
      </div>

      <div class="down-footer">
        <div class="container">
        <div class="d-foot">
          <div class="copy-right">
            <span>تمامی حقوق برای نیلوعه همینی که هست</span>
          </div>
          <div class="webdesigner">
            <span>ساخته شده با تمام پارگی توسط نیلوی لنتی و کیای بی اعصاب</span>
            <a
            id="scrollUp"
            href="#top"
            style="position: fixed; z-index: 2147483647"
            ><svg
              width="14"
              height="16"
              viewBox="0 0 14 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M6.99922 14.4001L6.99922 1.6001M6.99922 1.6001L11.7992 6.4001M6.99922 1.6001L2.19922 6.4001"
                stroke="white"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></path></svg
            ><span> رفتن به بالا </span></a
          >
          </div>

        </div>
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
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/files/index/index.js"></script>
  </body>
</html>
