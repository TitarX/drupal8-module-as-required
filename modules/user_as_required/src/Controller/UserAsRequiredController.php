<?php

namespace Drupal\user_as_required\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

class UserAsRequiredController extends ControllerBase {

  public static function userRedirect($path) {
    $url = "/reports";
    $response = new \Symfony\Component\HttpFoundation\RedirectResponse($path);
    $response->send();
    return;
  }

}
