//Add Movies to DB
let movieForm = document.querySelector('#addmovie');
let movieFeed = document.getElementById('mdb')
let movAct = movieForm.getAttribute('action');

movieForm.addEventListener('submit', (event) => {
	event.preventDefault();
	let instantiator = new XMLHttpRequest();
	instantiator.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			let movieResp = this.responseText;
			//display feedback
			movieFeed.classList.add('alert');
			movieFeed.classList.add('alert-success');
			movieFeed.classList.add('alert-dismissable');
			movieFeed.classList.add('sticky-top')
			movieFeed.innerHTML = movieResp;
		}
	};
	instantiator.open('POST', movAct);
	let movieData = new FormData(movieForm);
	//console.log(movieData);
	instantiator.send(movieData);

	//Execute clearing func
  setTimeout(clearMovieForm, 10000);

});

//clear the form fields
function clearMovieForm() {
  let mPoster = document.getElementById("picha");
  let mName = document.getElementById("jina");
  let mTyp = document.getElementById("aina");
  let mLoc = document.getElementById("pahala");
  let mCat = document.getElementById("tathmini");
  let mProd= document.getElementById("mtengenezaji");
  let rDates = document.getElementById("kuachiliwa");

  //reload and clear
  location.reload();

  mPoster.value = "";
  mName.value = "";
  mTyp.value = "";
  mCat.value = "";
  mLoc.value = "";
  mProd.value = "";
  rDates.value = "";
}


//Search Movie By Name
let sbnForm = document.querySelector('#searByName');
let sbnFormAct = sbnForm.getAttribute('action');
let sbnFormResults = document.getElementById('mbn-results');

sbnForm.addEventListener('submit', function(e){
	e.preventDefault();
	let movieReq = new XMLHttpRequest();
	movieReq.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			let mbnResp = this.responseText;

			sbnFormResults.innerHTML = mbnResp;
		}
	};
	movieReq.open('POST', sbnFormAct);
	let reqData = new FormData(sbnForm);
	movieReq.send(reqData);
});

//Search Movie By Category
let sbcForm = document.getElementById('searByCat');
let sbcFormAct = sbcForm.getAttribute('action');
let sbcFormResults = document.querySelector('#mbc-results');

sbcForm.onsubmit = function(event){
	event.preventDefault();
	//console.log('This marks the beginning of the search@');
	let catMovieReq = new XMLHttpRequest();
	catMovieReq.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			let mbcResp = this.responseText;

			sbcFormResults.innerHTML = mbcResp;
		};
	};
	catMovieReq.open('POST', sbcFormAct);
	let mbcReqData = new FormData(sbcForm);
	catMovieReq.send(mbcReqData);
}

//Search Old Movies Database

