let looserform = document.querySelector('form#looser-form');
let feedback = document.getElementById('recres');
let looserUrl = looserform.getAttribute('action');

looserform.addEventListener('submit', function(event){
	event.preventDefault();

	//alert('Form Has Been Submitted!');
	let req = new XMLHttpRequest;
	req.open('POST', looserUrl);
	req.onreadystatechange = function (){
		if (this.readyState == 4 && this.status == 200) {
			let dbResp = this.responseText;
			//display response
			feedback.classList.add('alert');
			feedback.classList.add('alert-primary');
			feedback.innerHTML = dbResp;

		}
	}
	let looserData = new FormData(looserform);
	req.send(looserData);

	//Execute clearing func
	setTimeout(clearLooserForm, 5000);
});




//clear the form fields
function clearLooserForm(){
	let homePlay = document.getElementById('hp');
	let awayPlay = document.getElementById('ap');
	let homeTeam = document.getElementById('ht');
	let awayTeam = document.getElementById('at');
	let homeScr = document.getElementById('hsc');
	let awayScr = document.getElementById('asc');

	//reload and clear
	location.reload();

	homePlay.value = '';
	awayPlay.value = '';
	homeTeam.value = '';
	awayTeam.value = '';
	homeScr.value = '';
	awayScr.value = '';
}