$(document).ready(function() {
    $(".link_curriculo_cleto").click(function(){
		$(".curriculo_cleto").toggle("slow");
	});
	$(".btn_fechar").click(function(){
		$(".curriculo_cleto").hide("slow");
	});
});

