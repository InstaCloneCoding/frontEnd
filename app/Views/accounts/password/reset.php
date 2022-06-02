<section class="commonWrap resetWrap disFlex justCenter m20">
    <div class="innerWrap">
        <div class="inner inner01">
            <div class="textCenter">
                <img src="/images/reset-img.png" alt="">
            </div>
            <!-- -->
            <div class="commonTxt resetTxt mt10 mb10 textCenter fwB">
                <p>로그인에 문제가 있나요?</p>
            </div>
            <!-- // -->
            <!-- -->
            <div class="commonTxt mb15 textCenter">
                <p class="fw400">이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다.</p>
            </div>
            <!-- // -->
            <!-- -->
            <div class="mb15">
                <label>
                    <input type="text" id="userInfo" name="userInfo" value="" placeholder="이메일" class=""/>
                </label>
            </div>
            <!--// -->
            <!-- -->
            <div class="">
                <button class="loginLinkBtn btnM btnBlue w100 fw400 mb15" onclick="SendLoginLink()">
                    <span id="loading">
                        <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                    </span>로그인 링크 보내기
                </button>
            </div>
            <!-- // -->

            <div id="confirmAuthCode" class="authCode mb15" style="display: none">
                <label>
                    <input type="text" name="authCode" id="authCode" value="" class="mb10" placeholder="인증코드"/>
                    <input type="hidden" name="userId" id="userId" value=""/>
                </label>
                <button class="btnM btnBlue w100" onclick="confirmAuthCode()" style="font-weight:400;font-size:14px;">
                    인증하기
                </button>
            </div>

            <!-- -->
            <div id="resetPassword" class="resetPassword mb15" style="display: none">
                <label>
                    <input type="password" name="newPassword" id="newPassword" value="" placeholder="새로운 비밀번호"/>
                </label>
                <label>
                    <input type="password" name="rePassword" id="rePassword" class="mb10" value=""
                           placeholder="새로운 비밀번호 재입력"/>
                </label>
                <div class="mb15">
                    <button class="btnM btnBlue w100" onclick="resetPassword()" style="font-weight:400;font-size:14px;">
                <span id="loading">
                    <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                </span>비밀번호 재설정
                    </button>
                </div>
            </div>

            <!-- -->
            <div class="newAccountWrap textCenter">
                <a href="/accounts/emailsignup"> 새 계정 만들기 </a>
            </div>
            <!-- // -->
            <!-- -->
            <div>
                <button class="backBtn btnNormal w100 btnL" onclick="goToMain()">
                    로그인으로 돌아가기
                </button>
            </div>
            <!-- // -->
        </div>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/reset.js"></script>