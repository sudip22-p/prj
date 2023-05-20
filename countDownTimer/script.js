const days=document.getElementById("days");
const hrs=document.getElementById("hrs");
const mins=document.getElementById("mins");
const secs=document.getElementById("secs");
const targetDate=new Date("June 06 2023");
countDown(targetDate);
function countDown(){
    setInterval(updateCountDown,1000);
}
function updateCountDown(){
    const currentTime=new Date();
    const timeDifference=targetDate-currentTime;//in ms
    let timeSec=Math.floor(timeDifference/1000)%60;
    let timeMin=Math.floor(timeDifference/1000/60)%60;
    let timeHr=Math.floor(timeDifference/1000/60/60)%60;
    let timeDay=Math.floor(timeDifference/1000/60/60/24)%24;
    days.innerHTML=timeFormatSet(timeDay);;
    mins.innerHTML=timeFormatSet(timeMin);;
    hrs.innerHTML=timeFormatSet(timeHr);;
    secs.innerHTML=timeFormatSet(timeSec);;
    function timeFormatSet(time){
        return time<10 ? "0"+time:time;
    }
}