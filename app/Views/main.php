<!-- 로그인박스 -->
<section class="loginWrap">
    <div class="disFlex justCenter" style="margin:0 auto;">
        <!-- 로그인좌측이미지 -->
        <div class="loginLeft">
            <img src="/images/login-main-img.png" alt="로그인좌측이미지">
        </div>
        <!-- // 로그인좌측이미지 -->
        <div class="loginRight">
            <div class="loginInner textCenter">
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
                    <div class="idCompleMsg compleMsg"></div>
                    <div class="idErrorMsg errorMsg"></div>
                    <label for="userPassword">
                        <input type="password" id="userPassword" class="mt10" name="userPassword" placeholder="비밀번호" value="" onkeyup="pwCheckInput()" />
                    </label>
                    <div class="pwCompleMsg compleMsg"></div>
                    <div class="pwErrorMsg errorMsg"></div>
                </form>
                <!-- // ID / PW -->
                <div>
                    <button onclick="fLogin();" class="loginBtn btnM w100 mt10">
                        <span id="loading">
                            <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                        </span>로그인
                    </button>
                </div>
                <!-- 비밀번호를 잊으셨나요? -->
                <div class="pwFind textCenter">
                    <a href="/accounts/password/reset">비밀번호를 잊으셨나요?</a>
                </div>
                <!-- // 비밀번호를 잊으셨나요? -->
                <!-- 계정이 없으신가요? -->
                <div class="joinBtnWrap">
                    <span>계정이 없으신가요?</span>
                    <button onclick="fJoin();" class="joinBtn">가입하기</button>
                </div>
                <!-- // 계정이 없으신가요? -->
            </div>
            <!-- 앱을 다운로드하세요 -->
            <div class="appDownWrap">
                <p class="disFlex justCenter">앱을 다운로드하세요.</p>
                <div class="appDownBtn disFlex justCenter">  
                    <img src="/images/apple-btn-img.png" alt="애플앱다운로드" class="btnM mr10">
                    <img src="/images/google-btn-img.png" alt="구글앱다운로드" class="btnM">
                </div>
            </div>
            <!-- // 앱을 다운로드하세요 -->
        </div>
    </div>
</section>
<!-- // 로그인박스 -->

<script type="text/javascript">

        function emailCheck (email) { // 이메일 정규식
            let reg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            return reg.test(email);
        }
        function pwCheck (password) { // 비밀번호 정규식
            let checkPw = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/;
            return checkPw.test(password);
        }

        let logError = document.querySelector(".idErrorMsg"); // 이메일 오류 텍스트
        let logComple = document.querySelector(".idCompleMsg"); // 이메일 정상 텍스트
        let pwComple = document.querySelector(".pwCompleMsg"); // 비밀번호 오류 텍스트
        let pwError = document.querySelector(".pwErrorMsg"); // 비밀번호 정상 텍스트

        document.querySelector('.loginBtn').disabled = true;

        function emailCheckInput() { // 이메일 체크

            let email  = document.getElementById('userId').value; // 이메일

            if (email =="") {
                logError.innerHTML = ""
            }
            else if (!emailCheck(email)) {
                logComple.innerHTML = ""
                logError.innerHTML = "이메일 정확하게 입력해주세요."
                document.getElementById("userId").focus();
            } else {
                logComple.innerHTML = "이메일 정확하게 입력했습니다."
                logError.innerHTML = ""
            }
        }
        function pwCheckInput () { // 비밀번호 체크

            let email  = document.getElementById('userId').value; // 이메일 
            let password  = document.getElementById('userPassword').value; // 비밀번호

            if (email =="") {
                logError.innerHTML = "이메일 입력하세요"
                document.getElementById("userPassword").value = "";
                document.getElementById("userId").focus();
                return false;
            }
            else if (!pwCheck(password)) {
                pwComple.innerHTML = ""
                pwError.innerHTML = "비밀번호 정확하게 입력해주세요."
            } else {
                pwComple.innerHTML = "비밀번호 정확하게 입력했습니다."
                pwError.innerHTML = ""
                document.querySelector('.loginBtn').disabled = false;
            }
        }
</script>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
