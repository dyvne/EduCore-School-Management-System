/*==========================================
 EduCore School Management System
 Main JavaScript File
==========================================*/






/*==========================================
 JAVASCRIPT POP-UPS
==========================================*/


function showAlert(){

    alert(
        "🎓 Welcome to EduCore School Management System!"
    );

}



function showConfirm(){

    let answer = confirm(
        "Would you like to explore EduCore admission information?"
    );


    if(answer){

        window.location.href = "about.php";

    }

    else{

        alert(
            "You can continue browsing our website."
        );

    }

}




function showPrompt(){

    let studentName = prompt(
        "Please enter your name:"
    );


    if(studentName){

        alert(
            "Welcome " + studentName + 
            "! We are happy to have you."
        );

    }

}





/// ===============================
// ANNOUNCEMENT TEXT SCROLL
// ===============================


window.onload = function(){


let text = document.getElementById("scrollText");


if(text){


let x = window.innerWidth;


setInterval(function(){


x--;


text.style.marginLeft = x + "px";



if(x < -text.offsetWidth){


x = window.innerWidth;


}


}, 10);


}


};




/*==========================================
 NAVBAR SHADOW EFFECT
==========================================*/


window.addEventListener("scroll",()=>{


    const header = document.querySelector("header");


    if(header){


        if(window.scrollY > 50){

            header.style.boxShadow =
            "0 8px 20px rgba(0,0,0,.15)";

        }


        else{

            header.style.boxShadow =
            "0 2px 10px rgba(0,0,0,.08)";

        }


    }


});






/*==========================================
 FADE-IN SECTION ANIMATION
==========================================*/


const sections = document.querySelectorAll("section");


if(sections.length > 0){


const observer = new IntersectionObserver(entries=>{


    entries.forEach(entry=>{


        if(entry.isIntersecting){


            entry.target.style.opacity = "1";

            entry.target.style.transform =
            "translateY(0)";


        }


    });


},{
    threshold:0.2
});




sections.forEach(section=>{


    section.style.opacity="0";


    section.style.transform=
    "translateY(50px)";


    section.style.transition=
    "all .8s ease";


    observer.observe(section);


});


}
// ===============================
// JAVASCRIPT SCROLLING TEXT
// ===============================


let scrollText = document.getElementById("scrollText");


if(scrollText){


    let position = window.innerWidth;


    function moveText(){


        position--;


        scrollText.style.left = position + "px";


        if(position < -scrollText.offsetWidth){

            position = window.innerWidth;

        }


    }


    setInterval(moveText,10);


}
// ===============================
// IMAGE SLIDER WITH FADE EFFECT
// ===============================


let sliderImage = document.getElementById("sliderImage");


if(sliderImage){


    let images = [

        "images/1.jpg",
        "images/2.jpg",
        "images/3.jpg",
        "images/4.jpg",
        "images/5.jpg"

    ];


    let index = 0;


    setInterval(function(){


        // fade out

        sliderImage.style.opacity = 0;



        setTimeout(function(){


            index++;


            if(index >= images.length){

                index = 0;

            }


            sliderImage.src = images[index];



            // fade in

            sliderImage.style.opacity = 1;



        },1500);



    },5000);


}