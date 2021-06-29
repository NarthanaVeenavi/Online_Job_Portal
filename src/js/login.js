function passwordVisibility(){
    var x = document.getElementsByClassName("eye1");
    var y = document.getElementById("pwd");
    if(y.type === "password"){
        y.type = "text";
    }
    else{
        y.type = "password";
    }
}
function enableButton(){
    if(document.getElementById("checkBox1").checked){
    document.getElementById("submitBu").disabled = false;
    }
    else{
    document.getElementById("submitBu").disabled = true;
    }
} 