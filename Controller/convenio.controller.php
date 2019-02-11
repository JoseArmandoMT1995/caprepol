<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/convenio.php';

class convenioController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new convenio();
    }

    //Llamado plantilla principal
    public function Index(){
        
        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/convenio/convenio.php';
        require_once 'view/footer.php';

    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $pvd = new convenio();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['idConvenio'])){
            $pvd = $this->model->Obtener($_REQUEST['idConvenio']);
        }

        //Llamado de las vistas.
        
        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/convenio/convenio-editar.php';
        require_once 'view/footer.php';

  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $pvd = new convenio();

        //Llamado de las vistas.
    
        require_once 'view/header.php';
        require_once 'view/navegador.php';
        require_once 'view/cabecera.php';
        require_once 'view/convenio/convenio-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $pvd = new convenio();

        //Captura de los datos del formulario (vista).
        $pvd->idConvenio = $_REQUEST['idConvenio'];
        $pvd->NombreEscuela = $_REQUEST['NombreEscuela'];
        $pvd->Carreras = $_REQUEST['Carreras'];
        $pvd->Vigencia = $_REQUEST['Vigencia'];

        //Registro al modelo proveedor.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

    //Método que modifica el modelo de un proveedor.
    public function Editar(){
        $pvd = new convenio();

        $pvd->idConvenio = $_REQUEST['idConvenio'];
        $pvd->NombreEscuela = $_REQUEST['NombreEscuela'];
        $pvd->Carreras = $_REQUEST['Carreras'];
        $pvd->Vigencia = $_REQUEST['Vigencia'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla proveedor con el nit dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idConvenio']);
        header('Location: index.php');
    }
}
