<section class="MainComponent">
    <div class="BoxComponent">
        <form method="post" id="form" name="form">
            <label for="userId">
                <input type="text" id="userId" name="userId" value="" />
            </label>
            <label for="userPassword">
                <input type="password" id="userPassword" name="userPassword" value="" />
            </label>
        </form>
        <button onclick="fLogin();"> 로그인 </button>
        <button onclick="fJoin();"> 회원가입 </button>
        <a href="/accounts/password/reset"> 비밀번호를 잊으셨나요? </a>
    </div>
</section>
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
