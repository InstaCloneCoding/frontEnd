function SendLoginLink() {
    const email = document.getElementById("userInfo");

    let data = {
        'email': email.value
    };

    postData('/accounts/password/email', "x-www-form", data)
        .then(data => {
           hideLoading();
           if(data.code === '200') {
                alert("전송 되었습니다.");
                showAuthCode();
           } else {
               alert("전송실패 되었습니다.");
           }
        });
}

function confirmAuthCode() {
    const authCode = document.getElementById("authCode");

    let data = {
        'authCode': authCode.value
    };

    postData('/accounts/password/auth', "x-www-form", data)
        .then(data => {
            hideLoading();
            if(data.code === '200') {
                showResetPassword();
                const userId = document.getElementById("userId");
                userId.value = data.msg;
            } else {

            }
        });
}

function resetPassword() {
    const userId = document.getElementById("userId");
    const newPassword = document.getElementById("newPassword");
    const rePassword = document.getElementById("rePassword");

    let data = {
        'userId' : userId.value,
        'newPassword': newPassword.value,
        'rePassword' : rePassword.value
    };

    postData('/accounts/password/reset', "x-www-form", data)
        .then(data => {
            hideLoading();
            if(data.code === '200') {
                window.location = '/';
            } else {

            }
        });
}

function showAuthCode() {
    const authCode = document.getElementById("confirmAuthCode");

    authCode.style.display = "block";
}

function showResetPassword() {
    const resetPassword = document.getElementById("resetPassword");

    resetPassword.style.display = "block";
}