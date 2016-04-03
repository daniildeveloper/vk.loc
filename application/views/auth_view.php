<?php

?>
<div class="" id="loginModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Have an Account?</h3>
    </div>
    <div class="modal-body">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                <li><a href="#create" data-toggle="tab">Create Account</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <!--id login-->
                <div class="tab-pane active in" id="login">
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div id="legend">
                                <h2 class="">Войти:</h2>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <div class="controls">
                                    <input type="text" id="username" name="username" placeholder="Номер телефона: "  class="input-xlarge">
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password-->
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="Пароль" class="input-xlarge">
                                </div>
                            </div>


                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success" type="submit">Login</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--end id login-->

                <div class="tab-pane fade" id="create">
                    <form id="tab" class="form-horizontal" action="../models/register.php" method="post">

                        <div class="control-group">
                            <div class="control-group">
                                <input type="text" value="" class="input-xlarge" name="login" placeholder="Логин">
                            </div>

                            <div class="control-group">
                                <input type="text" value="" class="input-xlarge" name="first_name" placeholder="Имя">
                            </div>
                            <div class="control-group">
                                <input type="text" value="" class="input-xlarge" name="last_name" placeholder="Фамилия">
                            </div>
                            <div class="control-group">
                                <input type="text" value="" class="input-xlarge" name="password" placeholder="Пароль">
                            </div>
                            <div class="control-group">
                                <div>
                                    <button class="btn btn-primary" type="submit">Создать страничку</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

