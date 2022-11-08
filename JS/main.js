document.getElementById('signup').addEventListener('click',function(){
    document.querySelector('.popup-signup').style.display = 'flex';
})
document.querySelector('.cross').addEventListener('click',function(){
    document.querySelector('.popup-signup').style.display = 'none';
})

document.getElementById('login').addEventListener('click',function(){
    document.querySelector('.popup-login').style.display = 'flex';
})
document.querySelector('.xmark').addEventListener('click',function(){
    document.querySelector('.popup-login').style.display = 'none';
})