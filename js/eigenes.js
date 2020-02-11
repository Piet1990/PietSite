function passwort(dasPasswort){
    var length = 12, 
        charset ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?",
        dasPasswort ="";
    
    for (var i =0, n = charset.length; i <length; i++){
        dasPasswort += charset.charAt(Math.floor(Math.random()*n));
    }
    return dasPasswort;  
}

function ausgebenpasswort(dasPasswort){
  window.alert(passwort(dasPasswort))
    
}

function banner(){
    window.alter("Was geht alter")
    
}