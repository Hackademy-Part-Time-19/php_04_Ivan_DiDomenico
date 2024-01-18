<?php

class Vertebrates
{
    public function __construct(){
        self::specialization_Vertebrates();
    }

    protected function specialization_Vertebrates(){
        echo "Sono un animale Vertebrato\n";
    }

}

//Classificazione Classe Warm_Blooded e sue sottoclassi

class Warm_Blooded extends Vertebrates
{
    public function __construct(){
        parent::__construct();
        self::specialization_Warm_Blooded();
    }

    protected function specialization_Warm_Blooded(){
        echo "Sono un animale a Sangue Caldo\n";
    }

}

class Mammals extends Warm_Blooded
{
    public function __construct(){
        parent::__construct();
        self::specialization_Mammals();
    }

    protected function specialization_Mammals(){
        echo "Possiedo le ghiandole mammarie\n";
    }

}

class Birds extends Warm_Blooded
{
    public function __construct(){
        parent::__construct();
        self::specialization_Birds();
    }

    protected function specialization_Birds(){
        echo "Sono in grado di volare\n";
    }
    

}

//Classificazione Classe Cold_Blooded e sue sottoclassi

class Cold_Blooded extends Vertebrates
{
    public function __construct(){
        parent::__construct();
        self::specialization_Cold_Blooded();
    }

    protected function specialization_Cold_Blooded(){
        echo "Sono un animale a Sangue Freddo\n";
    }

}

class Reptiles extends Cold_Blooded
{
    public function __construct(){
        parent::__construct();
        self::specialization_Reptiles();
    }

    protected function specialization_Reptiles(){
        echo "Ho le squame\n";
    }

}

class Amphibians extends Cold_Blooded
{
    public function __construct(){
        parent::__construct();
        self::specialization_Amphibians();
    }

    protected function specialization_Amphibians(){
        echo "Vivo sia in acqua, sia sulla terra.\n";
    }

}

class Fish extends Cold_Blooded
{
    public function __construct(){
        parent::__construct();
        self::specialization_Fish();
    }

    protected function specialization_Fish(){
        echo "Vivo sott'acqua.\n";
    }

}


$vipera = new Reptiles();