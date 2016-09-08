<?php
    class Job
    {
        private $title;
        private $description;
        private $email;
        private $phone;

        function __construct($title, $description, $email, $phone)
        {
            $this->title = $title;
            $this->desription = $description;
            $this->email = $email;
            $this->phone = $phone;
        }

        function setTitle($new_title)
        {
            $this->title = (string) $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setEmail($new_email)
        {
            $this->email = (string) $new_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        static function getAll()
        {
            return $_SESSION['list_of_jobs'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_jobs'] = array();
        }

        function save()
        {
            array_push($_SESSION['list_of_jobs'], $this);
        }

    }
 ?>
