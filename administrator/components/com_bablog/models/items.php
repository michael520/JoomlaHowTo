<?php

/**
 * Class BablogModelItems
 */
class BablogModelItems extends JModelList
{
	/**
	 * Method to get a JDatabaseQuery object for retrieving the data set from a database.
	 *
	 * @return JDatabaseQuery A JDatabaseQuery object to retrieve the data set.
	 */
	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$query->select('a.*')
			->from('#__bablog_items AS a');

		return $query;
	}

}
