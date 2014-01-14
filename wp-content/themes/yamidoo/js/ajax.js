var step=1;
function flash_title()  
	{  
		step++;
		if (step==3) {step=1}  
		if (step==1) {document.title='【NEW POST】 Media Center 媒体中心'}  
		if (step==2) {document.title='【　　　　】 Media Center 媒体中心'}  
		setTimeout("flash_title()",500);  
	}  
	
$(document).ready(function(){
	var flag=1;
	
	$.ajax({url:"ajax.php", cache:false, success:function(result){
			flag=result;
	}});
	
	window.setInterval(function(){
		$.ajax({url:"ajax.php", cache:false, success:function(result){
			if (flag!=result) {
				flash_title();
			}
		}});
	}, 10000);
});