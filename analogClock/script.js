const hrs=document.getElementById("hrs");
const mins=document.getElementById("mins");
const secs=document.getElementById("secs");
setInterval(timeUpd,1000);
function timeUpd(){
    let date=new Date();
    let hr=date.getHours();
    let min=date.getMinutes();
    let sec=date.getSeconds();
    let hrRotation=30*hr+min/2;
    let minRotation=6*min;
    let secRotation=6*sec;
    hrs.style.transform=`rotate(${hrRotation}deg)`;
    mins.style.transform=`rotate(${minRotation}deg)`;
    secs.style.transform=`rotate(${secRotation}deg)`;
}