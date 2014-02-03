<?php
/**
 *
 *
 * @since         Newsletter 0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('NewsletterAppController', 'Newsletter.Controller');

class NewsletterController extends NewsletterAppController {

	public function subscribe() {
		if( $this->request->is('post') ) {
			$data = $this->request->data;
			if( $this->Newsletter->add($data) ) {
				$this->Session->setFlash("Votre inscription a bien été prise en compte.", 'Newsletter.notif');
				$this->redirect('/newsletter/subscribe');
			} else {
				$this->Session->setFlash('Veuillez corriger vos informations', 'Newsletter.notif', array('type' => 'danger'));
			}
		}

		$title_for_layout = "Subscribe newsletter";
		$description_for_layout = "Subscribe newsletter page";
		$page_active = "newsletter_subscribe";

		$this->set(compact('title_for_layout','description_for_layout', 'page_active'));
	}

	public function unsubscribe() {}

	public function all_registered() {}

	public function delete_member( $id ) {}
}