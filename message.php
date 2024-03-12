<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        background-color: #e4e4e4;
      }
        h1 {
  text-align: center;
}
.container{
  width: 400px;
  height: 400px;
    padding: 17px;
    margin: 0 auto;
    margin-top:2px ;
    border-radius: 3vh;
    text-align: left;
}
input{
  padding: 17px;
  width: 300px;
  border-radius: 23px;
}
textarea{
width: 400px;
height: 100px;
border-radius: 23px;


}
.button{
  width: 300px;
  margin: 32px;
  background-color: hsl(255, 94%, 79%);
  border: none;
  padding:10px;
  border-radius: 23px;
}
p{
  color: hsl(255, 94%, 79%);
  text-align: center;
  font-size:8vh;
  border: none;
  font-family:'Times New Roman', Times, serif;
}
label{
  font-size: x-large;
  color: hsl(290, 80%, 45%);
}
.box{
padding: 8px;
margin: 2px;

}
    </style>
</head>
<body>
<form action="https://api.web3forms.com/submit" method="POST">

    <input type="hidden" name="access_key" value="347ba936-0b3f-4573-8655-5b6e68e4f2c1">
<div class="container">
      <div class="box">
        <label>User name</label>
        <br>
        <br>
  <input type="text" name=" user name" placeholder="user name" id="username" required>
  <br>
  <label>To</label>
  <br>
  <br>
  <input type="email" name="email" placeholder="email" id="email"required>
</div>
<label>Say the feedback to here</label>
<br>
<br>
    <textarea type="message" name="compose email">
    </textarea>
    <input type="submit" class="button" value=" send">
  </div>
</form>

<script src="https://web3forms.com/client/script.js" async defer></script>

</div>
</body>
</html>