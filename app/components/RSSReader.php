<?php

class RSSReader extends XMLReader
{
	private $newsSaver;
	
	function __construct($newsSaver)
	{
		$this->newsSaver = $newsSaver;
	}
	
	private function moveToItem()
	{
		while ($this->read() && $this->name !== 'item');
	}
	
	private function itemTagList()
	{
		return ['title', 'link', 'description', 'author', 'guid', 'pubDate'];
	}
	
	private function readItem()
	{
		if ($this->name !== 'item')
			return false;

		$item = [];

		while ($this->read()) {
			if ($this->name === 'item')
				return $item;
			
			if (!in_array($this->name, $this->itemTagList()))
				continue;

			if ($this->nodeType == XMLReader::ELEMENT) {
				$item[$this->name] = $this->readString();
			}
		}
	}
	
	public function processItems()
	{
		$this->moveToItem();
		
		while (($item = $this->readItem()) !== false) {
			$this->newsSaver->save($item);
			echo '.';
		}
		
		echo "done\n";
	}
}