let userform = document.getElementById('registration-form');
let url = userform.getAttribute('action');
let mresults = document.getElementById('regres');
let registrationErrs = false;



userform.onsubmit = function(event){
    event.preventDefault();
    //Form Values
    let userDets = [
    	document.getElementById('cfn').value,
    	document.getElementById('cpwd').value,
    	document.getElementById('cal').value,
    	document.getElementById('cft').value,
    	document.getElementById('cpn').value
    ];

    checkUserErrors(userDets);
    if (registrationErrs === true) {
    	//errors
    }else if (registrationErrs === false) {
    	//No errors in form
    	let hak = confirm('Do You want to register '+ document.getElementById('cal').value + '?');
    	if (hak) {
    		//console.log('form submitted');
		    let register = new XMLHttpRequest;
			register.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					let frmdb = this.responseText;
		            mresults.classList.add('alert');
		            mresults.classList.add('alert-success');
					//show the results
					mresults.innerHTML = frmdb;
				}
			}
			register.open('POST', url);
		    let fData = new FormData(userform);
		    //console.log(fData);
			register.send(fData);
			//clear form and reload
			setTimeout(clearFields, 4500);
    	}else {
    		return false;
    	}
    }
}

//Functions 
function checkUserErrors(arr){
	for(let dets of arr){
		if (dets === '') {
			registrationErrs = true;
			return registrationErrs;
		}else{
			registrationErrs = false;
			return registrationErrs;
		}
	}
}

function clearFields(){
	location.reload();

	document.getElementById('cfn').value = '';
	document.getElementById('cpwd').value = '';
	document.getElementById('cal').value = '';
	document.getElementById('cft').value = '';
	document.getElementById('cpn').value = '';
}

