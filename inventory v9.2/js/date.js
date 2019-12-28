// Show Time
function showTime() {

  let today = new Date();
  let  hour = today.getHours();
  let  min = today.getMinutes();
  let  sec = today.getSeconds();

  // Set AM or PM
  const showAmPm = true;
  const amPm = hour >= 12 ? 'PM' : 'AM';

  // 12hr Format
  hour = hour % 12 || 12;

  //Output Date
  document.getElementById('date').innerHTML = today.toDateString();

  // Output Time
 document.getElementById('time').innerHTML = `${hour}<span>:</span>${addzero(min)}<span>:</span>${addzero(sec)} ${showAmPm ? amPm : ''}`;
 setTimeout(showTime, 1000);
}

function addzero(time){
    let zero = (time < 10 ? '0':'');
   return ( time= zero + time);
}
//function call
showTime();