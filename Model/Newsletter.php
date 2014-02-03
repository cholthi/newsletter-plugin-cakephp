<?php
/**
 *
 *
 * @since         Newsletter 0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
class Newsletter extends NewsletterAppModel {
	
	public $useTable = "newsletters";

	public $validate = array(
		'email' => array(
			'Exist' => array(
				'rule' => 'notEmpty',
				'message' => "Veuillez saisir une adresse email."
				),
			'Valide' => array(
				'rule' => 'Email',
				'message' => "Veuillez saisir une adresse email valide (ex: john@doe.com)"
				),
			'Unique' => array(
				'rule' => 'isUnique',
				'message' => "Cette adresse email est déjà enregistrée."
				),
			),
		'fistname' => array(
			'rule' => array('notEmpty'),
			'allowEmpty' => true,
			'message' => "Le nom doit être exclusivement composé de lettres et de chiffres."
			),
		'lastname' => array(
			'rule' => array('notEmpty'),
			'allowEmpty' => true,
			'message' => "Le prénom doit être exclusivement composé de lettres et de chiffres.",
			),
		'company' => array(
			'rule' => array('allowEmpty', 'alphaNumeric'),
			'message' => "Le nom de votre compagnie doit être exclusivement composé de lettres et de chiffres."
			)
		);

	/**
	 * Adds a member
	 * @param array $postData Data send by user
	 * @return  boolean 
	 * @since  0.0.1
	 */
	public function add( $postData = array() ) {
		if( empty($postData) ) 
			return false;
		
		$this->set($postData);
		if( $this->validates($postData) ) {
			if( $this->save() ) {
				return true;
			}
		}

		return false;
	}
}