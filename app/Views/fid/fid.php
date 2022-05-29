<section>
    <div>
        <a href="/">
            <img src="/" alt="홈">
        </a>
        <a onclick="showNewPostPopup()"> 새 게시글 </a>
        <div>
            <a href="#"> 내  프로필</a>
            <a href="#"> 저장됨 </a
            <a href="#">설정</a>
            <a href="#"> 계정전환 </a>
            <a href="/accounts/logout"> 로그아웃 </a>
        </div>

        <div>
            <input type="text" name="searching" placeholder="검색" value="" />
        </div>

    </div>
</section>

<section class="fid">
    <div id="loading"></div>
    <div>
        <p>게시글</p>
        <?php foreach($fid as $key => $value) { ?>
            <p> <?= $value->userId ?> </p>
            <p> <?= $value->fidContent ?> </p>
        <?php } ?>
    </div>
</section>

<section id="newFid" class="newFid" style="display: none;">
    <div>

        <p>게시글 만들기</p>
        <div>
            <a onclick="HideNewPostPopup()"> 닫기 </a>
        </div>
        <div>
            사진과 동영상을 여기에 끌어다 놓으세요
        </div>
        <button class="btnBlue">
            컴퓨터에서 선택
        </button>

    </div>
</section>

<script type="text/javascript" src="/script/common.js"> </script>
<script type="text/javascript" src="/script/loading.js"> </script>
<script type="text/javascript" src="/script/fid.js"> </script>