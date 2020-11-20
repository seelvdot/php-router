<?php
    include_once '../../libs/loader.php';

    class Connection{

        var $query;
        var $link;
        var $result;

        function Connection(){}
        
        public function ConnectionStart(){
            $this->link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_SCHEMA);
            if(!$this->link){
                die();
            }
        }
        public function SqlQueryExe($query){
            $this->ConnectionStart();
            $this->query = $query;

            if($this->result = mysql_query($this->query)){
                $this->ConnectionStop(); 
                return $this->result;
            }else{
                die();
                ConnectionStop();
            }
        }

        public function ConnectionStop(){
            return mysqli_close($this->link);
        }

    }
    
 