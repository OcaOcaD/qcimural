<div id="login" class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">¿Habrá algúna charla en el auditorio mañana?</h2>

    <p><small>User:</small><input id="username" type="user" placeholder="Username"></p>
    <p><small>Password:</small><input id="password" type="password" placeholder="Password"></p>
    <button onclick="handlelogin()" >Log in</button>
    
</div>
<script>
  function handlelogin(){
    console.log("HEyu there")
    let userInput = $("#username")[0].value
    let passInput = $("#password")[0].value
    console.log(userInput)
    console.log(passInput)
    let data = []
    data[0] = userInput
    data[1] = passInput
    $.ajax({
        type: "POST",
        url: "components/login/loginquery.php",
        data: (
          // {user: userInput },
          // {pass: passInput}
          {data:data}
        ),
        success: function(data) {
            alert(data);
        }
    })
  }
</script>
