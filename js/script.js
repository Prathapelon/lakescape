
$('#myTabw a').click(function (e) {
 e.preventDefault()
  $(this).tab('show')
})

var tabChange = function(){
var tabs = $('.lwu.nav-tabs > li');
var active = tabs.filter('.click-active');
var next = active.next('li').length? active.next('li').find('a') : tabs.filter(':first-child').find('a');
// Bootsrap tab show, para ativar a tab
next.tab('show')
}
// Tab Cycle function
var tabCycle = setInterval(tabChange, 2000)
// Tab click event handler
$(function(){
$('.lwu.nav-tabs a').click(function(e) {
e.preventDefault();
// Parar o loop
clearInterval(tabCycle);
// mosta o tab clicado, default bootstrap
$(this).tab('show')
// Inicia o ciclo outra vez
setTimeout(function(){
tabCycle = setInterval(tabChange, 2000)//quando recomeça assume este timing
}, 2000);
});
});

