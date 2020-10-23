let nameOfCst = document.getElementById('cusname');
let form = document.querySelector('form#search-form');
let disp = document.getElementById('results');
let url = form.getAttribute('action');

form.onsubmit = function(event){
	event.preventDefault();

	var request = new XMLHttpRequest;
	request.open('POST', url);
	request.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			let frmdb = this.responseText;
			//show the results
			disp.innerHTML = frmdb;
		}
	}
	let fData = new FormData(form);
	request.send(fData);
}