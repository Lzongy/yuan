//昵称校验
function  checkname() {
    var name=document.getElementById('name');
    if(name.value==""){
        alert("昵称为空");
    }else if(name.value.length>20){
        alert("昵称长度超出规定");
    }
}
//邮箱校验
function checkmail() {
    var email=document.getElementById('email');
    if(email.value==""){
        alert("邮箱地址为空");
    }
}
//手机号校验
function checktel() {
    var tel=document.getElementById('tele');
    var ps=/^1[3|4|5|8][0-9]\d{4,8}$/;
    if(!ps.test(tel.value)){
        document.getElementById('telErr').innerText="无效手机号，请检查";
    }
}
function telfouc() {
    document.getElementById('telErr').innerText = "";
}