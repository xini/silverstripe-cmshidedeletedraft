<?php
class HideDeleteDraftSiteTreeExtension extends SiteTreeExtension {
	
	public function updateCMSActions(FieldList $actions) {
		
		// hide delete-draft button if page is published
		if ($this->owner->isPublished()) {
			$actions->removeByName('action_delete');
		}
		
	}
}