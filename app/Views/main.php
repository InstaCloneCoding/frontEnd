<!-- 로그인박스 -->
<section class="loginWrap">
    <div class="disFlex justifyC" style="margin:0 auto;">
        <!-- 로그인좌측이미지 -->
        <div class="loginLeft">
            <img src="/images/login-main-img.png" alt="로그인좌측이미지">
        </div>
        <!-- // 로그인좌측이미지 -->
        <div class="loginRight">
            <div class="loginInner textC">
                <!-- 로그인 로고 -->
                <div class="loginLogo pb30">
                    <img src="/images/login-logo.png" alt="로그인로고이미지">
                </div>
                <!-- // 로그인 로고 -->
                <!-- ID / PW -->
                <form method="post" id="form" name="form">
                    <label for="userId">
                        <input type="text" id="userId" name="userId" placeholder="이메일" value="" onkeyup="emailCheckInput()" />
                    </label>
                    <div class="msg msg1" id="idMsg"></div>
                    <label for="userPassword">
                        <input type="password" id="userPassword" class="mt10" name="userPassword" placeholder="비밀번호" value="" onkeyup="pwCheckInput()" />
                    </label>  
                    <div class="msg msg2" id="pwMsg"></div>
                </form>
                <!-- // ID / PW -->
                <div>
                    <button onclick="fLogin();" class="loginBtn btnM w100 mt10">
                        <span id="loading">
                            <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                        </span>로그인
                    </button>
                    <div class="msg" id="loginMsg" style="text-align:center"></div>
                </div>
                <!-- 비밀번호를 잊으셨나요? -->
                <div class="pwFind textC">
                    <a href="/accounts/password/reset">비밀번호를 잊으셨나요?</a>
                </div>
                <!-- // 비밀번호를 잊으셨나요? -->
                <!-- 계정이 없으신가요? -->
                <div class="joinBtnWrap">
                    <p class="inlineB">계정이 없으신가요?</p>
                    <button onclick="fJoin();" class="joinBtn">가입하기</button>
                </div>
                <!-- // 계정이 없으신가요? -->
            </div>
            <!-- 앱을 다운로드하세요 -->
            <div class="appDownWrap">
                <p class="disFlex justifyC">앱을 다운로드하세요.</p>
                <div class="appDownBtn disFlex justifyC">
                    <img src="/images/apple-btn-img.png" alt="애플앱다운로드" class="btnM mr10">
                    <img src="/images/google-btn-img.png" alt="구글앱다운로드" class="btnM">
                </div>
            </div>
            <!-- // 앱을 다운로드하세요 -->
        </div>
    </div>
</section>
<!-- // 로그인박스 -->
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/const.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
