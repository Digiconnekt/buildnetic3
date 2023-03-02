<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {

     
    function insert_csv($data) {
        $this->db->insert('emp_attendance', $data);
    }

    public function find_weekend($date){
    	$day = date('l', strtotime($date));
    	$this->db->select('*');
        $this->db->from('weekly_holiday');
        $this->db->where("FIND_IN_SET('".$day."', dayname)");
        $query=$this->db->get();
        $data=$query->num_rows();
        return $data;
    }


	function find_leave($employee_id,$date){
		$query = $this->db->select("*")
		                 ->from('leave_apply')
		                 ->where('employee_id',$employee_id)
		                 ->where('leave_aprv_strt_date <=',$date)
		                 ->where('leave_aprv_end_date >=',$date)
		                 ->get();
						if($query->num_rows() > 0){
							return $query->num_rows();
						}else{
							return 0;
						}
	}

	function get_employee_attendence($data){

		$date_start = $data['date'];
		$dateis = "(DATE(attendance_history.time) = '$date_start')";

		$attn_his = $this->db->select('*')
        ->from('attendance_history')
        ->where($dateis)
        ->where('attendance_history.uid',$data['emp_id'])
        ->order_by('attendance_history.time','ASC')
        ->get()
        ->result();

        return $attn_his;
	}


}

