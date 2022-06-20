

document.querySelector('.loginLinkBtn').disabled = true; // 로그인 링크 보내기 disabled
document.querySelector('.authBtn').disabled = true; // 인증하기 disabled
document.querySelector('.resetPwBtn').disabled = true; // 비밀번호 재설정 disabled

// 이메일(로그인 링크 보내기) 체크
function userInfoCheck() { 
    const email  = document.getElementById('userInfo').value; 

    if (email == "") {  // 이메일 입력 값 없을 경우
        userInfoMsg.innerHTML = ""
    }
    else if (!emailCheck(email)) { // 이메일 정규식 체크 맞지 않는 경우
        userInfoMsg.innerHTML = "<p class='errorMsg'>이메일이 다릅니다.</p>";
        document.querySelector('.loginLinkBtn').disabled = true;
    } 
    else { // 조건 이외의 경우
        userInfoMsg.innerHTML = "<p class='compleMsg'>이메일이 맞습니다.</p>";
        document.querySelector('.loginLinkBtn').disabled = false;
    }
}

 // 로그인링크 인증번호 체크
function authCodeCheck() {
    const authCode  = document.getElementById('authCode').value; 

    if (authCode == "") { // 로그인 링크 값 없을 경우
        authMsg.innerHTML = ""
    } 
    else if (authCheck(authCode) && authCode.length == 6) { // 로그인링크값 글자체크 및 정규식 체크
        authMsg.innerHTML = "<p class='compleMsg' id='test'>인증번호가 맞습니다.</p>";
        document.querySelector('.authBtn').disabled = false;
    }
     else { // 조건 이외의 경우
        authMsg.innerHTML = "<p class='errorMsg'>인증번호가 다릅니다.</p>";
        document.querySelector('.authBtn').disabled = true;
    }
}

// 새로운 비밀번호 체크
function newPwCheck() {
    const password  = document.getElementById('newPassword').value; // 비밀번호
    const rePassword  = document.getElementById('rePassword').value; // 비밀번호 재설정

    if (password == "") { // 비밀번호 값 없을 경우
        rePwOkMsg.innerHTML = ""
    }
    else if (pwCheck(password) && password === rePassword) { // 비밀번호 정규식 체크
        rePwOkMsg.innerHTML = "<p class='compleMsg'>비밀번호 형식이 맞습니다.</p>";
        document.querySelector('.resetPwBtn').disabled = false;
    }
    else { // 조건 이외의 경우
        rePwOkMsg.innerHTML = "<p class='errorMsg'>비밀번호 형식이 다릅니다.</p>";
        document.querySelector('.resetPwBtn').disabled = true;

    }
} 

// 새로운 비밀번호 재입력 비밀번호 체크
function newPwOkCheck() {
    const password  = document.getElementById('newPassword').value; // 새로운 비밀번호
    const rePassword  = document.getElementById('rePassword').value; // 새로운 비밀번호 재입력 비밀번호

    if (password == "") { // 새로운 비밀번호 값 없을 경우
        rePwOkMsg.innerHTML = "<p class='errorMsg'>비밀번호를 입력해주세요.</p>";
        document.getElementById("rePassword").value = "";
        document.getElementById("newPassword").focus();
        return false;
    }
    else if (pwCheck(rePassword) && password === rePassword) { // 새로운 비밀번호 재입력 정규식 체크 및 새로운 비밀번호 & 새로운 비밀번호 재입력 값 맞는지 체크
        rePwOkMsg.innerHTML = "<p class='compleMsg'>비밀번호 형식이 맞습니다.</p>";
        document.querySelector('.resetPwBtn').disabled = false;
    }
    else { // 조건 이외의 경우
        rePwOkMsg.innerHTML = "<p class='errorMsg'>비밀번호 형식이 다릅니다.</p>";
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
                userId.value = data.states.userId;
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
                alert(data.states.msg);
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