<?php

Router::add("home", "MainController", "index");
Router::add("registrar", "MainController", "registrar");
Router::add("concurso", "MainController", "concurso");
Router::add("ganador", "MainController", "ganador");