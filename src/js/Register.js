function checkPassword(){
    if(document.getElementById("pwd2").value != document.getElementById("cnfrmpw").value)
    {
        alert("Password mismatched!");
        return false;
    }  
    else{
        alert("Success!");
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
    document.getElementById("submitBtn").disabled = false;
    }
    else{
    document.getElementById("submitBtn").disabled = true;
    }
} 

function passwordVisibility(){
    var x = document.getElementsByClassName("eye");
    var y = document.getElementById("pwd2");
    if(y.type === "password"){
        y.type = "text";
    }
    else{
        y.type = "password";
    }
}
function passwordShow(){
    var y = document.getElementById("cnfrmpw");
    if(y.type === "password"){
        y.type = "text";
    }
    else{
        y.type = "password";
    }
}