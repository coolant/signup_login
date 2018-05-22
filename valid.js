var email ="asdasd_123123@gmail.com";
var pattern = /^[a-z]+(_|\.)?[a-z0-9]*@[a-z]+\.*[a-z]+$/i;
if(pattern.test(email)){
	alert("valid email");
}else{
	alert("invalid email");
}