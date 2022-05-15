<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="/style/common.css">
</head>
<body>

<section class="MainComponent">
    <div class="BoxComponent">
        <form method="post" id="form" name="form">
            <label for="user_id">
                <input type="text" id="user_id" name="user_id" value="" />
            </label>
            <label for="user_password">
                <input type="password" id="user_password" name="user_password" value="" />
            </label>
        </form>
        <button onclick="fLogin();"> 로그인 </button>
        <button onclick="fJoin();"> 회원가입 </button>
        <a href="fFindPassword();"> 비밀번호를 잊으셨나요? </a>
    </div>
</section>

<script type="text/javascript">
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

</script>