
<script type="text/javascript" src="/script/common.js"></script>
<style>
    .wrap {height:825px;background:#fff;border:1px solid #d8d8d8}
    .left {display:inline-block;width:235px;height:100%;border-right:1px solid #d8d8d8;}
    .right {padding:30px;}

    .settingLeftMenu li {padding:0px 30px;height:50px;line-height:50px;}
    .settingLeftMenu li a {font-size:16px;color:#222;}
</style>
<?php { ?>

<section class="commonWrap disFlex justifyC">
    <div class="innerWrap">
        <div class="wrap disFlex">
            <div class="left">
                <ul class="settingLeftMenu">
                    <li style="background:rgb(0, 149, 246);"><a href="/accounts/edit" style="color:#fff;">프로필 편집</a></li>
                    <li><a href="">비밀번호 변경</a></li>
                </ul>
            </div>
            <div class="right">
                <div class="disFlex" style="flex-direction:column;">
                    <div class="disFlex mb20">
                        <div class="profImg"></div>
                        <div class="profId pl10" style="flex-direction:column;align-items:flex-start;">
                            <p>dddd<?= $value['fb_user_id'] ?></p>
                            <p>프로필 사진 바꾸기</p>
                        </div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">이름</div>
                        <div><input type="text" name="" id="" class="" value="고성광" placeholder="이름"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">사용자 이름</div>
                        <div><input type="text" name="" id="" class="" value="gosee" placeholder="사용자 이름"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">소개</div> 
                        <div><textarea name="" id="" class="" value="소개" placeholder="소개"></textarea></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">이메일</div> 
                        <div><input type="text" name="" id="" class="" value="rhtjdrhkd123@gosee.co.kr" placeholder="이메일"></div> 
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">전화번호</div>
                        <div><input type="text" name="" id="" class="" value="010-0000-0000" placeholder="전화번호"></div> 
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">성별</div>
                        <div><input type="text" name="" id="" class="" value="남자" placeholder="성별"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php } ?>