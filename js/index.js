let loadingDiv =  document.querySelector('.loader');
window.onload =setTimeout(
	function(){
		loadingDiv.style.display = 'none';
	}, 3000
);

//Edit Movie Entry Location
let movEditForm = document.querySelector('.update-loc');
let editFeed = document.getElementById('mdb');

movEditForm.onsubmit = function(event) {
	event.preventDefault();

	let editAct = movEditForm.getAttribute('action');
	//alert('Form Has Been Submitted!');
	let instantiator = new XMLHttpRequest();
	instantiator.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			let editResp = this.responseText;
			//display feedback
			editFeed.classList.add('alert');
			editFeed.classList.add('alert-success');
			editFeed.classList.add('alert-dismissable');
			editFeed.classList.add('sticky-top')
			editFeed.innerHTML = editResp;
		}
	};
	instantiator.open('POST', editAct);
	let movieData = new FormData(movEditForm);
	//console.log(movieData);
	instantiator.send(movieData);

	//Execute clearing func
  setTimeout(rel, 7000);
};

function rel(){
	location.reload()
}