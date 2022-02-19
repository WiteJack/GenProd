let button = document.getElementById('button');
let form =  document.getElementById('formContainer');
let closeBtn =  document.getElementById('close');
button.onclick = function () {
    form.style.display = 'flex';
    button.style.display = 'none';
    document.getElementsByTagName('body')[0].style.background = "#000";
}
closeBtn.onclick = function () {
    button.style.display = 'flex';
    form.style.display = 'none';
    document.getElementsByTagName('body')[0].style.background = "#fff";
}

