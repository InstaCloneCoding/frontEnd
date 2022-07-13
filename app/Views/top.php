<div class="top">
    <div class="topInner col-between alignC">
        <a href="/"> 
            <img src="/images/header-logo.png" alt="load img failed">
        </a>
        <?php if ( $_SESSION['user'] ) { ?>
            <div class="topSearch">
                <label style="position:relative;">
                    <input type="text" name="searching" placeholder="돋보기 (검색)" value="" />
                    <span class="material-icons" style="position: absolute;right: 0%;top: 65%;transform: translate(-65%, -50%);">search</span>
                </label>
            </div>
            <div class="disFlex">
                <div>
                    <a href="/" class="pl20"> 
                        <span class="material-icons">home</span>
                    </a>
                    <a href="#" onclick="createNewPostPopup()" class="pl20 pointer">
                        <span class="material-icons">post_add</span>
                    </a>
                    <a href="#" class="pl20"> 
                        <span class="material-icons" onclick="modalClick(5)">favorite_border</span>
                    </a>

                     <!-- top헤더 프로필 모달창 -->
                     <div class="modal topModal2" style="display:none;">
                        <div class="modalBg" onclick="this.parentNode.style.display = 'none'"></div>
                        <div class="modalContent" style="width:500px;min-height:360px;">
                                <div class="modalList"></div>
                                <div class="modalList"></div>
                                <div class="modalList"></div>
                            <script>
                                for (var i=0; i < 3; i++)
                                {
                                     document.querySelectorAll(".modalList")[i].innerHTML =
                                         `<div class='col-between alignC'>
                                         <div class='profImg'>
                                         </div>
                                         <div class='profId pl10' style='display:block'>
                                         <p>???님이 회원님을 팔로우하기 시작했습니다.</p>
                                     </div>
                                     <div class='follow' style='font-size:12px;color:blue;'>
                                         팔로우
                                     </div>
                                     </div>`;
                                }
                            </script>

                        </div>
                    </div>
                    <!-- // top헤더 프로필 모달창 -->

                    <a href="#">
                        <span class="material-icons pl20" onclick="modalClick(1)">account_circle</span>
                    </a>

                    <!-- top헤더 프로필 모달창 -->
                    <div class="modal topModal1" style="display:none;">
                        <div class="modalBg" onclick="this.parentNode.style.display = 'none'"></div>
                        <div class="modalContent">
                            <div class="modalList">
                                <a href="/<?=  $_SESSION['user']['userId'] ?>" class="disFlex alignC">
                                    <span class="material-icons">account_circle</span>
                                    <span>프로필</span>
                                </a>
                            </div>
                            <div class="modalList">
                                <a href="/<?=  $_SESSION['user']['userId'] ?>/saved" class="disFlex alignC">
                                    <span class="material-icons">bookmark_border</span>
                                    <span>저장됨</span>
                                </a>
                            </div>
                            <div class="modalList">
                                <a href="/accounts/edit" class="disFlex alignC">
                                    <span class="material-icons">settings</span>
                                    <span>설정</span>
                                </a>
                            </div>
                            <div class="modalList disFlex">
                                <a href="/accounts/logout" class="disFlex alignC">
                                    <span class="material-icons">settings</span> 
                                    <span>로그아웃</span> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- // top헤더 프로필 모달창 -->

                </div>
            </div>
        <?php } ?>
    </div>
</div>