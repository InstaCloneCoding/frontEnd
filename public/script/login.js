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
                window.location = '/';
            } else {
            }
        });
}

function fJoin() {
    window.location = "/accounts/emailsignup";
}