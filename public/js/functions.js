//(function($){$(function(){
    function get_radio(id){
        if ($("#"+id).prop('checked')){
            return 0;
        } else {
            return 1;
        }
    }

    function get_check(id){//проверка ckeckbox элементов
        var c = $('#'+id);
        if (c.prop('checked')){
            return 1;
        } else {
            return 0;
        }
    }

    function dialogE(mess){
        $('#dialog').remove();
        var d = '<div id="dialog"><h5>Помилка<button id="close_dialog">X</button></h5><p>'+mess+'</p></div>';
        $('body').append(d);
        $('#close_dialog').click(function(){
            $('#dialog').remove();
        });
    }

//})})(jQuery)
