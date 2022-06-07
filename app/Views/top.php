<div class="top">
    <div class="topInner disFlex alignCenter">
        <a href="/"> <img src="/images/header-logo.png" alt="load img failed"> </a>&nbsp;&nbsp;
        <?php if (!empty($_SESSION['userId'])) { ?>
            <div>
                <label>
                    <input type="text" name="searching" placeholder="돋보기 (검색)" value=""/>
                </label>
            </div>&nbsp;&nbsp;
            <a href="/"> 홈 </a>&nbsp;
            <a onclick="showNewPostPopup()"> 새 게시글 </a>&nbsp;
            <a href="#"> 나침표 </a>&nbsp;
            <a href="#"> 하트 </a>&nbsp;
                    
            <!-- 드랍다운 메뉴 필요 -->
            <a href="/<?= $_SESSION['userId'] ?>"> 프로필</a>&nbsp;
            <a href="#"> 저장됨 </a&nbsp;
            <a href="#">설정</a>&nbsp;
            <a href="#"> 계정전환 </a>&nbsp;
            <a href="/accounts/logout"> 로그아웃 </a>&nbsp;
        <?php } ?>
    </div>
</div>