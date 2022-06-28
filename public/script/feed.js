function createNewPostPopup() {
	const section = document.createElement("section");
	section.id = "popupBackground";
	document.body.appendChild(section);

	section.innerHTML = createNewFeedHTML();

	console.log("exit");
}

function createNewFeedHTML() {
	return `<div class="popClose">
                <a onClick="deleteNewPostPopup()"> <span class="material-symbols-outlined" style="color:#fff;">close</span> </a>
            </div>
            <div id="newFeed" class="popup newFeed">
                <div class="popupTitle">
                    <h1>새 게시물 만들기</h1>
                </div>
                <div class="flexC" style="flex-direction:column;padding:150px 0;">
                    <img src="/images/new-feed-img.png" alt="">
                    <div class="dragDropBox" id="dragDropArea" onDrop="dropHandler(event);" onDragOver="dragOverHandler(event);">
                        <p>사진을 여기에 끌어다 놓으세요</p>
                        <div class="btnWrap btnBlue">
                            <label for="fileInput" class="textC">컴퓨터에서 선택</label>
                            <input id="fileInput" type="file" accept="image/*" onchange="readImage(this)" style="display:none;"/>
                        </div>
                    </div>
                </div>
                <img id="fileImg" src="#" alt="no" style="display:none;width:100px;height:100px;">
            </div>`;
}

function editNewPostPopup() {
	const section = document.createElement("section");
	section.id = "popupBackground";
	document.body.appendChild(section);

	section.innerHTML = editNewFeedHTML();
}

function deleteNewPostPopup() {
	const getPopUp = document.getElementById("popupBackground");
	getPopUp.remove();
}

function upload() {
	const input = document.getElementById("fileInput");
	input.click();
}


async function newPost() {
    const newData = document.querySelector("#newForm");

	let data = {
        file: newData[0].files[0],
		//user_id: newData[1].value,
		//feed_content: newData[2].value
	};

    const formData = new FormData();
    formData.append('file', data.file);

    debugger;

    document.getElementById("newForm").submit();

    /*postData("/content/", "json", formData)
    .then(data => {
        console.log('dss');

        if (data.code === 200) {

            alert('ddd');

        } else {

            alert('ddddddd');

        }

    })*/
}

function fLogin() {
    const userData = document.querySelector("#form");

    let userBody = {
        userId : userData[0].value,
        userPassword : userData[1].value
    };

    postData("/accounts/login", "json", userBody)
        .then(data => {
            console.log(data);
            hideLoading();

            if (data.code === 200) {
                alert(data.msg);
                window.location = '/';
            } else {
                loginErrorMsg.innerHTML = "<p class='errorMsg'>로그인이 유효하지 않습니다.</p>"
                // alert(data.messages.msg);
                
            }
        });
}
