<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="app/views/assets/css/style.css">
    <link rel="stylesheet" href="app/views/assets/css/signUpDialog.css">
    <link rel="stylesheet" href="app/views/assets/css/loginDialog.css">
    <link rel="stylesheet" href="app/views/assets/css/checkout.css" />
    <link rel="stylesheet" href="app/views/assets/css/all.min.css">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@100;200;300;400;500;600;700;800;900&display=swap");
      html {
        font-family: "Tajawal", sans-serif;
      }
    </style>
  </head>
  <body>

  <?php include_once 'components/header.php'?>

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
          <!-- <img src="app/views/assets/imgs/svg/" alt=""> -->
        </section>
      </div>

      <div class="progress_btns">
        <button onclick="handlePrevStep()">
          <img
            src="app/views/assets/imgs/svg/rightArrowBlack.svg"
            style="transform: rotateY(180deg)"
            alt=""
          />السابق
        </button>
        <button onclick="handleNextStep()">
          التالي<img src="app/views/assets/imgs/svg/rightArrowBlack (2).svg" alt="" />
        </button>
      </div>
    </section>

      <!-- ------------------- footer ------------------- -->
    <?php include_once 'components/footer.php'?>

    <script src="app/views/assets/Js/checkout.js"></script>
    <script src="app/views/assets/Js/main.js"></script>
  </body>
</html>
