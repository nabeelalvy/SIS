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
    public function edit_branch()
    {
        $branch_id = $this->uri->segment(2);
        $this->db->select('sn_id')
            ->from('schools')
            ->where('id',$branch_id);
        $query = $this->db->get();
        $data = $query->row_array();
        $this->db->select('*')
            ->from('schools s')
            ->join('schools_name sn', 's.sn_id = sn.id', 'inner')
            ->join('school_locations sl', 's.sl_id = sl.id', 'inner')
            ->join('school_city sc', 's.city = sc.id', 'inner')
            ->where('sn.id',intval($data));
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_branch()
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

        if ($this->input->post('email')) {
            $schools['email'] = $this->input->post('email');
        }
        $schools['sl_id'] = $locationID;
        $schools['sn_id'] = $snameID;
        $schools['city'] = $cityID;

        $this->db->set($schools);
        $this->db->insert('schools', $schools);

        return 'admin/editschool';
    }

    public function insert_user_to_database()
    {
        $data = array();
        if($this->input->post('first_name'))
        {
            $data['firstname'] = $this->input->post('first_name');
        }
        if($this->input->post('last_name'))
        {
            $data['lastname'] = $this->input->post('last_name');
        }
        if($this->input->post('user_name'))
        {
            $data['username'] = $this->input->post('user_name');
        }
        if($this->input->post('password'))
        {
            $data['password'] = $this->input->post('password');
        }
        if($this->input->post('contact'))
        {
            $data['contact'] = $this->input->post('contact');
        }
        if($this->input->post('email'))
        {
            $data['email'] = $this->input->post('email');
        }
        if($this->input->post('status'))
        {
            $data['status'] = $this->input->post('status');
        }
        if($this->input->post('role'))
        {
            $data['type'] = $this->input->post('role');
        }

        $this->db->set($data);
        $this->db->insert('users', $data);

        return 'admin/alluser';
    }

    public function get_all_users_from_database()
    {
        $this->db->select('*')
            ->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_user_in_database()
    {
        $data = array();
        if($this->input->post('first_name'))
        {
            $data['firstname'] = $this->input->post('first_name');
        }
        if($this->input->post('last_name'))
        {
            $data['lastname'] = $this->input->post('last_name');
        }
        if($this->input->post('user_name'))
        {
            $data['username'] = $this->input->post('user_name');
        }
        if($this->input->post('password'))
        {
            $data['password'] = $this->input->post('password');
        }
        if($this->input->post('contact'))
        {
            $data['contact'] = $this->input->post('contact');
        }
        if($this->input->post('email'))
        {
            $data['email'] = $this->input->post('email');
        }
        if($this->input->post('role'))
        {
            $data['type'] = $this->input->post('role');
        }
        $data['status'] = $this->input->post('status');
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('users', $data);

        return 'alluser';
    }

    public function edit_users()
    {
        $this->db->select('*')
            ->from('users')
            ->where('id', $this->uri->segment('2'));
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteuser()
    {
        $data['status'] = 0;
        $this->db->where('id', $this->uri->segment('2'));
        $this->db->update('users', $data);
    }

    public function deletebranch()
    {
        $data['status'] = 0;
        $this->db->where('id', $this->uri->segment('2'));
        $this->db->update('schools', $data);
    }

}