<?php
/**
 * 耦合使用 Database 物件進行資料庫驗證 username 與 email 是否已存在於資料庫
 */
class UserVeridator {

    private $error;

    /**
     * 驗證是否已登入
     */
    public static function isLogin($loginToken){
        if($loginToken != ''){
          return true; 
        } 
        else{
          return false; 
        }
    }

    /**
     * 可取出錯誤訊息字串陣列
     */
    public function getErrorArray(){
        return $this->error;
    }

    /**
     * 驗證二次密碼輸入是否相符
     */
    public function isPasswordMatch($password, $passwrodConfirm){
if ($password != $passwrodConfirm){
            $this->error[] = 'Passwords do not match.';
            return false;
        }
return true;
    }

    /**
     * 驗證帳號密碼是否正確可登入
     */
public function loginVerification($userid, $password){
  $result = Database::get()->execute('SELECT * FROM users WHERE active = "Yes" AND userid = :userid', array(':userid' => $userid));
  if(isset($result[0]['memberID']) and !empty($result[0]['memberID'])) {
      $passwordObject = new Password();
      if($passwordObject->password_verify($password,$result[0]['password'])){
          return true;
      }
  }
  $this->error[] = 'Wrong userid or password or your account has not been activated.';
  return false;
}

    /**
     * 驗證帳號是否已存在於資料庫中
     */
    public function isuseridDuplicate($userid){
        $result = Database::get()->execute('SELECT userid FROM users WHERE userid = :userid', array(':userid' => $userid));
        if(isset($result[0]['userid']) and !empty($result[0]['userid'])){
          $this->error[] = 'userid provided is already in use.';
          return false;
        }
return true;
    }

    public function isReady2Active($id, $active){
      $result = Database::get()->execute('SELECT userid FROM users WHERE memberID = :memberID AND active = :active', array(':memberID' => $id, ':active' => $active));
      if(isset($result[0]['userid']) and !empty($result[0]['userid'])){
        return true;
      }else{
        $this->error[] = 'userid provided is already in use.';
        return false;
      }
    }   
}