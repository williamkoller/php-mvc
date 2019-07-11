<?php

require "model/UsuarioModel.php";

class HomeController
{
    public function Index()
    {
        include "view/View.php";
    }

    public function Login()
    {
        include "view/Login.php";
    }

    public function Panel()
    {
        $model = new UsuarioModel();
        $usuario = $model->UsuarioLogado();
        include "view/Panel.php";
    }
}