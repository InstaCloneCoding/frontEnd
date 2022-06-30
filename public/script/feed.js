function createNewPostPopup() {
	const section = document.createElement("section");
	section.id = "popupBackground";
	document.body.appendChild(section);

	section.innerHTML = createNewFeedHTML();

	console.log("exit");
}

function createNewFeedHTML() {
	return `<div>
                <a onClick="deleteNewPostPopup()"> X </a>
            </div>

            <div id="newFeed" class="popup newFeed">
                <div id="popupTitle">
                    <h3>새 게시물 만들기</h3>
                </div>

                <div class="dragDropBox" id="dragDropArea"
                    onDrop="dropHandler(event);" onDragOver="dragOverHandler(event);"
                    style="height: 250px; width:250px;">

                    사진을 여기에 끌어다 놓으세요

                    <div class="btnBlue">
                        <label for="fileInput">컴퓨터에서 선택</label>
                        <input id="fileInput" type="file" accept="image/*" onchange="readImage(this)" style="display:none;"/>
                    </div>
                </div>
        
                <img id="fileImg" src="#" alt="no" style="width: 100px; height: 100px; display: none">
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
