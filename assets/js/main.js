
    $(document).ready(function(){
        $(window).scroll(function(){
            if((this).scrollTop()){
                $('header').addClass('sticky');
            }else{
                $('header').removeClass('sticky');
            }
        })
        
    })
const btn=document.querySelector('#btnn')
let index =0
btn.addEventListener("click",function(){
    document.querySelector('.dropdow-content').style.display='block';
   
})