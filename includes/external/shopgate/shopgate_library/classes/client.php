<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */

class ShopgateClient extends ShopgateContainer {

	const TYPE_MOBILESITE       = 'mobilesite';
	const TYPE_IPHONEAPP        = 'iphoneapp';
	const TYPE_IPADAPP          = 'ipadapp';
	const TYPE_ANDROIDPHONEAPP  = 'androidphoneapp';
	const TYPE_ANDROIDTABLETAPP = 'androidtabletapp';

	/** @var string */
	protected $type;

	/**
	 * @param string
	 */
	public function setType($data)
	{
		return $this->type = $data;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @return bool
	 */
	public function isMobileWebsite()
	{
		return $this->type == $this::TYPE_MOBILESITE;
	}

	/**
	 * @return bool
	 */
	public function isApp()
	{
		$appTypes = array(
			$this::TYPE_ANDROIDPHONEAPP,
			$this::TYPE_ANDROIDTABLETAPP,
			$this::TYPE_IPADAPP,
			$this::TYPE_IPHONEAPP
		);
		return in_array($this->type, $appTypes);
	}

	/**
	 * @param ShopgateContainerVisitor $v
	 */
	public function accept(ShopgateContainerVisitor $v)
	{
		$v->visitClient($this);
	}
}