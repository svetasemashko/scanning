<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>Scanning</title>
    <link rel="stylesheet" href="css/styles.css">
<!--    type="text/css писать не нужно"-->
</head>
<body>
<div>
    <div class="wrapper">

        <div class="header">
    <!--            TODO Уменьшить логотип до 66*66px -->
            <div class="logo">
                <img src="images/logo_box.png" alt="logotype" title="Scan more" height="66px">
            </div>
            <div class="logo-name">
                <p align="left">Best Scan Company</p>
            </div>


            <div class="corner">
                <button class="button-exit">Quit</button>
                <div class="version-name">Version 1.2</div>
            </div>

        </div>

        <div class="wrapper-inner">
            <div class="sidebar">
                <div class="users-name">Users</div>
                <div class="users-list">
                    Sveta
                </div>
            </div>

            <div class="content">
                <div class="select-copies">
                    <label>Select Number of Copies:</label>
                    <select>
                        <option disabled>Number of copies</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

                </div>

                <table class="table">
                    <tr>
                        <td>
                            <p class="select-name">Choose color</p>
                            <select class="select">
<!--                                <option disabled>Number of copies</option>-->
                                <option value="0">Black</option>
                                <option value="1">White</option>
                            </select>
                        </td>
                        <td>
                            2
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <input type="search" placeholder="filter...">
                        </td>
                    </tr>
                </table>

                <form action="index.html" method="post">
                    <div class="button-send">
                        <button type="submit" value="send" name="Send">
                            <img src="https://sendprovision.co.uk/wp-content/uploads/sites/74/2017/08/SEND-2017-Logo-RGB.png" width="55px">
                        </button>
                    </div>
                </form>


            </div>
        </div>



    </div>



    <footer>
        <div id="footer">
            <div class="social">

            </div>
            <p class="copyright">© 2018 Sveta Nazarova</p>
        </div>
    </footer>
</div>

</body>
</html>
