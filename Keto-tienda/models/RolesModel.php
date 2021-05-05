<?php 
    class RolesModel extends mySql
    {
        public $intIdrol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;

        public function __construct()
        {
            parent::__construct();
        }

        public function selectRoles()
        {
            //EXTRAE ROLES
            $sql = "SELECT * FROM rol WHERE status != 0";
            $request = $this->select_all($sql);
            return $request;
        }

        public function selectRol (int $idrol)
        {
            //BUSCAR ROLES
            $intIdrol = $idrol;
            $sql = "SELECT * FROM rol WHERE idrol =$intIdrol";
            $request = $this->select($sql);
            return $request;
        }

        public function insertRol(string $rol, string $descripcion, int $status){
			$return = "";
			$strRol = $rol;
			$strDescripcion = $descripcion;
			$intStatus = $status;	

			$sql = "SELECT * FROM rol WHERE nombrerol = '{$strRol}'";
			$request = $this->select_all($sql);

			if(empty($request)){
				$query_insert = "INSERT INTO rol(nombrerol,descripcion,status) VALUES(?,?,?)";
				$arrData = array($strRol, $strDescripcion, $intStatus);
				$request_insert = $this->insert($query_insert,$arrData);
				$return = $request_insert;
			} else {
				$return = "exist";

			}
			return $return;
		}
        public function updateRol (int $idrol, string $rol, string $descripcion, int $status){
            $intIdrol = $idrol;
            $strRol = $rol;
            $strDescripcion = $descripcion;
            $intStatus = $status;

            $sql = "SELECT * FROM rol WHERE nombrerol = '$strRol' AND idrol != $intIdrol";
            $request = $this->select_all($sql);

            if (empty($request))
            {
                $sql = "UPDATE rol SET nombrerol = ?, descripcion = ?, status = ?, WHERE idrol = $this->intIdrol";
                $arrData = array($strRol, $strDescripcion, $intStatus);
                $request = $this->update($sql,$arrData);
            }else{
                $request = "exist";
            }
            return $request;
        }
        
       
    
    }




       

?>