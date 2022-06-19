function showNewPostPopup() {
    const getPopUp = document.querySelector(".popupBackground");
    getPopUp.style.display = "block";
}

function HideNewPostPopup() {
    const getPopUp = document.querySelector(".popupBackground");
    getPopUp.style.display = "none";
}

function upload() {
    const input = document.getElementById("file_1");
    input.click();
}

function feedAddModal () {
    const feedAdd = document.querySelector(".feedAddModal");
    
    if (feedAdd.style.display == "none") {
        feedAdd.style.display="block";
    } else {
        feedAdd.style.display="none";
    }
}

async function newPost() {
    let body = {
        'user_id': '',
        'fid_content': ''
    };
    await postData('/', 'json', body);
}