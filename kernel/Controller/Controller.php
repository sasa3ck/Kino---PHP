<?php

namespace App\Kernel\Controller;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\Database\DataBaseInterface;
use App\Kernel\Http\RedirectInterface;
use App\Kernel\Http\RequestInterface;
use App\Kernel\Session\SessionInterface;
use App\Kernel\View\ViewInterface;

abstract class Controller
{
  private ViewInterface $view;
  private RequestInterface $request;
  private RedirectInterface $redirect;
  private SessionInterface $session;
  private DataBaseInterface $database;
  private AuthInterface $auth;

  public function view(string $name): void
  {
    $this->view->page($name);
  }

  public function setView(ViewInterface $view): void
  {
    $this->view = $view;
  }

  public function request(): RequestInterface
  {
    return $this->request;
  }

  public function setRequest(RequestInterface $request): void
  {
    $this->request = $request;
  }

  public function redirect(string $url): void
  {
    $this->redirect->to($url);
  }

  public function setRedirect(RedirectInterface $redirect): void
  {
    $this->redirect = $redirect;
  }

  public function session(): SessionInterface
  {
    return $this->session;
  }

  public function setSession(SessionInterface $session): void
  {
    $this->session = $session;
  }

  public function db(): DataBaseInterface
  {
    return $this->database;
  }

  public function setDatabase(DataBaseInterface $database): void
  {
    $this->database = $database;
  }

  public function auth(): AuthInterface
  {
    return $this->auth;
  }

  public function setAuth(AuthInterface $auth): void
  {
    $this->auth = $auth;
  }
}
