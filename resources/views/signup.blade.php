<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Регистрация/Авторизация</title>
    <link rel="shortcut icon" href="/images/icons/icon_site.png" type="image/x-icon">
  <link rel="stylesheet" href="/resources/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Регистрация</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                  First name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Second name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Login<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
              <label>
                  Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
                Email<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Зарегистрироваться</button>

          </form>

        </div>

        <div id="login">
          <h1>Войти</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Login<span class="req">*</span>
            </label>
            <input type=""required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Войти</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->


    <script src="/resources/js/index.js"></script>

</body>
</html>
