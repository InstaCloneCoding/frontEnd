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
            alert(data.msg);
            if (data.code === "200") {
                window.location = '/';
            } else {

            }
        });
}