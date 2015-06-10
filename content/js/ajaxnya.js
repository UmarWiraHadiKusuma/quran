$(function() {
	$("#tabs a").click(function(){
		var page = this.hash.substr(1);
		$("content").html("");
		$.get(page+".php", function(gotHtml){
		$("#content").html(gotHtml);
		});
		return false;
	});
});