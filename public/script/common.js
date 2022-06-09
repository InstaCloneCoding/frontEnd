function emailCheck(email) { // 이메일 정규식
    let reg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    return reg.test(email);
}

function pwCheck(password) { // 비밀번호 정규식
    let checkPw = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{6,20}$/;
    return checkPw.test(password);
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

function goToMain() {
    window.location = "/";
}