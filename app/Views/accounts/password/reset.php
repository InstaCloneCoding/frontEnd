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
            <p style="color:#8e8e8e;font-size:14px;font-weight:400;">이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다.</p>
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
        <div class="">
            <button class="btnM btnBlue w100" onclick="SendLoginLink()" style="font-weight:400;font-size:14px;">
                <span id="loading">
                    <img class="spinner" src="/images/spinner_2.gif" style="width:30px;height:30px;">
                </span>로그인 링크 보내기 
            </button>
        </div>
        <!-- // -->
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