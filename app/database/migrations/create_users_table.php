<?php 


public function up()
{
    Schema::create('tb_users', function($table)
    {
        $table->increments('id');
        $table->string('email')->unique();
        $table->string('username');
        $table->timestamps();
    });
}

public function down()
{
    Schema::drop('tb_users');
}