<section class="container m20">
    <div class="container sign-box">
        <div class="inner_box">

            <div class="text_center">
                <img src="/images/logo.png" alt="로그인로고이미지">
            </div>

            <div class="sign-text">
                친구들의 사진과 동영상을 보려면 가입하세요.
            </div>
            <form id="form" method="post">
                <div>
                    <label>
                        <input class="m3" name="emailOrPhone" placeholder="휴대폰 번호 또는 이메일 주소"><br>
                    </label>
                    <label>
                        <input class="m3" name="originName" placeholder="성명"><br>
                    </label>
                    <label>
                        <input class="m3" name="userId" placeholder="사용자 이름"><br>
                    </label>
                    <label>
                        <input class="m3" type="password" name="userPassword" placeholder="비밀번호"><br>
                    </label>
                </div>
            </form>

            <div class="m10">
                <div class="text_center warning">
                    서비스를 이용하는 사람이 회원님의 연락처 정보를 Instagram에 업로드했을 수도 있습니다.
                </div>
            </div>

            <button type="button" onclick="fJoinProc()" class="btnBlue sign-btn m3">
                <span id="loading">
                    <img class="spinner" src="/images/spinner_2.gif" style="width: 30px; height: 30px;">
                </span>
                가입
            </button>

        </div>
    </div>

    <div>
        <div class="inner_box mt10">
            <div class="text_center">
                계정이 있으신가요? <a href="/">로그인</a>
            </div>
        </div>
    </div>

    <div style="margin:10px 20px 10px 20px;">
        <span class="dis-flex just-c">앱을 다운로드하세요.</span>
        <div class="dis-flex just-c"style="margin:10px 0;">
            <img src="/images/apple-btn-img.png" alt="" style="width:135px;height:40px;margin-right:10px;">
            <img src="/images/google-btn-img.png" alt="" style="width:135px;height:40px;">
        </div>
    </div>

</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
