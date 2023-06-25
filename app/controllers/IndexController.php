<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;
    class IndexController extends Action{

        public function index() {          
            //instância do PDO
            $conn = Connection::getDb();
            //Instanciar modelo  
                    
            $produto = new Produto($conn);
            
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;
            $this->render('index', 'layout1');  
            
        }

        public function sobreNos() {
            //$this->view->dados = array('Notebook', 'Smartphone');
            $this->render('sobreNos', 'layout2');
        }        
    }
?>