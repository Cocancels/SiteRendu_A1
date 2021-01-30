
function disappear(elem) {
     const mamour = document.getElementsByClassName('single');
     console.log(mamour);
     document.getElementsByClassName('titre')[0].style.display = 'none';
     elem.style.marginTop = "20vh";

     for (let i = 0; i < mamour.length; i++) {
        mamour[i].style.display = 'none';
        document.getElementsByClassName('post')[i].style.display = 'block';
        document.getElementsByClassName('titrePost')[i].style.cssText = "border-bottom : 2px solid black; padding-bottom : 25px; margin-left : 0px; margin-right: 0px";
        document.getElementsByClassName('myimage')[i].style.display = 'none';
        document.getElementsByClassName('imagedisappear')[i].style.cssText = 'display : block; margin-left: auto; margin-right: auto; max-width : 100%';
        document.getElementsByClassName('posts')[i].style.display = 'block';

     }

     document.getElementById('button').style.cssText = 'display : block; margin-top : 100px';
     document.getElementById('explications').style.display = 'none';
     document.getElementsByClassName('container')[0].style.display = 'none';
     document.getElementsByClassName('container1')[0].style.paddingTop = '100px';

     

     elem.style.cssText = "display : block; max-height : 1500px; margin-top: 0";

}

function appear(elem) {
    const mamour = document.getElementsByClassName('single');
    document.getElementById('button').style.cssText = 'display : none; margin-top : 0px';

    for (let i = 0; i < mamour.length; i++) {
        mamour[i].style.display = 'block';
        document.getElementsByClassName('titrePost')[i].style.cssText = "border-bottom : 0px solid black; padding-bottom : 20px; margin-left : 0px; margin-right: 0px";
        document.getElementsByClassName('single')[i].style.marginTop = '50px';
        document.getElementsByClassName('posts')[i].style.display = 'none';
        document.getElementsByClassName('post')[i].style.display = 'none';
        document.getElementsByClassName('myimage')[i].style.display = 'block';
        document.getElementsByClassName('imagedisappear')[i].style.cssText = 'display : none';
    }

    document.getElementById('explications').style.display = 'block';
    document.getElementsByClassName('titre')[0].style.display = 'inline-block';
    document.getElementsByClassName('container')[0].style.display = 'block';
    document.getElementsByClassName('container1')[0].style.paddingTop = '0px';



    
}