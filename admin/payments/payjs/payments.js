//Showing Users Latest Transactions
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

//Making Payments
let paymentForm = document.querySelector('form#new-cs-form');
let fromDb = document.getElementById('feedback');
let paymentUrl = paymentForm.getAttribute('action');

paymentForm.onsubmit = function(event){
	event.preventDefault();

	let paymentRequest = new XMLHttpRequest;
	paymentRequest.open('POST', paymentUrl);
	paymentRequest.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			let res = this.responseText;
			//show the results
			fromDb.classList.add('alert');
			fromDb.classList.add('alert-success');
			fromDb.classList.add('alert-dismissible');
			fromDb.classList.add('fade');
			fromDb.classList.add('show');
			fromDb.innerHTML = res;
		}else{
			let res = this.responseText;
			
			fromDb.classList.add('alert');
			fromDb.classList.add('alert-danger');
			fromDb.classList.add('alert-dismissible');
			fromDb.innerHTML = res;
		}
	}
	let paymentData = new FormData(paymentForm);
	paymentRequest.send(paymentData);

	//
	setTimeout(clearFields, 3000);
	
}

function clearFields(){

		location.reload();
		let cashType = document.getElementById('aina');
		let csName = document.getElementById('cusjina');
		let amtOfCash = document.getElementById('kiwango');
		let expl = document.getElementById('maelezo');

		//reset the above fields
		cashType.value = '';
		csName.value = '';
		amtOfCash.value = '';
		expl.value = '';
	}