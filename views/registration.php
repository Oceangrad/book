<?php include_once '../templates/header.php'; ?>

<body>
    <form id="auth-box">
        <h1>Регистрация</h1>
        <h2 id="invalid-data-box" style="display:none">Аккаунт уже существует</h2>
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="submit" value="Зарегистрироваться"><br>
        <a href="authorization.php">Войти</a>
    </form>

    <script src="../lib/jquery-3.7.1.min.js"></script>
    <script>
        var authBox = $("#auth-box");
        var invalidDataBox = $("#invalid-data-box");

        authBox.submit(function(){
            var user = {
                login: this.login.value,
                password: this.password.value
            };

            var request = JSON.stringify(user);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../controllers/register.php");
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.send(request);

            xhr.onreadystatechange = function(){
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if(xhr.responseText == "200")
                        window.location.replace("index.php");
                    else{
                        invalidDataBox.css("display", "block");
                        console.log(xhr.responseText)
                    }
                        
                }
            }

            event.preventDefault();
        })
    </script>
</body>
</html>