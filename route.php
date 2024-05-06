<?php
$route = new Router(Request::uri()); // 使用 .htaccess 排除資料夾名稱後解析 URL
$parameter = strtolower($route->getParameter(1));
// 根據參數決定載入特定頁面並讀取需要的資料

switch ($parameter) {
  // case "test";

  //   include('view/body/test.php');     // 載入登入用的頁面

  //   break;
  case "logout";
    unset($_SESSION['memberID']);
    unset($_SESSION['username']);
    header('Location: login');
    break;

  case "home";
    if (UserVeridator::isLogin(isset($_SESSION['username']) ? $_SESSION['username'] : '')) {
      $title = "點數查詢-歡迎查詢";
      include('view/header/default.php'); // 載入共用的頁首
      include('view/body/home.php');     // 載入登入用的頁面
      include('view/footer/default.php'); // 載入共用的頁尾
    } else {
      header('Location: logout');
    }
    break;

  case "login";
    if (isset($_POST['submit'])) {
      $gump = new GUMP();

      $_POST = $gump->sanitize($_POST);

      $validation_rules_array = array(
        'username'    => 'required|alpha_numeric|max_len,20|min_len,3',
        'password'    => 'required|max_len,20|min_len,3'
      );
      $gump->validation_rules($validation_rules_array);

      $filter_rules_array = array(
        'username' => 'trim|sanitize_string',
        'password' => 'trim',
      );
      $gump->filter_rules($filter_rules_array);

      $validated_data = $gump->run($_POST);

      if ($validated_data === false) {
        $error = $gump->get_readable_errors(false);
      } else {
        // validation successful
        foreach ($validation_rules_array as $key => $val) {
          ${$key} = $_POST[$key];
        }
        $userVeridator = new UserVeridator();
        $userVeridator->loginVerification($username, $password);
        $error = $userVeridator->getErrorArray();

        if (count($error) == 0) {
          $condition = "username = :username";
          $order_by = "1";
          $fields = "*";
          $limit = "LIMIT 1";
          $data_array = array(":username" => $username);
          $result = Database::get()->query("members", $condition, $order_by, $fields, $limit, $data_array);
          $_SESSION['memberID'] = $result[0]['memberID'];
          $_SESSION['username'] = $username;
          header('Location: home');
          exit; // 確保停止後續程式碼執行
        }
      }
    }
    $title = "點數查詢-登入";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/login.php');     // 載入登入用的頁面
    include('view/footer/default.php'); // 載入共用的頁尾
    break;

  case "register":
    // 註冊處理
    if (isset($_POST['submit'])) {
      // 手动检查用户名字段是否为空
      if (isset($_POST['submit'])) {
        // 手动检查用户名字段是否为空
        if (empty($_POST['username'])) {
          $error[] = '手機號碼為必填項目。';
        }
        if (empty($_POST['email'])) {
          $error[] = 'email為必填項目。';
        }
        if (empty($_POST['password'])) {
          $error[] = '密碼為必填項目。';
        }
        if (empty($_POST['passwordConfirm'])) {
          $error[] = '確認密碼為必填項目。';
        }

        // 手动检查密码和确认密码是否匹配
        if ($_POST['password'] !== $_POST['passwordConfirm']) {
          $error[] = '確認密碼與密碼不匹配。';
        }

        // 表单验证
        $gump = new GUMP();
        $_POST = $gump->sanitize($_POST);

        $validation_rules_array = array(
          'username'    => 'alpha_numeric|max_len,50|min_len,2',
          'email'       => 'valid_email',
          'password'    => 'max_len,50|min_len,2',
          'passwordConfirm' => 'max_len,50|min_len,2'
        );
        $gump->validation_rules($validation_rules_array);

        $filter_rules_array = array(
          'username' => 'trim|sanitize_string',
          'email'    => 'trim|sanitize_email',
          'password' => 'trim',
          'passwordConfirm' => 'trim'
        );
        $gump->filter_rules($filter_rules_array);

        $validated_data = $gump->run($_POST);

        // 如果表单验证失败或者错误数组不为空，则显示错误消息
        if ($validated_data === false || !empty($error)) {
          $error = array_merge((array)$error, $gump->get_readable_errors(false));
        } else {
          // validation successful
          foreach ($validation_rules_array as $key => $val) {
            ${$key} = $_POST[$key];
          }
          $userVeridator = new UserVeridator();
          $userVeridator->isPasswordMatch($password, $passwordConfirm);
          $userVeridator->isUsernameDuplicate($username);
          $userVeridator->isEmailDuplicate($email);
          $error = $userVeridator->getErrorArray();
        }

        //if no errors have been created carry on
        if (count($error) == 0) {
          try {
            // 新增到資料庫
            $data_array = array(
              'username' => $username,
              'password' => $password,
              'email' => $email,
            );
            Database::get()->insert("members", $data_array);

            //redirect to index page
            header('Location: register?action=joined');
            exit; // 重定向后确保停止后续代码执行

            //else catch the exception and show the error.
          } catch (PDOException $e) {
            $error[] = $e->getMessage();
          }
        }
      }
    }

    $title = "點數查詢-註冊";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/register.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;


  case "call":
    $title = "聯絡我們";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/call.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;

  // case "shop":
  //   $title = "電商連結";
  //   include('view/header/default.php'); // 載入共用的頁首
  //   include('view/body/shop.php');
  //   include('view/footer/default.php'); // 載入共用的頁尾
  //   break;

  case "site":
    $title = "座位介紹";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/site.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;

  case "drink":
    $title = "餐飲價目表";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/drink.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;

  case "cash":
    $title = "包台價目表";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/cash.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;

  case "index":
    $title = "首頁";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/index.php');
    include('view/footer/shop.php'); // 載入共用的頁尾
    break;

  default:
    $title = "404";
    include('view/header/default.php'); // 載入共用的頁首
    include('view/body/404.php');
    include('view/footer/default.php'); // 載入共用的頁尾
    break;
}
