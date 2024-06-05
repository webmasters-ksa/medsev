var header= document.getElementById("navbar")
window.onscroll = function(){
    if(window.scrollY > 20){
        header.classList.add("headerHome")
     
    }
    else{
        header.classList.remove("headerHome")
       
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const loginText = document.getElementById('login-text');
    const userData = JSON.parse(localStorage.getItem('userData'));

    if (userData) {
        loginText.textContent = userData.name;
    }
});
