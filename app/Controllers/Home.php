<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('url');
        $faqModel = new \App\Models\FaqModel();
        $data['faqs'] = $faqModel->where('status', 'active')->findAll();

        return view('landing_page', $data);
    }
}
