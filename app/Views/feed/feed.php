<section class="feedWrap commonWrap">
    <div id="loading"></div>
    <!-- 피드 전체 -->
    <div class="feedWrapBox">
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
                                    <p><?= $value['user_id'] ?></p>
                                </div>
                            </div>
                            <!-- // 피드 상단 타이틀 좌측 프로필&프로필네임 -->
                            <!-- 피드 상단 타이틀 우측 아이콘 -->
                            <div class="disFlex alignC">
                                <span class="material-icons" onclick="modalClick(2)"> more_horiz</span>
                                <!-- 피드 상단 타이틀 우측 아이콘 모달창 -->
                                <div class="modal feedModal1" style="display:none;">
                                    <div class="modalBg" onclick="this.parentNode.style.display = 'none'"></div>
                                    <div class="modalContent">
                                        <div class="modalList">
                                            <a href="/<?= $_SESSION['user']['userId'] ?>" class="disFlex alignC">
                                                <span class="material-icons">account_circle</span>
                                                <span>프로필</span>
                                            </a>
                                        </div>
                                        <div class="modalList">
                                            <a href="/<?= $_SESSION['user']['userId'] ?>" class="disFlex alignC">
                                                <span class="material-icons">bookmark_border</span>
                                                <span>저장됨</span>
                                            </a>
                                        </div>
                                        <div class="modalList">
                                            <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'" class="disFlex alignC">
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
                        <img class="contentImg" src="/uploads/<?= $value['file_name'] ?>" alt="이미지없음.">
                        <!-- // 피드 이미지 슬라이드 공간 -->

                        <!-- 피드 하단 좋아요&댓글&보관함 -->
                        <div class="feedBottomMenu col-between">
                            <div class="disFlex">
                                <div><span class="material-icons">favorite_border</span></div>
                                <div class="pl10" onclick="modalClick(4)"><span class="material-icons">textsms</span></div>
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
                        <div class="reppleView">
                            <div class="disFlex">
                                <div class="fw600"><?= $value->userId ?></div>
                                <div class="feedContent oneTxtLine"><?= $value->feedContent ?></div>
                            </div>
                            <div class="repple col-between">
                                <p onclick="modalClick(4)">댓글 7개 모두 보기</p>
                                <p class="time">8시간 전</p>
                            </div>
                        </div>
                        <!-- // 댓글 모두 보기&게시시간 -->
                        <!-- 댓글달기&게시버튼 -->
                        <div class="repplePost">
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
            <div class="wrap">
                <div class="profId">
                    <div class="profImg" style="width:54px;height:54px;"></div>
                    <p class="pl20"><?= $value->userId ?></p>
                </div>
                <div class="userRecommend">
                    <div class="topBar col-between">
                        <span class="txt1">회원님을 위한 추천</span>
                        <span class="txt2" onclick="modalClick(3)">모두보기</span>
                    </div>
                    <div class="content col-between alignC">
                        <div class="disFlex alignC">
                            <div class="profImg"></div>
                            <div class="profId pl10">
                                <p><?= 'test1' ?></p>
                            </div>
                        </div>
                        <div class="follow">팔로우</div>
                    </div>
                    <div class="content col-between alignC">
                        <div class="disFlex alignC">
                            <div class="profImg"></div>
                            <div class="profId pl10">
                                <p><?='test2' ?></p>
                            </div>
                        </div>
                        <div class="follow">팔로우</div>
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
    <div class="modal feedModal2" style="display:none;">
        <div class="modalBg" onclick="this.parentNode.style.display = 'none'"></div>
        <div class="modalContent">
            <div style="padding:10px 20px;font-size:16px;font-weight:600;">추천</div>
            <div class="modalList">
                <div class="content col-between alignC">
                    <div class="disFlex alignC">
                        <div class="profImg"></div>
                        <div class="profId pl10" style="display:block">
                            <p><?= $value->userId ?></p>
                            <p style="color:rgb(142, 142, 142);font-size:14px;font-weight:300;"><?= $value->userId ?></p>
                        </div>
                    </div>
                    <div class="follow" style="font-size:12px;color:blue;">팔로우</div>
                </div>
            </div>
            <div class="modalList">
                <div class="content col-between alignC">
                    <div class="disFlex alignC">
                        <div class="profImg"></div>
                        <div class="profId pl10" style="display:block">
                            <p><?= $value->userId ?></p>
                            <p style="color:rgb(142, 142, 142);font-size:14px;font-weight:300;"><?= $value->userId ?></p>
                        </div>
                    </div>
                    <div class="follow" style="font-size:12px;color:blue;">팔로우</div>
                </div>
            </div>
            <div class="modalList">
                <div class="content col-between alignC">
                    <div class="disFlex alignC">
                        <div class="profImg"></div>
                        <div class="profId pl10" style="display:block">
                            <p><?= $value->userId ?></p>
                            <p style="color:rgb(142, 142, 142);font-size:14px;font-weight:300;"><?= $value->userId ?></p>
                        </div>
                    </div>
                    <div class="follow" style="font-size:12px;color:blue;">팔로우</div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal feedModal3" style="display:none;">
        <div class="modalBg" onclick="this.parentNode.style.display = 'none'"></div>
        <div class="" style="position:absolute;width:1775px;height:850px;background:#fff;left:50%;top:50%;transform:translate(-50%, -50%);z-index:1000;">
            <div style="display:flex;">
                <div>
                    <img id="fileImg" style="width:850px; height:850px;">
                </div>
                <div>
                    dddddddd
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"></script>
<script type="text/javascript" src="/script/loading.js"></script>
<script type="text/javascript" src="/script/feed.js"></script>
<script type="text/javascript">
    function editNewFeedHTML() {
        return `
            <div class="popClose">
                <a onClick="deleteNewPostPopup()">
                    <span class="material-symbols-outlined">close</span>
                </a>
            </div> 
        
            <div id="editFeed" class="popup editFeed">
                <div class="popupTitle">
                    <h1>새 게시물 만들기</h1>
                    <a onclick="newPost()" class="editBtn">공유하기</a>
                </div>
                <form action="/content/" method="post" id="newForm" name="newForm" enctype="multipart/form-data" class="disFlex">
                    <input type="file" id="fileInput" name="fileInput" onchange="readImage(this)" style="display: none;"/>
                    <div>
                        <img id="fileImg" src="#" alt="no" style="width:750px; height:750px;">
                    </div>
                    <div class="" style="width:340px;">
                        <input type="hidden" id="userId" name="userId" value="<?php echo $_SESSION['user']['userId']; ?>">
                        <textarea id="newPostData" name="newPostData" placeholder="문구 입력.." class="postTxtArea"></textarea>
                    </div>
                </form>
            </div>
            `;
    }
</script>