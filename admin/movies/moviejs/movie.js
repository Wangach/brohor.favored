//Add Movies to DB
let movieForm = document.querySelector('#addmovie');
let movieFeed = document.getElementById('mdb')
let movAct = movieForm.getAttribute('action');

movieForm.addEventListener('submit', function(event) {
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

});

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


//Search Old Movies Database