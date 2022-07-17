
<script type="text/javascript" src="/script/common.js"></script>
<!-- <?php { ?> -->
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
                            <p><?= $user->states->userId ?></p>
                            <p>프로필 사진 바꾸기</p>
                        </div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">이름</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->userId ?>" placeholder="이름"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">사용자 이름</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->originName ?>" placeholder="사용자 이름"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">소개</div> 
                        <div><textarea name="" id="" class="" value="<?= $user->states->intro ?>" placeholder="소개"></textarea></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">이메일</div> 
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->email ?>" placeholder="이메일"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">전화번호</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->phone ?>" placeholder="전화번호"></div>
                    </div>
                    <div class="disFlex mb20">
                        <div style="width:200px;">성별</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->gender ?>" placeholder="성별"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- <?php } ?> -->