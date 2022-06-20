<div class="top">
    <div class="topInner col-between alignC">
        <a href="/"> 
            <img src="/images/header-logo.png" alt="load img failed">
        </a>
        <?php if ( $_SESSION['user'] ) { ?>
            <div>
                <label>
                    <input type="text" name="searching" placeholder="돋보기 (검색)" value=""/>
                </label>
            </div>
            <div class="disFlex">
                <div>
                    <a href="/"> 
                        <span class="material-icons">home</span>
                    </a>
                </div>
                <div>
                    <a onclick="createNewPostPopup()"> 
                        <span class="material-icons">post_add</span>
                    </a>
                </div>
                <div>
                    <!-- <a href="#"> 나침표 </a> -->
                    <a href="#"> 
                        <span class="material-icons">favorite_border</span>
                    </a>
                </div>  
                <div>
                    <!-- 드랍다운 메뉴 필요 -->
                    <span class="material-icons" onclick="feedAddModal()">account_circle</span>
                    <div class="feedAddModal">
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
                                <span class="material-icons">settings</span>
                                <span>설정</span>
                            </a>
                        </div>
                        <div style="padding:8px 16px;">
                            <a href="#" class="disFlex alignC"> 
                                <span class="material-icons">published_with_changes</span>
                                <span>계정전환</span>
                            </a>
                        </div>
                        <div class="disFlex" style="padding:8px 16px;">
                            <a href="/accounts/logout" class="disFlex alignC"> 
                                로그아웃 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>