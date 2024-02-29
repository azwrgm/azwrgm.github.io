if($('secqaa_qSR7A0zZ')) {
	var sectpl = seccheck_tpl['qSR7A0zZ'] != '' ? seccheck_tpl['qSR7A0zZ'].replace(/<hash>/g, 'codeqSR7A0zZ') : '';
	var sectplcode = sectpl != '' ? sectpl.split('<sec>') : Array('<br />',': ','<br />','');
	var string = '<input name="secqaahash" type="hidden" value="qSR7A0zZ" />' + sectplcode[0] + '验证问答' + sectplcode[1] + '<input name="secanswer" id="secqaaverify_qSR7A0zZ" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec(\'qaa\', \'qSR7A0zZ\')" />' +
		' <a href="javascript:;" onclick="updatesecqaa(\'qSR7A0zZ\');doane(event);" class="xi2">换一个</a>' +
		'<span id="checksecqaaverify_qSR7A0zZ"><img src="' + STATICURL + 'image/common/none.gif" width="16" height="16" class="vm" /></span>' +
		sectplcode[2] + '本站域名（答案：ChinAdsl.Net）' + sectplcode[3];
	evalscript(string);
	$('secqaa_qSR7A0zZ').innerHTML = string;
}