<section class="feedWrap commonWrap disFlex justifyC m20">
    <div id="loading"></div>
    <div class="disFlex justifyC">
        <div class="pr30" style="width:470px;">
            <!-- <p>게시글</p> -->
            <?php if( !empty($feed) ) { ?>
                <?php foreach($feed as $key => $value) { ?>
                <div class="feedContentWrap">
                    <div class="col-between" style="padding:15px;">
                        <div class="disFlex alignC">
                            <div class="" style="width:32px;height:32px;background:red;border-radius:50%"></div>
                            <div class="pl10">
                                <p style="font-size;14px;font-weight:600;"><?= $value->userId ?></p>
                            </div>
                        </div>
                        <div class="disFlex alignC">
                            <span class="material-icons click1">
                            more_horiz
                            </span>
                            <div class="modal testModal">
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
                            </div>
                        </div>

                        </div>
                    <div class="contentImg"></div>
                    <div class="col-between"  style="padding:15px 15px 5px 15px;">
                        <div class="disFlex">
                            <div><span class="material-icons">favorite_border</span></div>
                            <div class="pl10"><span class="material-icons">textsms</span></div>
                        </div>
                        <div><span class="material-icons">bookmark_border</span></div>
                    </div>
                    <div class="alignC" style="padding:0 15px;">
                       <p style="font-size:14px;font-weight:600;color:#111;">좋아요 1,436개</p>
                    </div>
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
                    <div>
                        <form class="position-r" style="border-top:1px solid #dfdfdf;">
                            <textarea  placeholder="댓글 달기..." style="width:100%;resize:none;border:none;padding:0 15px;"></textarea>
                            <button style="position:absolute;top:50%;right:10px;transform: translate(0, -50%);color:blue;background:none;border:none;">게시</button>
                        </form>
                    </div>
                   
                </div>
                <?php } ?>
            <?php } else { ?>
            <?php } ?>
        </div>
        <div style="width:320px;">

        </div>
    </div>
</section>

<script type="text/javascript" src="/script/common.js"> </script>
<script type="text/javascript" src="/script/loading.js"> </script>
<script type="text/javascript" src="/script/feed.js"> </script>