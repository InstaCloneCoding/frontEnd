function fJoinProc() {
    let form = document.getElementById("form");

    let userBody = {
        "emailOrPhone": form[0].value,
        "originName": form[1].value,
        "userId": form[2].value,
        "userPassword": form[3].value
    };

    postData("/accounts/emailsignup", "x-www-form", userBody)
        .then(data => {
            if (data.code === "200") {
                alert("회원가입 성공");
            } else if( data.code === "401" ) {
                alert("유효하지 않는 아이디입니다.");
            } else {
                alert("회원가입 실패");
            }
        });
}