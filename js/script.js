$(document).ready(function(){
    // ESCONDE O CONTEUDO
    $('div#conteudo').hide(); 
    
    // DAR O EFEITO ... E MUDA DE COR
    function loadProgress(){ 
        var atribuicao = "div#loading span";
        var loadRet = setInterval(function(){$(atribuicao).append('.');}, 2000);
        var cor     = setInterval(function(){$("div#loading").css('color','#777');}, 2000);
        setInterval(function(){
        clearInterval(loadRet);
        clearInterval(cor);
        $(atribuicao).html('')
        $("div#loading").css('color','#000');
        }, 4000);
    }
    loadProgress();
    setInterval(loadProgress, 4000);
    
    
// MOSTRA O CONTEUDO QUANDO O SITE FOR CARREGADO POR COMPLETO
$(window).load(function(){
$('div#loading').fadeOut();
$('div#conteudo').fadeIn();
});



});