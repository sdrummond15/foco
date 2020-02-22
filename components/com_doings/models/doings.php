<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');

class DoingsModelDoings extends JModelLegacy
{
    public static function getDoings()
    {
        $db = JFactory::getDBO();
        $queryDate = $db->getQuery(true);
        $queryDate->select('MAX(date_start) AS date_start');
        $queryDate->from('#__doings');
        $queryDate->where('published = 1');
        $queryDate->where('date_start <= "'.date('Y-m-d').'"');

        $db->setQuery($queryDate);

        $date = $db->loadObjectList();
        $dateYear = date('Y-m-d',strtotime("-1 year", strtotime($date[0]->date_start)));

        $query = $db->getQuery(true);
        $query->select('d.id AS id,
                        d.name AS name,
                        d.image AS image,
                        d.date_start AS date_start,
                        d.local AS local,
                        c.description AS city,
                        c.uf AS uf
                        ');
        $query->from('#__doings As d');
        $query->join('LEFT','#__cities As c ON d.id_city = c.id');
        $query->where('d.published = 1');
        //$query->where('d.date_start <= "'.date('Y-m-d').'"');
        $query->where('d.date_start >= "'.$dateYear.'"');
        $query->order('d.date_start DESC');

        $db->setQuery($query);

        $item = $db->loadObjectList();

        return $item;
    }

}