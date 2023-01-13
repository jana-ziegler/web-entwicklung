<?php

namespace App\Controllers;

use App\Models\LoginModel;

/**
 * @property IncomingRequest $request
 */

class Login extends BaseController
{
    public function index()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (strtolower($this->request->getMethod()) !== 'post') {
            // The form is not submitted, so returns the form.
            return view('login');
        }

        $post = $this->request->getPost(['mail', 'password']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'mail' => ['required'],
            'password'  => ['required'],
        ])) {
            if (!LoginModel::class::isValidMitglied('mail', 'password')){
                // The validation fails, so returns the form.
                return view('login');
            }
        }

        /*$model = model(LoginModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);*/

        return view('index_page');

        //return view('login');
    }
}
