function SendLoginLink() {

    const email = document.getElementById("userInfo");


    let data = {
        'email': email.value
    };

    postData('/accounts/password/reset', "x-www-form", data)
        .then(data => {
           hideLoading();
           if(data.code === '200') {
                alert("전송 되었습니다.");
           } else {
               alert("전송실패 되었습니다.");
           }
        });
}