function createNewPostPopup() {
	const section = document.createElement("section");
	section.id = "popupBackground";
	document.body.appendChild(section);

	section.innerHTML = createNewFeedHTML();

	console.log("exit");
}

function createImgTag() {
	return `<img id="fileImg" src="#" alt="no" style="width: 100px; height: 100px">`;
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

function editNewFeedHTML() {
	return `<div>
                <a onClick="deleteNewPostPopup()"> X </a>
            </div>
        
            <div id="newFeed" class="popup newFeed">
                <div id="popupTitle">
                    <h3>새 게시물 만들기</h3>
                </div>
                
                <input id="fileInput" type="file" accept="image/*" onchange="readImage(this)" style="display: none;"/>
                <img id="fileImg" src="#" alt="no" style="width: 100px; height: 100px;">
                
                <div>
                    <p>그림</p>
                    <p>아이디</p>
                </div>
                <textarea placeholder="문구 입력.."></textarea>
                <div class="btnBlue">
                    <a onclick="newPost()">공유하기</a>
                </div>
            </div>`;
}

function deleteNewPostPopup() {
	const getPopUp = document.getElementById("popupBackground");
	getPopUp.remove();
}

function upload() {
	const input = document.getElementById("fileInput");
	input.click();
}

function feedAddModal() {
	const feedAdd = document.querySelector(".feedAddModal");

	if (feedAdd.style.display == "none") {
		feedAdd.style.display = "block";
	} else {
		feedAdd.style.display = "none";
	}
}

async function newPost() {
	let body = {
		user_id: "",
		fid_content: "",
	};
	await postData("/", "json", body);
}
