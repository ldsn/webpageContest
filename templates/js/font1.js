$('document').ready(function(){
	
	$('.up-btn').submit(function(){
		var user 		= $(".user").val();
		var major 		= $(".major").val();
		var phone 		= $(".phone").val();
		var name 		= $(".name").val();
		var upfile 		= $(".upfile").val();
		var description = $(".description").val();
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
		var data = {'user':user,'major':major,'phone':phone}
		$.ajax({
			url		:'/index.php?c=index&m=setRegister',
			dataType:'json',
			data   	:data,
			success:function(get){
				alert(get.msg);
			}
		});
	});

});