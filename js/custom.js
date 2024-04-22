$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },

        1000:{
            items:1
        }
    }
});
});


        const plus = document.getElementById("plus-count");
        const num = document.getElementById("num-count");
        const minus = document.getElementById("minus-count");
        let count = 1;
        function plusC(){
            count++;
            count = (count < 10)? "0" + count: count;
            num.innerText = count;
        }
        function minusC(){
            if(count>1){
                count--;
                num.innerText = count;
            }
        }

        const plus2 = document.getElementById("plus-count2");
        const num2 = document.getElementById("num-count2");
        const minus2 = document.getElementById("minus-count2");
        let count2 = 1;
        function plusC2(){
            count2++;
            count2 = (count2 < 10)? "0" + count2: count2;
            num2.innerText = count2;
        }
        function minusC2(){
            if(count2>1){
                count2--;
                num2.innerText = count2;
            }
        }