<?php
class BlogController extends BaseController {

	private $blogURL = 'http://farmtoforkguelph.wordpress.com/feed/';
	private $numPosts = 4;

	/**
	 *
	 * @param $numEntries number of entries to fetch from the farm-to-fork blog
	 */
	public function index()
	{
		$xmlText = file_get_contents($this->blogURL);
		$xml = simplexml_load_string($xmlText);

		for ($i=0; $i<$this->numPosts; $i++) {
			$date = explode(' ', htmlentities($xml->channel->item->pubDate));
			$date = $date[0].' '.$date[1].' '.$date[2].' '.$date[3];
				
			$namespaces = $xml->channel->item[$i]->getNameSpaces(true);
			$dc = $xml->channel->item[$i]->children($namespaces['dc']);
				
			$newData = array (
					'link' => htmlentities($xml->channel->item[$i]->link),
					'title' => htmlentities($xml->channel->item[$i]->title),
					'date' => $date,
					'creator' => $dc->creator,
					'description' => $xml->channel->item[$i]->description,
			);
				
			$blogInfo[$i] = $newData;
				
		}		

		return View::make('site/blog', compact('blogInfo'));
	}


}
?>