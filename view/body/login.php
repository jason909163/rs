

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
      <form role="form" method="post" action="login" autocomplete="off">
        <h2>請登入</h2>
        <p><a href='register'>回到註冊頁面</a></p>
        <hr>

        <?php
        // 檢查是否有錯誤訊息
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<p class="bg-danger">' . "使用者名稱或密碼錯誤" . '</p>';
          }
        }

        ?>
        <div class="form-group">
          <input type="text" name="username" id="username" class="form-control input-lg" placeholder="請輸入電話" tabindex="1">
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="請輸入密碼" tabindex="3">
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="登入" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
        </div>
      </form>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
