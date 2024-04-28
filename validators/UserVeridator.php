<?php
/**
 * 耦合使用 Database 物件進行資料庫驗證 username 與 email 是否已存在於資料庫
 */
class UserVeridator {

    private $error;

    /**
     * 驗證是否已登入
     */
    public static function isLogin($username){
        if($username != ''){
            return true; 
        } else{
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
            $this->error[] = '請輸入一樣的密碼.';
            return false;
        }
		return true;
    }

    /**
    * 驗證帳號密碼是否正確可登入
    */
    public function loginVerification($username, $password){
        $result = Database::get()->execute('SELECT * FROM members WHERE username = :username', array(':username' => $username));
        
        // 確保資料庫查詢是否成功
        if($result) {
            // echo "Database query successful.<br>";
        
            // 確保是否找到了用戶
            if(isset($result[0]['memberID']) and !empty($result[0]['memberID'])) {
                // echo "User found in database.<br>";
            }
            else {
                // echo "User not found in database.<br>";
            }
                // 檢查密碼是否匹配
            if($password === $result[0]['password']){
                // echo "Password matched.<br>";
                return true;
            } 
            else {
                // echo "Password does not match.<br>";
            }
             
        } else {
            // echo "Database query failed.<br>";
        }
        
        $this->error[] = '使用者名稱或密碼錯誤。';
        return false;
    }
    


    /**
     * 驗證帳號是否已存在於資料庫中
     */
    public function isUsernameDuplicate($username){
        $result = Database::get()->execute('SELECT username FROM members WHERE username = :username', array(':username' => $username));
        if(isset($result[0]['username']) and !empty($result[0]['username'])){
          $this->error[] = '提供的使用者名稱已被使用。';
          return false;
        }
		return true;
    }

    /**
     * 驗證信箱是否已存在於資料庫中
     */
    public function isEmailDuplicate($email){
        $result = Database::get()->execute('SELECT email FROM members WHERE email = :email', array(':email' => $email));
        if(isset($result[0]['email']) AND !empty($result[0]['email'])){
            $this->error[] = '提供的電子郵件已被使用。';
            return false;
        }
		return true;
    }   

        /**
 * 驗證註冊資訊是否正確
 */
    public function registerVerification($username, $email){
    // 檢查使用者名稱是否重複
    $usernameDuplicate = $this->isUsernameDuplicate($username);
    if (!$usernameDuplicate) {
        return false;
    }
    
    // 檢查電子郵件是否重複
    $emailDuplicate = $this->isEmailDuplicate($email);
    if (!$emailDuplicate) {
        return false;
    }

    // 如果通過以上檢查，返回 true
    return true;
}
}