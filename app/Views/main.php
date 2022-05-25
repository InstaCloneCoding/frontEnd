<section class="login-box dis-flex just-c">
    <div class="login-left-test">
        <img src="/images/login-main-img.png" alt="로그인좌측이미지">
    </div>
    <div>
        <div class="login-inner-box">
            <!-- 로그인 로고 -->
            <div class="login-logo-box pb30">
                <img src="/images/login-logo.png" alt="로그인로고이미지">
            </div>
            <!-- // 로그인 로고 -->
            <!-- ID / PW -->
            <form method="post" id="form" name="form">
                <label for="userId"><input type="text" id="userId" name="userId" placeholder="전화번호, 사용자 이름 또는 이메일" value=""/></label>
                <label for="userPassword"><input type="password" id="userPassword" class="mt10" name="userPassword" placeholder="비밀번호" value="" /></label>
            </form>
            <!-- // ID / PW -->
            <button onclick="fLogin();" class="login-btn btnM btnBlue w100 mt10"> 로그인 </button>
            <!-- 비밀번호를 잊으셨나요? -->
            <div class="pw-find-box">
                <a href="/accounts/password/reset"s> 비밀번호를 잊으셨나요? </a>
            </div>
            <!-- // 비밀번호를 잊으셨나요? -->
            <!-- 계정이 없으신가요? -->
            <div class="join-btn-box">
                <span>계정이 없으신가요?</span>
                <button onclick="fJoin();" class="join-btn">가입하기</button>
            </div>
            <!-- // 계정이 없으신가요? -->
        </div>
        <div style="margin:10px 20px 10px 20px;">
            <span class="dis-flex just-c">앱을 다운로드하세요.</span>
            <div class="dis-flex just-c"style="margin:10px 0;">
                <img src="/images/apple-btn-img.png" alt="" style="width:135px;height:40px;margin-right:10px;">
                <img src="/images/google-btn-img.png" alt="" style="width:135px;height:40px;">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
