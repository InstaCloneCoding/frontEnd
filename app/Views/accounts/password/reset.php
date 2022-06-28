<section class="reset commonWrap disFlex justifyC">
    <div class="innerWrap">
        <div class="inner inner01">
            <!-- img -->
            <div class="textC">
                <img src="/images/reset-img.png" alt="">
            </div>
            <!-- // img -->
            <!-- 로그인에 문제가 있나요? -->
            <div class="resetTxt commonTxt textC fwB">
                로그인에 문제가 있나요?
            </div>
            <!-- // 로그인에 문제가 있나요? -->
            <!-- 이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다 -->
            <div class="commonTxt mb15 textC fw400">
                이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다.
            </div>
            <!-- // 이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다 -->
            <!-- 이메일 입력 -->
            <div class="pb15">
                <label>
                    <input type="text" id="userInfo" name="userInfo" value="" placeholder="이메일" onkeyup="userInfoCheck()" />
                </label>
                <div class="msg" id="userInfoMsg"></div>
            </div>
            <!--// 이메일 입력 -->
            <!-- 로그인 링크 보내기 -->
            <div>
                <button class="loginLinkBtn btnM w100 fw400 mb15" onclick="SendLoginLink()">
                    <span id="loading">
                        <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                    </span>
                    <span>로그인 링크 보내기</span>
                </button>
            </div>
            <!-- // 로그인 링크 보내기 -->
            <!-- 인증하기 -->
            <div id="confirmAuthCode" class="authCode mb15" style="display:none">
                <div class="pb15">
                    <label>
                        <input type="password" name="authCode" id="authCode" value="" maxlength="6" placeholder="인증코드" onkeyup="authCodeCheck()" />
                        <input type="hidden" name="userId" id="userId" value=""/>
                    </label>
                    <div class="msg" id="authMsg"></div>
                </div>
                <div>
                    <button class="authBtn btnM btnBlue w100 fw400" onclick="confirmAuthCode()">인증하기</button>
                </div>
            </div>
            <!-- // 인증하기 -->
            <!-- 비밀번호 재설정 -->
            <div id="resetPassword" class="resetPassword mb15" style="display:none">
                <div class="pb15">
                    <label>
                        <input type="password" name="newPassword" id="newPassword" value="" placeholder="새로운 비밀번호" onkeyup="newPwCheck()" />
                    </label>
                    <label>
                        <input type="password" name="rePassword" id="rePassword"  class="mt10" value="" placeholder="새로운 비밀번호 재입력" onkeyup="newPwOkCheck()" />
                    </label>
                    <div class="msg" id="rePwOkMsg"></div>
                </div>
                <div>
                    <button class="resetPwBtn btnM btnBlue w100 fw400" onclick="resetPassword()" style="font-size:14px;">
                        <span id="loading"><img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;"></span>
                        <span>비밀번호 재설정</span>
                    </button>
                </div>
            </div>
            <!-- // 비밀번호 재설정 -->
            <!-- 새 계정 만들기 -->
            <div class="newAccountWrap textC">
                <a href="/accounts/emailsignup">새 계정 만들기</a>
            </div>
            <!-- // 새 계정 만들기 -->
            <!-- 로그인으로 돌아가기 -->
            <div>
                <button class="backBtn btnNormal w100 btnL" onclick="goToMain()">로그인으로 돌아가기</button>
            </div>
            <!-- // 로그인으로 돌아가기 -->
        </div>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/const.js"></script>
<script type="text/javascript" src="/script/reset.js"></script>