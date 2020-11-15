function myCLick(){
    document.getElementById("mydropdown").classList.toggle('show');
    }

var slideIndex =0;
showSlides();

function showSlides(){
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for(i =0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slidesIndex++;
    if(slidesIndex > slides.length){
        slidesIndex =1
    }
    slides[slidesIndex-1].style.display='block';
    setTimeout(showSlides,2000);

}