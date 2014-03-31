<?php
/**
 * Class BablogModelItem
 */
class BablogModelItem extends JModelAdmin
{
	/**
	 * Get the form from the model.
	 *
	 * @param array   $data     Data for the form.
	 * @param boolean $loadData True if the form is to load its own data (default case), false if not.
	 *
	 * @return mixed A JForm object on success, false on failure
	 */
	public function getForm($data = array(), $loadData = true)
	{
		$options = array(
			'control' => 'jform',
			'load_data' => $loadData,
		);

		$key = $this->option . '.' . $this->name . '.form';

		$form = $this->loadForm($key, $this->name, $options);

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return mixed The data for the form.
	 */
	protected function loadFormData()
	{
		$app = JFactory::getApplication();

		$userStateKey = $this->option . '.edit.' . $this->name . '.data';

		$data = $app->getUserState($userStateKey, array());

		return empty($data) ? $this->getItem() : $data;
	}

	/**
	 * Get Table instance
	 *
	 * @param string $name    The table name. Optional.
	 * @param string $prefix  The class prefix. Optional.
	 * @param array  $options Configuration array for model. Optional.
	 *
	 * @return JTable A JTable object
	 */
	public function getTable($name = 'Item', $prefix = 'BablogTable', $options = array())
	{
		if ('' === $name)
		{
			$name = $this->getName();
		}

		return parent::getTable($name, $prefix, $options);
	}

	/**
	 * Prepare and sanitise the table data prior to saving.
	 *
	 * @param JTable $table A reference to a JTable object.
	 *
	 * @return void
	 */
	protected function prepareTable($table)
	{
	}
}