<!-- 회원가입 -->
<section class="signUpWrap commonWrap disFlex justifyC m20">
    <div class="innerWrap">
        <div class="inner inner01">
            <!-- 로그인로고이미지 -->
            <div class="loginLogo textC">
                <img src="/images/logo.png" alt="로그인로고이미지">
            </div>
            <!-- // 로그인로고이미지 -->
            <!-- 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <div class="commonTxt signUpTxt signUpTxt01 textC">
                <p class="fwB">친구들의 사진과 동영상을 보려면 가입하세요.</p>
            </div>
            <!-- // 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <!-- 가입정보 -->
            <form id="form" method="post">
                <div>
                    <label for="userEmail">
                        <input class="mt10" name="emailOrPhone" id="userEmail" placeholder="이메일 주소 또는 핸드폰번호" onkeyup="emailCheckInput()">
                    </label>
                    <div class="emailCompleMsg msg compleMsg"></div>
                    <div class="emailErrorMsg msg errorMsg"></div>
                    <label for="userName">
                        <input class="mt10" name="originName" id="userName" placeholder="성명" maxlength="20" onkeyup="nameCheckInput()">
                    </label>
                    <div class="nameErrorMsg errorMsg"></div>
                    <label for="userId">
                        <input class="mt10" name="userId" id="userId" placeholder="사용자 이름" maxlength="20" onkeyup="idCheckInput()">
                    </label>
                    <div class="idErrorMsg msg errorMsg"></div>
                    <label for="userPassword">
                        <input class="mt10" type="password" name="userPassword" id="userPassword" placeholder="비밀번호" onkeyup="pwCheckInput()">
                    </label>
                    <div class="pwCompleMsg msg compleMsg"></div>
                    <div class="pwErrorMsg msg errorMsg"></div>
                </div>
            </form>
            <!-- // 가입정보 -->
            <!-- 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <div class="commonTxt signUpTxt signUpTxt02 textC">
                서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다.
            </div>
            <!-- // 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <!-- 가입하기 버튼 -->
            <div>
                <button type="button" onclick="fJoinProc()" class="signUpBtn btnM w100">
                    <span id="loading"><img class="spinner" src="/images/spinner_2.gif" style="width: 30px; height: 30px;"></span>가입
                </button>
            </div>
            <!-- // 가입하기 버튼 -->
        </div>
        <!-- 계정이 있으신가요? -->
        <div class="accountBtnWrap inner inner02 textC">
                <p class="inlineB">계정이 있으신가요?</p>
                <a href="/">로그인</a>
        </div>
        <!-- //계정이 있으신가요? -->
        <!-- 앱을 다운로드하세요 -->
        <div class="appDownWrap">
            <p class="disFlex justifyC">앱을 다운로드하세요.</p>
            <div class="appDownBtn disFlex justifyC">
                <img src="/images/apple-btn-img.png" alt="" class="btnM mr10">
                <img src="/images/google-btn-img.png" alt="" class="btnM">
            </div>
        </div>
        <!-- // 앱을 다운로드하세요 -->
    </div>
</section>
<script type="text/javascript">

        function emailCheck (email) { // 이메일 정규식
            let reg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            return reg.test(email);
        }

        function pwCheck (password) { // 비밀번호 정규식
            let checkPw = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/;
            return checkPw.test(password);
        }

        let emailError = document.querySelector(".emailErrorMsg"); // 이메일 오류 텍스트
        let emailComple = document.querySelector(".emailCompleMsg"); // 이메일 정상 텍스트
        let nameError = document.querySelector(".nameErrorMsg"); // 비밀번호 정상 텍스트
        let idError = document.querySelector(".idErrorMsg"); // 비밀번호 정상 텍스트
        let pwComple = document.querySelector(".pwCompleMsg"); // 비밀번호 오류 텍스트
        let pwError = document.querySelector(".pwErrorMsg"); // 비밀번호 정상 텍스트

        document.querySelector('.signUpBtn').disabled = true;

        function emailCheckInput() {
            let email  = document.getElementById('userEmail').value; 
            if (email == "") {
                emailError.innerHTML = ""
            }
            else if (!emailCheck(email)) {
                emailComple.innerHTML = ""
                emailError.innerHTML = "이메일 정확하게 입력해주세요."
            } else {
                emailComple.innerHTML = "이메일 정확하게 입력했습니다."
                emailError.innerHTML = ""
            }
        }
        function nameCheckInput () {
            let email  = document.getElementById('userEmail').value; 
            if (email == "") {
                emailError.innerHTML = "이메일 입력하세요"
                document.getElementById("userName").value = "";
                document.getElementById("userEmail").focus();
            } else if (emailComple.innerHTML == "") {
                document.getElementById("userName").value = "";
                document.getElementById("userEmail").focus();
            } else {
                nameError.innerHTML = ""
            }
        }

        function idCheckInput () {
            let email  = document.getElementById('userEmail').value; 
            let name = document.getElementById('userName').value;
            if (name == "") {
                nameError.innerHTML = "성명을 입력해주세요"
                document.getElementById("userId").value = "";
                document.getElementById("userName").focus();
                return false;
            } else {
                idError.innerHTML = ""
            }
        }

        function pwCheckInput () {

            let userId = document.getElementById('userId').value;
            let password  = document.getElementById('userPassword').value; // 비밀번호
            
            if (userId == "") {
                idError.innerHTML = "사용자 이름을 입력해주세요"
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
                document.querySelector('.signUpBtn').disabled = false;
            }
        }   
</script>
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
