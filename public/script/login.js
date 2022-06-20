
document.querySelector('.loginBtn').disabled = true; // 로그인버튼 disabled

 // 로그인 이메일 체크
function emailCheckInput() {
    const email = document.getElementById('userId').value; // 이메일

    if (email === "") { // 이메일 값 없는 경우
        idMsg.innerHTML = ""
    } 
    else if (!emailCheck(email)) { // 이메일 정규식 체크
        idMsg.innerHTML = "<p class='errorMsg'>이메일 정확하게 입력해주세요</p>";
        document.getElementById("userId").focus();
        document.querySelector('.loginBtn').disabled = true;
    } 
    else { // 이외의 조건
        idMsg.innerHTML = "<p class='compleMsg'>이메일 정확하게 입력했습니다.</p>";
    }
}

// 로그인 비밀번호 체크
function pwCheckInput() { 
    const email = document.getElementById('userId').value; // 이메일
    const password = document.getElementById('userPassword').value; // 비밀번호

    if (email === "") { // 이메일 값 없는 경우
        idMsg.innerHTML = "<p class='errorMsg'>이메일 입력하세요.</p>";
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    } 
    else if (!pwCheck(password)) { // 비밀번호 정규식 체크
        pwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>";
        document.querySelector('.loginBtn').disabled = true;
    }
    else { // 이외의 조건
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