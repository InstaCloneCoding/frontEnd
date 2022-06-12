

document.querySelector('.loginLinkBtn').disabled = true;
document.querySelector('.authBtn').disabled = true;
document.querySelector('.resetPwBtn').disabled = true;

function userInfoCheck() {
    const email  = document.getElementById('userInfo').value; 

    if (email == "") {
        userInfoMsg.innerHTML = ""
    }
    else if (!emailCheck(email)) {
        userInfoMsg.innerHTML = "<p class='errorMsg'>이메일 정확하게 입력해주세요</p>";
    } else {
        userInfoMsg.innerHTML = "<p class='compleMsg'>이메일 정확하게 입력했습니다</p>"
        document.querySelector('.loginLinkBtn').disabled = false;
    }
}

function authCodeCheck() {
    const authCode  = document.getElementById('authCode').value; 
    
    if (authCode.length == 6) {
        authMsg.innerHTML = "<p class='compleMsg' id='test'>인증번호 형식이 맞습니다</p>"
        document.querySelector('.authBtn').disabled = false;
    }
     else {
        authMsg.innerHTML = "<p class='errorMsg'>인증번호 형식이 틀립니다</p>"
        document.querySelector('.authBtn').disabled = true;
    }

}

function newPwCheck() {
    const password  = document.getElementById('newPassword').value; // 비밀번호
    const rePassword  = document.getElementById('rePassword').value; // 비밀번호

    if (password == "") {
        rePwMsg.innerHTML = ""
    }
    else if (pwCheck(password)) {
        rePwMsg.innerHTML = "<p class='compleMsg'>비밀번호 통과</p>";
    }
    else {
        rePwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요</p>";
        document.querySelector('.resetPwBtn').disabled = true;
    }

    // 비밀번호 비밀번호 재입력 일치 시
    if (password === rePassword) {
        document.querySelector('.resetPwBtn').disabled = false;
    }
} 

function newPwOkCheck() {
    const password  = document.getElementById('newPassword').value; // 비밀번호
    const rePassword  = document.getElementById('rePassword').value; // 비밀번호

    if (password == "") {
        rePwMsg.innerHTML = "<p class='errorMsg'>비밀번호를 입력해주세요.</p>"
        document.getElementById("rePassword").value = "";
        document.getElementById("newPassword").focus();
        return false;
    }
    else if (pwCheck(rePassword) && password === rePassword) {
        rePwOkMsg.innerHTML = "<p class='compleMsg'>비밀번호 정확하게 입력했습니다.</p>"
        document.querySelector('.resetPwBtn').disabled = false;
    }
    else {
        rePwOkMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>"
        document.querySelector('.resetPwBtn').disabled = true;
    }

} 

function SendLoginLink() {
    const email = document.getElementById("userInfo");

    let data = {
        'email': email.value
    };
    
    postData('/accounts/password/email', "x-www-form", data)
        .then(data => {
            hideLoading();
            if(data.code === 200) {
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
            if(data.code === 200) {
                showResetPassword();
                const userId = document.getElementById("userId");
                userId.value = data.msg.userId;
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
            if(data.code === 200) {
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