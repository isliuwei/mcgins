<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('t_course');
       	
        return $query->result() ;

    }
    public function get_by_id($courseInfo_id)
    {

        // $this -> db -> where('id',$courseInfo_id);
        // $query = $this -> db -> get();
        // //返回一行查询结果
        // return $query -> row();

		/*$sql = "SELECT * FROM t_course WHERE id = ? "; 

		$query = $this->db->query($sql, array($courseInfo_id));     
		return $query -> row(); */  

		//获取数据，第一个参数为表名，第二个为获取条件，第三个为条数
		//$this->db->get_where('table_name', array('id'=>$id), $offset);

    	$query =  $this -> db -> get_where('t_course',array('id' => $courseInfo_id));
    	return $query -> row();
    }
}