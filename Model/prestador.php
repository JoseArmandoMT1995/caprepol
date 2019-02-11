<?php
class prestador
{
	private $pdo;

    public $idPrestador;
    public $idConvenio;
    public $NombreAlumno;
    public $Inicio;
    Public $Termino;
    public $Proyecto;
    public $Carrera;
    public $Escuela;
    public $Area;
    public $Ubicacion;
    public $Piso;
    public $Status;
    public $Observaciones;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM prestador");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idPrestador)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM prestador WHERE idPrestador= ?");
			$stm->execute(array($idPrestador));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idPrestador)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM prestador WHERE idPrestador = ?");

			$stm->execute(array($idPrestador));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE prestador SET
			
						NombreAlumno           = ?,
                        Inicio                 = ?,
                        Termino                = ?,
                        Proyecto               = ?,
                        Carrera                = ?,
                        Escuela                = ?,
                        Area                   = ?,
                        Ubicacion              = ?,
                        Piso                   = ?,
                        Status                 = ?,
                        Observaciones           = ?
				    WHERE idPrestador = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->NombreAlumno,
                        $data->Inicio,
                        $data->Termino,
                        $data->Proyecto,
                        $data->Carrera,
                        $data->Escuela,
                        $data->Area,
                        $data->Ubicacion,
                        $data->Piso,
                        $data->Status,
                        $data->Observaciones,
                        $data->idPrestador
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(prestador $data)
	{
		print_r($data);
		try
		{
		$sql = "INSERT INTO prestador (idPrestador,idConvenio,NombreAlumno,Inicio,Termino,Proyecto,Carrera,
		Escuela,Area,Ubicacion,Piso,Status,Observaciones)
		        VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idPrestador,
                    $data->idConvenio,
                    $data->NombreAlumno,
                    $data->Inicio,
                    $data->Termino,
                    $data->Proyecto,
                    $data->Carrera,
                    $data->Escuela,
                    $data->Area,
                    $data->Ubicacion,
                    $data->Piso,
                    $data->Status,
                    $data->Observaciones
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



	
	 
	
}
