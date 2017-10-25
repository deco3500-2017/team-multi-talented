var userInput = "Institution";

var getInput = localStorage.getItem("UniInput");

if (getInput == null){
    getInput = "Institution";
}

else {
    console.log(getInput);
}

var item = document.getElementById('uniTitle');


if (item != null) {
    $('#uniTitle').html(getInput);
}