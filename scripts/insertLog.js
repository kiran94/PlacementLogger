$(document).ready(function()
{
	//Click event for log button click. 
	$('#log_submit').click(function()
	{

		var log_val_field =$('#log_field').val(); 
		var insertData = {log_val : log_val_field};

		$.ajax(
		{	
			url : 'api/insertLog.php',
			type : 'POST',
			data : insertData, 
			success: function(data)
			{
				var parsed = JSON.parse(data);
				$('#notification').css('display','block');
			},
			error: function(data)
			{
				var parsed = JSON.parse(data);	
			}
		});
		//END AJAX

	});
	//END BUTTON CLICK

});
//END DOCUMENT READY