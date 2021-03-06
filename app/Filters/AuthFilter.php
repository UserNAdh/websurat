<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if ($session->get('log') != TRUE) {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $session = session();
        if ($session->get('log') == TRUE) {
            return redirect()->to('/admin/home');
        }
    }
}
