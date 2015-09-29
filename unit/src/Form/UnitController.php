<?php
/**
 * @file
 * Contains \Drupal\unit\Form\UnitForm.
 */

namespace Drupal\unit\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\unit\Conversion;

 
 
class UnitController extends FormBase {

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
  	

	 $form['weight'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Weight')
    );



$form['mass'] = array(
      '#type' => 'select',
      '#options' => array('8'=>'Milligram', '9'=>'Gram', '10'=>'Kilogram','11'=>'Tonnes', 
      '12'=>'Grains', '13'=>'Ounces', '14'=>'Pounds'),
      '#title' => $this->t('From'),
    );
	
   
	
	
	$form['masses'] = array(
      '#type' => 'select',
      '#options' => array('Milligram'=>'Milligram', 'Gram'=>'Gram', 'Kilogram'=>'Kilogram',
      'Tonnes'=>'Tonnes', 'Grains'=>'Grains', 'Ounces'=>'Ounces', 'Pounds'=>'Pounds'
      ),
      '#title' => $this->t('To'),
    );

	
   
    $form['actions']['#type'] = 'actions';
   
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Convert'),
      '#button_type' => 'primary',
    );
	
	
//$form['#attached']['library'][] = 'unit/convert_css'; 
 	
	
	
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('weight')) < 1 || !preg_match("/^[0-9]/", $form_state->getValue('weight'))) {
      $form_state->setErrorByName('', $this->t('Please enter a numeric value.'));
    }
  }

  /**
   * {@inheritdoc}
   * 
   * 
   */
   
  public function submitForm(array &$form, FormStateInterface $form_state ) {
  	
	  $d =  new Conversion();
	
	  $value = $form_state->getValue('weight');
      $frome = $form_state->getValue('mass');
	  $too = $form_state->getValue('masses');
	  
	 
	 print_r('input');
	 
       print_r($value);
	 
	  
	  //$result = $d->assign($from,$val);
	  
	  
	   drupal_set_message($this->t('Your result is @weight @mass', array('@weight' => $d->convertweight($frome,$value,$too),'@mass'=>$form_state->getValue('masses'))));
 
  }

}

?>