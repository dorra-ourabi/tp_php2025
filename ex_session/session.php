<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    class Session{
        //attribute for session id
        private $session_id;
        //attribute for maxlifetime
        private $session_maxlifetime;
        //additional attributes for the user's choice
        private $session_attributes=array();
        public function __construct($id='00',$duration='1800',$attributes=[]){
            $this->session_id=$id;
            $this->session_maxlifetime=$duration;
            $this->session_attributes=$attributes;
        }
        //starting a session
        public  function session_start(){
           echo 'a new session created';
        }

        //deleting a session
        public function session_unset(){
            $this->session_attributes=[];
            $this->session_id=00;
            $this->session_maxlifetime=0;
            echo ' the session is deleted';
        }
        //getter for the id
        public function get_session_id(){
            return ($this->session_id);
        
        }
        //getter for the maxlifetime
        public function get_session_maxlifetime(){
            return ($this->session_maxlifetime);
        }
        //getter for the attributes
        public function get_session_attributes(){
           foreach($this->session_attributes as $key=>$value)
             echo 'the attribute is '.$key.'the value is'.$value;
        }
        //setter for the id
        public function set_session_id($id){
            $this->session_id=$id;
        }
        //setter for the maxlifetime
        public function set_session_maxlifetime($duration){
            $this->session_maxlifetime=$duration;
        }
        //setter for the addtional attributes
        public function set_session_attributes($key,$value){
            $this->session_attributes[$key]=$value;
        }
    } 
?>
<h1>hello world</h1>
</body>
</html>