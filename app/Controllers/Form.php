<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Form extends BaseController
{
    public function index()
    {

        // load form helper
        helper(['form']);
        $data = [];

        $data['categories'] = [
            'Student',
            'Teacher',
            'Principal',
        ];

        if($this->request->getMethod() == 'post'){

            $rules = [
                'email'  => [
                    'rules' => 'required|valid_email',
                    'label' => 'Email address',
                    'errors' => [
                        'required' => 'Email address is a required field',
                        'valid_email' => 'Please enter a valid email address',
                    ],
                ],
                'password' =>'required|min_length[6]',
                'category' => 'in_list[Student, Teacher]',
                'date' => [
                    'rules' => 'required|check_date',
                    'label' => 'Date',
                    'errors' => [
                        'check_date' => 'You can not add a date in the past',
                    ]
                ], //custom check_date

                'thefile' => [
                    'rules' => 'uploaded[thefile]|max_size[thefile, 25]|is_image[thefile]',
                    'label' => 'The File',

                ],

                'thefiles' => [
                    'rules' => 'uploaded[thefiles.0]|max_size[thefiles, 50]|is_image[thefiles]',
                    'label' => 'The Files',

                ],

                
            ];

            if($this->validate($rules)){
                // insert in database or login
                $file = $this->request->getFile('thefile');
                if($file->isValid() && !$file->hasMoved()){
                    $file->move('./uploads/images', $file->getRandomName());

                    // use getName() here to write to db
                }

                $files = $this->request->getFiles();
                foreach($files['thefiles'] as $singlefile){

                    if($singlefile->isValid() && !$singlefile->hasMoved()){
                    $singlefile->move('./uploads/images/multiple', $singlefile->getRandomName());
                    }
                }


                // echo $file->getName();
                // exit();
                return redirect()->to('/form/success/');
            } else {
                $data['validation'] = $this->validator;
            }
            // echo'<pre>';
            // print_r($_POST);
            // echo'<pre>';
        }






        return view('form', $data);
    }

    function success(){
        return 'Form validated!';
    }

}


