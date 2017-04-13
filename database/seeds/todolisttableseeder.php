<?php

use Illuminate\Database\Seeder;

class todolisttableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todos")->truncate();
        $todo=[];
        for ($i=1;$i<=5;$i++)
        {
            $todo[]=
                [
                    "title"=>"ToDoList ".$i,
                    "description"=>"lorum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aspernatur culpa cumque, dignissimos eaque error ex hic iste iure, labore magni maiores mollitia necessitatibus nesciunt, sequi tempora ullam voluptates.",
                    "user_id"=>rand(1,2)
                ];

        }
        DB::table("todos")->insert($todo);
    }
}
