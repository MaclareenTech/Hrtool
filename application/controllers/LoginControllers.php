<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class LoginControllers extends BaseController
{


    public function index()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {

            $this->global['pageTitle'] = 'MTAS : Login';
            $this->loadViews("login/login", $this->global);
        } else {
            $role = $this->session->userdata('role');
            if ($role == "candidate") {
                redirect('candidateDashboard');
            } else   if ($role == "admin") {
                redirect('adminDashboard');;
            } else {
                redirect('superadminDashboard');
            }
        }
    }






    public function loginMe()
    {
        $submitted_latitude = $this->input->post('submitted_latitude');
        $submitted_longitude = $this->input->post('submitted_longitude');
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

        $allowed_latitude = 19.199007771571367; // office latitude
        $allowed_longitude = 72.94851828726368; // office longitude

        // $allowed_latitude = 19.210872627836014; // dombivali latitude
        // $allowed_longitude = 73.0940885985540; // dombivali longitude
        $distance = $this->calculateHaversineDistance($submitted_latitude, $submitted_longitude, $allowed_latitude, $allowed_longitude);

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $hashedPassword = md5($password);
            $result = $this->Admin_model->Login($email, $hashedPassword);

            if (!empty($result)) {
                $res = $result[0];
                $sessionArray = array(
                    'userId' => $res->user_id,
                    'user_profile' => $res->user_profile,
                    'user_email' => $res->user_email,
                    'name' => $res->user_name,
                    'isLoggedIn' => TRUE
                );


                if ($res->user_role == "0") {

                    $sessionArray['role'] = 'candidate';
                    $sessionArray['userId'] = $res->table_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('candidateDashboard');
                } else if ($res->user_role == "1") {


                    // Define the allowed distance (500 meters in this example)
                    $allowed_distance_meters = 500;
                    if ($distance <= $allowed_distance_meters) {
                        $sessionArray['role'] = 'admin';
                        $sessionArray['userId'] = $res->user_id;
                        $this->session->set_userdata($sessionArray);
                    } else {
                        $this->session->set_flashdata('error', 'You Are not in office');
                        redirect('LoginControllers');
                    }


                    redirect('adminDashboard');
                } else {
                    $sessionArray['role'] = 'superadmin';
                    $sessionArray['userId'] = $res->user_id;
                    $this->session->set_userdata($sessionArray);
                    redirect('superadminDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                redirect('LoginControllers');
            }
        }
    }

    // Function to calculate the Haversine distance between two geographical coordinates
    private function calculateHaversineDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earth_radius = 6371000; // Earth's radius in meters

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earth_radius * $c;

        return $distance;
    }
}
