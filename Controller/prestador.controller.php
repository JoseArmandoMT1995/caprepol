<?php
require_once 'model/prestador.php';
class PrestadorController{
    private $model;
    public function __CONSTRUCT(){
        $this->model = new prestador();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/prestador/prestador.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prest = new prestador();

        if(isset($_REQUEST['idPrestador'])){
            $prest = $this->model->Obtener($_REQUEST['idPrestador']);
        }

        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/prestador/prestador-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prest = new prestador();

        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/prestador/prestador-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prest = new prestador();

         $prest->idPrestador = $_REQUEST['idPrestador'];
         $prest->idConvenio = $_REQUEST['idConvenio'];
         $prest->NombreAlumno = $_REQUEST['NombreAlumno'];
         $prest->Inicio =  $_REQUEST['Inicio'];
         $prest->Termino =  $_REQUEST['Termino'];
         $prest->Proyecto = $_REQUEST['Proyecto'];
         $prest->Carrera = $_REQUEST['Carrera'];
         $prest->Escuela = $_REQUEST['Escuela'];
         $prest->Area = $_REQUEST['Area'];
         $prest->Ubicacion = $_REQUEST['Ubicacion'];
         $prest->Piso = $_REQUEST['Piso'];
         $prest->Status = $_REQUEST['Status'];
         $prest->Observaciones = $_REQUEST['Observaciones'];

        $this->model->Registrar($prest);

        header('Location: index.php?c=prestador');
    }

    public function Editar(){
        $prest = new prestador();

         $prest->idPrestador = $_REQUEST['idPrestador'];
         $prest->idConvenio = $_REQUEST['idConvenio'];
         $prest->NombreAlumno = $_REQUEST['NombreAlumno'];
         $prest->Inicio =  $_REQUEST['Inicio'];
         $prest->Termino =  $_REQUEST['Termino'];
         $prest->Proyecto = $_REQUEST['Proyecto'];
         $prest->Carrera = $_REQUEST['Carrera'];
         $prest->Escuela = $_REQUEST['Escuela'];
         $prest->Area = $_REQUEST['Area'];
         $prest->Ubicacion = $_REQUEST['Ubicacion'];
         $prest->Piso = $_REQUEST['Piso'];
         $prest->Status = $_REQUEST['Status'];
         $prest->Observaciones = $_REQUEST['Observaciones'];

        $this->model->Actualizar($prest);
        header('Location: index.php?c=prestador');
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idPrestador']);
        header('Location: index.php?c=prestador');
    }
}
