<section class="commonWrap resetWrap disFlex justCenter m20">
    <div class="innerWrap test">
        <div class="textCenter">
            <img src="/images/reset-img.png" alt="">
        </div>
        <!-- -->
        <div class="mt10 mb10 textCenter fwB">
            <p>로그인에 문제가 있나요?</p>
        </div>
        <!-- // -->
        <!-- -->
        <div class="mb15 textCenter">
            <p style="color:#8e8e8e;font-size:14px;font-weight:400;">이메일 주소를 입력하시고 계정에 등록이 되어있다면 인증코드를 보내드립니다.</p>
            <p style="color:#8e8e8e;font-size:14px;font-weight:400;">인증코드가 인증되면 비밀번호를 초기화할 수 있습니다.</p>
        </div>
        <!-- // -->
        <!-- -->
        <div class="mb15">
            <label>
                <input type="text" id="userInfo" name="userInfo" value="" placeholder="이메일" class="" />
            </label>
        </div>
        <!--// -->
        <!-- -->
        <div class="mb15">
            <button class="btnM btnBlue w100" onclick="SendLoginLink()" style="font-weight:400;font-size:14px;">
                <span id="loading" style="display: none;">
                    <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                </span>인증 메일 보내기
            </button>
        </div>
        <!-- // -->

        <div id="confirmAuthCode" class="authCode mb15" style="display: none">
            <label>
                <input type="text" name="authCode" id="authCode" value="" class="mb10" placeholder="인증코드"/>
                <input type="hidden" name="userId" id="userId" value="" />
            </label>

            <div class="mb15">
                <button class="btnM btnBlue w100" onclick="confirmAuthCode()" style="font-weight:400;font-size:14px;">
                <span id="loading">
                    <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                </span>인증하기
                </button>
            </div>
        </div>

        <!-- -->
        <div id="resetPassword" class="resetPassword mb15" style="display: none">
            <label>
                <input type="password" name="newPassword" id="newPassword"  value="" placeholder="새로운 비밀번호"/>
            </label>
            <label>
                <input type="password" name="rePassword" id="rePassword" class="mb10" value="" placeholder="새로운 비밀번호 재입력"/>
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
        <div class="textCenter" style="margin:50px 0;">
            <a href="/accounts/emailsignup"> 새 계정 만들기 </a>
        </div>
        <!-- // -->
        <!-- -->
        <div>
            <button class="btnNormal w100 btnL" onclick="goToMain()" style="border:1px solid #dbdbdb">
                로그인으로 돌아가기
            </button>
        </div>
        <!-- // -->
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/reset.js"></script>