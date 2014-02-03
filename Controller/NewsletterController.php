<?php
/**
 *
 *
 * @since         Newsletter 0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('NewsletterAppController', 'Newsletter.Controller');

class NewsletterController extends NewsletterAppController {

	/**
	 * Subscribe newsletter action
	 * @return void 
	 * @since  0.0.1
	 */
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

	/**
	 * Unsubscribe action
	 * @return void 
	 * @since  0.0.1
	 */
	public function unsubscribe() {
		if( $this->request->is('post') ) {
			$data = $this->request->data;
			if( $this->Newsletter->unsubscribe($data) ) {
				$this->Session->setFlash("Votre désinscription a bien été prise en compte.", 'Newsletter.notif');
				$this->redirect('/newsletter/unsubscribe');
			} else {
				$this->Session->setFlash('Impossible de trouver cette adresse email dans notre base.', 'Newsletter.notif', array('type' => 'danger'));
			}
		}

		$title_for_layout = "Unsubscribe newsletter";
		$description_for_layout = "Unsubscribe newsletter page";
		$page_active = "newsletter_unsubscribe";

		$this->set(compact('title_for_layout','description_for_layout', 'page_active'));
	}

	/**
	 * All registered action
	 * @return void 
	 * @since  0.0.1
	 */
	public function all_registered() {
		$members = $this->Newsletter->find('all', array('order' => 'id DESC'));
		
		$title_for_layout = "All registered";
		$description_for_layout = "All registered page";
		$page_active = "newsletter_allRegistered";

		$this->set(compact('title_for_layout','description_for_layout', 'page_active', 'members'));
	}

	/**
	 * Delete member from mailing-list
	 * @param  int $id ID user
	 * @return void     
	 * @since  0.0.1
	 */
	public function delete_member( $id ) {
		$this->autoRender = false;
		if( $this->Newsletter->exists($id) ) {
			$this->Newsletter->delete( $id );
			$this->Session->setFlash("Membre désinscrit de la newsletter.", 'Newsletter.notif');
		} else {
			$this->Session->setFlash('Impossible de trouver cet utilisateur pour le supprimer de la newsletter.', 'Newsletter.notif', array('type' => 'danger'));
		}

		$this->redirect($this->referer());
	}
}