<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller{

    public function display_main_page(){

        $this->load->view($this->SIS_model->user_auth('main'));
    } public function map(){

        $this->load->view('map');
    }
    public function display_login_page(){

        $this->load->view($this->SIS_model->login_auth('login'));
    }
    public function display_login_main_page(){

        $this->load->view($this->SIS_model->user_auth('login_main'));
    }
    public function display_signup_page(){

        $this->load->view('signup');
    }
    public function display_search_school_page(){

        $data['school_name'] = null;
        $this->load->view($this->SIS_model->user_auth('search_school'), $data);
    }

    public function PostSignup(){

        redirect($this->SIS_model->add_user());
    }

    public function PostSignin(){

        redirect($this->SIS_model->verify_me());
    }

    public function show_ranking_page()
    {
        $this->load->view('ranking');
    }

    public function show_cc_page()
    {
        $this->load->view('career_counselling');
    }
    public function logout(){

        redirect($this->SIS_model->logout());
    }

    public function search_schools(){

        $data = $this->SIS_model->search_schools();
        echo json_encode($data['school_name']);
    }

    public function area_search(){

        $data = $this->SIS_model->area_search();
        echo json_encode($data['school_area']);
//        debugger($data['school_area']);
    }

    public function get_career_counselling_result(){
        $result['res'] = $this->SIS_model->get_career_counselling_result();
        $this->load->view('career_counselling_result',$result);

    }

}
?>