<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Крестики Нолики</title>
    <link rel="stylesheet" href="cross.css">
</head>
<body>
   <div class="head">

        <div id="start" class="start">
            <span>Начать игру</span>
        </div>  
        <div id="login" class="login">
            <span>Войти</span>
        </div>

        <div id="registration" class="login">
            <span>Регистрация</span>
        </div>


    </div>

    <div class="wrapper">
        <form action="">

        </form>
        <div id="field" class="field"> </div>

        <div id="scopes" class="scopes">
            <div class="column">
                <div>Крестики</div>
                <div id="cross">0</div>
            </div>

            <div class="column">
                <div>Нолики</div>
                <div id="zero">0</div>
            </div>
        </div>
    </div>       

    <div class="popup" id="popup"> 
        <div class="content">

            <div class="head" id="popup-head"></div>
            <div class="body" id="popup-body"></div>
            <div class="cross" id="popup-cross"></div>
        </div>
    </div>

    <div class="popup" id="popup-create" >
        <div class="content">
            <div class="head">Введи ширину поля</div>
            <div class="body">
                <input type="number" id="width">
            </div>
            <div class="button" id="create"> <span>Создать</span></div>
        </div>
    </div>

    <div class="popup" id="popup-login">
        <div class="content">
            <div class="head">Войти</div>
            <div class="body">
                <form action="">
                    <label for="login-input">
                        <span>Логин</span>
                        <input type="text" name="login" id="login-input" require>
                    </label>
                    <label for="password">
                        <span>Пароль</span>
                        <input type="password" name="password" id="password" require>
                    </label>
                    <!-- <input type="submit" name="login-submit" id="login-submit"> -->
                </form>

            </div>
            <div class="button" id="login-submit"> <span>Войти</span></div>
            <div class="cross" id="popup-cross-login"></div>
            
        </div>
    </div>



    <div class="popup" id="popup-registration">
        <div class="content">
            <div class="head">Зарегистрироваться</div>
            <div class="body">
                <form id="form-registration" action="">
                    <label for="name">
                        <span>Имя</span>
                        <input type="text" name="name" id="name" require>
                    </label>
                    <label for="last-name">
                        <span>Фамилия</span>
                        <input type="text" name="last-name" id="last-name" require>
                    </label>


                    <label for="login">
                        <span>Логин</span>
                        <input type="text" name="login" id="login" require>
                    </label>
                    <label for="password-registration">
                        <span>Пароль</span>
                        <input type="password" name="password" id="password-registration" require>
                    </label>
                    <label for="repeat-password">
                        <span>Пароль</span>
                        <input type="repeat-password" name="repeat-password" id="repeat-password" require>
                    </label>
                    <!-- <input type="submit" name="login-submit" id="login-submit"> -->
                </form>

            </div>
            <div class="button" id="registration-submit"> <span>Войти</span></div>
            <div class="cross" id="popup-cross-registration"></div>
            
        </div>
    </div>



    <script src="cross.js"> </script>
</body>
</html>