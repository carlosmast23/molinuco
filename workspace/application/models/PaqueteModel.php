<?php
    class PaqueteModel extends CI_Model
    {

        public function buscarPorId($id)
        {
            $query=$this->db->get_where('paquete_turistico',array('id' => $id));
            return $query->row_array(); //Devuelve un unico resultado
        }

        public function todos()
        {
            //$resultado=$this->db->get('paquete_turistico');
            $resultado=$this->db->query("SELECT pt.id,pt.nombre,pt.precio,pt.estado,t.placa,h.nombre as nombreHospedaje FROM paquete_turistico pt,transporte t,hospedaje h WHERE pt.id_transporte=t.id AND pt.id_hospedaje=h.id");
            return $resultado;
        }

        public function crear($idTransporte,$idHospedaje,$nombre,$precio,$estado)
        {
            $resultado=$this->db->query("INSERT INTO paquete_turistico (id_transporte, id_hospedaje, nombre,precio,estado) VALUES('$idTransporte', $idHospedaje, '$nombre', '$precio', '$estado');");
            if ($resultado == true) {
                return true;
            } else {
                return false;
            }

        }

        public function editar($id,$idTransporte,$idHospedaje,$nombre,$precio,$estado)
        {
            $data = array(
                'id' => $id,
                'id_transporte' => $idTransporte,
                'id_hospedaje' => $idHospedaje,
                'nombre' => $nombre,
                'precio' => $precio,
                'estado' => $estado,             
            );
            $this->db->where('id', $id);
            return $this->db->update('paquete_turistico', $data);

        }

        
	public function eliminar($id)
	{
	   $this->db->where('id',$id);
	   $this->db->delete('paquete_turistico');
	}


    }

?>