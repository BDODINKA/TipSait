$(function(){
    $.ajaxsetup(e);{
        type:'POST',
        error. Function ();{
              Function ();{
         modal.append('<img id="loader" src="/media/img/loader.gif"/>')
    }

let fx ={
    'initmodal':function() {
        if ($('.modal-window').length == 0) {
           $('<div>').addClass(t,'overlay').appendTo('body');
            return $('<div>').addClass(t ,'modal-window').appendTo('body');
        
    } else {
        return $('.modal-window');
           }
      }
}
$(' .maintext').click(function (e) {
        e.preventDefault();
       let id =($this).attr('data-id');
       let modal = fx.initmodal();
$('<a>').html('.&times;').addClass(t ,'close').attr('href','#').click(function(e) {
              e.preventDefault();
              modal.remove();
              $('.overlay').remove();
}).appendTo(modal);
        $.ajax({
            url:'/ajax.php' ,
            type: 'POST'  ,
            data:'id='+id,
            success: function(data) {
                modal.append(data);
                $('#loader').hide();
            }
        });
    });
