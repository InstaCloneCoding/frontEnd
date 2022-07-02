// 이메일 정규식
function emailCheck(email) { 
    let reg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    return reg.test(email);
}
// 비밀번호 정규식 (6~20글자 영문 대소문자, 최소 1개의 숫자 혹은 특수 문자를 포함해야 함)
function pwCheck(password) { 
    let checkPw = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/;
    return checkPw.test(password);
}
// 로그인링크 인증번호 정규식 (숫자만)
function authCheck(authCode) { 
    let checkAuthCode = /^[0-9]+$/;
    return checkAuthCode.test(authCode);
}
// 회원가입 성명 정규식 (한글만)
function nameCheck(name) { 
    let checkUserName = /^[가-힣]+$/;
    return checkUserName.test(name);
}
// 회원가입 사용자 이름 정규식 (영문,숫자)
function userIdCheck(userId) { 
    let checkUserId = /^[a-zA-Z0-9]+$/;
    return checkUserId.test(userId);
}

function headers(gbn) {
    if(gbn === 'x-www-form') {
        return {"Content-Type": "application/x-www-form-urlencoded"};
    } else if( gbn === 'json') {
        return {"Content-Type": "application/json"};
    } else if( gbn === 'multipart') {
        return {
            "Content-Type": "multipart/form-data"
        }
    }
}

function postData(url = null, header = null,data = null) {
    displayLoading();
    return fetch(url, {
        method: "post",
        headers: headers(header),
        body: JSON.stringify(data)
    }).then(response => response.json());
}

function postDataForm(url = null, header = null,data = null) {
    displayLoading();
    return fetch(url, {
        method: "post",
        headers: headers(header),
        body: data
    }).then(response => response.json());
}

function getData(url = null, header = null, data = null) {
    displayLoading();
    return fetch(url, {
        method: "get",
        headers: headers(header)
    });
}

function goToMain() {
    window.location = "/";
}

/* 소스 줄여야 함 */
const el1 = document.querySelector(".click");
const el2 = document.querySelector(".click1");
const el3 = document.querySelector(".modalBg1");
const el4 = document.querySelector(".modalBg2");

el1.addEventListener("click", openModal1, false);
el2.addEventListener("click", openModal2, false);
el3.addEventListener("click", closeModal1, false);
el4.addEventListener("click", closeModal2, false);

// 상단 탑 모달창
function openModal1 () {
    const open1 = document.querySelector(".testModal1");
    const bg1 = document.querySelector(".modalBg1");

    if (open1.style.display == "none") {
        open1.style.display = "block";
        bg1.style.display = "block";
    } 

}
// 피드 모달창
function openModal2 () {
    const open2 = document.querySelector(".testModal2");
    const bg2 = document.querySelector(".modalBg2");

    if (open2.style.display == "none") {
        open2.style.display = "block";
        bg2.style.display = "block";
    } 
}
// 상단 탑 모달창 닫기
function closeModal1 () {
    const open1 = document.querySelector(".testModal1");
    const bg1 = document.querySelector(".modalBg1");

    if (open1.style.display == "block") {
        open1.style.display = "none";
        bg1.style.display = "none";
    }  
}
// 피드 모달창 닫기
function closeModal2 () {
    const open2 = document.querySelector(".testModal2");
    const bg2 = document.querySelector(".modalBg2");

    if (open2.style.display == "block") {
        open2.style.display = "none";
        bg2.style.display = "none";
    }
}


