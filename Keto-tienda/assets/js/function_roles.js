var tableRoles;
document.addEventListener('DOMContentLoaded', function(){
  tableRoles = $('#tableRoles').DataTable( {
    "aProcessing":true,
    "aServerSide":true,
    "language":{
      "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    },
    "ajax":{
      "url": " "+base_url+"/Roles/getroles",
      "dataSrc":""
    },
    "columns":[
      {"data":"idrol"},
      {"data":"nombrerol"},
      {"data":"descripcion"},
      {"data":"status"},
      {"data":"options"}
    ],
    "resonsieve":"true",
    "bDestroy": true,
    "iDisplayLength": 10,
    "order": [[0,"desc"]]
  });
  // NUEVO ROL
  var formRol = document.querySelector("#formRol");
  formRol.onsubmit = function(e) {
    e.preventDefault();
      var intIdRol = document.querySelector('#idRol').value;
      var strNombre = document.querySelector('#txtNombre').value;
      var strDescripcion = document.querySelector('#txtDescripcion').value;
      var intStatus = document.querySelector('#listStatus').value;
      if(strNombre == '' || strDescripcion == '' || intStatus == '')
      {
        //colocar Alertas
        swal("Atención", "Todos los campos son obligatorios.", "error");
        return false;
      }
      var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      var ajaxUrl = base_url+'/Roles/setRol';
      var formData = new FormData(formRol);
      request.open("POST", ajaxUrl, true);
      request.send(formData);
      request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200){
          var objData = JSON.parse(request.responseText);
          if (objData.status) {

            $('#modalFormRol').modal("hide");
            formRol.reset();
            swal("Roles de usuario", objData.msg, "success");
            tableRoles.ajax.reload();
        } else {
            swal("Error", objData.msg, "error");
            
          }
        }
        

      }
  }
  
});




$(document).ready(function() {
  $('#tableRoles').DataTable();
} );




function openModal(){
    document.querySelector('#idRol').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btn').classList.replace("btn-success", "btn-primary");
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector('#formRol').reset();
      
  $('#modalFormRol').modal('show');
}


window.addEventListener("load", function() {

  setTimeout(() => { 

      fntEditRol();

  }, 500);

}, false);

function fntEditRol(){
  var btnEditRol = document.querySelectorAll(".btnEditRol");
  btnEditRol.forEach(function(btnEditRol){
  btnEditRol.addEventListener('click',function(){

      document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
      document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
      document.querySelector('#btn').classList.replace("btn-primary", "btn-success");
      document.querySelector('#btnText').innerHTML = "Actualizar";

      var idrol = this.getAttribute("rl");
      var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      var ajaxUrl = base_url+'/Roles/getRol/'+idrol;
      request.open("GET",ajaxUrl,true);
      request.send();

      request.onreadystatechange = function(){
        if (request.readyState == 4 && request.status == 200){

          var objData = JSON.parse(request.responseText);
          if (objData.status)
          {
            document.querySelector("#idRol").value = objData.data.idrol;
            document.querySelector("#txtNombre").value = objData.data.nombrerol;
            document.querySelector("#txtDescripcion").value = objData.data.descripcion;

            if (objData.data.status == 1)
            {
              var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
            }else{
              var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
            }

            var htmlSelect =  `${optionSelect}
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                              `;
            document.querySelector('#listStatus').innerHTML = htmlSelect;
            $('#modalFormRol').modal('show');
            
          }else{
          swal("Error", objData.msg , "error");
          }
        }
      }
      

      
    });
  });
}







  

  