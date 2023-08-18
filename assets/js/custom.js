$(document).ready(function(){
    var changebox = $(".changebox");
    
    var firstclone = changebox.children(":first").clone();
    changebox.append(firstclone);
    
    var fsstr = changebox.parent().css("font-size");
    fsstr = fsstr.slice(0,fsstr.indexOf("p"));
    var fs = parseInt(fsstr);
    
    changebox.css("height",changebox.parent().css("font-size") );
    ChangeSize(0);
    setInterval(Next,2000);
    
    
    function Next(){
       if( typeof Next.i == 'undefined' ) {
         Next.i = 0;
       }
      Next.i++;
       if(Next.i == changebox.children("span").length){
          Next.i = 1;
          changebox.scrollTop(0);
       }
       changebox.animate({scrollTop: (fs*Next.i)+Next.i*5+3},500);
       setTimeout(function(){
          ChangeSize(Next.i);
       },500);
    }
    function ChangeSize(i){
    var word = changebox.children("span").eq(i);
    var wordsize = word.css("width");
    changebox.css("width",wordsize);
 }
 });
//  js for review card slider 
$('.owl-carousel').owlCarousel({
   loop:true,
   margin:10,
   dots: true,
   autoplay:true,
   responsive:{
       0:{
           items:1
       },
       600:{
           items:3
       },
       1000:{
           items:4
       }
   }
})
// js for form
const form = document.getElementById("moveForm");

    form.addEventListener("submit", function (event) {
      event.preventDefault();

      const formData = new FormData(form);
      const formDataObject = {};

      formData.forEach((value, key) => {
        formDataObject[key] = value;
      });

      console.log(formDataObject);

      // You can perform further actions with the form data, such as sending it to a server using fetch or XMLHttpRequest.
    });