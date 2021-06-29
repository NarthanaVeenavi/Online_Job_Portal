function checkPassword(){
    if(document.getElementById("pws1").value != document.getElementById("pws2").value)
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
    if(document.getElementById("check1").checked){
    document.getElementById("sub1").disabled = false;
    }
    else{
    document.getElementById("sub1").disabled = true;
    }
} 