var c=30;
        var t;
        timedCount();
  function timedCount()
  {
    var hours = parseInt( c / 3600 ) % 24;
          var minutes = parseInt( c / 60 ) % 60;
          var seconds = c % 60;
          var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);
          $('#timer').html(result);
              if(c == 0 )
              {
                  $("#userForm").submit();
                  window.location="submit.php";
              }
              c = c - 1;
              t = setTimeout(function()
              {
       timedCount()
    },1000);
        }

  $(function() {
    $('#userForm').captcha();
  })
  $(document).ready(function(){
    $("#captchaInput").prop('placeholder','Put captcha solution');
    $("#captchaInput").keyup(function(){
      var cap=$(this).val();
      var ccap=$('#captchaText').text();
      captcha = ccap.replace(/=/g, '');
      var total = 0;
        for (var i = 0; i < captcha.length; i++) {
            total += captcha[i] << 0;
        }
        if(total==cap)
        {
          $('#cerror').text('Valid captcha');
          $('#cerror').css('color',"green");
        }
        else
        {
           $('#cerror').text('Invalid captcha');
           $('#cerror').css('color',"red");
        }
    });
    $("#userForm").submit(function(){
      window.location="submit.php";
    });
  });
