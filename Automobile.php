<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    class Automobile {
        public $LicencePlate;
        public $Brand;
        public $Model;
        public $ModelYear;
        public $Color;

        public function __construct($LicencePlate,$Brand, $Model, $Brand, $ModelYear,$Color){
            $this->LicencePlate = $LicencePlate;
            $this->Brand = $Brand;
            $this->Model = $Model;
            $this->ModelYear = $ModelYear;
            $this->Color = $Color;
        }
        
        public function __toString(){
            return $this->LicencePlate;
        }

    }


?>

</body>
</html>