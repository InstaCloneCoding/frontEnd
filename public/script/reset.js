function emailCheck (email) { // 이메일 정규식
    let reg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    return reg.test(email);
}

function pwCheck (password) { // 비밀번호 정규식
    let checkPw = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/;
    return checkPw.test(password);
}

let emailError = document.querySelector(".emailErrorMsg"); // 이메일 오류 텍스트
let emailComple = document.querySelector(".emailCompleMsg"); // 이메일 정상 텍스트
let authError = document.querySelector(".authErrorMsg");
let authComple = document.querySelector(".authCompleMsg");
let reError = document.querySelector(".reErrorMsg");
let reComple = document.querySelector(".reCompleMsg");

document.querySelector('.loginLinkBtn').disabled = true;
document.querySelector('.authBtn').disabled = true;
document.querySelector('.resetPwBtn').disabled = true;

function emailCheckInput() {
    const email  = document.getElementById('userInfo').value; 
    if (email == "") {
        emailError.innerHTML = ""
    }
    else if (!emailCheck(email)) {
        emailComple.innerHTML = ""
        emailError.innerHTML = "이메일 정확하게 입력해주세요."
    } else {
        emailComple.innerHTML = "이메일 정확하게 입력했습니다."
        emailError.innerHTML = ""
        document.querySelector('.loginLinkBtn').disabled = false;
    }
}

function authCodeInput() {
    const authCode  = document.getElementById('authCode').value; 
    if (authCode.length != 6) {
        authError.innerHTML = "인증번호 형식이 틀립니다."
        authComple.innerHTML = "";
    } else {
        authComple.innerHTML = "인증번호 형식이 맞습니다."
        authError.innerHTML = ""
        document.querySelector('.authBtn').disabled = false;
    }
}

function pwCheckInput () {
    const password  = document.getElementById('newPassword').value; // 비밀번호
    if (!pwCheck(password)) {
        reComple.innerHTML = ""
        reError.innerHTML = "비밀번호 정확하게 입력해주세요."
    } else {
        reComple.innerHTML = "비밀번호 정확하게 입력했습니다."
        reError.innerHTML = ""
    }
} 

function pwCheckOkInput () {
    const password  = document.getElementById('newPassword').value; // 비밀번호
    const rePassword  = document.getElementById('rePassword').value; // 비밀번호
    if (password == "") {
        reError.innerHTML = "비밀번호를 입력해주세요."
        document.getElementById("rePassword").value = "";
        document.getElementById("newPassword").focus();
        return false;
    }
    else if (!pwCheck(rePassword)) {
        reComple.innerHTML = ""
        reError.innerHTML = "비밀번호 정확하게 입력해주세요."
    } else {
        reComple.innerHTML = "비밀번호 정확하게 입력했습니다."
        reError.innerHTML = ""
        document.querySelector('.resetPwBtn').disabled = false;
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