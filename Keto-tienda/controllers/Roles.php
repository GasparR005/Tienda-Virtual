<?php 
    class Roles extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function Roles()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario";
            $data['page_title'] = "Roles usuario<small>Tienda Virtual</small>";
            $data['page_name'] = "rol_usuario";
            $this->view->getView($this, "roles",$data);
        }
        public function getRoles()
        {
           $arrData = $this->model->selectRoles();   
           for ($i=0; $i < count($arrData); $i++){
                
            if($arrData[$i]['status'] == 1){

                $arrData[$i]['status'] = '<span class="badge bg-success">Activo</span>';
            }else{
                $arrData[$i]['status'] = '<span class="badge bg-danger">Inactivo</span>';
            }

            $arrData[$i]['options'] = '<div class="text-center">
            <button class="btn btn-sm btn-secondary btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fas fa-key"></i></button>
            <button class="btn btn-sm btn-success btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fas fa-pencil-alt"></i></button>
            <button class="btn btn-sm btn-danger btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
            </div>';

            }
           echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
           die();
        }


        public function getRol (int $idrol)
        {
            $intIdrol = intval(strClean($idrol)) ;
            if($intIdrol > 0 )
            {
                $arrData = $this->model->selectRol($intIdrol);
                if(empty($arrData))
                {
                    $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
                }else{
                    $arrResponse = array('status' => true, 'data' => $arrData);
                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            
            
            die();
        }




        public function setRol(){ //Con esto podremos almacenar un nuevo Rol

            $intIdrol = intval($_POST['idRol']);
			$strRol = strClean($_POST['txtNombre']); // Con strClean limpiamos para 
			$strDescripcion = strClean($_POST['txtDescripcion']); //evitar inyecciones SQL
			$intStatus = intval($_POST['listStatus']);
			
            if ($intIdrol == 0)
            {
                //Crear
                $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);//Enviamos informacion al modelo, enviamos parametros
                $option = 1;
            }else{
                //Actualizar
                $request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescripcion, $intStatus);
                $option = 2;
            }
			if($request_rol > 0)
            {
                if($option == 1)
                {
                    $arrResponse = array('status' => true,  'msg' => 'Datos guardados correctamente.');
                }else{
                    $arrResponse = array('status' => true,  'msg' => 'Datos Actualizados correctamente.');
                }	
			} else if($request_rol == 'exist'){

				$arrResponse = array('status' => false, 'msg' => '¡Atencion!, El Rol ya existe');

			} else {

				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				

			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die(); //Con "die" detenemos o cerramos el proceso de este metodo

		}
        
    }
 ?>