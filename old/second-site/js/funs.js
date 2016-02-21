function scroll()
{
	$('html,body').animate({scrollTop: '610px'},'slow');
}
function loadPage(page)
{
	file=page+".php";
	$('#guestbook').hide();
	$('#extcontent').hide();
	$('#extcontent').html('');
	$('#loading').show();
	file=page+".php";
	$.get(file, function(data){
		$('#extcontent').html(data);
		$('#loading').hide();
		$('#extcontent').show();
		scroll();
	});
}
function showGuestBook()
{
		$('#extcontent').hide();
		$('#guestbook').show();
		scroll();
}
function loadPlayer(file)
{
	file='flash/'+file+".swf";
	$.get('player.php',  { swffile: file },function(data){
		$('#extcontent').html(data);
		$('#loading').hide();
		$('#extcontent').show();
		scroll();
	});
}