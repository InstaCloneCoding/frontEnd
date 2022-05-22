<!--<link rel="stylesheet" href="/style/common.css">-->

<section class="MainComponent">
        <div class="BoxComponent">
            
            <div style="padding-bottom:30px;">
                <img src="/images/login-logo.png" alt="">
            </div>
            
            <form method="post" id="form" name="form">
                <label for="userId">
                    <input type="text" id="userId" name="userId" value="" style="height:36px;width:100%;" />
                </label>
                <label for="userPassword">
                    <input type="password" id="userPassword" class="mt10" name="userPassword" value="" />
                </label>
            </form>
            <button onclick="fLogin();" class="loginBtn btnM btnBlue w100 mt10"> 로그인 </button>
            
            <div style="padding:20px 0;">
                <a href="/accounts/password/reset" style="color:#00376b;font-size:12px;"> 비밀번호를 잊으셨나요? </a>
            </div>
            <div>
                <span style="font-size:14px;">계정이 없으신가요?</span>
                <button onclick="fJoin();" style="font-size:14px;color:#0095f6;background:none;border:none;">가입하기</button>
            </div>
        </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/login.js"></script>
