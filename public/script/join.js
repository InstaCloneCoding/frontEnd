

document.querySelector('.signUpBtn').disabled = true;

function joinEmailCheck () {
    const email  = document.getElementById('userEmail').value; 

    if (email == "") {
        joinEmailMsg.innerHTML = ""
    }
    else if (!emailCheck(email)) {
        joinEmailMsg.innerHTML = "<p class='errorMsg' id='emailError'>이메일 정확하게 입력해주세요</p>";
        document.getElementById("userEmail").focus();
        document.querySelector('.signUpBtn').disabled = true;
    }
    else {
        joinEmailMsg.innerHTML = "<p class='compleMsg'>이메일 정확하게 입력했습니다</p>";
    }
}

function joinNameCheck () {
    const email  = document.getElementById('userEmail').value; 
    const error =  document.getElementById('emailError');

    if (email === "") {
        joinEmailMsg.innerHTML = "<p class='errorMsg'>이메일 입력하세요</p>"
        document.getElementById("userName").value = "";
        document.getElementById("userEmail").focus();
    }
    else {
        joinNameMsg.innerHTML = ""
    }
    
    if (error.innerHTML === "이메일 정확하게 입력해주세요"){
         document.getElementById("userName").value = "";
         document.getElementById("userEmail").focus();
     } else {
        
     }
}

function joinIdCheck () {
    const name = document.getElementById('userName').value;

    if (name == "") {
        joinNameMsg.innerHTML = "<p class='errorMsg'>성명을 입력하세요</p>"
        document.getElementById("userId").value = "";
        document.getElementById("userName").focus();
        return false;
    }
    else {
        joinIdMsg.innerHTML = ""
    }
}

function joinPwCheck () {
    const userId = document.getElementById('userId').value;
    const password  = document.getElementById('userPassword').value; // 비밀번호

    if (userId == "") {
        joinIdMsg.innerHTML = "<p class='errorMsg'>사용자 이름을 입력해주세요</p>"
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    }
    else if (!pwCheck(password)) {
        joinPwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>"
    } else {
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

            }
        });
}