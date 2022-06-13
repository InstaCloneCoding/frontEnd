const dropBox = document.querySelector("#dropBox");

function dropHandler(event) {
    console.log(event);

    event.preventDefault();

    const file = event.dataTransfer.items[0].getAsFile();

    console.log(file);
    console.log(file.name);
}

function dragOverHandler(event) {
    console.log('File(s) in drop zone');
    console.log(event);

    event.preventDefault();
}

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