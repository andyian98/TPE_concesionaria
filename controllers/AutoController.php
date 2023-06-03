<?php
require 'models/Automodel.php';

class AutoController {
    private $smarty;
    private $autoModel;

    public function __construct($smarty) {
        $this->smarty = $smarty;
        $this->autoModel = new AutoModel();
    }

    public function index() {
        $autos = $this->autoModel->getAllAutos();
        $this->smarty->assign('autos', $autos);
        $this->smarty->display('lista_autos.tpl');
    }
}
?>
