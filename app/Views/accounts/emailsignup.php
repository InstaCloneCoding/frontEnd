<!-- 회원가입 -->
<section class="signUp commonWrap">
    <div class="innerWrap">
        <div class="inner inner01">
            <!-- 로그인로고이미지 -->
            <div class="loginLogo textC"><img src="/images/logo.png" alt="로그인로고이미지"></div>
            <!-- // 로그인로고이미지 -->
            <!-- 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <div class="commonTxt signUpTxt"><p class="fwB">친구들의 사진과 동영상을 보려면 가입하세요.</p></div>
            <!-- // 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <!-- 가입정보 -->
            <form id="form" method="post">
                <div>
                    <label for="userEmail"><input class="mt10" name="emailOrPhone" id="userEmail" placeholder="이메일 주소" onkeyup="joinEmailCheck()"></label>
                    <div class="msg" id="joinEmailMsg"></div>
                    <label for="userName"><input class="mt10" name="originName" id="userName" placeholder="성명" maxlength="20" onkeyup="joinNameCheck()"></label>
                    <div class="msg" id="joinNameMsg"></div>
                    <label for="userId"><input class="mt10" name="userId" id="userId" placeholder="사용자 이름" maxlength="20" onkeyup="joinIdCheck()"></label>
                    <div class="msg" id="joinIdMsg"></div>
                    <label for="userPassword"><input class="mt10" type="password" name="userPassword" id="userPassword" placeholder="비밀번호" onkeyup="joinPwCheck()"></label>
                    <div class="msg" id="joinPwMsg"></div>
                </div>
            </form>
            <!-- // 가입정보 -->
            <!-- 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <div class="commonTxt signUpTxt">
                서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다.
            </div>
            <!-- // 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <!-- 가입하기 버튼 -->
            <div>
                <button type="button" onclick="fJoinProc()" class="signUpBtn btnM">
                    <span id="loading"><img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;"></span>가입
                </button>
            </div>
            <!-- // 가입하기 버튼 -->
        </div>
        <!-- 계정이 있으신가요? -->
        <div class="accountBtnWrap inner inner02 textC">
            <p class="inlineB">계정이 있으신가요?</p><a href="/">로그인</a>
        </div>
        <!-- //계정이 있으신가요? -->
        <!-- 앱을 다운로드하세요 -->
        <div class="appDownWrap">
            <p>앱을 다운로드하세요.</p>
            <div class="appDownBtn">
                <img src="/images/apple-btn-img.png" alt="" class="btnM mr10">
                <img src="/images/google-btn-img.png" alt="" class="btnM">
            </div>
        </div>
        <!-- // 앱을 다운로드하세요 -->
    </div>
</section>
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/const.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
