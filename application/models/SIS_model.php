<?php
class SIS_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function add_user()
    {

//        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[30]');
//        $this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[2]|max_length[30]');
//        $this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[2]|max_length[30]');
//        $this->form_validation->set_rules('password', 'Password', 'required|min_length[2]|max_length[30]');
//        $this->form_validation->set_rules('email', 'Email', 'required|email');
//
//        if ($this->form_validation->run() == FALSE) {
//
//            return 'sign_up';
//        } else {
//            $data = array();

            if ($this->input->post('username')) {
                $data['username'] = $this->input->post('username');
            }
            if ($this->input->post('firstname')) {
                $data['firstname'] = $this->input->post('firstname');
            }
            if ($this->input->post('lastname')) {
                $data['lastname'] = $this->input->post('lastname');
            }
            if ($this->input->post('password')) {
                $data['password'] = $this->input->post('password');
            }
            if ($this->input->post('email')) {
                $data['email'] = $this->input->post('email');
            }
            $data['type'] = 'user';
            $data['status'] = 1;

            $this->db->insert('users', $data);

            return 'login';
        }


    public function verify_me()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[30]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[2]|max_length[30]');

        if ($this->form_validation->run() == FALSE) {
            return 'login';
        }
        else {
            $this->db->select('*');
//        $query = $this->db->get_where('users', 'username', $this->input->post('username'));
            $this->db->where('username', $this->input->post('username'));
            $this->db->where('password', $this->input->post('password'));
            $this->db->from('users');
            $query = $this->db->get();

            if ($query->row() != null)
            {
                if ($query->row('type') == 'user')
                {
                    if ($query->row('status') == 1)
                    {
                        $user_session_data = array(
                            'id' => $query->row('id'),
                            'username' => $query->row('username'),
                            'status' => $query->row('status'),
                            'type' => $query->row('type'),
                            'login_status' => 1,
                        );

                        $this->session->set_userdata($user_session_data);

                        return 'home';
                    }
                    else
                    {
                        return 'index'; //redirect to index page
                    }
                }
                elseif ($query->row('type') == 'admin')
                {
                    if ($query->row('status') == 1)
                    {
                        return 'admin';
                    }
                    else
                    {
                        return 'login';//redirect to login  page
                    }
                }

            }

        }
    }

    public function search_schools()
    {

        $school_name = $this->input->post('key');
        $this->db->select('*');
        $this->db->from('schools s');
        $this->db->join('schools_name sn', 's.sn_id = sn.id', 'inner');
        $this->db->join('school_locations sl', 's.sl_id = sl.id', 'inner');
        $this->db->join('school_city sc', 's.city = sc.id', 'inner');
        $this->db->like('sn.name', $school_name);
        $query = $this->db->get();
        $data  = array(
            'school_name' => $query->result(),
        );
        return $data;
    }

    public function area_search()
    {
        $school_area = $this->input->post('area');
        $this->db->select('*');
        $this->db->from('schools s');
        $this->db->join('schools_name sn', 's.sn_id = sn.id', 'inner');
        $this->db->join('school_locations sl', 's.sl_id = sl.id', 'inner');
        $this->db->join('school_city sc', 's.city = sc.id', 'inner');
        $this->db->like('sl.location',$school_area);
        $query = $this->db->get();
        $data  = array(
            'school_area' => $query->result(),
        );
        return $data;
    }

    public function user_auth($page)
    {
        if($this->session->userdata('status') == 1 && $this->session->userdata('type') == 'user')
        {
            return $page;
        }
        else if($this->session->userdata('status') == 1 && $this->session->userdata('type') == 'admin')
        {
            redirect('/homepage');//to be created
        }
        else if($this->session->userdata('status') == 0 || $this->session->userdata('status') == null)
        {
            if($page == 'main')
            {
                return $page;
            }
            redirect('/login');
        }
    }

    public function login_auth($page)
    {
        if($this->session->userdata('status') == 0 || $this->session->userdata('status') == null)
        {
            return $page;
        }
        else if($this->session->userdata('status') == 1 && $this->session->userdata('type') == 'user')
        {
            redirect('/home');
        }
        else if($this->session->userdata('status') == 1 && $this->session->userdata('type') == 'admin')
        {
            redirect('/homepage');//to be created
        }
    }

    public function logout()
    {
        $user_session_data = array('id','username','status','type');
        $this->session->unset_userdata($user_session_data);
        $this->session->sess_destroy();
        return 'index';
    }

    public function get_career_counselling_result()
    {
        $gender = $this->input->post('gender');
        $music = $this->input->post('hobby');
        $quality = $this->input->post('skill');
        $math = $this->input->post('maths');
        $math = ($math/150)*100;
        $phy = $this->input->post('phy');
        $phy = ($phy/150)*100;
        $chem = $this->input->post('chem');
        $chem = ($chem/150)*100;
        $bio = $this->input->post('bio');
        $bio = ($bio/150)*100;
        //echo $gender;
        if($gender!=null) {
            $command = escapeshellcmd('C:\\xampp\\htdocs\\SIS\\application\\controllers\\ass_ccf_dt.py ' . $gender . ' ' . $music . ' ' . $quality . ' ' . $math . ' ' . $bio . ' ' . $chem . ' ' . $phy . ' ');
            $output = shell_exec($command);
//            echo "Final";
            $file_handle = fopen("C:\\xampp\\htdocs\\SIS\\application\\controllers\\cc.txt", "r");
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                return $line;
            }
            fclose($file_handle);
        }
    }





}
?>