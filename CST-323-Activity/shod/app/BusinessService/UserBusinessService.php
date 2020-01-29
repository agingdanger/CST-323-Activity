<?php
namespace App\BusinessService;
use Illuminate\Http\Request;
use App\DataService\UserDataService;
use App\Model\Verse;


class UserBusinessService
{
    /**
     * register business service method: Creating a user in the database.
     * @param Verse $verse
     * @return boolean
     */
    public function register(Verse $verse)
    {
        $Data = new UserDataService();
        $isSaved = $Data->create($verse);
        
        if($isSaved)
        {
            return true;
        }
        return false;
    }
}