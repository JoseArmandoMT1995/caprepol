<?php
class convenio
{
	private $pdo;

    public $idConvenio;
    public $idAlumno;
    public $NombreEscuela;
    public $Carreras;
    public $Vigencia;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM convenio");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idConvenio)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM convenio WHERE idConvenio = ?");
			$stm->execute(array($idConvenio));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idConvenio)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM convenio WHERE idConvenio = ?");

			$stm->execute(array($idConvenio));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE convenio SET
						 NombreEscuela    = ?,
						  Carreras        = ?,
                          Vigencia        = ?
				    WHERE idConvenio = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->NombreEscuela,
                        $data->Carreras,
                        $data->Vigencia,
                        $data->idConvenio
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(convenio $data)
	{
		try
		{
		$sql = "INSERT INTO convenio (idConvenio,NombreEscuela,Carreras,Vigencia)
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idConvenio,
                    $data->NombreEscuela,
                    $data->Carreras,
                    $data->Vigencia
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

public function buscar(convenio $data)
	{
		try
		{
		$sql = "INSERT INTO convenio (idConvenio,NombreEscuela,Carreras,Vigencia)
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idConvenio,
                    $data->NombreEscuela,
                    $data->Carreras,
                    $data->Vigencia
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
public function paging($data,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$stm=$data." limit $starting_position,$records_per_page";
		return $stm;
	}
	



}

	