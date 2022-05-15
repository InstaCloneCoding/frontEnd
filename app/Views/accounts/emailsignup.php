<section class="EmailSignUpComponent">
    <form id="form" method="post">
        <label>
            <input name="userId" placeholder="휴대폰 번호 또는 이메일 주소"><br>
        </label>
        <label>
            <input name="originName" placeholder="성명"><br>
        </label>
        <input name="userName" placeholder="사용자 이름"><br>
        <label>
            <input type="password" name="password" placeholder="비밀번호"><br>
        </label>
    </form>
    <button type="button" onclick="fJoinProc()">회원가입</button>

    <div class="BoxComponent">
        계정이 있으신가요? <a href="/" >로그인</a>
    </div>

    <div class="TextComponent">
    </div>

</section>

<script type="text/javascript">
    function fJoinProc() {
        let form = document.getElementById("form");

        let userBody = {
            "userId" : form[0].value,
            "originName" : form[1].value,
            "userName" : form[2].value,
            "password" : form[3].value
        };

        fetch("/accounts/emailsignup", {
            method: "post",
            headers: { "Content-Type" : "application/x-www-form-urlencoded" },
            body: JSON.stringify(userBody)
        }).then(response => {

            console.log(response);

        })

    }
</script>