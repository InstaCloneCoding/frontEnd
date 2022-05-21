function postData(url = null, data = null) {
    return fetch(url, {
        method: "post",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: JSON.stringify(data)
    }).then(response => response.json());
}