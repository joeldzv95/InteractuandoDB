$(function(){
  getDataLogin();
  
})


function getDataLogin(){
  $('form').submit(function(e) {
    e.preventDefault();
    var datas = {
      user : $('#user').val(),
      password : $('#password').val()
    }
    console.log(datas);
    $.ajax({
      url: '../server/check_login.php',
      dataType: "json",
      data: datas,
      type: 'POST',
      success: function(data){

  
       if (data == 1) {
          window.location.href = 'main.html';
        }else {
          alert(php_response.msg);
        }
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  })
  
}



