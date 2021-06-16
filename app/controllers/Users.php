<?php
class Users extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];

        if (isset($_POST['login'])) {


            if (($_POST['email'] != ADMIN_EMAIL) || ($_POST['password'] != ADMIN_PASSWORD)) {
                $data = [
                    'email' => $_POST['email'],
                    'show_alert' => "معلومات الدخول غير صحيحة"
                ];
            } else {
                create_session_info();
                redirect('pages/tasbeeh');
            }
        }

        $this->view('users/login', $data);
    }
}