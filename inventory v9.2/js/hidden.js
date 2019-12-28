
// this is for login

var logincontainer=document.querySelector('#logincontainer');
var registercontainer=document.querySelector('#registercontainer');

var logintab=document.querySelector('#login-tab');
var registertab=document.querySelector('#register-tab');

registertab.addEventListener('click',function () {
 registeractive();
});

function registeractive(){
    logincontainer.style.display="none";
    registercontainer.style.display="block";
    logintab.classList.remove('active');
    registertab.classList.add('active');
}

logintab.addEventListener('click',function () {
    loginactive();
   });
   
   function loginactive(){
       logincontainer.style.display="block";
       registercontainer.style.display="none";
       logintab.classList.add('active');
       registertab.classList.remove('active');
   }
   