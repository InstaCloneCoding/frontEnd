function SendLoginLink() {

    const email = document.getElementById("userInfo");


    let data = {
        'email': email.value
    };

    postData('/accounts/password/reset', "x-www-form", data)
        .then(data => {
           console.log(data);
        });
}