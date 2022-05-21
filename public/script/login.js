function fLogin() {
    const userData = document.querySelector("#form");

    let userBody = {
        userId : userData[0].value,
        password : userData[1].value
    };

    postData("/accounts/login", "x-www-form", userBody)
        .then(data => {
            if (data.code === "200") {
                alert("로그인 성공");
            } else {
                alert("로그인 실패");
            }
        });
}

function fJoin() {
    window.location = "/accounts/emailsignup";
}

function fFindPassword() {

}