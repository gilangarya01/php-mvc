<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        require_once 'app/models/UserModel.php';
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Tampilkan daftar semua pengguna
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/user/index.php';
    }

    public function show($id)
    {
        // Tampilkan detail pengguna berdasarkan ID
        $user = $this->userModel->getUserById($id);
        require_once 'app/views/user/show.php';
    }

    public function create()
    {
        // Tampilkan halaman form tambah pengguna
        require_once 'app/views/user/create.php';
    }

    public function store()
    {
        // Proses penambahan pengguna ke database
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $this->userModel->addUser($username, $email, $password);
            $this->redirect('/user');
        }
    }

    public function edit($id)
    {
        // Tampilkan halaman form edit pengguna
        $user = $this->userModel->getUserById($id);
        require_once 'app/views/user/edit.php';
    }

    public function update($id)
    {
        // Proses pembaruan data pengguna di database
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $this->userModel->updateUser($id, $username, $email, $password);
            // Redirect atau tampilkan pesan sukses
            $this->redirect('/user');
        }
    }

    public function destroy($id)
    {
        // Proses penghapusan pengguna dari database
        $this->userModel->deleteUser($id);
        // Redirect atau tampilkan pesan sukses
        $this->redirect('/user');
    }

    private function redirect($url)
    {
        header('Location: ' . BASE_URL . $url);
        exit;
    }

}

?>