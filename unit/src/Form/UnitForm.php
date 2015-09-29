<?php
/**
 * @file
 * @author Sahil Mahajan
 * Contains \Drupal\unit\Form\UnitForm.
 */

namespace Drupal\unit\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\unit\Conversion;
/**
 * Implements an example form.
 */
 
 
class UnitForm extends FormBase {

  /**
   * {@inheritdoc}.
   */
   
   
  public function getFormId() {
    	
		
    return 'unit_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  	
	
	$form[]= array(
      '#markup' => '<div class="div_left">',
    );
	
	

	 
	 
	 $form['length'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Length')
    );



$form['unit'] = array(
      '#type' => 'select',
      '#options' => array('1'=>'Centimeter', '2'=>'Meter', '3'=>'Kilometer','4'=>'Feet', '5'=>'Inches', '6'=>'Miles', '7'=>'Yards'),
      '#title' => $this->t('From'),
    );
	
   
	$form[]= array(
      '#markup' => '</div><div class="div_right">',
    );
	
	
	
	
	$form['units'] = array(
      '#type' => 'select',
      '#options' => array('Centimeter'=>'Centimeter', 'Meter'=>'Meter', 'Kilometer'=>'Kilometer','Feet'=>'Feet', 'Inches'=>'Inches', 'Miles'=>'Miles', 'Yards'=>'Yards',
      ),
      '#title' => $this->t('To'),
    );
	
	
	
	
	$form[]= array(
      '#markup' => '</div>',
    );
	
   
    $form['actions']['#type'] = 'actions';
   
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Convert'),
      '#button_type' => 'primary',
    );
	
	
$form['#attached']['library'][] = 'example/paypal_css'; // Name of the key would be the key that you have defined in module_name.libraries.yml file.
 	
	
	
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('length')) < 1 || !preg_match("/^[0-9]/", $form_state->getValue('length'))) {
      $form_state->setErrorByName('', $this->t('Please enter a numeric value.'));
    }
  }

  /**
   * {@inheritdoc}
   * 
   * 
   */
   
  public function submitForm(array &$form, FormStateInterface $form_state ) {
  	
	  $c =  new Conversion();
	
	  $val = $form_state->getValue('length');
      $from = $form_state->getValue('unit');
	  $to = $form_state->getValue('units');
	  
	 
	 print_r('input');
	 
       print_r($val);
	 
	  
	  //$result = $c->assign($from,$val);
	  
	  
	   drupal_set_message($this->t('Your result is @length @unit', array('@length' => $c->convertlength($from,$val,$to),'@unit'=>$form_state->getValue('units'))));
 
  }

}

?>