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
              console.log(frmdb);
              //check the text for error or success
              if (frmdb.includes('Successful') > 0) {
                //successful request
                Swal.fire(
                    'Recorded!',
                      frmdb,
                    'success'
                  )
              }else if(frmdb.includes('Error') > 0){
                //failed request
                Swal.fire(
                    'Network!',
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
        let looserData = new FormData(looserform);
        req.send(looserData);
        //Execute clearing func
        setTimeout(clearLooserForm, 10000);

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

//Payments
//Showing Users Latest Transactions
// let nameOfCst = document.getElementById('cusname');
// let form = document.querySelector('form#search-form');
// let disp = document.getElementById('results');
// let url = form.getAttribute('action');
// let payBtn = document.querySelector('#trans');

// form.onsubmit = function(event){
// 	event.preventDefault();


// 	var request = new XMLHttpRequest;
// 	request.open('POST', url);
// 	request.onreadystatechange = function(){
// 		if (this.readyState == 4 && this.status == 200) {
// 			let frmdb = this.responseText;
// 			//show the results
// 			disp.innerHTML = frmdb;
// 		}
// 	}
// 	let fData = new FormData(form);
// 	request.send(fData);
// }

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