<section class="feedWrap commonWrap disFlex justifyC m20">
    <div id="loading"></div>
    <!-- 피드 전체 -->
    <div class="disFlex justifyC">
        <!-- 피드 센터 -->
        <div class="feedContentCenter">
            <!-- <p>게시글</p> -->
            <?php if( !empty($feed) ) { ?>
                <?php foreach($feed as $key => $value) { ?>
                <!-- 피드 전체 박스 -->
                <div class="feedContentWrap">
                    <!-- 피드 상단 타이틀 -->
                    <div class="col-between" style="padding:15px;">
                        <!-- 피드 상단 타이틀 좌측 프로필&프로필네임 -->
                        <div class="disFlex alignC">
                            <div class="" style="width:32px;height:32px;background:red;border-radius:50%"></div>
                            <div class="pl10">
                                <p style="font-size;14px;font-weight:600;"><?= $value->userId ?></p>
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
                                    <div style="padding:8px 16px;">
                                        <a href="/<?=  $_SESSION['user']['userId'] ?>" class="disFlex alignC">
                                            <span class="material-icons">account_circle</span>
                                            <span>프로필</span>
                                        </a>
                                    </div>
                                    <div style="padding:8px 16px;">
                                        <a href="#" class="disFlex alignC">
                                            <span class="material-icons">bookmark_border</span>
                                            <span>저장됨</span>
                                        </a>
                                    </div>
                                    <div style="padding:8px 16px;">
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
                    <div class="col-between"  style="padding:15px 15px 5px 15px;">
                        <div class="disFlex">
                            <div><span class="material-icons">favorite_border</span></div>
                            <div class="pl10"><span class="material-icons">textsms</span></div>
                        </div>
                        <div><span class="material-icons">bookmark_border</span></div>
                    </div>
                    <!-- // 피드 하단 좋아요&댓글&보관함 -->
                    <!-- 좋아요 카운트 -->
                    <div class="alignC" style="padding:0 15px;">
                       <p style="font-size:14px;font-weight:600;color:#111;">좋아요 1,436개</p>
                    </div>
                    <!-- // 좋아요 카운트 -->
                    <!-- 댓글 모두 보기&게시시간 -->
                    <div style="padding:10px 15px 15px 15px;font-size:14px;color:#111;"> 
                        <div class="disFlex">
                            <div style="font-weight:600;"><?= $value->userId ?></div>
                            <div class="pl10"><?= $value->fidContent ?></div>
                        </div>
                        <div class="col-between" style="padding:10px 0 0;font-size:14px;color:rgb(142, 142, 142)">
                            <p>댓글 7개 모두 보기</p>
                            <p style="font-size:12px;">8시간 전</p>
                        </div>
                    </div>
                    <!-- // 댓글 모두 보기&게시시간 -->
                    <!-- 댓글달기&게시버튼 -->
                    <div>
                        <form class="position-r" style="border-top:1px solid #dfdfdf;">
                            <textarea  placeholder="댓글 달기..." style="width:100%;resize:none;border:none;padding:0 15px;"></textarea>
                            <button style="position:absolute;top:50%;right:10px;transform: translate(0, -50%);color:blue;background:none;border:none;">게시</button>
                        </form>
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
            <div>
                <div>
                    <div style="width:54px;height:54px;background:red;border-radius:50%"></div>
                    <p><?= $value->userId ?></p>
                </div>
            </div>
            <div>
                <div>소개도움말홍보 센터API채용 정보개인정보처리방침약관위치언어</div>
                <div>© 2022 INSTAGRAM FROM META</div>
            </div>
        </div>
        <!-- // 피드 우측 -->
    </div>
    <!-- // 피드 전체 -->
</section>

<script type="text/javascript" src="/script/common.js"> </script>
<script type="text/javascript" src="/script/loading.js"> </script>
<script type="text/javascript" src="/script/feed.js"> </script>