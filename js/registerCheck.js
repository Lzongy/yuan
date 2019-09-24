//用户名校验
function idcheck() {
    var userid=document.getElementById('userid');
    if(userid.value==""){
        document.getElementById('idErr').innerText="用户名不能为空哦";
    }else if(userid.value.length<0 || userid.value.length>20){
        document.getElementById('idErr').innerText="用户名长度超出规定";
    }else{
        document.getElementById('idErr').innerText="";
    }
}
function idfouc() {
    document.getElementById('idErr').innerText="";
}
//密码校验
function psdcheck() {
    var psd=document.getElementById('psd');
    var ps=/^[\w-*/#]{6,20}$/;
    if(psd.value==""){
        document.getElementById('psdErr').innerText="密码不能为空哦";
    }else if(psd.value.length<6 || psd.value.length>20){
        document.getElementById('psdErr').innerText="密码长度超出规定";
    }else if(!ps.test(psd.value)){
        document.getElementById('psdErr').innerText="密码格式不正确";
    }
}
function psdfouc() {
    document.getElementById('psdErr').innerText="";
}
function repsdcheck() {
    var psd=document.getElementById('psd');
    var repsd=document.getElementById('repsd');
    if(repsd.value!==psd.value){
        document.getElementById('repsdErr').innerText="密码不一致";
    }
}
function repsdfouc() {
    document.getElementById('repsdErr').innerText="";
}
//邮箱校验
function echeck() {
    var email=document.getElementById('email');
    var em=/\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/;
    if(email.value==""){
        document.getElementById('emErr').innerText="邮箱地址不能为空哦";
    }else if(!em.test(email.value)){
        document.getElementById('emErr').innerText="邮箱格式不正确";
    }
}
function efouc() {
    document.getElementById('emErr').innerText="";
}