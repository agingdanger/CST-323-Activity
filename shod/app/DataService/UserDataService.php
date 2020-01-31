<?php
namespace App\DataService;


use Illuminate\Http\Request;
use App\Model\Verse;
use App\Utility\db_connector;




class UserDataService
{
    public function create(Verse $verse)
    {
        $conn = new db_connector();
        $connection = $conn->getConnection();
        
        $scripture = $verse->getVerse();

       
        $sql = "INSERT INTO `verses` (`ID`, `VERSE`) VALUES('', '$scripture')";
        
        if (mysqli_query($connection, $sql))
        {
            return true;
        }
        else
        {
            echo "Verse not added";
            echo " Error: " . $sql . "<br>" . mysqli_error($connection);
        }
        return false;
    }
}