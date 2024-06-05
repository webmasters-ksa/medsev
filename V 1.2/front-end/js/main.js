var header= document.getElementById("navbar")
window.onscroll = function(){
    if(window.scrollY > 20){
        header.classList.add("headerHome")
     
    }
    else{
        header.classList.remove("headerHome")
       
    }
}

