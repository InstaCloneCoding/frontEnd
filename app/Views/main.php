<section class="MainComponent">
    <div class="BoxComponent">
        <form method="post" id="form" name="form">
            <label for="user_id">
                <input type="text" id="user_id" name="user_id" value="" />
            </label>
            <label for="user_password">
                <input type="password" id="user_password" name="user_password" value="" />
            </label>
        </form>
        <button onclick="fLogin();"> 로그인 </button>
        <button onclick="fJoin();"> 회원가입 </button>
        <a onclick="fFindPassword();"> 비밀번호를 잊으셨나요? </a>
    </div>
</section>
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
