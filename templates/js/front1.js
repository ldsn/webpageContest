$('document').ready(function(){
	
	$('.up-btn').click(function(){
		var type		= $(".type").val();
		var user 		= $(".user").val();
		var major 		= $(".major").val();
		var phone 		= $(".phone").val();
		var email 		= $(".email").val();
		if(user.length<=1){
			alert('请填写正确的姓名,确保两个字符以上');
			return false;
		}
		if(major.length<=2){
			alert('请填写正确的专业名称');
			return false;
		}
		if(phone.length!=11){
			alert('请填写手机号码');
			return false;
		}
		var data = {'user':user,'major':major,'phone':phone,'type':type,'email':email}
		$.ajax({
			url		:'/index.php?c=index&m=setRegister',
			type    :'post',
			dataType:'json',
			data   	: data,
			success:function(a){
				alert(a.msg);
				if(a.code==1){
					window.location.href='http://web.ldustu.com';
				}
			}
		});
	});

});