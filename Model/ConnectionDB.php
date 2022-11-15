
<?php

    Class DatabaseConnectionClass{
        private $Host;
        private $User;
        private $Pass;
        private $DatabaseName;

        public function __construct(){
            $this->Host = "localhost" ;
            $this->User = "root" ;
            $this->Pass = "UtnCboV1" ;
            $this->DatabaseName = "SIMOS_DB" ;
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
