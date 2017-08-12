<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
	protected $uploads ='/images/'; //setpathปัจจุบัน ที่อยู่ของ file ใน model  เวลาเรียกใช้ model


	protected $fillable = ['file'];


		public function getFileAttribute($photo)

		{

		  return	$this->uploads .$photo; //functionนี้จทำงานเมื่อ มีการเรียกใช้ App\Photo จากตารางอื่นๆ

		}

}
