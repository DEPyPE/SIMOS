
<?php

    Class DatabaseConnectionClass{
        private $User;
        private $Host;
        private $Pass;
        private $DatabaseName;

        public function __construct(){
            $this->User = "root";
            $this->Host = "localhost";
            $this->Pass = "UtnCboV1";
            $this->DatabaseName = "SIMOS_DB";  
        }

        public function OpenConnection(){
            $Connection = new mysqli($this->Host, $this->User, $this->Pass, $this->DatabaseName);

            if ($Connection->connect_errno) {
                echo "Fail";
            }

            return $Connection;
        }

    }

?>
