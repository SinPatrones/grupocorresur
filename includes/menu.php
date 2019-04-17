<?php

class Menu{
    private static $opcion = 1;

    static function getMenu($opt = 1){
        $classObj = "btnActive";
        $arrayMenu = ["", "", "", "", "", ""];
        $arrayMenu[$opt - 1] = $classObj;

        $html = "<div class=\"row justify-content-center\">
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[0]."\"><a href=\"index.php\">INICIO</a>
        </div>
    </div>
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[1]."\"><a href=\"proyectos.php\">PROYECTOS</a>
        </div>
    </div>
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[2]."\"><a href=\"nosotros.php\">NOSOTROS</a>
        </div>
    </div>
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[3]."\"><a href=\"equipo.php\">EQUIPO</a>
        </div>
    </div>
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[4]."\"><a href=\"blog.php\">BLOG</a>
        </div>
    </div>
    <div class=\"col-lg-2\">
        <div align=\"center\" class=\"btnMenu ".$arrayMenu[4]."\"><a href=\"contacto.php\">CONTACTO</a>
        </div>
    </div>
</div>";

        return $html;
    }
}

?>