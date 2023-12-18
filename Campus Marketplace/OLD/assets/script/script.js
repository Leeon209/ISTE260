// INDEX SCRIPTS
function switchForm(){
    document.getElementById("switch-form").value = "true";
    return true;
}

function login(){
    if (document.getElementById("username").value == ""){
        return false;
    } else if (document.getElementById("password").value == ""){
        return false;
    } else {
        return true;
    }
}

function createAccount(){
    if (document.getElementById("name").value == ""){
        return false;
    } else if (document.getElementById("email").value == ""){
        return false;
    } else if (document.getElementById("password").value == ""){
        return false;
    } else if (document.getElementById("confirm-password").value == ""){
        return false;
    } else if (document.getElementById("confirm-password").value != document.getElementById("password").value){
        return false;
    } else if (document.getElementById("major").value == ""){
        return false;
    } else if (document.getElementById("year").value == ""){
        return false;
    } else {
        return true;
    }
}