<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegisterTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::table('registers', function (Blueprint $table) {
           DB::statement('ALTER TABLE registers ADD FULLTEXT `name` (`name`)'); //đánh index cho cột name
           DB::statement('ALTER TABLE registers ENGINE = MyISAM'); // đánh index theo kiểu MyISam ngoài ra còn có kiểu InnoDB nếu không có dòng này cũng được mysql sẽ mặc định là index kiểu MyISAM nhé
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::table('registers', function (Blueprint $table) {
           DB::statement('ALTER TABLE registers DROP INDEX name'); // khi chạy lệnh rollback thì làm điều ngược lại với thằng trên thế thôi
       });
   }
}

