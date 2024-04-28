<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" action="login" autocomplete="off">
                <h2>請登入</h2>
                <p><a href='register'>回到註冊頁面</a></p>
                <hr>

                <?php
                // 檢查是否有錯誤訊息
                if(isset($error)){
                    foreach($error as $error){
                        echo '<p class="bg-danger">'.$error.'</p>';
                    }
                }
                // 檢查是否有特定操作
                if(isset($_GET['action'])){

                    // 檢查操作類型
                    switch ($_GET['action']) {
                        case 'active':
                            echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
                            break;
                        case 'reset':
                            echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
                            break;
                        case 'resetAccount':
                            echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
                            break;
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
