
document.querySelector('.loginBtn').disabled = true;

function emailCheckInput() { //이메일체크
    const email = document.getElementById('userId').value;

    if (email === "") {
        idMsg.innerHTML = ""
    } 
    else if (!emailCheck(email)) {
        idMsg.innerHTML = "<p class='errorMsg'>이메일 정확하게 입력해주세요</p>";
        document.getElementById("userId").focus();
        document.querySelector('.loginBtn').disabled = true;
    } 
    else {
        idMsg.innerHTML = "<p class='compleMsg'>이메일 정확하게 입력했습니다.</p>";
    }
}

function pwCheckInput() { // 비밀번호체크
    const email = document.getElementById('userId').value;
    const password = document.getElementById('userPassword').value;

    if (email === "") {
        idMsg.innerHTML = "<p class='errorMsg'>이메일 입력하세요.</p>";
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    } 
    else if (!pwCheck(password)) {
        pwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>";
    } 
    else {
        pwMsg.innerHTML = "<p class='compleMsg'>비밀번호 정확하게 입력했습니다.</p>";
        document.querySelector('.loginBtn').disabled = false;
    }
}

function fLogin() {
    const userData = document.querySelector("#form");

    let userBody = {
        userId : userData[0].value,
        userPassword : userData[1].value
    };

    postData("/accounts/login", "json", userBody)
        .then(data => {
            console.log(data);
            hideLoading();

            if (data.code === 200) {
                alert(data.msg);
                window.location = '/';
            } else {
                loginErrorMsg.innerHTML = "<p class='errorMsg'>로그인이 유효하지 않습니다.</p>"
                // alert(data.messages.msg);
                
            }
        });
}

function fJoin() {
    window.location = "/accounts/emailsignup";
}