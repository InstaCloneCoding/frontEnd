<!-- 회원가입 -->
<section class="commonWrap signUpWrap disFlex justCenter m20">
    <div class="innerWrap">
        <div class="test">
            <!-- 로그인로고이미지 -->
            <div class="textCenter">
                <img src="/images/logo.png" alt="로그인로고이미지">
            </div>
            <!-- // 로그인로고이미지 -->
            <!-- 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <div class="signUpTxt textCenter">
                <p class="fwB">친구들의 사진과 동영상을 보려면 가입하세요.</p>
            </div>
            <!-- // 친구들의 사진과 동영상을 보려면 가입하세요. -->
            <!-- 가입정보 -->
            <form id="form" method="post">
                <div>
                    <label>
                        <input class="mt10" name="emailOrPhone" placeholder="휴대폰 번호 또는 이메일 주소">
                    </label>
                    <label>
                        <input class="mt10" name="originName" placeholder="성명">
                    </label>
                    <label>
                        <input class="mt10" name="userId" placeholder="사용자 이름">
                    </label>
                    <label>
                        <input class="mt10" type="password" name="userPassword" placeholder="비밀번호">
                    </label>
                </div>
            </form>
            <!-- // 가입정보 -->
            <!-- 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <div class="" style="margin:20px 0;">
                <div class="warning textCenter">
                    <p style="line-height:16px;font-size:12px;color:#8e8e8e;text-align:center;">
                        서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다.
                    </p>
                </div>
            </div>
            <!-- // 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
            <!-- 가입하기 버튼 -->
            <div>
                <button type="button" onclick="fJoinProc()" class="btnM btnBlue w100">
                    <span id="loading"><img class="spinner" src="/images/spinner_2.gif" style="width: 30px; height: 30px;"></span>가입
                </button>
            </div>
            <!-- // 가입하기 버튼 -->
        </div>
        <!-- 계정이 있으신가요? -->
        <div class="test textCenter" style="margin-top:20px;padding:30px;">
            <p style="font-size:14px;">
                계정이 있으신가요?<a href="/">로그인</a>
            </p>
        </div>
        <!-- //계정이 있으신가요? -->
        <!-- 앱을 다운로드하세요 -->
        <div class="appDownWrap">
            <p class="disFlex justCenter">앱을 다운로드하세요.</p>
            <div class="appDownBtn disFlex justCenter">
                <img src="/images/apple-btn-img.png" alt="" class="btnM mr10">
                <img src="/images/google-btn-img.png" alt="" class="btnM">
            </div>
        </div>
        <!-- // 앱을 다운로드하세요 -->
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
