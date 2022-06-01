function fJoinProc() {
    let form = document.getElementById("form");

    let userBody = {
        "joinCode": form[0].value,
        "originName": form[1].value,
        "userId": form[2].value,
        "userPassword": form[3].value
    };

    postData("/accounts/emailsignup", "x-www-form", userBody)
        .then(data => {
            if (data.code === "200") {
                alert("회원가입 성공");
                window.location = '/';
            } else if( data.code === "400" ) {
                alert("유효하지 않는 아이디입니다.");
            } else {
                alert("회원가입 실패");
            }
        });
}