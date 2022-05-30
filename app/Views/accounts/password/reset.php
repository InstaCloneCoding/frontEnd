<section class="container">
    <div class="inner_box">

        <div class="fw800 mt10 mb10">
            로그인에 문제가 있나요?
        </div>

        <div>
            이메일 주소를 입력하시면 계정에 다시 액세스할 수 있는 링크를 보내드립니다.
        </div>

        <div >
            <label>
                <input type="text" id="userInfo" name="userInfo" value="" placeholder="이메일"/>
            </label>
        </div>

        <div>
            <button class="btnBlue w100 h30 fw800" onclick="SendLoginLink()">
                <span id="loading">
                    <img class="spinner" src="/images/spinner_2.gif" style="width: 30px; height: 30px;">
                </span>
                로그인 링크 보내기
            </button>
        </div>
        <div>
            <a href="/accounts/emailsignup"> 새 계정 만들기 </a>
        </div>
    </div>

    <div>
        <button class="btnNormal w100 h60" onclick="goToMain()">
            로그인으로 돌아가기
        </button>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/reset.js"></script>