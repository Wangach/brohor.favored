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
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Ensure That All Form Fields Are Duly Filled!'
		})
		console.log(formVals);
		return false;
	}else if(transError === false){
		//No Errors found

		Swal.fire({
        title: 'You Sure?',
        text: "Pay "+ document.getElementById('kiwango').value+ " By "+document.getElementById('cusjina').value,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Record'
      })
      .then((result) => {
        if (result.isConfirmed) {
         	payBtn.setAttribute('disabled', 'true');
			let paymentRequest = new XMLHttpRequest;
			paymentRequest.open('POST', paymentUrl);
          	paymentRequest.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200){
              let frmdb = this.responseText;
              //check the text for error or success
              if (frmdb.includes('Successful') > 0) {
                //successful request
                Swal.fire(
                    'Paid!',
                      frmdb,
                    'success'
                  )
              }else if(frmdb.includes('Error') > 0){
                //failed request
                Swal.fire(
                    'Uh-oh!',
                    'Issue In Handling Request.',
                    'error'
                  )
              }else{
                Swal.fire(
                    'Uknown!',
                    'What Are You Saying?',
                    'error'
                  )
              }
            }
        }
        let paymentData = new FormData(paymentForm);
		paymentRequest.send(paymentData);

		//clear fields
		setTimeout(clearFields, 4500);

        }
        else if (result.dismiss) {
          swal.fire(
            'Cancelled',
            'The Payment Process Has Been Terminated!',
            'error'
          )
        }
      })
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