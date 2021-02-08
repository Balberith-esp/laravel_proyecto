<?php

namespace Database\Seeders;

use App\Models\Recurso;
use Illuminate\Database\Seeder;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $recursos = array(
		array(
			'path' => 'path....',
			'commentable_id' => '1',
			'commentable_type' => 'Ejercicio',
            'parent_id' => '1',
            'user_id' => '1',
        ),
        array(
			'path' => 'path....',
			'commentable_id' => '1',
			'commentable_type' => 'Ejercicio',
            'parent_id' => '1',
            'user_id' => '1',
        ),
        array(
			'path' => 'path....',
			'commentable_id' => '1',
			'commentable_type' => 'Nutricion',
            'parent_id' => '1',
            'user_id' => '1',
        ),
        array(
			'path' => 'path....',
			'commentable_id' => '2',
			'commentable_type' => 'Ejercicio',
            'parent_id' => '1',
            'user_id' => '1',
        ),
		array(
			'path' => 'path....',
			'commentable_id' => '2',
			'commentable_type' => 'Ejercicio',
            'parent_id' => '1',
            'user_id' => '1',
        ),
        array(
			'path' => 'path....',
			'commentable_id' => '2',
			'commentable_type' => 'Ejercicio',
            'parent_id' => '2',
            'user_id' => '1',
        ), 		array(
			'path' => 'path....',
			'commentable_id' => '1',
			'commentable_type' => 'Nutricion',
            'parent_id' => '2',
            'user_id' => '1',
        ),
        array(
			'path' => 'path....',
			'commentable_id' => '1',
            'user_id' => '1',
            'parent_id' => '2',
			'commentable_type' => 'Nutricion',
        ),   );
    public function run()
    {
        //
        foreach ($this->recursos as $rec){
            $recurso = new Recurso();
            $recurso->path = $rec['path'];
            $recurso->commentable_id = $rec['commentable_id'];
            $recurso->commentable_type = $rec['commentable_type'];
            $recurso->parent_id = $rec['parent_id'];
            $recurso->user_id = $rec['user_id'];

            $recurso->save();
        }

    }
}
