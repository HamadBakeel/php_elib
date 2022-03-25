<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elib-Project</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/details.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@100;200;300;400;500;600;700;800;900&display=swap");
      html {
        font-family: "Tajawal", sans-serif;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <button class="show-links-button"><i class="fas fa-bars"></i></button>
        <ul class="links">
          <li id="language-switch">
            <object data="imgs/svg/language.svg" type=""></object>
            <a href="" id="language-text"> English</a>
          </li>
          <li>
            <object data="imgs/svg/ksa.svg" type=""></object>
            <a href=""> اليمن YER</a>
          </li>
          <li>
            <object data="imgs/svg/location.svg" type=""></object>
            <a href="">سياسة الخصوصية </a>
          </li>
          <li>
            <object data="imgs/svg/i.svg" type=""></object>
            <a href="">المساعدة</a>
          </li>
          <li>
            <object data="imgs/svg/trueShield.svg" type=""></object>
            <a href="">اتصل بنا</a>
          </li>
          <li>
            <object data="imgs/svg/van.svg" type=""></object>
            <a href="">من نحن</a>
          </li>
          <li>
            <object data="imgs/svg/star.svg" type=""></object>
            <a href="" class="index">الرئيسية</a>
          </li>
          <li id="show-dialog">
            <object data="imgs/svg/profile.svg" type=""></object>
            <a href="">ادخل لحسابك او سجل الان</a>
          </li>
        </ul>
      </nav>

      <!-- 
      =========
      == login dialog
      ========= 
    -->
      <div class="overlay hide"></div>
      <div class="logIn hide">
        <button id="hide-dialog">
          <img src="imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>تسجيل الدخول</h2>

        <form action="">
          <input
            type="text"
            name=""
            placeholder="البريد الالكتروني او رقم الجوال"
            id=""
          />
          <div class="password">
            <input type="password" name="" placeholder="كلمة المرور" id="" />
            <a href="" class="forgot">نسيت ؟</a>
          </div>
          <input
            type="submit"
            value=" تسجيل الدخول
        "
          />
        </form>

        <div class="create-account">
          <p>ليس لديك حساب ؟</p>
          <button id="create-new-account">إنشاء حساب جديد</button>
        </div>
      </div>

      <div class="signUp hide">
        <button id="hide-signUpDialog">
          <img src="imgs/svg/cancel.svg" alt="" />
        </button>
        <h2>إنشاء حساب</h2>

        <form action="">
          <div class="phone-number">
            <input type="number" name="" placeholder="رقم الجوال" id="phone" />
            <select name="countryCode" id="countryCode">
              <option data- value="+970">+970</option>
              <option style="background-image: url(imgs/svg/country.svg)">
                +970
              </option>
            </select>
          </div>
          <p>سوف نرسل لك <strong>رمز التحقق عن طريق رسالة نصية</strong></p>

          <button class="btn">إرسال رمز التحقق</button>
          <input type="text" name="" placeholder="الإسم الأول" id="" />
          <input type="text" name="" placeholder="أسم العائلة" id="" />
          <input type="email" name="" placeholder="البريد الإلكتروني" id="" />
          <input
            type="email"
            name=""
            placeholder="تأكيد البريد الإلكتروني"
            id=""
          />
          <input type="text" name="" placeholder="كلمة المرور" id="" />

          <div class="check">
            <input type="checkbox" name="agree" id="" />
            <label for="agree">أوافق علي <a href="">الشروط والاحكام</a></label>
          </div>
          <div class="check">
            <input type="checkbox" name="email-post-signIn" id="" />
            <label for="agree">التسجيل للإنضمام للنشرة الإخبارية</label>
          </div>
          <input type="submit" class="btn" value="إنشاء حساب" />
        </form>

        <p class="login">
          لديك حساب ؟
          <a href="">
            تسجيل الدخول <img src="imgs/svg/rightArrowBlue.svg" alt=""
          /></a>
        </p>
      </div>
      <!-- <button id="show-dialog">show dialog</button> -->

      <div class="search-bar">
        <div class="img">
          <img src="imgs/img.png" alt="" />
        </div>

        <div class="bar-icon-container">
          <input type="search" placeholder="البحث" />
          <object
            data="imgs/svg/search.svg"
            class="searchIcon"
            type=""
          ></object>
        </div>

        <div style="position: relative">
          <span id="counter"></span>
          <a href="cart.php"> </a>
          <object data="imgs/svg/cart.svg" class="cart" type=""></object>
        </div>
      </div>

      <!-- ------------------- slider ------------------- -->
      <div class="slider-container">
        <div class="slides">
          <div class="slide">
            <img src="imgs/slider_img.webp" class="slide-img" alt="" />
          </div>
          <div class="slide">
            <img src="imgs/slider_img2.webp" class="slide-img" alt="" />
          </div>
          <div class="slide">
            <img src="imgs/slider_img3.jpg" class="slide-img" alt="" />
          </div>
          <div class="slide">
            <!-- <div> -->
            <img src="imgs/slider_img4.webp" class="slide-img" alt="" />
            <!-- </div> -->
          </div>
        </div>
        <div class="btn-container">
          <button type="button" class="nextBtn">
            <img src="imgs/svg/rightArrow.svg" alt="" />
          </button>
          <button type="button" class="prevBtn">
            <img
              src="imgs/svg/rightArrow.svg"
              style="transform: rotateY(180deg)"
              alt=""
            />
          </button>
        </div>
      </div>

      <!-- <div class="slider-container">
        <div class="slider">
          <div class="slides">
            <div id="slides__1" class="slide">
              <img src="imgs/slider_img.webp" alt="" />
              <a class="slide__prev" href="#slides__4" title="Next"></a>
              <a class="slide__next" href="#slides__2" title="Next"></a>
            </div>
            <div id="slides__2" class="slide">
              <img src="imgs/slider_img2.webp" alt="" />
              <a class="slide__prev" href="#slides__1" title="Prev"></a>
              <a class="slide__next" href="#slides__3" title="Next"></a>
            </div>
            <div id="slides__3" class="slide">
              <img src="imgs/slider_img3.jpg" alt="" />
              <a class="slide__prev" href="#slides__2" title="Prev"></a>
              <a class="slide__next" href="#slides__4" title="Next"></a>
            </div>
            <div id="slides__4" class="slide">
              <img src="imgs/slider_img4.webp" alt="" />
              <a class="slide__prev" href="#slides__3" title="Prev"></a>
              <a class="slide__next" href="#slides__1" title="Prev"></a>
            </div>
          </div>
          <div class="slider__nav">
            <a class="slider__navlink" href="#slides__1"></a>
            <a class="slider__navlink" href="#slides__2"></a>
            <a class="slider__navlink" href="#slides__3"></a>
            <a class="slider__navlink" href="#slides__4"></a>
          </div>
        </div>
      </div> -->
    </header>
    <main>
      <section class="container">
        <div class="book-image">
          <div class="big-img">
            <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
          </div>
          <div class="small-imgs">
            <div class="img-container">
              <img src="imgs/books/beYou.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="imgs/books/fullSelfTrust.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="imgs/books/realConfidence.jpg" alt="" />
            </div>
            <div class="img-container">
              <img src="imgs/books/yourNewSelf.jpg" alt="" />
            </div>
          </div>
          <div class="img-slider-container hide">
            <div class="img-container img-view">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />

              <div class="buttons">
                <img src="imgs/svg/rightArrow.svg" alt="" class="next" />
                <img
                  src="imgs/svg/rightArrow.svg"
                  style="transform: rotateY(180deg)"
                  alt=""
                  class="prev"
                />
              </div>
              <img src="imgs/svg/cancel.svg" alt="" id="exit" />
            </div>
          </div>
        </div>
        <div class="book-info">
          <h2 class="title">كن أنت (كتاب الكتروني)</h2>
          <a href="" class="show-more">عرض المزيد</a>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="sell-unit">ُ وحدة البيع :Each</p>
          <p><a href="" class="reviews">(المراجعات) 5 نجوم</a></p>
          <p class="type-number">رقم الصنف JBB23Bdsf رقم المنتج 4</p>
          <div class="available-forms">
            <p>الصيغ المتوفرة :</p>
            <div class="eBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="eBook">كتاب إلكتروني</label>
              </div>
              <div class="price">
                <p>12.99</p>
                <p>ر.س</p>
              </div>
            </div>
            <div class="pBook">
              <div class="check">
                <input type="radio" name="BookType" id="" />
                <label for="pBook">كتاب مطبوع</label>
              </div>
              <div class="price">
                <p>17.99</p>
                <p>ر.س</p>
              </div>
            </div>
          </div>
        </div>
        <div class="add-to-cart">
          <div class="note">
            <p>
              <strong>ملاحظة: </strong>سيتم إضافة هذا الكتاب الألكتروني الى
              مكتبتك في قارئ جرير
            </p>
            <a href="">إقرأ المزيد </a>
          </div>
          <div class="add">
            <input type="number" name="" id="amount" />
            <button class="add-item">
              <img src="imgs/svg/cart-1.svg" alt="" />اضف الى السلة
            </button>
          </div>
          <div class="features">
            <div class="feature">
              <img src="imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">شحن امن</div>
              <img src="imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="imgs/svg/trueShieldTransparent.svg" alt="" />
              <div class="text">أصلي و مضمون</div>
              <img src="imgs/svg/questionMark.svg" alt="" />
            </div>
            <div class="feature">
              <img src="imgs/svg/van.svg" alt="" />
              <div class="text">شحن سريع و مجاني</div>
              <img src="imgs/svg/questionMark.svg" alt="" />
            </div>
          </div>
          <div class="options">
            <button class="option">
              <img src="imgs/svg/watch.svg" alt="" />
              <div class="text">مشاركة</div>
            </button>
            <button class="option">
              <img src="imgs/svg/headsets.svg" alt="" />
              <div class="text">المفضلة</div>
            </button>
            <button class="option">
              <img src="imgs/svg/inverseDirectionArrows.svg" alt="" />
              <div class="text">مقارنة</div>
            </button>
          </div>
        </div>
      </section>
      <p class="about">
        كتاب يتحدث عن الكثير من الأشياء المفيدة الخ الخ الخ الخ الخ الخ الخ الخ
        الخ الخ الخ الخ الخلخ الخ الخ الخ الخ الخ الخ الخ الخ الخلخ الخ الخ الخ
        الخ الخ الخ الخ الخ الخلخ الخ الخ الخ الخ الخ الخ الخ الخ الخ
      </p>
      <section class="specs">
        <h2>المواصفات</h2>
        <ul class="shadow">
          <li>
            <p class="spec">رقم الصنف</p>
            <p class="value">JBB23Bdsf</p>
          </li>
          <li>
            <p class="spec">رقم المنتج</p>
            <p class="value">4</p>
          </li>
          <li>
            <p class="spec">المؤلف</p>
            <p class="value">مؤلف ما</p>
          </li>
          <li>
            <p class="spec">الناشر</p>
            <p class="value">دار الحضارة للنشر والتوزيع</p>
          </li>
          <li>
            <p class="spec">تاريخ النشر</p>
            <p class="value">2016</p>
          </li>
          <li>
            <p class="spec">صيغة الكتاب</p>
            <p class="value">eBook</p>
          </li>
          <li>
            <p class="spec">عدد الصفحات</p>
            <p class="value">212</p>
          </li>
          <li>
            <p class="spec">وزن الشحن</p>
            <p class="value">0.1KG</p>
          </li>
          <li>
            <p class="spec">صيغة الملف</p>
            <p class="value">ePub</p>
          </li>
          <li>
            <p class="spec">اللغة</p>
            <p class="value">عربي</p>
          </li>
        </ul>
        <button class="show-details">عرض أكثر</button>
      </section>

      <section class="client-reviews">
        <div class="head">
          <h2>مراجعات العملاء</h2>
          <button class="write-a-review">أكتب مراجعتك</button>
        </div>
        <div class="reviews">
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">كتاب رائع</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">حمد</p>
              </div>
              <p class="date">2021/12/13</p>
            </div>
            <p class="opinion">جيد</p>
          </div>
          <div class="review">
            <p class="text">great</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">sami</p>
              </div>
              <p class="date">2020/1/1</p>
            </div>
            <p class="opinion">Nice</p>
          </div>
          <div class="review">
            <p class="text">أعجبني</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">ساره</p>
              </div>
              <p class="date">2021/4/5</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
          <div class="review">
            <p class="text">good</p>
            <div class="details">
              <div class="by">
                من قبل
                <p class="user">reem</p>
              </div>
              <p class="date">2021/11/1</p>
            </div>
            <p class="opinion">Good</p>
          </div>
        </div>
        <button class="show-reviews-button">إضهار جميع المراجعات(15)</button>
      </section>

      <section class="similar-products">
        <h2>منتجات مشابهة</h2>
        <div class="products-container">
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
          <div class="product">
            <div class="info">
              <img src="imgs/books/karmaDiagnosis.jpg" alt="" />
              <p class="title">تشخيص الكارما</p>
            </div>
            <div class="price">
              <p>17</p>
              <p>ر.س</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ------------------- footer ------------------- -->
    <footer>
      <section class="upper-part">
        <section class="posts">
          <div>
            <h3>انضم الى نشرتنا البريدية</h3>
            <form action="">
              <input type="search" placeholder="ادخل بريدك الالكتروني" />
              <input type="submit" value="اشتراك" />
            </form>
          </div>
          <div class="contact-us">
            <h3>تواصل معنا</h3>
            <div class="social-icons">
              <img src="imgs/social-icons/facebook.svg" alt="" />
              <img src="imgs/social-icons/twitter.svg" alt="" />
              <img src="imgs/social-icons/youtube.svg" alt="" />
              <img src="imgs/social-icons/youtube.svg" alt="" />
              <img src="imgs/social-icons/linkedin.svg" alt="" />
              <img src="imgs/social-icons/snapshat.svg" alt="" />
              <img src="imgs/social-icons/tictok.svg" alt="" />
            </div>
          </div>
        </section>

        <ul class="custumer-services">
          <h3>خدمةالعملاء</h3>
          <li><a href=""> مبيعات الشركات</a></li>
          <li><a href="">الاسئلة المتكررة</a></li>
          <li><a href="">دليل التسوق والمطبوعات</a></li>
          <li><a href="">مواقع المعارض</a></li>
          <li><a href="">سياسة الضمان</a></li>
          <li><a href="">سياسة الاسترجاع والاستبدال</a></li>
          <p class="call-us">
            اتصل بنا <br />
            92090232323
          </p>
        </ul>

        <ul class="services">
          <h3>خدمات جرير</h3>
          <li><a href=""> خدمات تقسيط تقسيط المشتريات</a></li>
          <li><a href="">خدمات ما بعد البيع</a></li>
          <li><a href="">خدمات الحمايه الشاملة</a></li>
          <li><a href="">حماية أجهزة آبل</a></li>
          <li><a href="">بطاقة خصم جرير</a></li>
          <li><a href="">بطاقة جرير للهدايا</a></li>
        </ul>

        <ul class="quick-links">
          <h3>روابط سريعه</h3>
          <li><a href="">اصدارات جرير</a></li>
          <li><a href="">قارئ جرير</a></li>
          <li><a href="">شركاء برامج المكافئات </a></li>
          <li><a href="">خدمات شركات الاتصال</a></li>
        </ul>

        <ul class="about">
          <h3>عن جرير</h3>
          <li><a href="">من نحن</a></li>
          <li><a href="">الحوكمه</a></li>
          <li><a href="">علاقات المستثمرين و التقارير</a></li>
          <li><a href="">الاستدامه</a></li>
          <li><a href="">الاخبار</a></li>
          <h3><a href="">فرص العمل</a></h3>
        </ul>
      </section>
      <section class="lower-part">
        <div class="text">
          <p><a href="">سياسة الخصوصية </a> <a href="">| شروط الخدمة</a></p>
          <p>
            جميع الحقوق محفوظة لمكتبة جرير 2015 س.ت.1011120120. اونلاين
            س.ت.1010987453
          </p>
        </div>
        <div class="pay-methods">
          <div class="img">
            <img src="imgs/paymentMethods/payInGallery.svg" alt="" />
          </div>
          <div class="img">
            <img
              src="imgs/paymentMethods/qitaf.svg"
              class="white-card"
              alt=""
            />
          </div>
          <div class="img">
            <img
              src="imgs/paymentMethods/mada.svg"
              class="white-card"
              style="padding: 8px 3px"
              alt=""
            />
          </div>
          <div class="img">
            <img src="imgs/paymentMethods/visa.svg" alt="" />
          </div>
          <div class="img">
            <img src="imgs/paymentMethods/masterCard.svg" alt="" />
          </div>
          <div class="img">
            <img
              src="imgs/paymentMethods/americanExpress.svg"
              style="background-color: #27ade4; border-radius: 5px"
              alt=""
            />
          </div>
        </div>
      </section>
    </footer>
    <script src="Js/slider.js"></script>
    <script src="Js/details.js"></script>
    <!-- <script src="Js/main.js"></script> -->
  </body>
</html>
