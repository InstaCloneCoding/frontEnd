function fLogin() {
    const userData = document.querySelector("#form");

    let userBody = {
        userId : userData[0].value,
        userPassword : userData[1].value
    };

    postData("/accounts/login", "json", userBody)
        .then(data => {
            if (data.code === 200) {
                alert("로그인 성공");
                window.location = '/';
            } else {
                alert("로그인 실패");
            }
        });
}

function fJoin() {
    window.location = "/accounts/emailsignup";
}