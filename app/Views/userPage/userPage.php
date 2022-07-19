<section class="userPage commonWrap" id="userPage">
    <div id="loading"></div>
    <div class="disFlex mb40">
        <div class="profileEditLeft">
            <div class="profileImg"><img src="/images/test.jpg" alt=""></div>
        </div>
        <div class="profileEditRight">
            <div class="rightTop">
                <p><?= $userService->getUserId(); ?></p>
                <button type="button" class="profileEditBtn">프로필 편집</button>
                <span class="material-icons ml15">settings</span>   
            </div>
            <div class="rightCenter mb20">
                <ul class="disFlex">
                    <li class="mr40"><div>게시물<span class="pl5 fs600">111</span></div></li>
                    <li class="mr40"><div>팔로워<span class="pl5 fs600"><?= $userService->getFollowerCnt(); ?></span></div></li>
                    <li class="mr40"><div>팔로우<span class="pl5 fs600"><?= $userService->getFollowCnt(); ?></span></div></li>
                </ul>
            </div>
            <div class="rightBottom">
                <div class="mb20 fs600"><?= $userService->getOriginName(); ?></div>
                <div class="">소개</div>
            </div>
        </div>
    </div>
    <!-- 탭 메뉴 -->
    <div class="tabMenu">
        <ul>
            <li class="active"><span class="material-symbols-outlined">grid_view</span>게시물</li>
            <li><span class="material-icons">bookmark_border</span> 저장됨</li>
        </ul>
    </div>
    <!-- // 탭 메뉴 -->

    <!-- 게시물 -->
    <div class="tabContent content1">
        <div class="userBoardWrap">
            <div class="board">dddd</div>
            <div class="board">dddd</div>
            <div class="board">d</div>
        </div>
        <div class="userBoardWrap">
            <div class="board">dddd</div>
            <div class="board">dddd</div>
            <div class="board">d</div>
        </div>
        <div class="userBoardWrap">
            <div class="board">dddd</div>
            <div class="board">dddd</div>
            <div class="board">d</div>
        </div>
    </div>
    <!-- // 게시물 -->

    <!-- 저장됨 -->
    <div class="tabContent content2">
        <div class="contentTop col-between">
            <div class="left">저장된 내용은 회원님만 볼 수 있습니다.</div>
            <div class="right">+ 새 컬렉션</div>
        </div>
        <div class="noneContentWrap">
            <div><img src="/images/collection-img.png" alt=""></div>
            <div class="title">저장</div>
            <div class="txt">
                <p>다시 보고 싶은 사진과 동영상을 저장하세요. 콘텐츠를 </p>
                <p>저장해도 다른 사람에게 알림이 전송되지 않으며, 저장된 </p>
                <p>콘텐츠는 회원님만 볼 수 있습니다. </p>
            </div>
        </div>
    </div>
    <!-- // 저장됨 -->
    
</section> 
<script type="text/javascript" src="/script/feed.js"></script>
