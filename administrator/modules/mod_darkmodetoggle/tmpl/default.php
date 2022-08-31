<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_darkmodetoggle
 *
 * @copyright   (C) 2019 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;



?>
<div class=" toggle-container">
    <div class="header-item-content">
        <button class="dropdown-toggle theme-btn light" title="<?php echo Text::_('MOD_DARKMODETOGGLE_LIGHT'); ?>">
            <span class="header-item-icon">
                <span class="fas fa-sun" aria-hidden="true"></span>
            </span>
        </button>
        <button class="dropdown-toggle theme-btn dark" title="<?php echo Text::_('MOD_DARKMODETOGGLE_DARK'); ?>">
            <span class="header-item-icon">
                <span class="fas fa-moon" aria-hidden="true"></span>
            </span>
        </button>
    </div>
</div>
