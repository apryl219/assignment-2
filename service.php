<?php

class Service {

   public $serviceLevel;
   public $message;

    public function setLevel() {

        $this->serviceLevel = (isset($_GET['service']) ? $_GET['service'] : null);
    }
        
    public function getLevel() {
        return $this->serviceLevel;
    }

    public function setMessage() {
        if ($this->serviceLevel == 'excellent') {
            $this->message = "We're so happy you enjoyed your meal!";
        }
        elseif ($this->serviceLevel == 'fair') {
            $this->message = "What can we do to make your experience better?";
        }
        else {
            $this->message = "We're so sorry you had an unacceptable experience. We will send a manager over to discuss the issue.";
        }
    }

    public function getMessage() {
        return $this->message;
    }
}

