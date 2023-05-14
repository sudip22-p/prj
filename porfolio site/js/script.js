document.querySelector('.cross').style.display='none';
document.querySelector('.ham').addEventListener('click',()=>{
    setTimeout(()=>{
        document.querySelector('.cross').style.display='block';
    } ,400);
    document.querySelector('.ham').style.display='none';
    document.querySelector('.sidebar').classList.toggle('sidebarOut');

});
document.querySelector('.cross').addEventListener('click',()=>{
    setTimeout(()=>{
        document.querySelector('.ham').style.display='block';
    } ,400);
    document.querySelector('.cross').style.display='none';
    document.querySelector('.sidebar').classList.toggle('sidebarOut');
});