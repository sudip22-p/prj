const time=document.getElementById("time");
const timeFormat=document.getElementById("timeFormat");
document.addEventListener('DOMContentLoaded',()=>{
    setInterval(showTime,1000);//run function showTime on each sec
});
function showTime(){
    let date=new Date();
    let hr=date.getHours();
    let min=date.getMinutes();
    let sec=date.getSeconds();
    //for time format
    timeFormat.innerHTML=hr>=12?"PM":"AM";
    //making hr under 13 i.e 1-12
    hr=hr==0?12:hr;
    hr=hr>12?hr%12:hr;
    //for 2 digit time
    hr<10?hr='0'+hr:hr=hr;
    min<10?min='0'+min:min=min;
    sec<10?sec='0'+sec:sec=sec;
    time.innerHTML=hr+":"+min+":"+sec;
}