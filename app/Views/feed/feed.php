<section class="feedWrap commonWrap disFlex justifyC m20">
    <div id="loading"></div>
    <!-- 피드 전체 -->
    <div class="disFlex justifyC">
        <!-- 피드 센터 -->
        <div class="feedContentCenter">
            <!-- <p>게시글</p> -->
            <?php if (!empty($feed)) { ?>
                <?php foreach ($feed as $key => $value) { ?>
                    <!-- 피드 전체 박스 -->
                    <div class="feedContentWrap">
                        <!-- 피드 상단 타이틀 -->
                        <div class="contentTop col-between">
                            <!-- 피드 상단 타이틀 좌측 프로필&프로필네임 -->
                            <div class="disFlex alignC">
                                <div class="profImg"></div>
                                <div class="profId pl10">
                                    <p><?= $value->userId ?></p>
                                </div>
                            </div>
                            <!-- // 피드 상단 타이틀 좌측 프로필&프로필네임 -->
                            <!-- 피드 상단 타이틀 우측 아이콘 -->
                            <div class="disFlex alignC">
                                <span class="material-icons click1"> more_horiz</span>
                                <!-- 피드 상단 타이틀 우측 아이콘 모달창 -->
                                <div class="modal testModal2" style="display:none;">
                                    <div class="modalBg modalBg2"></div>
                                    <div class="modalContent">
                                        <div class="modalList">
                                            <a href="/<?= $_SESSION['user']['userId'] ?>" class="disFlex alignC">
                                                <span class="material-icons">account_circle</span>
                                                <span>프로필</span>
                                            </a>
                                        </div>
                                        <div class="modalList">
                                            <a href="#" class="disFlex alignC">
                                                <span class="material-icons">bookmark_border</span>
                                                <span>저장됨</span>
                                            </a>
                                        </div>
                                        <div class="modalList">
                                            <a href="#" class="disFlex alignC">
                                                <span class="material-icons">bookmark_border</span>
                                                <span>닫기</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- // 피드 상단 타이틀 우측 아이콘 모달창 -->
                            </div>
                            <!-- // 피드 상단 타이틀 우측 아이콘 -->
                        </div>
                        <!-- // 피드 상단 타이틀 -->
                        <!-- 피드 이미지 슬라이드 공간 -->
                        <div class="contentImg"></div>
                        <!-- // 피드 이미지 슬라이드 공간 -->
                        <!-- 피드 하단 좋아요&댓글&보관함 -->
                        <div class="col-between" style="padding:15px 15px 5px 15px;">
                            <div class="disFlex">
                                <div><span class="material-icons">favorite_border</span></div>
                                <div class="pl10"><span class="material-icons">textsms</span></div>
                            </div>
                            <div><span class="material-icons">bookmark_border</span></div>
                        </div>
                        <!-- // 피드 하단 좋아요&댓글&보관함 -->

                        <!-- 좋아요 카운트 -->
                        <div class="likeCount alignC">
                            <p>좋아요 1,436개</p>
                        </div>
                        <!-- // 좋아요 카운트 -->

                        <!-- 댓글 모두 보기&게시시간 -->
                        <div style="padding:10px 15px 15px 15px;font-size:14px;color:#111;">

                            <div class="disFlex">
                                <div style="font-weight:600;"><?= $value->userId ?></div>
                                <div class="oneTxtLine pl10" style="max-width:370px;"><?= $value->feedContent ?></div>
                            </div>

                            <div class="col-between" style="padding:10px 0 0;font-size:14px;color:rgb(142, 142, 142)">
                                <p>댓글 7개 모두 보기</p>
                                <p style="font-size:12px;">8시간 전</p>
                            </div>

                        </div>
                        <!-- // 댓글 모두 보기&게시시간 -->
                        <!-- 댓글달기&게시버튼 -->
                        <div class="reppleWrap position-r">
                            <textarea class="repple" placeholder="댓글 달기..."></textarea>
                            <button class="postBtn">게시</button>
                        </div>
                        <!-- // 댓글달기&게시버튼 -->
                    </div>
                    <!-- // 피드 전체 박스 -->
                <?php } ?>
            <?php } else { ?>

            <?php } ?>
        </div>
        <!-- 피드 우측 -->
        <div class="feedContentRight">

            <div class="" style="position:fixed;width:320px;">

                <div>
                    <div class="profId disFlex alignC">
                        <div class="profImg" style="width:54px;height:54px;"></div>
                        <p class="pl20"><?= $value->userId ?></p>
                    </div>
                </div>

                <div style="padding:20px 0 30px;">

                    <div class="col-between pb10 alignC">
                        <span style="font-size:14px;font-weight:600">회원님을 위한 추천</span>
                        <span style="font-size:12px;font-weight:400;color:rgb(38, 38, 38);">모두보기</span>
                    </div>

                    <div class="col-between alignC" style="padding:10px 0 5px;">
                        <div class="disFlex alignC">
                            <div class="profImg"></div>
                            <div class="profId pl10">
                                <p><?= $value->userId ?></p>
                            </div>
                        </div>
                        <div style="font-size:12px;color:blue;">팔로우</div>
                    </div>

                    <div class="col-between alignC" style="padding:10px 0 5px;">
                        <div class="disFlex alignC">
                            <div class="profImg"></div>
                            <div class="profId pl10">
                                <p><?= $value->userId ?></p>
                            </div>
                        </div>
                        <div style="font-size:12px;color:blue;">팔로우</div>
                    </div>

                </div>

                <div style="font-size:14px;color:rgb(199, 199, 199);font-weight:400;">
                    <div>
                        소개
                        도움말
                        홍보
                        센터API
                        채용정보
                        개인정보처리방침
                        약관
                        위치
                        언어
                    </div>
                    <div>© 2022 INSTAGRAM FROM META</div>
                </div>

            </div>
        </div>
        <!-- // 피드 우측 -->
    </div>
    <!-- // 피드 전체 -->
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/feed.js"></script>
<script type="text/javascript">
    function editNewFeedHTML() {
        return `<div>
                <a onClick="deleteNewPostPopup()"> X </a>
            </div>

            <div id="editFeed" class="popup newFeed">
                <div class="popupTitle">
                    <h1>새 게시물 만들기</h1>
                    <a onclick="newPost()" class="editBtn">공유하기</a>
                </div>
                <form action="/content/" method="post" id="newForm" name="newForm" enctype="multipart/form-data">
                    <input type="file" id="fileInput" name="fileInput" onchange="readImage(this)" style="display: none;"/>
                    <img id="fileImg" src="#" alt="no" style="width: 100px; height: 100px;">
                    <input type="hidden" id="userId" name="userId" value="<?php echo $value->userId; ?>">
                    <textarea id="newPostData" name="newPostData" placeholder="문구 입력.."></textarea>
                </form>
                    
                <div class="btnBlue">
                    <a onclick="newPost()">공유하기</a>
                </div>`;
    }
</script>