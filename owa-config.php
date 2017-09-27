<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

/**
 * OWA Configuration
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */
 
/**
 * DATABASE CONFIGURATION
 *
 * Connection info for databases that will be used by OWA. 
 *
 */

define('OWA_DB_TYPE', 'mysql'); // options: mysql
define('OWA_DB_NAME', 'owa'); // name of the database
define('OWA_DB_HOST', 'localhost'); // host name of the server housing the database
define('OWA_DB_USER', 'root'); // database user
define('OWA_DB_PASSWORD', 'Indigo#2017'); // database user's password

/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Change these to different unique phrases.
 */
define('OWA_NONCE_KEY', 'A<@yrI%&8X]alaqhT(aDs.q8n/W<?y@<Nq5QxO)9RyT<;e]Qr7EsU&A#/}VG4g!;');  
define('OWA_NONCE_SALT', ':)7U:MKJ{8JVr5H0&{bKxKu)QY0!ZagbTWn1</ ._1ipwEal|*47?~rcDj@z/NYs');
define('OWA_AUTH_KEY', ')43gB:!]97S92Cn@tLzZ$Zf=zX*8g+EU@Bn,cL40W=YR.SG{3?@AE[y2oO99Nm]Q');
define('OWA_AUTH_SALT', 'px5)E!&G2!:{P.zuFA~!oV)l1p%_!0zHYh^g(Jx4<Jt^gIv)LSr@8<v-vs(ND=F}');

/** 
 * PUBLIC URL
 *
 * Define the URL of OWA's base directory e.g. http://www.domain.com/path/to/owa/ 
 * Don't forget the slash at the end.
 */
 
define('OWA_PUBLIC_URL', 'https://codeacademey.in/owa/');  

/** 
 * OWA ERROR HANDLER
 *
 * Overide OWA error handler. This should be done through the admin GUI, but 
 * can be handy during install or development. 
 * 
 * Choices are: 
 *
 * 'production' - will log only critical errors to a log file.
 * 'development' - logs al sorts of useful debug to log file.
 */

//define('OWA_ERROR_HANDLER', 'development');

/** 
 * LOG PHP ERRORS
 *
 * Log all php errors to OWA's error log file. Only do this to debug.
 */

//define('OWA_LOG_PHP_ERRORS', true);
 
/** 
 * OBJECT CACHING
 *
 * Override setting to cache objects. Caching will increase performance. 
 */

//define('OWA_CACHE_OBJECTS', true);

/**
 * CONFIGURATION ID
 *
 * Override to load an alternative user configuration
 */
 
//define('OWA_CONFIGURATION_ID', '1');


?>