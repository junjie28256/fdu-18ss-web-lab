
window.onload=function(){

    document.getElementById("p").style.width="636px";
    document.getElementById("p").style.height="477px";
    // document.getElementById("p").style.overflow="hidden"

    document.getElementById("p1").addEventListener("click", function(){
        document.getElementById("p").src="images/small/5855774224.jpg";
            document.getElementById("p").title="Battle";
            document.getElementById("t").innerText="Battle";
    });
    document.getElementById("p2").addEventListener("click", function(){
        document.getElementById("p").src="images/small/5856697109.jpg";
        document.getElementById("p").title="Luneburg";
        document.getElementById("t").innerText="Luneburg";
    })
    document.getElementById("p3").addEventListener("click", function(){
        document.getElementById("p").src="images/small/6119130918.jpg";
        document.getElementById("p").title="Bermuda";
        document.getElementById("t").innerText="Bermuda";
    })
    document.getElementById("p4").addEventListener("click", function(){
        document.getElementById("p").src="images/small/8711645510.jpg";
        document.getElementById("p").title="Athens";
        document.getElementById("t").innerText="Athens";
    })
    document.getElementById("p5").addEventListener("click", function(){
        document.getElementById("p").src="images/small/9504449928.jpg";
        document.getElementById("p").title="Florence";
        document.getElementById("t").innerText="Florence";
    })
    function starMove(iTarget) {
        var oImg = document.getElementById('t');
        clearInterval(timer);
        timer = setInterval(function () {
            if (alpha < iTarget) {
                iSpeed = 5;
            } else {
                iSpeed = -5;
            }
            if (alpha == iTarget) {
                clearInterval(timer);
            } else {
                alpha += iSpeed;
                oImg.style.filter = 'alpha(opacity:' + alpha + ')';
                oImg.style.opacity = alpha / 100;
            }
        }, 20)
    }
    var oImg=document.getElementById('p');
    oImg.onmouseover=function(){
        starMove(80);
    }
    oImg.onmouseout=function(){
        starMove(0);
    }
var timer=null;
var alpha=0;
};