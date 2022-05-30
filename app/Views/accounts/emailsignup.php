<section class="dis-flex just-c m20" style="max-width:460px;margin:40px auto;flex-direction:column">
    <div class="inner-box">
        <!-- 로그인로고이미지 -->
        <div class="text-center">
            <img src="/images/logo.png" alt="로그인로고이미지">
        </div>
        <!-- // 로그인로고이미지 -->
        <!-- 친구들의 사진과 동영상을 보려면 가입하세요. -->
        <div class="sign-text">
            <p style="margin:15px 0;text-align:center;font-weight:bold;color:#8e8e8e;font-size:12px;">
                친구들의 사진과 동영상을 보려면 가입하세요.
            </p>
        </div>
        <!-- // 친구들의 사진과 동영상을 보려면 가입하세요. -->
        <!-- 가입정보 -->
        <form id="form" method="post">
            <div>
                <label>
                    <input class="mt10" name="joinCode" placeholder="휴대폰 번호 또는 이메일 주소">
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
            <div class="text-center warning">
                <p style="font-size:12px;color:#8e8e8e;text-align:center;">
                    서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다.
                </p>
            </div>
        </div>
        <!-- // 서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다. -->
        <!-- 가입하기 버튼 -->
        <button type="button" onclick="fJoinProc()" class="btnM btnBlue w100">
            <span id="loading"><img class="spinner" src="/images/spinner_2.gif" style="width: 30px; height: 30px;"></span>가입
        </button>
        <!-- // 가입하기 버튼 -->
    </div>
    <!-- 계정이 있으신가요? -->
    <div class="inner-box text-center mt10">
        <p style="font-size:14px;">
            계정이 있으신가요?<a href="/">로그인</a>
        </p>
    </div>
    <!-- //계정이 있으신가요? -->
    <!-- 앱을 다운로드하세요 -->
    <div class="app-down-wrap">
        <p class="dis-flex just-c" style="margin:20px 0;">앱을 다운로드하세요.</p>
        <div class="app-down-btn dis-flex just-c">
            <img src="/images/apple-btn-img.png" alt="" class="btnM mr10">
            <img src="/images/google-btn-img.png" alt="" class="btnM">
        </div>
    </div>
    <!-- // 앱을 다운로드하세요 -->
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
