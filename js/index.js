//Recording matches
let myForm = document.getElementById('looser-form');


myForm.onsubmit = function(event){
    event.preventDefault();
    console.log('Form has Been Submitted');
}