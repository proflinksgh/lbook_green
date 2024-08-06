<style>
    
   body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("../production/images/slid4.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: #212529db;
}


.login {
  border-radius: 10px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  height: 400px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}

input{
    background-color:#c6952e4d;
}
::placeholder{
    color:#212529;
}

/*
.login.loading button {
  max-height: 50%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
*/
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #212529;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  border-color: #c6952e;
  border-left-width: 35px;
  
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.9em;
  color: #212529;
  text-decoration: none;
}
.login .title {
  text-align:center;
  color: #4e4e4e;
  font-size: 1.8em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login button {
  width: 100%;
  height: 13%;
  font-weight:bold;
  padding: 10px 10px;
  background: #167939db;
  color: #fff;
  border-radius: 0 0 2px 2px;
  border: #ff5e04;
  border-radius: 5px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
  margin-top: 15px;
}

/*
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
*/
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

 
    #btnVercode{
        
        background:#2E8B57;
    }
</style>
<div class="wrapper">
  <form class="login">
    <p class="title">New Password</p>
     
    <input type="password" placeholder="New Password" id="idPass" class="logRes" name="idPass"  required="required" value="">
    <input type="password" placeholder="Confirm Password" id="idConf" class="logRes" name="idConf"  required="required" value="">
    <i class="fa fa-key"></i>
    <button type="button" id="btnConfirm">
      <i class="spinner"></i>
    <span class="state">Confirm</span>
     
    </button>
  </form>
  </p>
</div

