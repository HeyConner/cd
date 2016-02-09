<?php
    class CD
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct($album_name, $band_name, $image_path, $album_price)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
            $this->price = $album_price;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getArtist()
        {
            return $this->artist;
        }
        function getCover()
        {
            return $this->cover_art;
        }
        function getTitle()
        {
            return $this->title;
        }
    }
?>
