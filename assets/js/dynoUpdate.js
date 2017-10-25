var getInput = localStorage.getItem("UniInput");
localStorage.clear();

if (getInput == null){
    //remove it here
    var uni = document.getElementById('events');
    uni.parentNode.removeChild(uni);
    
}

else {
    console.log(getInput);
}

var item = document.getElementById('uniTitle');


if (item != null) {
    $('#uniTitle').html(getInput);
};
