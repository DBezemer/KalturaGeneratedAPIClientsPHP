<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2016  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
require_once(dirname(__FILE__) . "/../KalturaClientBase.php");
require_once(dirname(__FILE__) . "/../KalturaEnums.php");
require_once(dirname(__FILE__) . "/../KalturaTypes.php");
require_once(dirname(__FILE__) . "/KalturaBulkUploadClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaScheduleClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadResultScheduleEvent extends KalturaBulkUploadResult
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadResultScheduleResource extends KalturaBulkUploadResult
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentSystemName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadICalJobData extends KalturaBulkUploadJobData
{
	/**
	 * The type of the events that ill be created by this upload
	 *
	 * @var KalturaScheduleEventType
	 */
	public $eventsType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleBulkUploadClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaScheduleBulkUploadClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaScheduleBulkUploadClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'scheduleBulkUpload';
	}
}

