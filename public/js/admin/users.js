(function($){$(function(){

console.log('user 1');

$('.del').each(function(){
    $(this).click(function(){
        var mail = $(this).parent().parent().find('td:first-of-type').text();
        var id = $(this).next().val();
        $('#del_mail').text(mail);
        $('#del_user_id').val(id);
    });
});

})})(jQuery)