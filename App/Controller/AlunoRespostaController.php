<?php
    namespace App\Controller;

    use App\Models\AlunoResposta;
   
    class AlunoRespostaController{
        public function get(){
        
        }

        public function post(){
               return AlunoResposta::post($_POST['id'], $_POST['id_aluno'], $_POST['id_gabarito'],  $_POST['idResposta']);
               
        }

        public function update(){

        }

        public function delete(){

        }
    
    }

?>