<?php
/**
 * @file
 * @author Mariappan
 * Contains \Drupal\recycle_bin\Controller\RecycleBinController.
 */
namespace Drupal\recycle_bin\Controller;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Provides route responses for the Example module.
 */
class RecycleBinController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myRecycleBin() {
    $element = array(
      '#markup' => 'Hello world!',
    );
    return $element;
  }

  public static function redirectRecycleBin() {
    $url = Url::fromUri('internal:/admin/content'); // choose a path
    $destination = $url->toString();
    $response =  new RedirectResponse($destination);
    $response->send();
    return false;
    exit;
 }

  
}
?>