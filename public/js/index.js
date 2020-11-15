
    var video_one =document.getElementById('video1');
    var video2 =document.getElementById('video2');
    var video3 =document.getElementById('video3');
    var video4 =document.getElementById('video4');
    var video5 =document.getElementById('video5');
    
    video_one.addEventListener('ended',function(){
        video2.play();
        video_one.style.opacity=0;
        video2.style.opacity=1;
    })
    video2.addEventListener('ended',function(){
        video3.play();
        video2.style.opacity=0;
        video3.style.opacity=1;
    })
    video3.addEventListener('ended',function(){
        video4.play();
        video3.style.opacity=0;
        video4.style.opacity=1;
    })
    video4.addEventListener('ended',function(){
        video_one.play();
        video4.style.opacity=0;
        video_one.style.opacity=1;
    })