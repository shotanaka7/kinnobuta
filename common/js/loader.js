$(document).ready(function () {
	var h = $(window).innerHeight();

	$('#loaded').css('display', 'none');
	$('#loader-bg ,#loader').height(h).css('display', 'block');
});

$(window).on('load', function () { //全ての読み込みが完了したら実行
	$('#loader-bg').delay(2000).fadeOut(2000);
	$('#loader').delay(2000).fadeOut(1000);
	$('#loaded').css('display', 'block');
	$('.tile').tile(4);
});

//10秒たったら強制的にロード画面を非表示
$(function () {
	setTimeout('stopload()', 1000);
});

function stopload() {
	$('#loaded').css('display', 'block');
	$('#loader-bg').delay(1000).fadeOut(2000);
	$('#loader').delay(1000).fadeOut(1000);
	$('.tile').tile(4);
}
