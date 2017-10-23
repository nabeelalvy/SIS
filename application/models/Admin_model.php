<?php
/**
 * Created by PhpStorm.
 * User: Nabeel Alvi
 * Date: 10/12/2017
 * Time: 11:48 PM
 */

class Admin_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function delete_school()
    {


        $this->db->select('*');
        $this->db->from('schools_name');
        $query = $this->db->get();

    }
    public function add_school_in_database()
    {
//        $this->form_validation->set_rules('school_name', 'School', 'required|max_length[30]');
//        $this->form_validation->set_rules('branch_name', 'Branch', 'required|max_length[30]');
//        $this->form_validation->set_rules('address', 'Address', 'required|max_length[30]');
//        $this->form_validation->set_rules('contact_no', 'Contact', 'required|max_length[30]');
//        $this->form_validation->set_rules('city', 'City', 'required|max_length[30]');
//        $this->form_validation->set_rules('fee', 'Fee', 'required|max_length[30]');
//        $this->form_validation->set_rules('location', 'Location', 'required|max_length[30]');
//        $this->form_validation->set_rules('email', 'Email', 'required|email');

//        if ($this->form_validation->run() == FALSE) {
//
//            return 'admin/addschool';
//        }
        {

            $schools = array();
            $snameID = 0;
            $cityID = 0;
            $locationID = 0;

            if ($this->input->post('school_name')) {
                $this->db->select('id');
                $this->db->where('name', $this->input->post('school_name'));
                $this->db->from('schools_name');
                $query = $this->db->get();
                if($query->num_rows() <= 0) {
                    $sname['name'] = $this->input->post('school_name');
                    $this->db->insert('schools_name', $sname);
                    $this->db->select('id');
                    $this->db->where('name', $this->input->post('school_name'));
                    $this->db->from('schools_name');
                    $query = $this->db->get();
                    //fetching primary key of city from school_city table matched with city parameter in query result
                    $row = $query->row();
                    $snameID = $row->id;
                }
                else{
                    //fetching primary key of school from schools_name table matched with school_name parameter in query result
                    $row = $query->row();
                    $snameID = $row->id;
                }
            }
            if ($this->input->post('location')) {
                $this->db->select('id');
                $this->db->where('location', $this->input->post('location'));
                $this->db->from('school_locations');
                $query = $this->db->get();
                if($query->num_rows() <= 0) {
                    $location['location'] = $this->input->post('location');
                    $this->db->insert('school_locations', $location);
                    //fetching primary key of city from school_city table matched with city parameter in query result
                    $row = $query->row();
                    $locationID = $row->id;
                }
                else{
                    //fetching primary key of location from school_location table matched with location parameter in query result
                    $row = $query->row();
                    $locationID = $row->id;
                }
            }
            if ($this->input->post('city')) {
                $this->db->select('id');
                $this->db->where('city_name', $this->input->post('city'));
                $this->db->from('school_city');
                $query = $this->db->get();
                if($query->num_rows() <= 0) {
                    $city['city_name'] = $this->input->post('city');
                    $this->db->insert('school_city', $city);
                    //fetching primary key of city from school_city table matched with city parameter in query result
                    $row = $query->row();
                    $cityID = $row->id;
                }
                else{
                    //fetching primary key of city from school_city table matched with city parameter in query result
                    $row = $query->row();
                    $cityID = $row->id;
                }
            }
            if ($this->input->post('branch_name')) {
                $schools['branchName'] = $this->input->post('branch_name');
            }
            if ($this->input->post('address')) {
                $schools['address'] = $this->input->post('address');
            }
            if ($this->input->post('contact_no')) {
                $schools['phoneNo'] = $this->input->post('contact_no');
            }
//            if ($this->input->post('fee')) {
//                $data['fee'] = $this->input->post('fee');
            }
            if ($this->input->post('email')) {
                $schools['email'] = $this->input->post('email');
            }
            $schools['sl_id'] = $locationID;
            $schools['sn_id'] = $snameID;
            $schools['city'] = $cityID;

            $this->db->set($schools);
            $this->db->insert('schools', $schools);

            return 'admin/adminHome';

        }
    public function get_all_school()
    {

        $this->db->select ('*');
        $this->db->from ('schools_name');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_school_branch()
    {

        $school_id=$this->input->post('school_name');

        $this->db->select ('*');
        $this->db->from ('schools');
        $this->db->where('sn_id',$school_id);
        $query=$this->db->get();
        $data  = array(
            'school_branch' => $query->result(),
        );
        return $data;
    }


}