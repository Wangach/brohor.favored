// window.onload = () =>{
//    //alert(`Hello`);Get Button
//    let menuBar = document.querySelector('#sidebar-btn');
//    let sidebar = document.querySelector('.f2-sidebar');
//    menuBar.addEventListener('click', () =>{
//        sidebar.classList.toggle('return');
//     //    linkspans.classList.toggle('hide');
//     //    linkicons.classList.add('show-ic');
//    })

// }

//Get Items
// const looserForm = document.getElementById("f2-looser-form");
// const submitLooserButton = document.getElementById('#f2-looser-btn');
// let errorForm = false;

// looserForm.addEventListener('submit', (event)=> {
//     event.preventDefault();
//     let formDets = [
//         document.getElementById('hp').value,
//         document.getElementById('ap').value,
//         document.getElementById('ht').value,
//         document.getElementById('at').value,
//         document.getElementById('hsc').value,
//         document.getElementById('asc').value,
//         document.getElementById('mtyp').value,
//         document.getElementById('coup').value
//     ];

//     checkFormErrors(formDets);
//     //if error has been found
//     if(errorForm === true){
//         // alert('Kindly Ensure that there are no errors in form');
//         console.log(formDets);
//     }else if(errorForm === false){
//         alert('There are no errors in form');
//         console.log(formDets);
//         console.log(errorForm);
//     }
// })


// function checkFormErrors(arr){
// 	for(let dets of arr){
// 		if (dets === '') {
// 			errorForm = true;
// 			return errorForm;
// 		}else{
// 			errorForm = false;
// 			return errorForm;
// 		}
// 	}
// }
let looserform = document.querySelector("form#f2-looser-form");
let looserUrl = looserform.getAttribute("action");
let submitBtn = document.querySelector('#f2-looser-btn');

looserform.addEventListener("submit", function (event) {
  event.preventDefault();


  Swal.fire({
        title: 'Are you sure?',
        text: "Record Match",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Record'
      })
      .then((result) => {
        if (result.isConfirmed) {
          submitBtn.setAttribute('disabled', 'true');
          let req = new XMLHttpRequest();
          req.open("POST", looserUrl);
          req.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200){
              let frmdb = this.responseText;
              Swal.fire(
                      'Recorded!',
                        'successful match',
                      'success'
                    )
              setTimeout(() => {
                let looserHolder = document.querySelector('#lholder');
                let clearBtn = document.getElementById('clear');
                looserHolder.innerHTML = frmdb;
                submitBtn.removeAttribute('disabled', 'true');
                clearBtn.removeAttribute('disabled', 'true');
                clearBtn.addEventListener('click', () => {
                  document.getElementById('hp').value = '';
                  document.getElementById('ap').value = '';
                  document.getElementById('ht').value = '';
                  document.getElementById('at').value = '';
                  document.getElementById('hsc').value = '';
                  document.getElementById('asc').value = '';
                  document.getElementById('mtyp').value = '';
                  document.getElementById('coup').value = '';

                  //disable the button 2 secs after click
                  setTimeout(() => {
                    clearBtn.setAttribute('disabled', 'true');
                  }, 2000)
                })
                
              }, 3000);
            }
        }
        let looserData = new FormData(looserform);
        req.send(looserData);

        }
        else if (result.dismiss) {
          swal.fire(
            'Cancelled',
            'Process Has Been Terminated',
            'error'
          )
        }
      })
});
//Refreshing the total games
const refreshFunc = () => {
  
}
//Payments
//Showing Users Latest Transactions
let nameOfCst = document.getElementById('tn');
let strform = document.querySelector('form#f2-search-form');
let disp = document.getElementById('results');
let url = strform.getAttribute('action');


strform.onsubmit = function(event){
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
	let fData = new FormData(strform);
	request.send(fData);
}

//Making Payments
let paymentForm = document.querySelector('form#f2-payments-form');
let payBtn = document.querySelector('#f2-pay');
let paymentUrl = paymentForm.getAttribute('action');

let transError = false;

paymentForm.addEventListener("submit", function(event){
	event.preventDefault();
	//form values 
	let formVals = [
		document.getElementById('txntyp').value,
		document.getElementById('trname').value,
    document.getElementById('txnmode').value,
		document.getElementById('tramt').value,
		document.getElementById('trds').value
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
        text: "Pay "+ document.getElementById('tramt').value+ " By "+document.getElementById('trname').value,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Pay'
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
    
		
		let cashType = document.getElementById('txntyp');
		let csName = document.getElementById('trname');
		let amtOfCash = document.getElementById('tramt');
    let pmeth = document.getElementById('txnmode');
		let expl = document.getElementById('trds');

		//reset the above fields
		cashType.value = '';
		csName.value = '';
    pmeth.value = '';
		amtOfCash.value = '';
		expl.value = '';
	}

  //Registering A new User
let userForm = document.querySelector('form#f2-user-form');
let regUserBtn = document.querySelector('#f2-user');
let registerUrl = userForm.getAttribute('action');

let regUserError = false;

userForm.addEventListener("submit", function(event){
	event.preventDefault();
	//form values 
	let regFormVals= [
		document.getElementById('jina').value,
		document.getElementById('alias').value,
    document.getElementById('ph').value,
		document.getElementById('ftm').value,
		document.getElementById('un').value
	];
	
	checkRegistration(regFormVals);
	if (regUserError === true) {
		//errors in the form
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Ensure That All Form Fields Are Duly Filled!'
		})
		console.log(regFormVals);
		return false;
	}else if(regUserError === false){
		//No Errors found

		Swal.fire({
        title: 'You Sure?',
        text: "Register "+ document.getElementById('jina').value+ " With Alias "+document.getElementById('alias').value +
        " of Phone "+ document.getElementById('ph').value + "?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Register'
      })
      .then((result) => {
        if (result.isConfirmed) {
         	regUserBtn.setAttribute('disabled', 'true');
					let registrationRequest = new XMLHttpRequest;
					registrationRequest.open('POST', registerUrl);
          	registrationRequest.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200){
              let frmdb = this.responseText;
              //check the text for error or success
              if (frmdb.includes('Successful') > 0) {
                //successful request
                Swal.fire(
                    'Registered!',
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
        let regData = new FormData(userForm);
		registrationRequest.send(regData);

		//clear fields
		setTimeout(clearRegFields, 4500);

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
function checkRegistration(arr){
	for(i of arr){
		if (i == '') {
			regUserError = true;
			return transError;
		}else {
			regUserError = false;
			return transError;
		}
	}
}
function clearRegFields(){

		location.reload();
    
		
		let usNm = document.getElementById('jina');
		let alNm = document.getElementById('alias');
		let usPh = document.getElementById('ph');
    let usFv = document.getElementById('ftm');
		let usUn = document.getElementById('un');

		//reset the above fields
		usNm.value = '';
		alNm.value = '';
    usPh.value = '';
		usFv.value = '';
		usUn.value = '';
	}