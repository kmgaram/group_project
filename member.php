<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project3/css/member.css">
</head>
<body>
    <div class="form_wrap">
        <form action="#" method="POST" class="joinForm">                                                                    
            <h2 class="form_title">회원가입</h2>
            <div class="textForm">
              <input type="text" class="id" id="id" placeholder="아이디">
            </div>
            <div class="textForm">
              <input type="password" class="pw" id="pw" onchange="check_pw()" placeholder="비밀번호">
            </div>
             <div class="textForm">
              <input type="password" class="pw" id="pw_confirm" onchange="check_pw()" placeholder="비밀번호 확인">
            </div>
            <span id="check" class="check"></span>
            <div class="textForm">
              <input type="text" class="name" id="name" placeholder="이름">
            </div>
             <div class="textForm">
              <input type="text" class="email" id="email" placeholder="이메일">
            </div>
            <div class="textForm">
              <input type="text" class="nickname" id="nickname" placeholder="닉네임">
            </div>
            <input class="submit" type="button" value="sign-up" onclick="check_input();">
        </form>
    </div>
    <script>


      function check_pw(){
        const pw = document.getElementById('pw').value;
        const pw_confirm = document.getElementById('pw_confirm').value;
        if(pw!=''&&pw_confirm!=''){
          if(pw==pw_confirm){
            document.getElementById('check').innerHTML='비밀번호가 일치합니다.';
            document.getElementById('check').style.color = 'blue';
            document.getElementById('check').style.fontSize = '0.8rem';
          }
          else{
            document.getElementById('check').innerHTML='비밀번호가 일치하지 않습니다.';
            document.getElementById('check').style.color = 'red';
            document.getElementById('check').style.fontSize = '0.8rem';
          }
        }
      }

      function check_input(){
        const id = document.getElementById('id').value;
        const pw = document.getElementById('pw').value;
        const pw_confirm = document.getElementById('pw_confirm').value;
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const nickname = document.getElementById('nickname').value;

        if(id==""){
          alert("아이디를 입력하세요!");
          return;
        }
        if(pw==""){
          alert("비밀번호를 입력하세요!");
          return;
        }
        if(pw_confirm==""){
          alert("비밀번호 확인을 입력하세요!");
          return;
        }
        if(name==""){
          alert("이름을 입력하세요!");
          return;
        }
        if(email==""){
          alert("이메일을 입력하세요!");
          return;
        }
        if(nickname==""){
          alert("닉네임을 입력하세요!");
          return;
        }
        if(nickname==""){
          alert("닉네임을 입력하세요!");
          return;
        }
      }
    </script>
</body>
</html>
