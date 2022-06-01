const loading = document.getElementById('loading');
const classByLoading = document.getElementsByClassName("loading");

function displayLoading() {
    loading.style.display = 'block';
}

function hideLoading() {
    loading.style.display = 'none';
}

function displayLoadingByClass() {
    console.log( classByLoading );
}

function hideLoadingByClass() {
    console.log( classByLoading );
}