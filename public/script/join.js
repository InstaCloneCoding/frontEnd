

document.querySelector('.signUpBtn').disabled = true; // 가입버튼 disabled

// 회원가입 이메일 체크
function joinEmailCheck () {
    const email  = document.getElementById('userEmail').value;  // 이메일 주소

    if (email == "") { // 이메일 주소 없는 경우
        joinEmailMsg.innerHTML = ""
    }
    else if (!emailCheck(email)) { // 이메일 주소 정규식 체크
        joinEmailMsg.innerHTML = "<p class='errorMsg'>이메일 정확하게 입력하세요.</p>";
    } 
    else { // 조건 이외의 경우
        joinEmailMsg.innerHTML = "";
    }
}
// 회원가입 성명 체크
function joinNameCheck () {
    const email  = document.getElementById('userEmail').value; // 이메일 주소
    const name = document.getElementById('userName').value; // 성명

    if (name == "") { // 사용자 이름 값 없을 경우
        joinNameMsg.innerHTML = ""
    }
    else if (email == "" || joinEmailMsg.innerHTML != "") { // 이메일 값 없는 경우 || 이메일 오류메세지 있는 경우
        joinEmailMsg.innerHTML = "<p class='errorMsg'>이메일 정확하게 입력하세요.</p>";
        document.getElementById("userName").value = "";
        document.getElementById("userEmail").focus();
        return false;
    }
    else if (!nameCheck(name)) { // 성명 정규식 체크
        joinNameMsg.innerHTML = "<p class='errorMsg'>성명을 정확하게 입력하세요.</p>"
    }
    else { // 조건 이외의 경우
        joinNameMsg.innerHTML = ""
    }
}
// 회원가입 사용자 이름 체크
function joinIdCheck () { 
    const name = document.getElementById('userName').value; // 성명
    const userId = document.getElementById('userId').value; // 사용자 이름

    if (userId == "") {  // 사용자 이름 값 없을 경우
        joinIdMsg.innerHTML = ""
    }
    else if (name == "") {  // 성명 값 없을 경우
        joinNameMsg.innerHTML = "<p class='errorMsg'>성명을 입력하세요.</p>"
        document.getElementById("userId").value = "";
        document.getElementById("userName").focus();
        return false;
    } 
    else if (!userIdCheck(userId)){  // 사용자 이름 정규식 체크
        joinIdMsg.innerHTML = "<p class='errorMsg'>사용자 이름 정확하게 입력하세요.</p>"
    }
    else if (joinNameMsg.innerHTML != "") {  // 성명 오류메세지 있는 경우
        joinNameMsg.innerHTML = "<p class='errorMsg'>성명을 정확하게 입력하세요.</p>"
        document.getElementById("userId").value = "";
        document.getElementById("userName").focus();
    }
    else { // 조건 이외의 경우
        joinIdMsg.innerHTML = ""
    }
}
// 회원가입 비밀번호 체크
function joinPwCheck () {
    const userId = document.getElementById('userId').value; // 사용자 이름
    const password  = document.getElementById('userPassword').value; // 비밀번호
    
    if (userId == "" || joinIdMsg.innerHTML != "") {   // 사용자 이름 || 사용자 오류메시지 있는 경우
        joinIdMsg.innerHTML = "<p class='errorMsg'>사용자 이름 정확하게 입력하세요.</p>"
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    }
    else if (!pwCheck(password)) {   // 비밀번호 정규식 체크
        joinPwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>"
        document.querySelector('.signUpBtn').disabled = true;
    } 
    else { // 조건 이외의 경우
        joinPwMsg.innerHTML = "<p class='compleMsg'>비밀번호 정확하게 입력했습니다.</p>"
        document.querySelector('.signUpBtn').disabled = false;
    }
}   

function fJoinProc() {
    let form = document.getElementById("form");

    let userBody = {
        "joinCode": form[0].value,
        "originName": form[1].value,
        "userId": form[2].value,
        "userPassword": form[3].value
    };

    postData("/accounts/emailsignup", "x-www-form", userBody)
        .then(data => {
            if (data.code === 200) {
                window.location = '/';
            } else {
                alert('dddd')
            }
        });
}