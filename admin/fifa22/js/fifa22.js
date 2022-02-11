
//when the page load
const refUrl = './scripts/loosercounter.php';
const fairUrl = './scripts/faircounter.php';
const transUrl = './scripts/trcounter.php';
let looserHolder = document.querySelector('.looserCnt');
let fairHolder = document.querySelector('.fairCnt');
let trHolder = document.querySelector('.trCnt');
let refreshlost = document.querySelector('#refreshlooser');
let refreshTrans = document.querySelector('#refreshtr');


(function countLooser() {
  let fetchLoosers = () => {
    let loader = 'Loading...';
    looserHolder.innerText = loader;
    fetch(refUrl)
    .then(response => response.text())
    .then(data =>  looserHolder.innerText = data );
  }
  fetchLoosers();
  setInterval(fetchLoosers, 300000);
})();

(function countFair() {
  let fetchFairGames = () => {
    let loader = 'Loading...';
    fairHolder.innerText = loader;
    fetch(fairUrl)
    .then(response => response.text())
    .then(data =>  fairHolder.innerText = data );
  }
  fetchFairGames();
  setInterval(fetchFairGames, 300000);
})();

(function countTransactions(){
  
  let fetchTrs = () => {
    let loader = 'Loading...';
    trHolder.innerText = loader;
    fetch(transUrl)
    .then(response => response.text())
    .then(data =>  trHolder.innerText = data );
  }
  
  fetchTrs();
  setInterval(fetchTrs, 300000);
})();



/*Looser Form Submission */
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
                  looserform.reset();
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
//Fair Form Submission
let fairform = document.querySelector("form#f2-fair-form");
let fairFormUrl = fairform.getAttribute("action");
let fairBtn = document.querySelector('#f2-fair-btn');

fairform.addEventListener("submit", function (event) {
  event.preventDefault();


  Swal.fire({
        title: 'Are you sure?',
        text: "Record Match",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes G'
      })
      .then((result) => {
        if (result.isConfirmed) {
          fairBtn.setAttribute('disabled', 'true');
          let formOptions = {
            method : fairform.getAttribute('method'),
            body : new FormData(fairform)
          };
          fetch(fairFormUrl, formOptions)
          .then(function(response) {
            return response.text();
            console.log(response);
          })
          .then(setTimeout(function(data) {
            let fairHolder = document.querySelector('#fholder');
            fairHolder.innerHTML = data;
            let fairClearBtn = document.getElementById('fairclear');
            fairClearBtn.removeAttribute('disabled', 'true');
            fairClearBtn.addEventListener('click', () => {
              fairform.reset();
              fairBtn.removeAttribute('disabled', 'true');
              fairClearBtn.setAttribute('disabled', 'true');
            });
            console.log(data);
          }, 3000))

        }
        else if (result.dismiss) {
          swal.fire(
            'Cancelled',
            'Match Has Not Been Recorded',
            'error'
          )
        }
      })
});

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

//Making Fair Play Payments
let showMatches = document.getElementById('unpaid');
let fpayBtn = document.getElementById('pay');
let payUrl = './scripts/payfair.php';
let getFairUrl = './scripts/funpaid.php'

showMatches.addEventListener('click', () => {
  fetch(getFairUrl)
  .then((response) => {
    return response.text();
  })
  .then((data)=> {
    alert(`There are ${data} Unpaid matches in the Database`);
  })
})

fpayBtn.addEventListener('click', () => {
  fetch(payUrl)
  .then((response) => {
    return response.text();
  })
  .then((data) => {
    Swal.fire(
      'Good job!',
      data,
      'success'
    )
  })
})

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
    userForm.reset();
	}