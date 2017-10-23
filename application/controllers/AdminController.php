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
        $this->load->view('admin/adminHome');
    }
    public function get_school_branch_json()
    {
        $data=$this->Admin_model->get_school_branch();
        echo json_encode($data['school_branch']);
    }

    public function edit_school_branch()
    {
        $data=$this->Admin_model->get_school_branch();
        $this->load->view('admin/edit_branch');
    }

    public function deleteschool()
    {
        $this->load->view('admin/DeleteSchool');
    }
    public function editschool()
    {
        $data['all_school']=$this->Admin_model->get_all_school();
        $this->load->view('admin/EditSchool',$data);
    }
    public function adduser()
    {
        $this->load->view('admin/AddUser');
    }
    public function deleteuser()
    {
        $this->load->view('admin/DeleteUser');
    }
    public function edituser()
    {
        $this->load->view('admin/EditUser');
    }
    public function addschool()
    {
        $this->load->view('admin/addSchool');
    }
    public function addclass()
    {
        $this->load->view('admin/addClass');
    }
    public function register()
    {
        $this->load->view('admin/register');
    }
    public function add_school_in_database()
    {
        $this->load->view($this->Admin_model->add_school_in_database());
    }






}