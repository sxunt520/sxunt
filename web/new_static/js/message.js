function CheckPost()
{
	if (myform.name.value=="")
	{
		alert("请填写用户名");
		myform.name.focus();
		return false;
	}
	if (myform.name.value.length>6)
	{
		alert("名字不能大于6个字符");
		myform.name.focus();
		return false;
	}

	if (myform.content.value.length<5)
	{
		alert("内容不能少于5个字符");
		myform.content.focus();
		return false;
	}
	
}