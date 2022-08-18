<?php include $_SERVER['DOCUMENT_ROOT']."/group_project/header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원 정보</title>
  <link rel="stylesheet" href="mypage.css">
  <script>
    function check_input() {
      if (!document.member.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member.pass.focus();
          return;
      }
      if (!document.member.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member.pass_confirm.focus();
          return;
      }
      if (!document.member.name.value) {
          alert("이름을 입력하세요!");    
          document.member.name.focus();
          return;
      }
      if (!document.member.email.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member.email.focus();
          return;
      }
      if (!document.member.nickname.value) {
          alert("닉네임을 입력하세요!");    
          document.member.nickname.focus();
          return;
      }
      if (document.member.pass.value != 
            document.member.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member.pass.focus();
          document.member.pass.select();
          return;
      }
      document.member.submit();
   }

   function reset_form() {
      document.member.id.value = "";  
      document.member.pass.value = "";
      document.member.pass_confirm.value = "";
      document.member.name.value = "";
      document.member.email.value = "";
      document.member.nickname.value = "";
      document.member.id.focus();
      return;
   }
  </script>
</head>

<body>
    <div id="menubar">
        <nav>
            <div class="container2">
                <ul class="menu">
                    <span><a href="mypage.php">MODIFY</a></span>
                    <span><a href="message.php">MY MESSAGE BOARD</a></span>
                </ul>
            </div>
        </nav>
    </div>
    <div id="box">
    <form name="member" action="modify.php?id=<?=$userid?>" method="post">
		<h2>회원 정보 수정</h2>
    	<ul class="join_form">
            <li>
                <span class="col1">아이디</span>
                <span class="col2"><?=$userid?></span>                
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2"><input type="password" name="pass" value="<?=$pass?>"></span>               
            </li>
            <li>
                <span class="col1">비밀번호 확인</span>
                <span class="col2"><input type="password" name="pass_confirm"></span>               
            </li>            
            <li>
                <span class="col1">이름</span>
                <span class="col2"><input type="text" name="name" value="<?=$name?>"></span>               
            </li>
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email" value="<?=$email?>"></span>               
            </li>
            <li>
                <span class="col1">닉네임</span>
                <span class="col2"><input type="text" name="nickname" value="<?=$nickname?>"></span>                     
            </li>
      </ul>                       
		<ul class="buttons" id="button">
	        <li><button type="button" onclick="check_input()">저장하기</button></li>
            <li><button type="button" onclick="reset_form()">취소하기</button></li>
        </ul>
    </form>
</div>
</body>
</html>