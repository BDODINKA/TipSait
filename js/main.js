$(function(){
$('ul.topmenu>li>a').mouseover(function(){
    let title =$(this).attr('data-title');
    let body =$(this).attr('data-body');
    let picture =$(this).attr('data-picture');
    let path = '/media/img/'+picture;
    $('#title').text(title);
    $('#body').html(body);
    $('#logo').attr('src', path);

})
$('.nav').mouseout(function(){
    $('#title').text('');
    $('#body').html();
    $('#logo').attr('src', '/media/img/logo.png');

});
$( "#draggable" ).draggable();

});