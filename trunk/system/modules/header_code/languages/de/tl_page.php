<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  LU-Hosting 2010
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    header_code
 * @license    LGPL
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_page']['hc_code']			= array('individueller Headercode', 'Hier k�nnen Sie beliebigen Header-Code eingeben. Dass k�nnen META-Daten, .js oder .css-Code sein.');
$GLOBALS['TL_LANG']['tl_page']['hc_footer_code']	= array('individueller Footercode', 'Hier k�nnen Sie beliebigen Footer-Code eingeben. Der Footer Code wird vor dem schlie�enden div vom #wrapper eingef�gt und ist somit gleich �ber dem Google Analytics Code.');
$GLOBALS['TL_LANG']['tl_page']['hc_inheritance']	= array('Code vererben', 'W�hlen Sie Ja um den Header/Footer Code auf Unterseiten zu vererben. Wenn Sie Nein w�hlen wird dieser Header/Footer Code nicht vererbt und steht nur auf der aktuellen Seite zur Verf�gung.');
$GLOBALS['TL_LANG']['tl_page']['hc_mode']			= array('Anzeigemethode', 'Die Anzeigemethode bestimmt ob nur der aktuelle Header/Footer Code angezeigt werden soll oder ob alle als zu vererbenden Objekte der ausgabe hinzugef�gt werden sollen.');

$GLOBALS['TL_LANG']['tl_page']['hc_mode_add']		= 'alles (auch vererbten Code)';
$GLOBALS['TL_LANG']['tl_page']['hc_mode_override']	= 'nur den aktuellen Header/Footer Code ausgeben';
?>