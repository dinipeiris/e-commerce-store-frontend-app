function changeView(){

    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");

}

function advancedSearch(){

    var advance = document.getElementById("advance");

    advance.classList.toggle("d-none");
}

function home(){
    window.location.assign("home.php");
}

function admin(){
    window.location.assign("index.php");
}

function adminPanel(){
    window.location.assign("adminPanel.php");
}

function manage(){
    window.location.assign("manageProduct.php");
}

function prod1(){
    window.location.assign("singleProduct.php");
}

function addNew(){
    window.location.assign("addNew.php");
}

function update(){
    window.location.assign("update.php");
}

function cart(){
    window.location.assign("cart2.php");
}

function watchlist(){
    window.location.assign("watchlist2.php");
}