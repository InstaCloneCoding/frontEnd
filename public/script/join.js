function fJoinProc() {
    let form = document.getElementById("form");

    let userBody = {
        "userId": form[0].value,
        "originName": form[1].value,
        "userName": form[2].value,
        "password": form[3].value
    };

    postData("/accounts/emailsignup", "x-www-form", userBody)
        .then(data => {
            if (data.code === "200") {
                alert("회원가입 성공");
            } else {
                alert("회원가입 실패");
            }
        });
}