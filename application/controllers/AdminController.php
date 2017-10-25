<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Nabeel
 * Date: 10/11/2017
 * Time: 5:05 AM
 */
class AdminController extends CI_Controller
{
    public function display_homepage()
    {
        $this->load->view('admin/adminhome');
    }
    public function display_chart()
    {
        $this->load->view('admin/chart');
    }
    public function get_school_branch_json()
    {
        $data['school_branch'] =$this->Admin_model->get_school_branch();
        echo json_encode($data['school_branch']);
    }

//    public function edit_school_branch()
//    {
//        $data=$this->Admin_model->get_school_branch();
//        $this->load->view('admin/edit_branch');
//    }

    public function deletebranch()
    {
        $this->Admin_model->deletebranch();
        $this->load->view('admin/allschool');
    }
    public function allschool()
    {
        $data['all_school']=$this->Admin_model->get_all_school();
        $this->load->view('admin/allschool',$data);
    }
    public function dispaly_add_user()
    {
        $this->load->view('admin/adduser');
    }
    public function deleteuser()
    {
        $this->Admin_model->deleteuser();
        redirect('alluser');
    }
    public function display_all_users()
    {
        $data['allusers'] = $this->Admin_model->get_all_users_from_database();
        $this->load->view('admin/alluser', $data);
    }
    public function addschool()
    {
        $this->load->view('admin/addschool');
    }
    public function addclass()
    {
        $this->load->view('admin/addclass');
    }
    public function register()
    {
        $this->load->view('admin/register');
    }
    public function add_school_in_database()
    {
        $this->load->view($this->Admin_model->add_school_in_database());
    }
    public function edit_school_branch()
    {
        $data['school_branch'] = $this->Admin_model->edit_branch();
        $this->load->view('admin/edit_branch',$data);
    }
    public function update_branch()
    {
        $this->load->view($this->Admin_model->update_branch());
    }
    public function insert_user_to_database()
    {
        $this->load->view($this->Admin_model->insert_user_to_database());
    }
    public function update_user_in_database()
    {
        redirect($this->Admin_model->update_user_in_database());
    }
    public function edit_users()
    {
        $data['user'] = $this->Admin_model->edit_users();
        $this->load->view('admin/edituser',$data);
    }
}