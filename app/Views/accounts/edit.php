
<script type="text/javascript" src="/script/common.js"></script>
<!-- <?php { ?> -->
    <section class="commonWrap">
    <div class="innerWrap">
        <div class="editSetting">
            <div class="left">
                <ul class="settingLeftMenu">
                    <li style="background:rgb(0, 149, 246);"><a href="/accounts/edit" style="color:#fff;">프로필 편집</a></li>
                    <li><a href="">비밀번호 변경</a></li>
                </ul>
            </div>
            <div class="right">
                <div class="rightMenu">
                    <div class="list">
                        <div class="profImg"></div>
                        <div class="profId">
                            <p><?= $user->states->userId ?></p>
                            <p>프로필 사진 바꾸기</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="title">이름</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->userId ?>" placeholder="이름"></div>
                    </div>
                    <div class="list">
                        <div class="title">사용자 이름</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->originName ?>" placeholder="사용자 이름"></div>
                    </div>
                    <div class="list">
                        <div class="title">소개</div> 
                        <div><textarea name="" id="" class="" value="<?= $user->states->intro ?>" placeholder="소개"></textarea></div>
                    </div>
                    <div class="list">
                        <div class="title">이메일</div> 
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->email ?>" placeholder="이메일"></div>
                    </div>
                    <div class="list">
                        <div class="title">전화번호</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->phone ?>" placeholder="전화번호"></div>
                    </div>
                    <div class="list">
                        <div class="title">성별</div>
                        <div><input type="text" name="" id="" class="" value="<?= $user->states->gender ?>" placeholder="성별"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- <?php } ?> -->