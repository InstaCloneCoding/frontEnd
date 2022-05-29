function showNewPostPopup() {
    const getPopUp = document.getElementById("popupBackground");
    getPopUp.style.display = "block";
}

function HideNewPostPopup() {
    const getPopUp = document.getElementById("popupBackground");
    getPopUp.style.display = "none";
}

function upload() {
    const input = document.getElementById("file_1");
    input.click();
}

async function newPost() {
    let body = {
        'user_id': '',
        'fid_content': ''
    };
    await postData('/', 'json', body);
}