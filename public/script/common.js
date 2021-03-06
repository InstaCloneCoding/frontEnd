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

function modalClick(index) {

    const topModal1 = document.querySelector(".topModal1"); // top헤더 프로필 모달
    const topModal2 = document.querySelector(".topModal2"); // top헤더 프로필 모달
    const feedModal1 = document.querySelector(".feedModal1"); // feed 게시물 상세 모달
    const feedModal2 = document.querySelector(".feedModal2"); // feed 회원님을 위한 추천 모달
    const feedModal3 = document.querySelector(".feedModal3"); // feed 게시물 댓글 모두 보기 모달

    if (index == 1) {
        topModal1.style.display = "block";
    }
    else if (index == 2) {
        feedModal1.style.display = "block";
    }
    else if (index == 3) {
        feedModal2.style.display = "block";
    }
    else if (index == 4) {
        feedModal3.style.display = "block";
    }
    else if (index == 5) {
        topModal2.style.display = "block";
    }

}