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
const looserForm = document.getElementById("f2-looser-form");
const submitLooserButton = document.getElementById('#f2-looser-btn');
let errorForm = false;

looserForm.addEventListener('submit', (event)=> {
    event.preventDefault();
    let formDets = [
        document.getElementById('hp').value,
        document.getElementById('ap').value,
        document.getElementById('ht').value,
        document.getElementById('at').value,
        document.getElementById('hsc').value,
        document.getElementById('asc').value,
        document.getElementById('aet').value,
        document.getElementById('coup').value
    ];

    checkFormErrors(formDets);
    //if error has been found
    if(errorForm === true){
        // alert('Kindly Ensure that there are no errors in form');
        console.log(formDets);
    }else{
        alert('There are no errors in form');
        console.log(formDets);
    }
})


function checkFormErrors(arr){
	for(let dets of arr){
		if (dets === '') {
			errorForm = true;
			return errorForm;
		}else{
			errorForm = false;
			return errorForm;
		}
	}
}