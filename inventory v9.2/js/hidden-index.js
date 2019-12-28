   // this is for index.php

   var t1container=document.querySelector('#t1container');
   var t2container=document.querySelector('#t2container');
   var t3container=document.querySelector('#t3container');
   var t4container=document.querySelector('#t4container');

   var tab1=document.querySelector('#tab1');
var tab2=document.querySelector('#tab2');
var tab3=document.querySelector('#tab3');
var tab4=document.querySelector('#tab4');
// var tab5=document.querySelector('#tab5');
// var tab6=document.querySelector('#tab6');

tab1.addEventListener('click',function () {
    tab1active();
   });

   function tab1active(){
    t1container.style.display="none";
    t2container.style.display="block";
    t3container.style.display="none";
    t4container.style.display="none";

    tab1.classList.remove('active1');
    tab2.classList.remove('active');
    tab3.classList.remove('active');
    tab4.classList.remove('active');
    tab1.classList.add('active');
    tab2.classList.add('active1');
    tab3.classList.add('active1');
    tab4.classList.add('active1');
}   

tab2.addEventListener('click',function () {
    tab2active();
   });


   function tab2active(){
    t2container.style.display="none";
    t1container.style.display="block";
    t3container.style.display="none";
    t4container.style.display="none";

    tab2.classList.remove('active1');
    tab3.classList.remove('active');
    tab1.classList.remove('active');
    tab4.classList.remove('active');
    tab2.classList.add('active');
    tab1.classList.add('active1');
    tab3.classList.add('active1');
    tab4.classList.add('active1');

}   

tab3.addEventListener('click',function () {
    tab3active();
   });


   function tab3active(){
    t2container.style.display="none";
    t1container.style.display="none";
    t3container.style.display="block";
    t4container.style.display="none";

    tab2.classList.remove('active');
    tab1.classList.remove('active');
    tab3.classList.remove('active1');
    tab4.classList.remove('active');
    tab2.classList.add('active1');
    tab1.classList.add('active1');
    tab3.classList.add('active');
    tab4.classList.add('active1');

} 

tab4.addEventListener('click',function () {
    tab4active();
   });


   function tab4active(){
    t2container.style.display="none";
    t1container.style.display="none";
    t3container.style.display="none";
    t4container.style.display="block";

    tab2.classList.remove('active');
    tab1.classList.remove('active');
    tab3.classList.remove('active');
    tab4.classList.remove('active1');
    tab2.classList.add('active1');
    tab1.classList.add('active1');
    tab3.classList.add('active1');
    tab4.classList.add('active');
} 

//===========================//this is for hidden view extentions


var t1inner=document.querySelector('#t1inner');  //container
var tempv1=document.querySelector('#tempv1'); //button1
var view2=document.querySelector('#view2'); //button2

// var t2inner=document.querySelector('#t2inner'); //second option

tempv1.addEventListener('click',function () {
    tempv1active();
   });

   function tempv1active(){
    t1inner.style.display="block";
    // t2inner.style.display="block";
    
}   

view2.addEventListener('click',function () {
    view2active();
   });

   function view2active(){
    t1inner.style.display="none";
   // t2inner.style.display="none";
}   

//===========================//this is for hidden update extentions


var t1update=document.querySelector('#t1update');  //container
var tempv3=document.querySelector('#tempv3'); //button1
var viewupdate=document.querySelector('#viewupdate'); //button2


tempv3.addEventListener('click',function () {
    tempv3active();
   });

   function tempv3active(){
    t1update.style.display="block";
    
}   

viewupdate.addEventListener('click',function () {
    viewupdateactive();
   });

   function viewupdateactive(){
    t1update.style.display="none";
}  