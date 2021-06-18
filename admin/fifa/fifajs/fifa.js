let looserform = document.querySelector("form#looser-form");
let feedback = document.getElementById("recres");
let looserUrl = looserform.getAttribute("action");

looserform.addEventListener("submit", function (event) {
  event.preventDefault();
  looserform.removeEventListener("submit");

  //alert('Form Has Been Submitted!');
  let req = new XMLHttpRequest();
  req.open("POST", looserUrl);
  req.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let dbResp = this.responseText;
      //display response
      feedback.classList.add("alert");
      feedback.classList.add("alert-primary");
      feedback.classList.add('sticky-top');
      feedback.innerHTML = dbResp;
    }
  };
  let looserData = new FormData(looserform);
  req.send(looserData);

  //Execute clearing func
  setTimeout(clearLooserForm, 10000);
});

//clear the form fields
function clearLooserForm() {
  let homePlay = document.getElementById("hp");
  let awayPlay = document.getElementById("ap");
  let homeTeam = document.getElementById("ht");
  let awayTeam = document.getElementById("at");
  let homeScr = document.getElementById("hsc");
  let awayScr = document.getElementById("asc");

  //reload and clear
  location.reload();

  homePlay.value = "";
  awayPlay.value = "";
  homeTeam.value = "";
  awayTeam.value = "";
  homeScr.value = "";
  awayScr.value = "";
}

//Search Form
let searchForm = document.querySelector("form#search-form");
let displayResults = document.querySelector("#results");
let searchUrl = searchForm.getAttribute("action");

searchForm.onsubmit = function (event) {
  event.preventDefault();

  //alert('Search Has Been Initiated');
  let searchRequest = new XMLHttpRequest();
  searchRequest.open("POST", searchUrl);
  searchRequest.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let dbResp = this.responseText;
      //display response
      //feedback.classList.add('alert');
      //feedback.classList.add('alert-primary');
      displayResults.innerHTML = dbResp;
    }
  };
  let serData = new FormData(searchForm);
  searchRequest.send(serData);
};


//Fair Play Form
let fairForm = document.querySelector('#fair-form');
let fairAction = fairForm.getAttribute('action');
let fairGetter = document.querySelector('.fair-feed');

fairForm.addEventListener('submit', function(e) {
	e.preventDefault();

	let fairRequest = new XMLHttpRequest();
	fairRequest.open("POST", fairAction);
	fairRequest.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      let fairResp = this.responseText;
	      //display response
	      fairGetter.classList.add("alert");
	      fairGetter.classList.add("alert-primary");
	      fairGetter.innerHTML = fairResp;
	    }
	  };
	  let fairData = new FormData(fairForm);
	  fairRequest.send(fairData);

	  //Execute clearing func
	  //setTimeout(clearFairForm, 10000);
});

let clearFairForm = () => {
	let fHplayer = document.getElementById("#fhp");
	let fAplayer = document.getElementById("#fap");
	let fHteam = document.getElementById("#fht");
	let fAteam = document.getElementById("#fat");
	let fHscore = document.getElementById("#fhsc");
	let fAscore = document.getElementById("#fasc");


	//Reload And Clear
	location.reload();

	fHplayer.value = '';
	fAplayer.value = '';
	fHteam.value = '';
	fAteam.value = '';
	fHscore.value = '';
	fAscore.value = '';
}