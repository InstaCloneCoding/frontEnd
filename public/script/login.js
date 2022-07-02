
document.querySelector('.loginBtn').disabled = true; // 로그인버튼 disabled

 // 로그인 이메일 체크
function emailCheckInput() {
    const email = document.getElementById('userId').value; 

    if (email != "") { 
        idMsg.innerHTML = ""
    } 

}

function hello (_here) {
    const newtest = document.createElement('div');
    const newtest1 = document.createTextNode('하하');
    const pass = document.getElementById('tt');
    newtest.appendChild(newtest1);
    newtest.classList.add('dd');
    //pass.appendChild(newtest);

    const email = document.getElementById('userId').value; // 이메일
    //const password = document.getElementById('userPassword').value; // 비밀번호

    if (email === "") { // 이메일 값 없는 경우
        idMsg.innerHTML = "<p class='errorMsg'>이메일 입력하세요.</p>";
        pass.appendChild(newtest);
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    } 
}

// 로그인 비밀번호 체크
function pwCheckInput(_here) { 
    const email = document.getElementById('userId').value; // 이메일
    const password = document.getElementById('userPassword').value; // 비밀번호


    if (email === "") { // 이메일 값 없는 경우
        idMsg.innerHTML = "<p class='errorMsg'>이메일 입력하세요.</p>";
        document.getElementById("userPassword").value = "";
        document.getElementById("userId").focus();
        return false;
    } 
    else if (!pwCheck(password)) { // 비밀번호 정규식 체크
        //pwMsg.innerHTML = "<p class='errorMsg'>비밀번호 정확하게 입력해주세요.</p>";
        //document.querySelector('.msg2').innerHTML = here;
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