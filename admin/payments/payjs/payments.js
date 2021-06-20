//Showing Users Latest Transactions
let nameOfCst = document.getElementById('cusname');
let form = document.querySelector('form#search-form');
let disp = document.getElementById('results');
let url = form.getAttribute('action');
let payBtn = document.querySelector('#trans');

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

let transError = false;

paymentForm.addEventListener("submit", function(e){
	event.preventDefault();
	//form values 
	let formVals = [
		document.getElementById('aina').value,
		document.getElementById('cusjina').value,
		document.getElementById('kiwango').value,
		document.getElementById('maelezo').value
	];
	
	checkTrans(formVals);
	if (transError === true) {
		//errors in the form
		fromDb.classList.add('alert');
		fromDb.classList.add('alert-error');
		fromDb.innerHTML = 'Ensure That All Form Fields Are Duly Filled!';
		console.log(formVals)
		return false;
	}else if(transError === false){
		//No Errors found
		payBtn.setAttribute('disabled', 'true');
		let paymentRequest = new XMLHttpRequest;
		paymentRequest.open('POST', paymentUrl);
		paymentRequest.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				let res = this.responseText;
				//show the results
				fromDb.classList.add('alert');
				fromDb.classList.add('alert-success');
				fromDb.innerHTML = res;
			}
		}
		let paymentData = new FormData(paymentForm);
		paymentRequest.send(paymentData);

		//
		setTimeout(clearFields, 4500);
	}
});

//Define the above functions
function checkTrans(arr){
	for(i of arr){
		if (i == '') {
			transError = true;
			return transError;
		}else {
			transError = false;
			return transError;
		}
	}
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