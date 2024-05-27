<style>
  .dropdown-menu {
    background-color: #000;
  }

  .dropdown-menu a {
    color: #fff !important;
  }

  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
    /* 隱藏水平滾動條 */
    margin: 0;
    padding: 0;
  }


  .form-container {
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 40px;
  }

  h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333333;
  }

  hr {
    border-color: #dddddd;
  }

  .form-group input {
    border-radius: 3px;
    padding: 12px;
    border: 1px solid #dddddd;
    width: 100%;
  }

  .btn-primary {
    background-color: #007bff;
    border: 1px solid #007bff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border: 1px solid #0056b3;
  }

  .bg-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
  }

  .bg-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
  }

  a {
    color: #007bff;
  }

  a:hover {
    color: #0056b3;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 form-container">
      <form role="form" method="post" action="" autocomplete="off">
        <h2>請註冊</h2>
        <p>已經是會員? <a href='login'>登入</a></p>
        <hr>
        <?php

        // 檢查是否有錯誤，並顯示錯誤訊息
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<p class="bg-danger">' . $error . '</p>';
          }
        } elseif (isset($_GET['action']) && $_GET['action'] == 'joined') {
          // 如果是註冊成功的情況，顯示成功訊息
          echo "<h2 class='bg-success'>註冊成功!</h2>";
        }

        ?>

        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control input-lg" placeholder="請輸入手機號碼" value="<?php if (isset($error)) {
                                                                                                                        echo htmlspecialchars($_POST['username'], ENT_QUOTES);
                                                                                                                      } ?>" tabindex="1">
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" class="form-control input-lg" placeholder="請輸入電子信箱" value="<?php if (isset($error)) {
                                                                                                                    echo htmlspecialchars($_POST['email'], ENT_QUOTES);
                                                                                                                  } ?>" tabindex="2">
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="請輸入密碼" tabindex="3">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="確認密碼" tabindex="4">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="註冊" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
        </div>
      </form>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>