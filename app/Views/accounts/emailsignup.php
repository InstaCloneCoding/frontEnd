<section class="EmailSignUpComponent">
    <form id="form" method="post">
        <label>
            <input name="emailOrPhone" placeholder="휴대폰 번호 또는 이메일 주소"><br>
        </label>
        <label>
            <input name="originName" placeholder="성명"><br>
        </label>
        <input name="userId" placeholder="사용자 이름"><br>
        <label>
            <input type="password" name="userPassword" placeholder="비밀번호"><br>
        </label>
    </form>
    <button type="button" onclick="fJoinProc()">회원가입</button>

    <div class="BoxComponent">
        계정이 있으신가요? <a href="/" >로그인</a>
    </div>

    <div class="TextComponent">
    </div>
</section>
<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/join.js"></script>
