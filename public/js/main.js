(function($){$(function(){
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

console.log('main 3');

var link = '/';


function checkUser(){
    $.ajax({
        url: baseUrl+'loginTest',
        type:'post',
        success: function(data){
            console.log(data);
            if (data == '0'){
                console.log('user logged');
            } else{
                console.log('NOT user');
            }
        }
    });
}


$('#enter_but').click(function(){
    var email = $('#login_email').val().trim();
    var pass = $('#login_pass').val().trim();
    console.log(email);
    console.log(pass);
    $.ajax({
            url: baseUrl+'trylogin',
            type:'post',
            data: 'email='+email+'&password='+pass,
            success: function(data){
                console.log('data=',data);
                if (data==0){
                    document.location = link;
                    $("#modal_login").modal("hide");
                } else{
                    $('#login-alert').text('Неправильный логин / пароль');
                }
            }
        });
    return false;
});

//checkUser();

$('.link').each(function(){
    $(this).click(function(){
        link = $(this).prop('href');
        console.log(link);
        $.ajax({
            url: baseUrl+'loginTest',
            type:'post',
            success: function(data){
                console.log(data);
                if (data == '0'){
                    console.log('user logged');
                    document.location = link;
                } else{
                    console.log('NOT user');
                    $("#modal_login").modal('show');
                }
            }
        });
        return false;
    });
});

})})(jQuery)