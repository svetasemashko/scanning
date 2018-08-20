<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Scanning</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--    type="text/css писать не нужно"-->
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                <div>

                </div>
            </div>

        </div>

        <div class="wrapper-inner">
            <div class="sidebar">
               <div class="users-list">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                                   aria-controls="v-pills-home" aria-selected="true">
                                    <?php
                                    $file = file_get_contents("users.json");
                                    $data = json_decode($file, true);
                                    $members = implode(' ', $data);
                                    $members1 = explode(' ', $members);
                                    echo $members1[0];
                                    ?>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <?php
                                    echo $members1[1];
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
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

                <table class="my-table">
                    <tr>
                        <td>
                            <p class="select-name">Choose color</p>
                            <select class="my-select" name="color">
                                <option value="0">Black</option>
                                <option value="1">White</option>
                            </select>
                        </td>
                        <td>
                            <p class="select-name">Choose color</p>
                            <select class="my-select" name="color">
                                <option value="0">Black</option>
                                <option value="1">White</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="select-name">Choose color</p>
                            <select class="my-select" name="color">
                                <option value="0">Black</option>
                                <option value="1">White</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="filter" placeholder="filter...">
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

