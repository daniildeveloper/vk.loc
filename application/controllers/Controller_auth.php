<?php


class Controller_auth extends Controller
{

    function action_index()
    {
        $this->view->generate('auth_view.php', 'template_view.php', array(
            "title" => "Войти",
            "is_left_menu" => false
        ));
    }
}