<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Admin extends Model
{
    use HasFactory;

    function Insert($table,$data){
        $result = DB::table($table)->insert($data);
        return $result;
    }
    public function MultiDataSingal($table,$data){
        $result = DB::table($table)->where($data)->first();
        return $result;
    }

    public function DataUpdate($table,$fild,$request,$data){
        $result = DB::table($table)->where($fild,$request)->update($data);
        return $result;
    }
    public function insertdata($table,$data){
        $data = DB::table($table)->insert($data);
        return $data;
    }
    //get all date
    public function GetallData($table){
        $data = DB::table($table)->orderBy('id','DESC')->get();
        return $data;
    }
    public function GetallDataSingal($table){
        $data = DB::table($table)->orderBy('id','DESC')->first();
        return $data;
    }
      public function insertdatagetid($table,$data){
        $data = DB::table($table)->insertGetId($data);
        return $data;
    }
      //Edit item
      public function EditeItem($table,$id){
        $data = DB::table($table)->where('id',$id)->first();
        return $data;
    }

    public function UpdateItem($table,$id,$data){
        $data =  DB::table($table)->where('id',$id)->update($data);
        return $data;
     }

      //remove item
    public function RemoveItem($table,$id){
        $data = DB::table($table)->where('id',$id)->delete();
        return $data;
    }



    public function GetallDataByCondition($table,$key){
        $data = DB::table($table)->where($key)->orderBy('id','DESC')->paginate(10);
        return $data;
    }

}
