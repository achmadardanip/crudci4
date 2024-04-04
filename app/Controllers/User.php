<?php

namespace App\Controllers;


class User extends BaseController
{
    private $model;
    
    function __construct()
    {

        $this->model = new \App\Models\UserModel();
    }

    public function index()
    {
        $data['users'] = $this->model->where('deleted_at', null)->orderBy('ID', 'DESC')->findAll();
        return view('user_view', $data);
    }

    public function create(){
        $validation = \Config\Services::validation();
        $rules =[
            'name' => [
                'label' => "Name",
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => '{field} is required',
                    'alpha' => '{field} should contain only alphabets'
                ]
            ],
            'email' => [
                'label' => "Email",
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} is required',
                    'valid_email' => '{field} should be a valid email',
                    'is_unique' => '{field} already exists',
                ]
            ],
            'phone' => [
                'label' => "Phone",
                'rules' => 'alpha_numeric',
                'errors' => [
                    'alpha_numeric' => '{field} should contain only alphabets and numbers (alphanumeric)'
                ]
            ],
            'address' => [
                'label' => "Address",
                'rules' => 'required|alpha_numeric_space',
                'errors' => [
                    'required' => '{field} is required',
                    'alpha_numeric_space' => '{field} should contain only alphabets, numbers, and spaces'
                ]
            ]
        ];

        $validation->setRules($rules);

        if($validation->withRequest($this->request)->run()){
            $id = $this->request->getPost('id');
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');

            $data = [
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->model->save($data);

            $result["success"] = "Sucessfully created user";
            $result["error"] = true;

        } else {
            $result["success"] = false;
            $result["error"] = $validation->listErrors();
        }

        return json_encode($result);
    }

    public function submitedit(){
        $validation = \Config\Services::validation();
        $rules =[
            'name' => [
                'label' => "Name",
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => '{field} is required',
                    'alpha' => '{field} should contain only alphabets'
                ]
            ],
            'phone' => [
                'label' => "Phone",
                'rules' => 'alpha_numeric',
                'errors' => [
                    'alpha_numeric' => '{field} should contain only alphabets and numbers (alphanumeric)'
                ]
            ],
            'address' => [
                'label' => "Address",
                'rules' => 'required|alpha_numeric_space',
                'errors' => [
                    'required' => '{field} is required',
                    'alpha_numeric_space' => '{field} should contain only alphabets, numbers, and spaces'
                ]
            ]
        ];

        $validation->setRules($rules);

        if($validation->withRequest($this->request)->run()){
            $id = $this->request->getPost('id');
            $name = $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $address = $this->request->getPost('address');

            $data = [
                'name' => $name,
                'phone' => $phone,
                'address' => $address,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->model->update($id, $data);


            $result["success"] = "Sucessfully edit user";
            $result["error"] = true;

        } else {
            $result["success"] = false;
            $result["error"] = $validation->listErrors();
        }

        return json_encode($result);
    }

    public function get_by_id($id){
        $data = $this->model->where('deleted_at', null)->find($id);
        if($data){
            $data['created_at'] = date('d F Y H:i:s', strtotime($data['created_at']));
            if($data['updated_at'] == '01 January 1970 07:00:00'){
                $data['updated_at'] = NULL;
            } else {
                $data['updated_at'] = date('d F Y H:i:s', strtotime($data['updated_at']));
            }
        }
        return json_encode($data);
    }

    public function delete($id){
        $data = [
            'deleted_at' => date('Y-m-d H:i:s')
        ];
        $this->model->update($id, $data);
        return redirect()->to(base_url());
    }
}
