const dropBox = document.querySelector("#dropBox");

function readImage(input) {
	if (input.files && input.files[0]) {
		// 이미지파일 검사
		// 이미지파일 검사 //

		const reader = new FileReader();
		reader.onload = function (e) {
			// 이미지가 로드됨\
			document.getElementById("fileImg").setAttribute("src", e.target.result);
			// input files set
			document.getElementById("fileInput").files = input.files;
		};
		reader.readAsDataURL(input.files[0]);

		deleteNewPostPopup();

		editNewPostPopup();
	}
}

// drop
function dropHandler(event) {
	const file = event.dataTransfer.items[0].getAsFile();

	let fileImg = document.getElementById("fileImg");
	fileImg.src = URL.createObjectURL(file);
	fileImg.onload = function () {
		URL.revokeObjectURL(fileImg.src);
	};

	const transfer = new DataTransfer();
	transfer.items.add(event.dataTransfer.items[0].getAsFile());
	console.log(transfer);

	const fileInput = document.getElementById("fileInput");
	fileInput.files = transfer.files;
	readImage(fileInput);
	console.log(fileInput.files);

	deleteNewPostPopup();

	editNewPostPopup();

	event.preventDefault();
}

// drag event
function dragOverHandler(event) {
	event.preventDefault();
}
