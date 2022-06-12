<?php 
/**
 * @ mod_bibliant.php
 * @ author-name Ribamar FS
 * @ copyright	Copyright (C) 2022 Ribamar FS.
 * @ license GNU/GPL, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */

defined('_JEXEC') or die('Restricted access'); 

$db = JFactory::getDBO();
$query = "SELECT palavra,livro,capitulo,versiculo FROM #__bibliant ORDER BY random()";
$db->setQuery( $query, 0, 1 );
//$reg_rand = $db->loadObjectList();
$reg_rand = $db->loadRow();

print '<i>'.$reg_rand[0].'<br>('.$reg_rand[1].', '.$reg_rand[2].':'.$reg_rand[3].')'.'</i>';
// Fonte da Bíblia :
// http://br.groups.yahoo.com/group/bibliaonlinephp/files/
?> 
