<?php
session_start();
	class article {

		public $head;
		public $desc;
		public $further;
		public $URL;
		public $button;
		public $picture;
		
		public function setDescription($description)
		    {
		        $this->desc = $description;
		    }
		public function getDescription()
		    {
		        return $this->desc; 
		    }
		public function setHeading($heading)
		    {
		        $this->head = $heading;
		    }
		public function getHeading()
		    {
		        return $this->head; 
		    }
		public function setFurtherInfo($furtherinfo)
		    {
		        $this->further = $furtherinfo;
		    }
		public function getFurtherInfo()
		    {
		        return $this->further; 
		    }
		public function setURL($newURL)
		    {
		        $this->URL = $newURL;
		    }
		public function getURL()
		    {
		        return $this->URL; 
		    }
		public function setButton($buttontext)
		    {
		        $this->button = $buttontext;
		    }
		public function getButton()
		    {
		        return $this->button; 
		    }
		public function setPictureURL($pictureurl)
		    {
		        $this->picture = $pictureurl;
		    }
		public function getPictureURL()
		    {
		        return $this->picture; 
		    }
	}
if ($_POST["parent"] == "header"){
	if ($_POST["name"] == "headline") {
		$_SESSION["headline"] = $_POST["value"];
	}
	else if ($_POST["name"] == "summary") {
		$_SESSION["summary"] = $_POST["value"];
	}
	else if ($_POST["name"] == "cover") {
		$_SESSION["cover"] = $_POST["value"];
	}
}
else {
	if ($_POST["name"] == "heading") {
		$_SESSION[strval($_POST["parent"])."a"]->setHeading($_POST["value"]);
	}
	else if ($_POST["name"] == "description") {
		$_SESSION[$_POST["parent"]."a"]->setDescription($_POST["value"]);
	}
	else if ($_POST["name"] == "furtherinfo") {
		$_SESSION[$_POST["parent"]."a"]->setFurtherInfo($_POST["value"]);
	}
	else if ($_POST["name"] == "url") {
		$_SESSION[$_POST["parent"]."a"]->setURL($_POST["value"]);
	}
	else if ($_POST["name"] == "button") {
		$_SESSION[$_POST["parent"]."a"]->setButton($_POST["value"]);
	}
	else if ($_POST["name"] == "pictureurl") {
		$_SESSION[$_POST["parent"]."a"]->setPictureURL($_POST["value"]);
	}
	
}
exit();
?>