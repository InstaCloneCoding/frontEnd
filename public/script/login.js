function fLogin() {
    const userData = document.querySelector("#form");

    let userBody = {
        userId : userData[0].value,
        password : userData[1].value
    };

    fetch("/accounts/login", {
        method: "post",
        headers: { "Content-Type" : "application/x-www-form-urlencoded" },
        body: JSON.stringify(userBody)
    }).then(response => {
        console.log(response);
        return response.json();
    });
}

function fJoin() {
    window.location = "/accounts/emailsignup";
}

function fFindPassword() {

}