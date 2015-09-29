<?php
/**
 * @file
 * @author 
 * Contains \Drupal\example\Controller\ExampleController.
 * Please place this file under your example(module_root_folder)/src/Controller/
 */
namespace Drupal\unit\Controller;


//use Drupal\Core\Form\FormInterface;

use Drupal\comment\CommentInterface;
use Drupal\comment\CommentStorageInterface;
use Drupal\Component\Utility\Unicode;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Provides route responses for the Example module.
 */
class ExampleController  extends FormBase {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
   
   
  public function getFormID() {
    return 'bd_contact_add';
  }
	 
	 
  /**
   * Implements \Drupal\Core\Form\FormInterface::buildForm().
   */
 public function buildForm(array $form, FormStateInterface $form_state, $type = 'new') {

    // Use the Form API to define form elements.
    
    $form['fname'] = array( '#type' => 'textfield', '#title' => t('First Name'),'#placeholder'=>t('FirstName') );
	
	$form['lname'] = array( '#type' => 'textfield', '#title' => t('Last Name'),'#placeholder'=>t('Last Name') );
	$form['actions'] = array('#type' => 'actions'); 
	$form['actions']['submit'] = array( '#type' => 'submit', '#value' => t('Add'), ); 
	
    return $form;
  }
  /**
   * Implements \Drupal\Core\Form\FormInterface::validateForm().
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate the form values.
  }
  /**
   * Implements \Drupal\Core\Form\FormInterface::submitForm().
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do something useful.
  }
   
   
      public function add() {
   
   	$form = array(
      //'#markup' => \Drupal::currentUser(),
    );
	//$a='First Name';

	//$form['frm'] = array( '#type' => 'form', '#name' => 'frm','#method'=>'POST' );
	
		$form['fname'] = array( '#type' => 'textfield', '#title' => t('First Name'),'#placeholder'=>t('First Name') );
	
	$form['lname'] = array( '#type' => 'textfield', '#title' => t('Last Name'),'#placeholder'=>t('Last Name') );
	$form['actions'] = array('#type' => 'actions'); 
	$form['actions']['submit'] = array( '#type' => 'submit', '#value' => t('Add'), ); 
	

	
    return $form;

  }
	   public function myPage() {
    $element = array(
      '#markup' => 'Hellosss world!',
    );
    return $element;
  }
  }
   
 /* public function myPage() {
    $element = array(
      '#markup' => 'Hellosss world!',
    );
    return $element;
  }
  
  
   public function add() {
   
   	$form = array(
      //'#markup' => \Drupal::currentUser(),
    );
	//$a='First Name';

	//$form['frm'] = array( '#type' => 'form', '#name' => 'frm','#method'=>'POST' );
	
		$form['fname'] = array( '#type' => 'textfield', '#title' => t('First Name'),'#placeholder'=>t('First Name') );
	
	$form['lname'] = array( '#type' => 'textfield', '#title' => t('Last Name'),'#placeholder'=>t('Last Name') );
	$form['actions'] = array('#type' => 'actions'); 
	$form['actions']['submit'] = array( '#type' => 'submit', '#value' => t('Add'), ); 
	

	
    return $form;

  }
   */
   
   
   

 /*function submitForm(array &$form, array &$form_state) {
    $name = $form_state['values']['name'];
    BingoStorage::add($name);
    drupal_set_message(t('Added %name as new participant.', array('%name' => $name)));
    $form_state['redirect'] = 'bingo';
  }
    
    
   
   
   
   
 public static function currentUser() {
  return static::getContainer()->get('current_user');
}
   */

?>