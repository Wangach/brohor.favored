let userform = document.getElementById('registration-form');
let url = userform.getAttribute('action');
let mresults = document.getElementById('regres');

userform.onsubmit = function(event){
    event.preventDefault();
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
}