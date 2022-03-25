<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signUpDialog.css">
    <link rel="stylesheet" href="css/loginDialog.css">
    <link rel="stylesheet" href="css/checkout.css" />
    <link rel="stylesheet" href="css/all.min.css">
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
        <ul class="links hide-links">
          <button class="show-links-button"><i class="fas fa-bars"></i></button>
          <!-- <button class="show-links">show</button> -->
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
    </header>
    <section class="container">
      <section class="progress">
        <div class="progress_header">
          <div class="step" id="step-1">
            <div class="step-content">1</div>
          </div>
          <div class="step" id="step-2">
            <div class="step-content">2</div>
          </div>
          <div class="step" id="step-3">
            <div class="step-content">3</div>
          </div>
          <div class="step" id="step-4">
            <div class="step-content">4</div>
          </div>
        </div>
      </section>

      <div class="checkout-inputs">
        <form class="user-info checkout-step">
          <input type="number" name="phone" placeholder="رقم الجوال" id="phone" />
          <input type="text" name="country" placeholder="الدوله" id="country" />
          <input type="text" name="city" placeholder="المدينة" id="city" />
          <input
            type="text"
            name="nieghborhood"
            placeholder="الحي"
            id="nieghborhood"
          />
        </form>
        <form class="pay-info hide checkout-step">
          <input
            type="text"
            name="phone"
            placeholder="طريقة الدفع"
            id="phone"
          />
          <input
            type="number"
            name="card-id"
            placeholder="رقم البطاقة"
            id="card-id"
          />
          <input type="text" name="country" placeholder="الدوله" id="country" />
          <input type="text" name="city" placeholder="المدينة" id="city" />
        </form>
        <div class="checkout-confirmation checkout-step hide">
          <div class="discount">
            <div class="price">
              <p>4%</p>
              <p></p>
            </div>
            <div class="text">: الخصم</div>
          </div>
          <div class="delivery">
            <div class="price">
              <p>17.99</p>
              <p>ر.س</p>
            </div>
            <p class="text">: رسوم الشحن</p>
          </div>
          <div class="total">
            <div class="price">
              <p>170.99</p>
              <p>ر.س</p>
            </div>
            <p class="text">: الإجمالي</p>
          </div>
          <p class="insure">
            الرجاء التاكد من صحة جميع المعلومات المدخلة سابقا.
          </p>
        </div>
        <section class="done checkout-step hide">
          <h2>تمت عملية الشراء</h2>
          <p>إضغط التالي للعودة الى الصفحة الرئيسية</p>
          <!-- <img src="imgs/svg/" alt=""> -->
        </section>
      </div>

      <div class="progress_btns">
        <button onclick="handlePrevStep()">
          <img
            src="imgs/svg/rightArrowBlack.svg"
            style="transform: rotateY(180deg)"
            alt=""
          />السابق
        </button>
        <button onclick="handleNextStep()">
          التالي<img src="imgs/svg/rightArrowBlack (2).svg" alt="" />
        </button>
      </div>
    </section>

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
<div class="img">            <img 
  src="imgs/paymentMethods/mada.svg"
  class="white-card"
  style="padding: 8px 3px"
  alt=""
/></div>
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
          </div>
        </section>
      </footer>
  </body>
  <script src="Js/checkout.js"></script>
  <script src="Js/main.js"></script>
</html>
