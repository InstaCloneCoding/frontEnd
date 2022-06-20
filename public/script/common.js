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

function getData(url = null, header = null, data = null) {
    displayLoading();
    return fetch(url, {
        method: "get",
        headers: headers(header)
    });
}


const el = document.querySelector(".click");
const el1 = document.getElementById("wrapBg");
const el2 = document.querySelector(".click1");

el.addEventListener("click", openModal, false);
el1.addEventListener("click", closeModal, false);
el2.addEventListener("click", test, false);

function openModal () {
    const open = document.querySelector(".modal");
    const open1 = document.querySelector(".wrapBg");

    if (open.style.display == "none") {

        open.style.display = "block";
        open1.style.display = "block";

    } else {

        open.style.display = "none";

    }
}

function closeModal () {
    const open = document.querySelector(".modal");
    const open1 = document.querySelector(".wrapBg");
    const open2 = document.querySelector(".testModal");

    if (open1.style.display == "block") {
        open.style.display = "none";
        open1.style.display = "none";
        open2.style.display = "none";
    } else {

    }
}

function test () {
    const open = document.querySelector(".testModal");
    const open1 = document.querySelector(".wrapBg");

    if (open.style.display == "none") {

        open.style.display = "block";
        open1.style.display = "block";

    } else {

        open.style.display = "none";

    }
}

function goToMain() {
    window.location = "/";
}