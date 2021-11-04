//Add Movies to DB
let movieForm = document.querySelector('#f2-movie-form');
let movAct = movieForm.getAttribute('action');
let addMovBtn = document.getElementById('f2-movie-btn');
let addMovieError = false;

movieForm.addEventListener("submit", function(event){
	event.preventDefault();
	Swal.fire({
        title: 'You Sure?',
        text: "Add "+ document.getElementById('jina').value+ " to Database" + "?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Add Movie'
      })
      .then((result) => {
        if (result.isConfirmed) {
         	addMovBtn.setAttribute('disabled', 'true');
			let addMovieRequest = new XMLHttpRequest;
			addMovieRequest.open('POST', movAct);
          	addMovieRequest.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200){
              let frmdb = this.responseText;
              //check the text for error or success
              if (frmdb.includes('Successful') > 0) {
                //successful request
                Swal.fire(
                    'Added!',
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
        let movieData = new FormData(movieForm);
		addMovieRequest.send(movieData);

		//clear fields
		setTimeout(clearMovieFields, 4500);

        }
        else if (result.dismiss) {
          swal.fire(
            'Cancelled',
            'The Payment Process Has Been Terminated!',
            'error'
          )
        }
      })
});
function clearMovieFields(){

		location.reload();
		let movieVals = [
			document.getElementById('jina').value,
			document.getElementById('aina').value,
			document.getElementById('pahala').value,
			document.getElementById('tathmini').value,
			document.getElementById('mtengenezaji').value,
			document.getElementById('kuachiliwa').value
		];

		for(i of movieVals){
			i.value = '';
		}
    
		
		// let usNm = document.getElementById('jina');
		// let alNm = document.getElementById('alias');
		// let usPh = document.getElementById('ph');
    	// let usFv = document.getElementById('ftm');
		// let usUn = document.getElementById('un');

		// //reset the above fields
		// usNm.value = '';
		// alNm.value = '';
    	// usPh.value = '';
		// usFv.value = '';
		// usUn.value = '';
	}


//Search Movie By Name
let sbnForm = document.querySelector('#f2-mn-form');
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
let sbcForm = document.getElementById('f2-mc-form');
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

