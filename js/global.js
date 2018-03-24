$('input#name-submit').on('click', function(){
	//alert(1);
	var name= $('input#name').val();
	//alert(name);
	if ($.trim(name) != '')
		{
			//alert(1);
			$.post('/demo/ajax/name.php', {name : name}, function(data){
				$('div#name-data').text(data);
			});
		}
})