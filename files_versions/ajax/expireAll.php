<?php

/**
 * ownCloud - user_migrate
 *
 * @author Sam Tuke
 * @copyright 2012 Sam Tuke samtuke@owncloud.com
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// TODO: Allow admins to expire versions of any user
// TODO: Provide feedback as to how many versions were deleted

// Check user and app status
OCP\JSON::checkLoggedIn();
OCP\App::checkAppEnabled('files_versions');

$versions = new OCA_Versions\Storage();

if( $versions->expireAll() ){
	
	OCP\JSON::success();
	die();
	
} else {
	
	OCP\JSON::error();
	die();
	
}