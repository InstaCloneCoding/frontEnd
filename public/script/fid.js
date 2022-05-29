function showNewPostPopup() {
    const getPopUp = document.getElementById("newFid");
    getPopUp.style.display = "block";
}

function HideNewPostPopup() {
    const getPopUp = document.getElementById("newFid");
    getPopUp.style.display = "none";
}

async function newPost() {

    let body = {
        'user_id': '',
        'fid_content': ''
    };

    await postData('/', null, body)
        // .then(data => {
        //     console.log(data);
        // });
}

async function getFidContents() {

    await getData('/', 'json', null)
        // .then(data => {
        //     console.log(data);
        // });
}

getFidContents().then(r => {
    console.log(r);
});