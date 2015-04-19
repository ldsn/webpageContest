$('document').ready(function(){
	
	$('.up-btn').click(function(){
		var type 		= $(".type").val();
		var user 		= $(".user").val();
		var major 		= $(".major").val();
		var phone 		= $(".phone").val();
		var email 		= $(".email").val();
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
		if(name.length<=1){
			alert('请填写正确的作品名称,确保两个字符以上');
			return false;
		}
		if(!upfile){
			alert('请上传作品');
			return false;
		}
		if(description.length<=5){
			alert('请正确填写描述');
			return false;
		}
		var data = {'type':type,'user':user,'major':major,'phone':phone,'email':email,'name':name,'upfile':upfile,'description':description}
		$.ajax({
			url		:'/index.php?c=index&m=setUpfile',
			dataType:'json',
			type    :'post',
			data   	:data,
			success:function(data){
				alert(data.msg);
				if(data.code==1){
					window.location.href='http://web.ldustu.com';
				}
			}
		});
	});

});