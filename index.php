<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новый Заголовок изменения</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <ul class="menu">
                <li onClick="location.href='#'"><a href="#">Европа</a></li>
                <li onClick="location.href='#'"><a href="#">Азия</a></li>
                <li onClick="location.href='#'"><a href="#">Северная Америка</a></li>
                <li onClick="location.href='#'"><a href="#">Южная Америка</a></li>
                <li onClick="location.href='#'"><a href="#">Африка</a></li>
                <li onClick="location.href='#'"><a href="#">Австралия</a></li>
            </ul>
        </div>
        <div id="content">
            <h2>Зарегистрированные в системе пользователи</h2>
            <p>php storm commit</p>
            <table>
                <tr>
                    <th>ФИО</th>
                    <th/>Дата Рождения</td>
                    <th/>Контактная информация</td>
                    <th/>Дата регистрации</td>
                </tr>
                <tr>
                    <td>Иванов Иван Иванович</td>
                    <td/>23.06.1980</td>
                    <td>ivanov@mail.ru</td>
                    <td/>24.03.2016</td>
                </tr>
                <tr>
                    <td>Петров Петр Петрович</td>
                    <td/>26.05.1974</td>
                    <td>petrov@mail.ru</td>
                    <td/>24.03.2016</td>
                </tr>
                <tr>
                    <td>Ильин Илья Иллич</td>
                    <td/>23.06.1983</td>
                    <td>illin@mail.ru</td>
                    <td/>25.03.2016</td>
                </tr>
            </table>
            <form action="/" method="post">
                <table class="form">
                    <tr>
                        <td>
                            <label for="login">Enter login:</label>
                        </td>
                        <td>
                            <input type="text" id="login" name="login" placeholder="login"/>
                        </td>
                     </tr>
                    <tr>
                        <td>
                            <label for="birth_date">Enter birth date:</label>
                         </td>
                        <td>
                            <input type="text" id="birth_date" name="birth_date" placeholder="date of birth"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Enter email:</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email" placeholder="email"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="reg_date">Enter registration date:</label>
                         </td>
                        <td>
                            <input type="text" id="reg_date" name="reg_date" placeholder="registration date"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Enter password:</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password"  placeholder="password"/>
                        </td>
                    </tr>
                    <tr id="button">
                        <td colspan="2" >
                            <input type="submit" name="register" value="OK" class="button"/>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <div id="footer">
            <h2> &copy; Denis M.</h2>
        </div>
    </div>
</body>
</html>