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

function fmain() {
    window.location = "/";
}