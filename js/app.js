const header = document.querySelectorAll('.header');

window.onscroll = function(){
    var top = window.scrollY;
    if (top >=50){
        header.classlist.add('active')
    }else{
        header.classlist.remove('active');
    }
}