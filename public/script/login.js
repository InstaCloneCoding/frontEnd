function fLogin() {
    const userData = document.querySelector("#form");

    let pwComple = document.querySelector(".pwCompleMsg"); // 비밀번호 정확하게 입력했습니다.

    let userBody = {
        userId : userData[0].value,
        userPassword : userData[1].value
    };

    postData("/accounts/login", "json", userBody)
        .then(data => {
            console.log(data);
            hideLoading();
            if (data.code === 200) {
                window.location = '/';
            } else {
                if (!pwComple) {
                    alert('ddd');
                }
            }
        });

   

}

function fJoin() {
    window.location = "/accounts/emailsignup";
}