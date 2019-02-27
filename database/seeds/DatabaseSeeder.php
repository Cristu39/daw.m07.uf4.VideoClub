<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\User;
use App\Actor;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
        self::seedActors();
        $this->command->info('Tabla actores inicializada con datos!');
    }
    
    private function seedUsers(){
        DB::table('users')->delete();
        $m1 = new User;
            $m1->name = "Alexal";
            $m1->email = "alexx@gmail.es";
            $m1->password = bcrypt("qwert");    
            $m1->save();
        $m2 = new User;
            $m2->name = "Toienete";
            $m2->email = "klk@gmail.com";
            $m2->password = bcrypt("poiuy");           
            $m2->save();
    }

    private function seedCatalog() {
        DB::table('movies')->delete();
        foreach ($this->arrayPeliculas as $pelicula) {
            $p = new Movie;
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
    
    private function seedActors(){
        DB::table('actors')->delete();
        $a1 = new Actor;
        $a1->nombre = "Marlon";
        $a1->apellido = "Brando";
        $a1->fechaNacimiento = "3 de abril de 1924";
        $a1->lugarNacimiento = "Los Ángeles, California";
        $a1->save();
        
        $a2 = new Actor;  
        $a2->nombre = "Alfredo James";
        $a2->apellido = "Pacino";
        $a2->fechaNacimiento = "25 de abril de 1940";
        $a2->lugarNacimiento = "Nueva York";
        $a2->save();
        
        $a3 = new Actor;  
        $a3->nombre = "James Edmund";
        $a3->apellido = "Caan";
        $a3->fechaNacimiento = "26 de marzo de 1940";
        $a3->lugarNacimiento = "Bronx, Nueva York";
        $a3->save();
        
        $a4 = new Actor;  
        $a4->nombre = "Richard Salvatore";
        $a4->apellido = "Castellano";
        $a4->fechaNacimiento = "4 de septiembre de 1933";
        $a4->lugarNacimiento = "Bronx, Nueva York";
        $a4->save();
        
        $a5 = new Actor;  
        $a5->nombre = "Robert";
        $a5->apellido = "Duvall";
        $a5->fechaNacimiento = "5 de enero de 1931";
        $a5->lugarNacimiento = "San Diego, California";
        $a5->save();
        
        $a6 = new Actor;  
        $a6->nombre = "Diane";
        $a6->apellido = "Keaton";
        $a6->fechaNacimiento = "5 de enero de 1946";
        $a6->lugarNacimiento = "Los Ángeles";
        $a6->save();
        
        $a7 = new Actor;  
        $a7->nombre = "Robert Anthony";
        $a7->apellido = "De Niro";
        $a7->fechaNacimiento = "17 de agosto de 1943";
        $a7->lugarNacimiento = "Nueva York";
        $a7->save();
        
        $a8 = new Actor;  
        $a8->nombre = "William John";
        $a8->apellido = "Neeson";
        $a8->fechaNacimiento = "7 de junio de 1952";
        $a8->lugarNacimiento = "Ballymena, Antrim, Irlanda del Norte";
        $a8->save();
        
        $a9 = new Actor;  
        $a9->nombre = "Ben";
        $a9->apellido = "Kingsley";
        $a9->fechaNacimiento = "31 de diciembre de 1943";
        $a9->lugarNacimiento = "Scarborough, Yorkshire, Inglaterra";
        $a9->save();
        
        $a10 = new Actor;  
        $a10->nombre = "Ralph Nathaniel";
        $a10->apellido = "Fiennes";
        $a10->fechaNacimiento = "22 de diciembre de 1962";
        $a10->lugarNacimiento = "Suffolk, Inglaterra";
        $a10->save();
        
        $a11 = new Actor;  
        $a11->nombre = "Caroline";
        $a11->apellido = "Goodall";
        $a11->fechaNacimiento = "31 de noviembre de 1959";
        $a11->lugarNacimiento = "Londres, Inglaterra";
        $a11->save();
        
        $a12 = new Actor;  
        $a12->nombre = "John";
        $a12->apellido = "Travolta";
        $a12->fechaNacimiento = "18 de febrero de 1954";
        $a12->lugarNacimiento = "Englewood, Nueva Jersey";
        $a12->save();
        
        $a13 = new Actor;  
        $a13->nombre = "Uma Karuna";
        $a13->apellido = "Thruman";
        $a13->fechaNacimiento = "29 de abril de 1970";
        $a13->lugarNacimiento = "Boston";
        $a13->save();
        
        $a14 = new Actor;  
        $a14->nombre = "Samuel Leroy";
        $a14->apellido = "Jackson";
        $a14->fechaNacimiento = "21 de diciembre de 1948";
        $a14->lugarNacimiento = "Washington D.C.";
        $a14->save();
        
        $a15 = new Actor;  
        $a15->nombre = "Walter Bruce";
        $a15->apellido = "Willis";
        $a15->fechaNacimiento = "19 de marzo 1955";
        $a15->lugarNacimiento = "Idar-Oberstein, Alemania";
        $a15->save();
        
        $a16 = new Actor;  
        $a16->nombre = "Tim";
        $a16->apellido = "Robbins";
        $a16->fechaNacimiento = "16 de octubre 1958";
        $a16->lugarNacimiento = "West Covina, California";
        $a16->save();
        
        $a17 = new Actor;  
        $a17->nombre = "Morgan";
        $a17->apellido = "Freeman";
        $a17->fechaNacimiento = "1 de junio 1937";
        $a17->lugarNacimiento = "Memphis, Tennessee";
        $a17->save();
        
        $a18 = new Actor;  
        $a18->nombre = "Bob";
        $a18->apellido = "Gunton";
        $a18->fechaNacimiento = "15 de noviembre 1945";
        $a18->lugarNacimiento = "Santa Mónica, California";
        $a18->save();
        
        $a19 = new Actor;  
        $a19->nombre = "William";
        $a19->apellido = "Sadler";
        $a19->fechaNacimiento = "13 de abril 1950";
        $a19->lugarNacimiento = "Buffalo, Nueva York";
        $a19->save();
        
        $a20 = new Actor;  
        $a20->nombre = "Paul";
        $a20->apellido = "Newman";
        $a20->fechaNacimiento = "26 de enero 1925";
        $a20->lugarNacimiento = "Shaker Heights, Ohio";
        $a20->save();
        
        $a21 = new Actor;  
        $a21->nombre = "Charles Robert";
        $a21->apellido = "Redford";
        $a21->fechaNacimiento = "18 de agosto 1936";
        $a2->lugarNacimiento = "Santa Mónica, California";
        $a21->save();
        
        $a22 = new Actor;  
        $a22->nombre = "Robert Archibald";
        $a22->apellido = "Shaw";
        $a22->fechaNacimiento = "9 de agosto 1927";
        $a22->lugarNacimiento = "Westhoughton, Reino Unido";
        $a22->save();
        
        $a23 = new Actor;  
        $a23->nombre = "Charles";
        $a23->apellido = "Durning";
        $a23->fechaNacimiento = "28 de febrero de 1923";
        $a23->lugarNacimiento = "Highland Falls, Nueva York";
        $a23->save();
        
        $a24 = new Actor;  
        $a24->nombre = "Roberto Remigio";
        $a24->apellido = "Benigni";
        $a24->fechaNacimiento = "27 de octubre de 1952";
        $a24->lugarNacimiento = "Castiglion Fiorentino, Italia";
        $a24->save();
        
        $a25 = new Actor;  
        $a25->nombre = "Giorgio";
        $a25->apellido = "Cantarini";
        $a25->fechaNacimiento = "12 de abril de 1992";
        $a25->lugarNacimiento = "Orvieto, Italia";
        $a25->save();
        
        $a26 = new Actor;  
        $a26->nombre = "Giorgio";
        $a26->apellido = "Durano ";
        $a26->fechaNacimiento = "5 de mayo 1923";
        $a26->lugarNacimiento = "Brindisi, Italia";
        $a26->save();
        
        $a27 = new Actor;  
        $a27->nombre = "Ray";
        $a27->apellido = "Liotta";
        $a27->fechaNacimiento = "18 de diciembre de 1954";
        $a27->lugarNacimiento = "Newark, Nueva Jersey";
        $a27->save();
        
        $a28 = new Actor;  
        $a28->nombre = "Joseph Frank";
        $a28->apellido = "Pesci";
        $a28->fechaNacimiento = "9 de febrero de 1943";
        $a28->lugarNacimiento = "Newark, Nueva Jersey";
        $a28->save();
        
        $a29 = new Actor;  
        $a29->nombre = "Lorraine";
        $a29->apellido = "Bracco";
        $a29->fechaNacimiento = "2 de octubre de 1954";
        $a29->lugarNacimiento = "Brooklyn, Nueva York";
        $a29->save();
        
        $a30 = new Actor;  
        $a30->nombre = "John Joseph «Jack»";
        $a30->apellido = "Nicholson";
        $a30->fechaNacimiento = "22 de abril de 1937";
        $a30->lugarNacimiento = "Neptune City, Nueva Jersey";
        $a30->save();
        
        $a31 = new Actor;  
        $a31->nombre = "Estelle Louise";
        $a31->apellido = "Fletcher";
        $a31->fechaNacimiento = "22 de julio de 1934";
        $a3->lugarNacimiento = "Birmingham, Alabama";
        $a31->save();
        
        $a32 = new Actor;  
        $a32->nombre = "Dean Kent";
        $a32->apellido = "Brooks";
        $a32->fechaNacimiento = "26 de julio de 1916";
        $a32->lugarNacimiento = "Colony, Kansas";
        $a32->save();
        
        $a33 = new Actor;  
        $a33->nombre = "Edward Harrison";
        $a33->apellido = "Norton";
        $a33->fechaNacimiento = "18 de agosto de 1969";
        $a33->lugarNacimiento = "Boston, Massachusetts";
        $a33->save();
        
        $a34 = new Actor;  
        $a34->nombre = "Edward Walter";
        $a34->apellido = "Furlong";
        $a34->fechaNacimiento = "2 de agosto de 1977";
        $a34->lugarNacimiento = "Glendale, California";
        $a34->save();
        
        $a35 = new Actor;  
        $a35->nombre = "Beverly";
        $a35->apellido = "D'Angelo";
        $a35->fechaNacimiento = "15 de noviembre de 1951";
        $a35->lugarNacimiento = "Columbus, Ohio";
        $a35->save();
        
        $a36 = new Actor;  
        $a36->nombre = "Jennifer Anne";
        $a36->apellido = "Lien";
        $a36->fechaNacimiento = "24 de agosto de 1974";
        $a36->lugarNacimiento = "Palos Heights, Estados Unidos";
        $a36->save();
        
        $a37 = new Actor;  
        $a37->nombre = "Clinton «Clint»";
        $a37->apellido = "Eastwood";
        $a37->fechaNacimiento = "31 de mayo de 1930";
        $a37->lugarNacimiento = "San Francisco, California";
        $a37->save();
        
        $a38 = new Actor;  
        $a38->nombre = "Eugene Allen";
        $a38->apellido = "Hackman";
        $a38->fechaNacimiento = "30 de enero de 1930";
        $a38->lugarNacimiento = "San Bernardino, California";
        $a38->save();
        
        $a39 = new Actor;  
        $a39->nombre = "Richard";
        $a39->apellido = "Harris";
        $a39->fechaNacimiento = "1 de octubre de 1930";
        $a39->lugarNacimiento = "Londres";
        $a39->save();
        
        $a40 = new Actor;  
        $a40->nombre = "Esteban Echevarría 'Steven'";
        $a40->apellido = "Echevarría 'Bauer'";
        $a40->fechaNacimiento = "2 de diciembre de 1956";
        $a40->lugarNacimiento = "La Habana, Cuba";
        $a40->save();
        
        $a41 = new Actor;  
        $a41->nombre = "Michelle Marie";
        $a41->apellido = "Pfeiffer";
        $a41->fechaNacimiento = "29 de abril de 1958";
        $a41->lugarNacimiento = "Santa Ana, California";
        $a41->save();
        
        $a42 = new Actor;  
        $a42->nombre = "Adrien";
        $a42->apellido = "Brody";
        $a42->fechaNacimiento = "14 de abril de 1973";
        $a42->lugarNacimiento = "Nueva York";
        $a42->save();
        
        $a43 = new Actor;  
        $a43->nombre = "Thomas";
        $a43->apellido = "Kretschmann";
        $a43->fechaNacimiento = "8 de septiembre de 1962";
        $a43->lugarNacimiento = "Dessau, Alemania";
        $a43->save();
        
        $a44 = new Actor;  
        $a44->nombre = "Francis 'Frank'";
        $a44->apellido = "Finlay";
        $a44->fechaNacimiento = "6 de agosto de 1926";
        $a44->lugarNacimiento = "Lancashire, Inglaterra";
        $a44->save();
        
        $a45 = new Actor;  
        $a45->nombre = "Maureen";
        $a45->apellido = "Lipman";
        $a45->fechaNacimiento = "10 de mayo de 1946";
        $a45->lugarNacimiento = "Hull, Inglaterra";
        $a45->save();
        
        $a46 = new Actor;  
        $a46->nombre = "William Bradley";
        $a46->apellido = "Pitt";
        $a46->fechaNacimiento = "18 de diciembre de 1963";
        $a46->lugarNacimiento = "Shawnee, Oklahoma";
        $a46->save();
        
        $a47 = new Actor;  
        $a47->nombre = "Gwyneth Kate";
        $a47->apellido = "Paltrow";
        $a47->fechaNacimiento = "27 de septiembre de 1972";
        $a47->lugarNacimiento = "Los Ángeles";
        $a47->save();
        
        $a48 = new Actor;  
        $a48->nombre = "Kevin";
        $a48->apellido = "Fowler";
        $a48->fechaNacimiento = "26 de julio de 1959";
        $a48->lugarNacimiento = "South Orange, Nueva Jersey";
        $a48->save();
        
        $a49 = new Actor;  
        $a49->nombre = "Alicia Christian";
        $a49->apellido = "Foster";
        $a49->fechaNacimiento = "19 de noviembre de 1962";
        $a49->lugarNacimiento = "Los Ángeles, California";
        $a49->save();
        
        $a50 = new Actor;  
        $a50->nombre = "Philip Anthony";
        $a50->apellido = "Hopkins";
        $a50->fechaNacimiento = "31 de diciembre de 1937";
        $a50->lugarNacimiento = "Margam, Port Talbot, Gales";
        $a50->save();
        
        $a51 = new Actor;  
        $a51->nombre = "Theodore Scott";
        $a51->apellido = "Glen";
        $a51->fechaNacimiento = "26 de enero de 1941";
        $a51->lugarNacimiento = "Pittsburgh, Pennsylvania";
        $a51->save();
        
        $a52 = new Actor;  
        $a52->nombre = "Anthony";
        $a52->apellido = "Heald";
        $a52->fechaNacimiento = "25 de agosto de 1944";
        $a52->lugarNacimiento = "New Rochelle, New York";
        $a52->save();
        
        $a53 = new Actor;  
        $a53->nombre = "Malcolm";
        $a53->apellido = "McDowell";
        $a53->fechaNacimiento = "13 de junio de 1943";
        $a53->lugarNacimiento = "Horsforth, Yorkshire";
        $a53->save();
        
        $a54 = new Actor;  
        $a54->nombre = "Warren";
        $a54->apellido = "Clarke";
        $a54->fechaNacimiento = "26 de abril de 1947";
        $a54->lugarNacimiento = "Oldham, Inglaterra";
        $a54->save();
        
        $a55 = new Actor;  
        $a55->nombre = "Michael";
        $a55->apellido = "Tarn";
        $a55->fechaNacimiento = "18 de diciembre de 1953";
        $a55->lugarNacimiento = "Inglaterra";
        $a55->save();
        
        $a56 = new Actor;  
        $a56->nombre = "James";
        $a56->apellido = "Marcus";
        $a56->fechaNacimiento = "23 de junio de 1942";
        $a56->lugarNacimiento = "Essex, Inglaterra";
        $a56->save();
        
        $a57 = new Actor;  
        $a57->nombre = "Matthew";
        $a57->apellido = "Modine";
        $a57->fechaNacimiento = "22 de marzo de 1959";
        $a57->lugarNacimiento = "Loma Linda, California";
        $a57->save();
        
        $a58 = new Actor;  
        $a58->nombre = "Adam";
        $a58->apellido = "Baldwin";
        $a58->fechaNacimiento = "27 de febrero de 1962";
        $a58->lugarNacimiento = "Winnetka, Illinois";
        $a58->save();
        
        $a59 = new Actor;  
        $a59->nombre = "Vincent";
        $a59->apellido = "D'Onofrio";
        $a59->fechaNacimiento = "30 de junio de 1959";
        $a59->lugarNacimiento = "Brooklyn, Nueva York";
        $a59->save();
        
        $a60 = new Actor;  
        $a60->nombre = "Ronald Lee";
        $a60->apellido = "Ermey";
        $a60->fechaNacimiento = "24 de marzo de 1944";
        $a60->lugarNacimiento = "Emporia, Kansas";
        $a60->save();
        
        $a61 = new Actor;  
        $a61->nombre = "Harrison";
        $a61->apellido = "Ford";
        $a61->fechaNacimiento = "13 de julio de 1942";
        $a61->lugarNacimiento = "Chicago";
        $a61->save();
        
        $a62 = new Actor;  
        $a62->nombre = "Rutger Oelsen";
        $a62->apellido = "Hauer";
        $a62->fechaNacimiento = "23 de enero de 1944";
        $a62->lugarNacimiento = "Breukelen, Paises Bajos";
        $a62->save();
        
        $a63 = new Actor;  
        $a63->nombre = "Sean";
        $a63->apellido = "Young";
        $a63->fechaNacimiento = "20 de noviembre de 1959";
        $a63->lugarNacimiento = "Louisville, Kentucky";
        $a63->save();
        
        $a64 = new Actor;  
        $a64->nombre = "Edward James";
        $a64->apellido = "Olmos";
        $a64->fechaNacimiento = "24 de febrero de 1947";
        $a64->lugarNacimiento = "Los Ángeles, California";
        $a64->save();
        
        $a65 = new Actor;  
        $a65->nombre = "Cybill";
        $a65->apellido = "Shepherd";
        $a65->fechaNacimiento = "18 de febrero de 1950";
        $a65->lugarNacimiento = "Memphis, Tennessee";
        $a65->save();
        
        $a66 = new Actor;  
        $a66->nombre = "Albert Lawrence";
        $a66->apellido = "Brooks";
        $a66->fechaNacimiento = "22 de julio de 1947";
        $a66->lugarNacimiento = "Beverly Hills, Los Ángeles";
        $a66->save();
        
        $a67 = new Actor;  
        $a67->nombre = "Helena Bonham";
        $a67->apellido = "Carter";
        $a67->fechaNacimiento = "26 de mayo de 1966";
        $a67->lugarNacimiento = "Londres, Inglaterra";
        $a67->save();
        
        $a68 = new Actor;  
        $a68->nombre = "Meat";
        $a68->apellido = "Loaf";
        $a68->fechaNacimiento = "27 de septiembre de 1947";
        $a68->lugarNacimiento = "Dallas, Texas";
        $a68->save();
    }
    var $arrayPeliculas = array(
        array(
            'title' => 'El padrino',
            'year' => '1972',
            'director' => 'Francis Ford Coppola',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjEyMjcyNDI4MF5BMl5BanBnXkFtZTcwMDA5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
        ),
        array(
            'title' => 'El Padrino. Parte II',
            'year' => '1974',
            'director' => 'Francis Ford Coppola',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BNDc2NTM3MzU1Nl5BMl5BanBnXkFtZTcwMTA5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Continuación de la historia de los Corleone por medio de dos historias paralelas: la elección de Michael Corleone como jefe de los negocios familiares y los orígenes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegó a ser un poderosísimo jefe de la mafia de Nueva York.'
        ),
        array(
            'title' => 'La lista de Schindler',
            'year' => '1993',
            'director' => 'Steven Spielberg',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMzMwMTM4MDU2N15BMl5BanBnXkFtZTgwMzQ0MjMxMDE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones públicas, organiza un ambicioso plan para ganarse la simpatía de los nazis. Después de la invasión de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente. Su gerente (Ben Kingsley), también judío, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
        ),
        array(
            'title' => 'Pulp Fiction',
            'year' => '1994',
            'director' => 'Quentin Tarantino',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjE0ODk2NjczOV5BMl5BanBnXkFtZTYwNDQ0NDg4._V1_SY317_CR4,0,214,317_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misión: recuperar un misterioso maletín. '
        ),
        array(
            'title' => 'Cadena perpetua',
            'year' => '1994',
            'director' => 'Frank Darabont',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BODU4MjU4NjIwNl5BMl5BanBnXkFtZTgwMDU2MjEyMDE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank. Con el paso de los años conseguirá ganarse la confianza del director del centro y el respeto de sus compañeros de prisión, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
        ),
        array(
            'title' => 'El golpe',
            'year' => '1973',
            'director' => 'George Roy Hill',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY5MjM1OTAyOV5BMl5BanBnXkFtZTgwMDkwODg4MDE@._V1._CR52,57,915,1388_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Chicago, años treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gángster (Robert Shaw). Para ello urdirán un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
        ),
        array(
            'title' => 'La vida es bella',
            'year' => '1997',
            'director' => 'Roberto Benigni',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQwMTM2MjE4Ml5BMl5BanBnXkFtZTgwODQ2NTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intención de abrir una librería. Allí conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego.'
        ),
        array(
            'title' => 'Uno de los nuestros',
            'year' => '1990',
            'director' => 'Martin Scorsese',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY2OTE5MzQ3MV5BMl5BanBnXkFtZTgwMTY2NTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Henry Hill, hijo de padre irlandés y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gángsters de su barrio, donde la mayoría de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece años, Henry decide abandonar la escuela y entrar a formar parte de la organización mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irá subiendo de categoría. '
        ),
        array(
            'title' => 'Alguien voló sobre el nido del cuco',
            'year' => '1975',
            'director' => 'Milos Forman',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTk5OTA4NTc0NF5BMl5BanBnXkFtZTcwNzI5Mzg3OA@@._V1_SY317_CR12,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espíritu libre que vive contracorriente, es recluido en un hospital psiquiátrico. La inflexible disciplina del centro acentúa su contagiosa tendencia al desorden, que acabará desencadenando una guerra entre los pacientes y el personal de la clínica con la fría y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellón está en juego.'
        ),
        array(
            'title' => 'American History X',
            'year' => '1998',
            'director' => 'Tony Kaye',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjMzNDUwNTIyMF5BMl5BanBnXkFtZTcwNjMwNDg3OA@@._V1_SY317_CR17,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideología neonazi, fue encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel.'
        ),
        array(
            'title' => 'Sin perdón',
            'year' => '1992',
            'director' => 'Clint Eastwood',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTkzNTc0NDc4OF5BMl5BanBnXkFtZTcwNTY1ODg3OA@@._V1_SY317_CR5,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades económicas para sacar adelante a su hijos. Su única salida es hacer un último trabajo. En compañía de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrá que matar a dos hombres que cortaron la cara a una prostituta.'
        ),
        array(
            'title' => 'El precio del poder',
            'year' => '1983',
            'director' => 'Brian De Palma',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjAzOTM4MzEwNl5BMl5BanBnXkFtZTgwMzU1OTc1MDE@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Tony Montana es un emigrante cubano frío y sanguinario que se instala en Miami con el propósito de convertirse en un gángster importante. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cúpula de una organización de narcos.'
        ),
        array(
            'title' => 'El pianista',
            'year' => '2002',
            'director' => 'Roman Polanski',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTc4OTkyOTA3OF5BMl5BanBnXkFtZTYwMDIxNjk5._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen judío, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportación gracias a la ayuda de algunos amigos. Pero tendrá que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrá que afrontar constantes peligros.'
        ),
        array(
            'title' => 'Seven',
            'year' => '1995',
            'director' => 'David Fincher',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQwNTU3MTE4NF5BMl5BanBnXkFtZTcwOTgxNDM2Mg@@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, está a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrán que colaborar en la resolución de una serie de asesinatos cometidos por un psicópata que toma como base la relación de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las víctimas, sobre los que el asesino se ensaña de manera impúdica, se convertirán para los policías en un enigma que les obligará a viajar al horror y la barbarie más absoluta.'
        ),
        array(
            'title' => 'El silencio de los corderos',
            'year' => '1991',
            'director' => 'Jonathan Demme',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQ2NzkzMDI4OF5BMl5BanBnXkFtZTcwMDA0NzE1NA@@._V1_SX214_AL_.jpg',
            'rented' => false,
            'synopsis' => 'El FBI busca a "Buffalo Bill", un asesino en serie que mata a sus víctimas, todas adolescentes, después de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicópatas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cárcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misión será intentar sacarle información sobre los patrones de conducta de "Buffalo Bill".'
        ),
        array(
            'title' => 'La naranja mecánica',
            'year' => '1971',
            'director' => 'Stanley Kubrick',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTY3MjM1Mzc4N15BMl5BanBnXkFtZTgwODM0NzAxMDE@._V1_SY317_CR0,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Gran Bretaña, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos más salvajes apaleando, violando y aterrorizando a la población. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisión, se someterá voluntariamente a una innovadora experiencia de reeducación que pretende anular drásticamente cualquier atisbo de conducta antisocial.'
        ),
        array(
            'title' => 'La chaqueta metálica',
            'year' => '1987',
            'director' => 'Stanley Kubrick',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjA4NzY4ODk4Nl5BMl5BanBnXkFtZTgwOTcxNTYxMTE@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. Allí está el sargento Hartman, duro e implacable, cuya única misión en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jóvenes están preparados para soportar sus métodos. '
        ),
        array(
            'title' => 'Blade Runner',
            'year' => '1982',
            'director' => 'Ridley Scott',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTA4MDQxNTk2NDheQTJeQWpwZ15BbWU3MDE2NjIyODk@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'A principios del siglo XXI, la poderosa Tyrell Corporation creó, gracias a los avances de la ingeniería genética, un robot llamado Nexus 6, un ser virtualmente idéntico al hombre pero superior a él en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. Después de la sangrienta rebelión de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policía, los Blade Runners, tenían órdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecución, se le llamaba "retiro". '
        ),
        array(
            'title' => 'Taxi Driver',
            'year' => '1976',
            'director' => 'Martin Scorsese',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTQ1Nzg3MDQwN15BMl5BanBnXkFtZTcwNDE2NDU2MQ@@._V1_SY317_CR9,0,214,317_AL_.jpg',
            'rented' => false,
            'synopsis' => 'Para sobrellevar el insomnio crónico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demás, se pasa los días en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaña política. Pero lo que realmente obsesiona a Travis es comprobar cómo la violencia, la sordidez y la desolación dominan la ciudad. Y un día decide pasar a la acción.'
        ),
        array(
            'title' => 'El club de la lucha',
            'year' => '1999',
            'director' => 'David Fincher',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjIwNTYzMzE1M15BMl5BanBnXkFtZTcwOTE5Mzg3OA@@._V1_SX214_AL_.jpg',
            'rented' => true,
            'synopsis' => 'Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.'
        )
    );

}
