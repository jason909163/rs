
<form class="px-4 py-3">
    <div class="mb-3">
        <label for="exampleDropdownFormEmail1" class="form-label">手機號碼</label>
        <input type="email" class="form-control custom-input" id="exampleDropdownFormEmail1">
    </div>
    <div class="mb-3">
        <label for="exampleDropdownFormPassword1" class="form-label">密碼</label>
        <input type="password" class="form-control custom-input" id="exampleDropdownFormPassword1">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
                記住我
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">登入</button>
</form>

<div style="margin-left: 80px;">
  <a class="dropdown-item" href="#">註冊</a>
  <a class="dropdown-item" href="#">忘記密碼</a>
</div>

<style>
    .custom-input {
        width: 300px; /* 自定义输入框的宽度 */
        height: 30px; /* 自定义输入框的高度 */
        font-size: 14px; /* 自定义输入框的字体大小 */
        /* 其他样式调整 */
    }
</style>
