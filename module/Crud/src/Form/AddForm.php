<?php
namespace Crud\Form;

use Zend\Form\Form;

/**
 * This form is used to collect user feedback data like user E-mail, 
 * message subject and text.
 */
class AddForm extends Form
{
  // Constructor.   
  public function __construct()
  {
    // Define form name
    parent::__construct('contact-form');

    // Set POST method for this form
    $this->setAttribute('method', 'post');

    // Add form elements
    $this->addElements();    
}

  // This method adds elements to form (input fields and 
  // submit button).
private function addElements() 
{

    $this->add([
       'type'  => 'text',
       'name' => 'title',
       'attributes' => [                
        'id' => 'title'
    ],
    'options' => [
        'label' => 'Your Title',
    ],
]);

    $this->add([
        'type'  => 'text',
        'name' => 'description',
        'attributes' => [
          'id' => 'description'  
      ],
      'options' => [
        'label' => 'Your Description',
    ],
]);
    $this->add([
        'type'  => 'datetime',
        'name' => 'date_start',
        'attributes' => [                
            'id' => 'date_start'
        ],
        'options' => [
            'label' => 'Your Beginning date',
        ],
    ]);

    $this->add([
        'type'  => 'datetime',
        'name' => 'date_end',
        'attributes' => [
          'id' => 'date_end'  
      ],
      'options' => [
        'label' => 'Your Ending date',
    ],
]);

    // Add the submit button
    $this->add([
        'type'  => 'submit',
        'name' => 'submit',
        'attributes' => [                
            'value' => 'Submit',
        ],
    ]);
}        
}