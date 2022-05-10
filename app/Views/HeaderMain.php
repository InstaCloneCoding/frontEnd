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

<section class="sectionComponent">
    <div class="BoxComponent">
        <form method="post" id="form" name="form">
            <input type="text" id="user_id" name="user_id" value="" />
            <input type="text" id="user_password" name="user_password" value="" />
        </form>
        <button onclick="fLogin();"> 로그인 </button>
        <button onclick="fJoin();"> 회원가입 </button>
        <a href="fFindPassword();"> 비밀번호를 잊으셨나요? </a>
    </div>
</section>

<script type="text/javascript">
    async function fLogin() {
        let url = "http://localhost:8082/account/login";
        let obj = {
            user_id: "id",
            password: "password"
        };
        let json = JSON.stringify(obj);

        console.log(json);

        let response = await fetch(url, {
            mode: "no-cors",
            method: "post",
            headers: {"Content-Type": "application/json;charset=utf-8"},
            body: json
        });
        console.log(response);
        let result = await response.json();

    }

    function fJoin() {

    }

    function fFindPassword() {

    }

</script>