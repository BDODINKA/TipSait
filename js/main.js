$(function(){
$('ul.topmenu>li>a').mouseover(function(){
    var title =$(this).attr('data-title');
    var body =$(this).attr('data-body');
    var picture =$(this).attr('data-picture');
    var path = '/media/img/'+picture;
    $('#title').text(title);
    $('#body').html(body);
    $('#logo').attr('src', path);

})
$('.nav').mouseout(function(){
    $('#title').text('');
    $('#body').html();
    $('#logo').attr('src', '/media/img/logo.png');

});

});